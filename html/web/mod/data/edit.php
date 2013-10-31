<?php  // $Id: edit.php,v 1.32.2.11 2010/09/23 11:31:43 andreabix Exp $
///////////////////////////////////////////////////////////////////////////
//                                                                       //
// NOTICE OF COPYRIGHT                                                   //
//                                                                       //
// Moodle - Modular Object-Oriented Dynamic Learning Environment         //
//          http://moodle.org                                            //
//                                                                       //
// Copyright (C) 2005 Martin Dougiamas  http://dougiamas.com             //
//                                                                       //
// This program is free software; you can redistribute it and/or modify  //
// it under the terms of the GNU General Public License as published by  //
// the Free Software Foundation; either version 2 of the License, or     //
// (at your option) any later version.                                   //
//                                                                       //
// This program is distributed in the hope that it will be useful,       //
// but WITHOUT ANY WARRANTY; without even the implied warranty of        //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the         //
// GNU General Public License for more details:                          //
//                                                                       //
//          http://www.gnu.org/copyleft/gpl.html                         //
//                                                                       //
///////////////////////////////////////////////////////////////////////////

    require_once('../../config.php');
    require_once('lib.php');
    require_once("$CFG->libdir/rsslib.php");

    $id    = optional_param('id', 0, PARAM_INT);    // course module id
    $d     = optional_param('d', 0, PARAM_INT);    // database id
    $rid   = optional_param('rid', 0, PARAM_INT);    //record id
    $import   = optional_param('import', 0, PARAM_INT);    // show import form
    $cancel   = optional_param('cancel', '');    // cancel an add
    $mode ='addtemplate';    //define the mode for this page, only 1 mode available

    if ($id) {
        if (! $cm = get_coursemodule_from_id('data', $id)) {
            error('Course Module ID was incorrect');
        }
        if (! $course = get_record('course', 'id', $cm->course)) {
            error('Course is misconfigured');
        }
        if (! $data = get_record('data', 'id', $cm->instance)) {
            error('Course module is incorrect');
        }

    } else {
        if (! $data = get_record('data', 'id', $d)) {
            error('Data ID is incorrect');
        }
        if (! $course = get_record('course', 'id', $data->course)) {
            error('Course is misconfigured');
        }
        if (! $cm = get_coursemodule_from_instance('data', $data->id, $course->id)) {
            error('Course Module ID was incorrect');
        }
    }

    require_login($course->id, false, $cm);

    if (!isloggedin() or isguest()) {
        redirect('view.php?d='.$data->id);
    }

    $context = get_context_instance(CONTEXT_MODULE, $cm->id);

/// If it's hidden then it doesn't show anything.  :)
    if (empty($cm->visible) and !has_capability('moodle/course:viewhiddenactivities', $context)) {
        $strdatabases = get_string("modulenameplural", "data");

        $navigation = build_navigation('', $cm);
        print_header_simple(format_string($data->name), "", $navigation, "", "", true, '', navmenu($course, $cm));
        notice(get_string("activityiscurrentlyhidden"));
    }

/// Can't use this if there are no fields
    if (has_capability('mod/data:managetemplates', $context)) {
        if (!record_exists('data_fields','dataid',$data->id)) {      // Brand new database!
            redirect($CFG->wwwroot.'/mod/data/field.php?d='.$data->id);  // Redirect to field entry
        }
    }

/// Check to see if groups are being used here
    groups_print_activity_menu($cm, $CFG->wwwroot . '/mod/data/edit.php?d='.$data->id);
    $currentgroup = groups_get_activity_group($cm);
    $groupmode = groups_get_activity_groupmode($cm);

    if ($rid) {    // So do you have access?
        if (!(has_capability('mod/data:manageentries', $context) or data_isowner($rid)) or !confirm_sesskey() ) {
            print_error('noaccess','data');
        }
    } else {
        if (!data_user_can_add_entry($data, $currentgroup, $groupmode) || data_atmaxentries($data)) { // took out participation list here!
            redirect('view.php?d='.$data->id, get_string('noaccess','data'));
        }
    }

    if ($cancel) {
        redirect('view.php?d='.$data->id);
    }

/// RSS and CSS and JS meta
    $meta = '';
    if (!empty($CFG->enablerssfeeds) && !empty($CFG->data_enablerssfeeds) && $data->rssarticles > 0) {
        $rsspath = rss_get_url($course->id, $USER->id, 'data', $data->id);
        $meta .= '<link rel="alternate" type="application/rss+xml" ';
        $meta .= 'title ="'. format_string($course->shortname) .': %fullname%" href="'.$rsspath.'" />';
    }
    if ($data->csstemplate) {
        $meta .= '<link rel="stylesheet" type="text/css" href="'.$CFG->wwwroot.'/mod/data/css.php?d='.$data->id.'" /> ';
    }
    if ($data->jstemplate) {
        $meta .= '<script type="text/javascript" src="'.$CFG->wwwroot.'/mod/data/js.php?d='.$data->id.'"></script>';
    }


/// Print the page header
    $strdata = get_string('modulenameplural','data');

    $navigation = build_navigation('', $cm);
    print_header_simple($data->name, '', $navigation,
                        '', $meta, true, update_module_button($cm->id, $course->id, get_string('modulename', 'data')),
                        navmenu($course, $cm), '', '');

    print_heading(format_string($data->name));

    if ($currentgroup) {
        $groupselect = " AND groupid = '$currentgroup'";
        $groupparam = "&amp;groupid=$currentgroup";
    } else {
        $groupselect = "";
        $groupparam = "";
        $currentgroup = 0;
    }

/// Print the tabs

    $currenttab = 'add';
    if ($rid) {
        $editentry = true;  //used in tabs
    }
    include('tabs.php');


/// Process incoming data for adding/updating records

    if ($datarecord = data_submitted($CFG->wwwroot.'/mod/data/edit.php') and confirm_sesskey()) {

        $ignorenames = array('MAX_FILE_SIZE','sesskey','d','rid','saveandview','cancel');  // strings to be ignored in input data

        if ($rid) {                                          /// Update some records

            /// All student edits are marked unapproved by default
            $record = get_record('data_records','id',$rid);

            /// reset approved flag after student edit
            if (!has_capability('mod/data:approve', $context)) {
                $record->approved = 0;
            }

            $record->groupid = $currentgroup;
            $record->timemodified = time();
            update_record('data_records',$record);

            /// Update all content
            $field = NULL;
            foreach ($datarecord as $name => $value) {
                if (!in_array($name, $ignorenames)) {
                    $namearr = explode('_',$name);  // Second one is the field id
                    if (empty($field->field) || ($namearr[1] != $field->field->id)) {  // Try to reuse classes
                        $field = data_get_field_from_id($namearr[1], $data);
                    }
                    if ($field) {
                        $field->update_content($rid, $value, $name);
                    }
                }
            }

			//XTEC ************ AFEGIT - Update course information
			//2010.08.31
            $new_course = get_course_information_by_record($rid);
            if (empty($new_course->timecreated))$new_course->timecreated = time();
            update_record('course', $new_course);
			//************ FI

            add_to_log($course->id, 'data', 'update', "view.php?d=$data->id&amp;rid=$rid", $data->id, $cm->id);

            redirect($CFG->wwwroot.'/mod/data/view.php?d='.$data->id.'&amp;rid='.$rid);

        } else { /// Add some new records

            if (!data_user_can_add_entry($data, $currentgroup, $groupmode)) {
                error('Can not add entries!');
            }

        /// Check if maximum number of entry as specified by this database is reached
        /// Of course, you can't be stopped if you are an editting teacher! =)

            if (data_atmaxentries($data) and !has_capability('mod/data:manageentries',$context)){
                notify (get_string('atmaxentry','data'));
                print_footer($course);
                exit;
            }

            ///Empty form checking - you can't submit an empty form!

            $emptyform = true;      // assume the worst

            foreach ($datarecord as $name => $value) {
                if (!in_array($name, $ignorenames)) {
                    $namearr = explode('_', $name);  // Second one is the field id
                    if (empty($field->field) || ($namearr[1] != $field->field->id)) {  // Try to reuse classes
                        $field = data_get_field_from_id($namearr[1], $data);
                    }
                    if ($field->notemptyfield($value, $name)) {
                        $emptyform = false;
                        break;             // if anything has content, this form is not empty, so stop now!
                    }
                }
            }

            if ($emptyform){    //nothing gets written to database
                notify(get_string('emptyaddform','data'));
            }

            if (!$emptyform && $recordid = data_add_record($data, $currentgroup)) {    //add instance to data_record

                /// Insert a whole lot of empty records to make sure we have them
                $fields = get_records('data_fields','dataid',$data->id);
                foreach ($fields as $field) {
                    $content->recordid = $recordid;
                    $content->fieldid = $field->id;
                    insert_record('data_content',$content);
                }

				//XTEC ************ AFEGIT - Ignore selected course parameter
				//2010.08.31
				array_push($ignorenames, 'course'.$CFG->data_versionfieldid);
                $datarecord_vars = get_object_vars($datarecord);
                $version_courseid = $datarecord_vars['course'.$CFG->data_versionfieldid];
				//************ FI

                //for each field in the add form, add it to the data_content.
                foreach ($datarecord as $name => $value){
                    if (!in_array($name, $ignorenames)) {
                        $namearr = explode('_', $name);  // Second one is the field id
                        if (empty($field->field) || ($namearr[1] != $field->field->id)) {  // Try to reuse classes
                            $field = data_get_field_from_id($namearr[1], $data);
                        }
                        if ($field) {
							//XTEC ************ AFEGIT - Create version object if a course is specified
							//2010.08.31
							if ($field->field->id==$CFG->data_versionfieldid && $version_courseid>0){
                                $version = new stdClass(); 
                                $version->changes = $value;
                                $value = "courseid=".$version_courseid."$$".
                                         "changes=".$version->changes;
                            }
							//************ FI
                            $field->update_content($recordid, $value, $name);
                        }
                    }
                }

                add_to_log($course->id, 'data', 'add', "view.php?d=$data->id&amp;rid=$recordid", $data->id, $cm->id);
				//XTEC ************ AFEGIT - Create and restore course before saving the record
				//2010.08.31
				if ($datarecord->d == $CFG->data_coursesdataid){
                    $datarecord->rid = $recordid;
                    require_once("$CFG->dirroot/backup/lib.php");
                    require_once("$CFG->dirroot/backup/restorelib.php");
                    // Create empty course to restore backup file
                    $course = get_course_information_by_record($datarecord->rid);
                    $course->timecreated=time();
                    
                    // Create an empty course
                    if ($courseid = insert_record('course', $course, $returnid=true)) {
                        $context = get_context_instance(CONTEXT_COURSE, $courseid);
                        role_assign($CFG->creatornewroleid, $USER->id, 0, $context->id); // assign editing teacher role
                        $course->id = $courseid;
                        if (!empty($CFG->restrictmodulesfor) && $CFG->restrictmodulesfor != 'none' && !empty($CFG->restrictbydefault)) { // if we're all or requested we're ok.
                            $allowedmods = explode(',',$CFG->defaultallowedmodules);
                            update_restricted_mods($course,$allowedmods);
                        }

                        // Get file name
                        $filerecord = get_record('data_content', 'recordid', $datarecord->rid, 'fieldid', $CFG->data_filefieldid);
                        $coursefile = "$CFG->dataroot/$COURSE->id/$CFG->moddata/data/$data->id/$CFG->data_filefieldid/$datarecord->rid/$filerecord->content";
                        // Restore the file into the course
                        //TODO: True? o 1?
                        $preferences = array('restore_course_files' => 'true');
                        if (import_backup_file_silently($coursefile, $courseid, true, false, $preferences)){
                            $course = get_record("course", "id", $courseid);                            
                            // Update course and database information
                            $course->guest=1;
                            update_record('course', $course);
                            
                            // Update courseid in record data
                            if (!isset($CFG->data_coursefieldid)) notify("DATA: data_coursefieldid doesn't exists. You must configure it before approving a course.");
                            $recordcontent->recordid=$datarecord->rid;
                            $recordcontent->fieldid=$CFG->data_coursefieldid;
                            $recordcontent->content=$courseid;
                            if ($record = get_record('data_content', 'recordid', $recordcontent->recordid, 'fieldid', $recordcontent->fieldid)){
                                $recordcontent->id=$record->id;
                                update_record('data_content', $recordcontent);
                            }else{
                                insert_record('data_content', $recordcontent);                                
                            }

                            // Update course link
                            if (!isset($CFG->data_urlfieldid)) notify("DATA: data_urlfieldid doesn't exists. You must configure it before approving a course.", "notifysuccess");
                            $recordcontent->recordid=$datarecord->rid;
                            $recordcontent->fieldid=$CFG->data_urlfieldid;
                            $recordcontent->content="$CFG->wwwroot/course/view.php?id=".$courseid;
                            if ($record = get_record('data_content', 'recordid', $recordcontent->recordid, 'fieldid', $recordcontent->fieldid)){
                                $recordcontent->id=$record->id;
                                update_record('data_content', $recordcontent);
                            }else{
                                insert_record('data_content', $recordcontent);                                
                            }

                            add_to_log($course->id, 'data', 'restore', "view.php?d=$data->id&amp;rid=$recordid", $data->id, $cm->id);                
                        } else{
                            delete_records('course', 'id', $course->id);
                            delete_records('data_content','recordid', $recordid);
                            delete_records('data_records','id', $recordid);
                            print_error('data_errorrestoringcourse','data');
                        }         
                    }
                    
                }
                
                // Create a version if specified
                if (isset($version)){
                    $version->course = $courseid;
                    // Search if specified course has some entry in version table
                    if ($version_courseversion = get_record('block_version_course','course', $version_courseid)){
                        // The specified course is a version of another course, so current course it's included in this package
                        $version->versionid = $version_courseversion->versionid;
                        
                        // Calculate versionname
                        $versionname_arr = explode('.', $version_courseversion->versionname);
                        $subversion =(count_records('block_version_course','versionid', $version_courseversion->versionid));
                        $version->versionname=$versionname_arr[0].".".$subversion;
                        
                    } else{
                        // Is a new version package so it's necessary to add current and specified course
                        $maxversionid = get_field_sql("SELECT MAX(versionid)+1 FROM ".$CFG->prefix."block_version_course");
                        if ($maxversionid=='') $maxversionid=1;
                        $version->versionid = $maxversionid;
                        $version->versionname= "1.1";
                        
                        $version2 = new stdClass(); 
                        $version2->course = $version_courseid;
                        $version2->versionname= "1.0";
                        $version2->versionid = $maxversionid;
                        insert_record('block_version_course', $version2);                        
                    }
    
                    // Create version registry in blocks_version_course table database
                    insert_record('block_version_course', $version);     

                    // Update course shortname information (adding correct version at the end)
                    $course->shortname=substr($course->shortname, 0, 15).$version->versionaname;
                    update_record('course', $course);
                }
				//************ FI
                notify(get_string('entrysaved','data'));

                if (!empty($datarecord->saveandview)) {
                    redirect($CFG->wwwroot.'/mod/data/view.php?d='.$data->id.'&amp;rid='.$recordid);
                }
            }
        }
    }  // End of form processing

    /// Print the browsing interface

    $patterns = array();    //tags to replace
    $replacement = array();    //html to replace those yucky tags

    //form goes here first in case add template is empty
    echo '<form enctype="multipart/form-data" action="edit.php" method="post">';
    echo '<div>';
    echo '<input name="d" value="'.$data->id.'" type="hidden" />';
    echo '<input name="rid" value="'.$rid.'" type="hidden" />';
    echo '<input name="sesskey" value="'.sesskey().'" type="hidden" />';
    print_simple_box_start('center','80%');

    if (!$rid){
        print_heading(get_string('newentry','data'), '', 2);
    }

    /******************************************
     * Regular expression replacement section *
     ******************************************/
    if ($data->addtemplate){
        $possiblefields = get_records('data_fields','dataid',$data->id,'id');

        ///then we generate strings to replace
        foreach ($possiblefields as $eachfield){
            $field = data_get_field($eachfield, $data);
			//XTEC ************ AFEGIT - To hide file form when updating and to show courses list for version field
			//2010.08.31
			if ($rid!=0 && $CFG->data_filefieldid==$field->field->id){
                $patterns[]="[[".$field->field->name."]]";
                $replacements[] = $field->display_browse_field($rid, '');
                $patterns[]="[[".$field->field->name."#id]]";
                $replacements[] = 'field_'.$field->field->id;
            }else if ($CFG->data_versionfieldid==$field->field->id){
                if ($rid!=0){
                    $patterns[]="[[".$field->field->name."]]";                    
                    $content = get_record('data_content','fieldid', $field->field->id, 'recordid', $rid);
                    if ($content->content!=''){
                        $content_arr = explode('$$', $content->content);
                        $content_courseid_arr = explode('=', $content_arr[0]);
                        $content_courseid = $content_courseid_arr[1];
                        $content_course = get_record("course", "id", $content_courseid);
    
                        $content_changes_arr = explode('=', $content_arr[1]);
                        $content_changes = $content_changes_arr[1];    
                        $replacements[] = "<b>".$content_course->fullname."</b>: ".$content_changes;                             
                    } else{
                        $replacements[] = "-";             
                    }
                               
                } else{
                    $courses = get_courses(null, null, 'c.fullname, c.id');
                    $courses_options = array();
                    foreach ($courses as $course){
                        if ($course->id!=1) $courses_options[$course->id]=$course->fullname;
                    }
                    $patterns[]="[[".$field->field->name."]]";
                    $replacements[] = choose_from_menu ($courses_options, 'course'.$field->field->id, '', 'choose', '', '0', true)."<br>".$field->display_add_field($rid);                    
                }                
            }else{
			//************ FI
		        $patterns[]="[[".$field->field->name."]]";
		        $replacements[] = $field->display_add_field($rid);
		        $patterns[]="[[".$field->field->name."#id]]";
		        $replacements[] = 'field_'.$field->field->id;
			//XTEC ************ AFEGIT - To hide file form when updating and to show courses list for version field
			//2010.08.31
			}
			//************ FI
        }
        $newtext = str_ireplace($patterns, $replacements, $data->{$mode});

    } else {    //if the add template is not yet defined, print the default form!
        echo data_generate_default_template($data, 'addtemplate', $rid, true, false);
        $newtext = '';
    }

    echo $newtext;
    echo '<div style="text-align:center"><input type="submit" name="saveandview" value="'.get_string('saveandview','data').'" />';
    if ($rid) {
        echo '&nbsp;<input type="submit" name="cancel" value="'.get_string('cancel').'" onclick="javascript:history.go(-1)" />';
    } else {
        if ( (!$data->maxentries) || (data_numentries($data)<($data->maxentries-1)) ) {
            echo '&nbsp;<input type="submit" value="'.get_string('saveandadd','data').'" />';
        }
    }
    echo '</div>';
    print_simple_box_end();
    echo '</div></form>';


/// Upload records section. Only for teachers and the admin.

    if (has_capability('mod/data:manageentries',$context)) {
        if ($import) {
            print_simple_box_start('center','80%');
            print_heading(get_string('uploadrecords', 'data'), '', 3);

            $maxuploadsize = get_max_upload_file_size();
            echo '<div style="text-align:center">';
            echo '<form enctype="multipart/form-data" action="import.php" method="post">';
            echo '<input type="hidden" name="MAX_FILE_SIZE" value="'.$maxuploadsize.'" />';
            echo '<input name="d" value="'.$data->id.'" type="hidden" />';
            echo '<input name="sesskey" value="'.sesskey().'" type="hidden" />';
            echo '<table align="center" cellspacing="0" cellpadding="2" border="0">';
            echo '<tr>';
            echo '<td align="right">'.get_string('csvfile', 'data').':</td>';
            echo '<td><input type="file" name="recordsfile" size="30" />';
            helpbutton('importcsv', get_string('csvimport', 'data'), 'data', true, false);
            echo '</td><tr>';
            echo '<td align="right">'.get_string('fielddelimiter', 'data').':</td>';
            echo '<td><input type="text" name="fielddelimiter" size="6" />';
            echo get_string('defaultfielddelimiter', 'data').'</td>';
            echo '</tr>';
            echo '<td align="right">'.get_string('fieldenclosure', 'data').':</td>';
            echo '<td><input type="text" name="fieldenclosure" size="6" />';
            echo get_string('defaultfieldenclosure', 'data').'</td>';
            echo '</tr>';
            echo '</table>';
            echo '<input type="submit" value="'.get_string('uploadfile', 'data').'" />';
            echo '</form>';
            echo '</div>';
            print_simple_box_end();
        } else {
            echo '<div style="text-align:center">';
            echo '<a href="edit.php?d='.$data->id.'&amp;import=1">'.get_string('uploadrecords', 'data').'</a>';
            echo '</div>';
        }
    }


/// Finish the page

    // Print the stuff that need to come after the form fields.
    if (!$fields = get_records('data_fields', 'dataid', $data->id)) {
        print_error('nofieldindatabase', 'data');
    }
    foreach ($fields as $eachfield) {
        $field = data_get_field($eachfield, $data);
        $field->print_after_form();
    }

    print_footer($course);
?>