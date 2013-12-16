<?php
///////////////////////////////////////////////////////////////////////////
//                                                                       //
// NOTICE OF COPYRIGHT                                                   //
//                                                                       //
// Moodle - Modular Object-Oriented Dynamic Learning Environment         //
//          http://moodle.org                                            //
//                                                                       //
// Copyright (C) 1999-onwards Moodle Pty Ltd  http://moodle.com          //
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

class data_field_file extends data_field_base {
    var $type = 'file';

    function display_add_field($recordid=0) {
        global $CFG, $DB, $OUTPUT, $PAGE, $USER;

        $file        = false;
        $content     = false;
        $displayname = '';
        $fs = get_file_storage();
        $context = $PAGE->context;
        $itemid = null;

        // editing an existing database entry
        if ($recordid){
            if ($content = $DB->get_record('data_content', array('fieldid'=>$this->field->id, 'recordid'=>$recordid))) {
		
		//XTEC - ALEXANDRIA ***** MODIFICAT - Capture error if cannot read the file
		// ***** CODI ORIGINAL
	        //file_prepare_draft_area($itemid, $this->context->id, 'mod_data', 'content', $content->id);
		// ***** CODI MODIFICAT
		try {
	                file_prepare_draft_area($itemid, $this->context->id, 'mod_data', 'content', $content->id);
		} catch(Exception $e) {
			$content->content = null;
		}
		// ***** FI

                if (!empty($content->content)) {
                    if ($file = $fs->get_file($this->context->id, 'mod_data', 'content', $content->id, '/', $content->content)) {
                        $usercontext = context_user::instance($USER->id);
                        if (!$files = $fs->get_area_files($usercontext->id, 'user', 'draft', $itemid, 'id DESC', false)) {
                            return false;
                        }
                        if (empty($content->content1)) {
                            // Print icon if file already exists
                            $src = moodle_url::make_draftfile_url($itemid, '/', $file->get_filename());
                            $displayname = $OUTPUT->pix_icon(file_file_icon($file), get_mimetype_description($file), 'moodle', array('class' => 'icon')). '<a href="'.$src.'" >'.s($file->get_filename()).'</a>';

                        } else {
                            $displayname = 'no file added';
                        }
                    }
                }
            }
        } else {
            $itemid = file_get_unused_draft_itemid();
        }

        $html = '';
	//XTEC - ALEXANDRIA **************** MODIFICAT - If the file is already uploaded, disable upload
        //2013.11.05 - Marc Espinosa Zamora <marc.espinosa.zamora@upcnet.es>
        // ***** CODI ORIGINAL
        // database entry label
        //$html .= '<div title="'.s($this->field->description).'">';
        //$html .= '<fieldset><legend><span class="accesshide">'.$this->field->name.'</span></legend>';
        // itemid element
        //$html .= '<input type="hidden" name="field_'.$this->field->id.'_file" value="'.$itemid.'" />';
        //$options = new stdClass();
        //$options->maxbytes  = $this->field->param3;
        //$options->itemid    = $itemid;
        //$options->accepted_types = '*';
        //$options->return_types = FILE_INTERNAL;
        //$options->context = $PAGE->context;
        //$fp = new file_picker($options);
        // print out file picker
        //$html .= $OUTPUT->render($fp);
	//$html .= '</fieldset>';
        //$html .= '</div>';
        //$module = array('name'=>'data_filepicker', 'fullpath'=>'/mod/data/data.js', 'requires'=>array('core_filepicker'));
        //$PAGE->requires->js_init_call('M.data_filepicker.init', array($fp->options), true, $module);
	// ***** CODI MODIFICAT
	if ($content = $DB->get_record('data_content', array('fieldid'=>$this->field->id, 'recordid'=>$recordid)) && in_array($this->field->dataid,explode(',',$CFG->data_coursesdataid)) && $this->field->name == $CFG->data_filefieldid) {
		$content = $DB->get_record('data_content', array('fieldid'=>$this->field->id, 'recordid'=>$recordid));
		$file = $fs->get_file($this->context->id, 'mod_data', 'content', $content->id, '/', $content->content);
		$html .= '<a href="'.file_encode_url($CFG->wwwroot.'/pluginfile.php', '/'.$this->context->id.'/mod_data/content/'.$content->id.'/'.$file->get_filename()).'">'.$file->get_filename().'</a>';
	} else {
		// database entry label
        	$html .= '<div title="'.s($this->field->description).'">';
	        $html .= '<fieldset><legend><span class="accesshide">'.$this->field->name.'</span></legend>';

        	// itemid element
	        $html .= '<input type="hidden" name="field_'.$this->field->id.'_file" value="'.$itemid.'" />';

		$options = new stdClass();
        	$options->maxbytes  = $this->field->param3;
	        $options->itemid    = $itemid;
        	$options->accepted_types = '*';
	        $options->return_types = FILE_INTERNAL;
        	$options->context = $PAGE->context;

	        $fp = new file_picker($options);
        	// print out file picker
	        $html .= $OUTPUT->render($fp);
		$module = array('name'=>'data_filepicker', 'fullpath'=>'/mod/data/data.js', 'requires'=>array('core_filepicker'));
	        $PAGE->requires->js_init_call('M.data_filepicker.init', array($fp->options), true, $module);
	        $html .= '</fieldset>';
        	$html .= '</div>';
	}
	// ***** FI

        return $html;
    }

    function display_search_field($value = '') {
        return '<label class="accesshide" for="f_' . $this->field->id . '">' . $this->field->name . '</label>' .
               '<input type="text" size="16" id="f_'.$this->field->id.'" name="f_'.$this->field->id.'" value="'.$value.'" />';
    }

    function generate_sql($tablealias, $value) {
        global $DB;

        static $i=0;
        $i++;
        $name = "df_file_$i";
        return array(" ({$tablealias}.fieldid = {$this->field->id} AND ".$DB->sql_like("{$tablealias}.content", ":$name", false).") ", array($name=>"%$value%"));
    }

    function parse_search_field() {
        return optional_param('f_'.$this->field->id, '', PARAM_NOTAGS);
    }

    function get_file($recordid, $content=null) {
        global $DB,$CFG;
        if (empty($content)) {
            if (!$content = $DB->get_record('data_content', array('fieldid'=>$this->field->id, 'recordid'=>$recordid))) {
                return null;
            }
        }
	
        $fs = get_file_storage();
	//XTEC - ALEXANDRIA ************ MODIFICAT - If it's a course, we get the file from automated backups area
	//2013.11.29 @mespinosa
	// ******* CODI ORIGINAL
	//if (!$file = $fs->get_file($this->context->id, 'mod_data', 'content', $content->id, '/', $content->content)) {
        //    return null;
        //}
	// return $file;
	// ******* CODI MODIFICAT
	if ($CFG->data_filefieldid == $this->field->name && in_array($this->field->dataid,explode(',',$CFG->data_coursesdataid))) {
		$coursefieldid = $DB->get_field('data_fields','id',array('name' => $CFG->data_coursefieldid, 'dataid' => $this->field->dataid));
		$courseid = $DB->get_field('data_content','content',array('fieldid' => $coursefieldid, 'recordid' => $recordid));	
		if (!$courseid) return null;
		$files = $fs->get_area_files(context_course::instance($courseid)->id, 'backup', 'automated', false, 'timecreated DESC');
		foreach($files as $file) {
        	    if (!$file->is_directory())
			return $file;
        	}
	} else {
		if ($file = $fs->get_file($this->context->id, 'mod_data', 'content', $content->id, '/', $content->content)) {
	            return $file;
        	}	
	}
	// ******** FI
        return null;
    }

    function display_browse_field($recordid, $template) {
        global $CFG, $DB, $OUTPUT;
        if (!$content = $DB->get_record('data_content', array('fieldid'=>$this->field->id, 'recordid'=>$recordid))) {
            return '';
        }

        if (empty($content->content)) {
            return '';
        }

        if (!$file = $this->get_file($recordid, $content)) {
            return '';
        }
	//XTEC - ALEXANDRIA ************ MODIFICAT - If it's a preview only return the file link
	// CODI ORIGINAL
        //$name   = empty($content->content1) ? $file->get_filename() : $content->content1;
        //$src    = file_encode_url($CFG->wwwroot.'/pluginfile.php', '/'.$this->context->id.'/mod_data/content/'.$content->id.'/'.$file->get_filename());
        //$width  = $this->field->param1 ? ' width  = "'.s($this->field->param1).'" ':' ';
        //$height = $this->field->param2 ? ' height = "'.s($this->field->param2).'" ':' ';
        //$str = $OUTPUT->pix_icon(file_file_icon($file), get_mimetype_description($file), 'moodle', array('width' => 16, 'height' => 16)). '&nbsp;'.
        //       '<a href="'.$src.'" >'.s($name).'</a>';
	// CODI MODIFICAT
	if (!empty($this->field->param4)) {
		$str = file_encode_url($CFG->wwwroot.'/pluginfile.php', '/'.$this->context->id.'/mod_data/content/'.$content->id.'/'.$file->get_filename());
	} else {
		$dwnldinfo = download_info($this->field->id, $recordid);
		$name   = empty($content->content1) ? $file->get_filename() : $content->content1;
		if ($CFG->data_filefieldid == $this->field->name && in_array($this->field->dataid,explode(',',$CFG->data_coursesdataid))) {
			$src = $CFG->wwwroot.'/mod/data/download.php?rid='.$recordid;
		} else {
			$src = file_encode_url($CFG->wwwroot.'/pluginfile.php', '/'.$this->context->id.'/mod_data/content/'.$content->id.'/'.$file->get_filename());
		}
	        $width  = $this->field->param1 ? ' width  = "'.s($this->field->param1).'" ':' ';
        	$height = $this->field->param2 ? ' height = "'.s($this->field->param2).'" ':' ';
	
        	$str = $OUTPUT->pix_icon(file_file_icon($file), get_mimetype_description($file), 'moodle', array('width' => 16, 'height' => 16)). '&nbsp;'.
               '<script type="text/javascript" src="files.js"></script>'.'<a href="'.$src.'" onclick="increase_counter('.$this->field->id.','.$recordid.')">'.s($name).'</a>';
		$str .= '<p><strong>Última descàrrega:</strong> <span id="lastdownload">'.$dwnldinfo['last'].'</span> · <strong>Descàrregues totals:</strong> <span id="downloads">'.$dwnldinfo['total'].'</span></p>';
		if (!in_array($this->field->dataid,explode(',',$CFG->data_coursesdataid))) {
			if (!empty($this->field->param5)) {
				 $str .= '<div id="text" onclick="create_iframe_scorm_preview(\''.$CFG->wwwroot.'/mod/scorm/preview.php?a='.$content->content2.'&scoid=0&display=popup\');">
					<script>show_preview_button(\''.$CFG->wwwroot.'/mod/scorm/preview.php?a='.$content->content2.'&scoid=0&display=popup\',\''.$OUTPUT->pix_url('t/hide').'\',false);</script>
                        	</div>';
				$str .= '<div id="image" style="display: none;">
					<br />
					<img src="'.$OUTPUT->pix_url('t/show').'" alt="Previsualitza" title="Previsualitza" />
					 <a id="hide" onclick="document.getElementById(\'image\').style.display = \'none\'; document.getElementById(\'previewButton\').style.display = \'block\';" href="#presentacio">Amaga la previsualització</a>
				</div>';
			} else {
				$str .= '<div id="text">
					<script>show_preview_button(\'[[pdf]]\',\''.$OUTPUT->pix_url('t/hide').'\',false);</script>
				</div>';
				$str .= '<div id="image" style="display: none;">
					<iframe style="width: 700px; height: 500px;" src="http://docs.google.com/a/xtec.cat/gview?url=[[pdf]]&amp;embedded=true&amp;authuser=xtec.cat&amp;&amp;output=embed" frameborder="0"></iframe> 
					<br/>
					<img title="Previsualitza" src="'.$OUTPUT->pix_url('t/show').'" alt="Previsualitza" />
				 	<a id="hide" onclick="document.getElementById(\'image\').style.display = \'none\'; document.getElementById(\'previewButton\').style.display = \'block\';" href="#presentacio">Amaga la previsualització</a>
				</div>';
			}
		}
	}
        return $str;
    }


    // content: "a##b" where a is the file name, b is the display name
    function update_content($recordid, $value, $name='') {
        global $CFG, $DB, $USER;
        $fs = get_file_storage();
        if (!$content = $DB->get_record('data_content', array('fieldid'=>$this->field->id, 'recordid'=>$recordid))) {

        // Quickly make one now!
            $content = new stdClass();
            $content->fieldid  = $this->field->id;
            $content->recordid = $recordid;
            $id = $DB->insert_record('data_content', $content);
            $content = $DB->get_record('data_content', array('id'=>$id));
        }
	//XTEC - ALEXANDRIA ************ AFEGIT - If it's a SCORM file insert as a new scorm object
        //2011.05.23 @fcasanel
	//2013.10.30 Marc Espinosa Zamora <marc.espinosa.zamora@upcnet.es>
        if ($this->field->param5){
                    require_once $CFG->dirroot.'/mod/scorm/lib.php';
                    require_once $CFG->dirroot.'/course/lib.php';

                    $module_scorm_id = $DB->get_record('modules', array('name' => 'scorm'));
                    $module_scorm_id = $module_scorm_id->id;
			
                    $scorm_object = new stdClass();
                    $scorm_object->MAX_FILE_SIZE = $this->field->param3;
                    $scorm_object->name = $this->field->name;
                    $scorm_object->summary = $this->field->description;
                    $scorm_object->grademethod = 1;
                    $scorm_object->maxgrade = 100;
                    $scorm_object->maxattempt = 0;
                    $scorm_object->whatgrade = 0;
                    $scorm_object->mform_showadvanced_last = 0;
                    $scorm_object->width = 100;
                    $scorm_object->height = 500;
                    $scorm_object->popup = 0;
                    $scorm_object->skipview = 0;
                    $scorm_object->hidebrowse = 0;
                    $scorm_object->hidetoc = 0;
                    $scorm_object->hidenav = 0;
                    $scorm_object->auto = 0;
                    $scorm_object->updatefreq = 0;
                    $scorm_object->datadir = '';
                    $scorm_object->pkgtype = '';
                    $scorm_object->launch = '';
                    $scorm_object->redirect = 'no';
                    $scorm_object->redirecturl = '../mod/scorm/view.php?id=';
                    $scorm_object->visible = 0;
                    $scorm_object->cmidnumber = '';
                    $scorm_object->gradecat = 1;
                    $scorm_object->course = 1;
                    $scorm_object->section = 1;
                    $scorm_object->module = $module_scorm_id;
                    $scorm_object->modulename = 'scorm';
                    $scorm_object->instance = '';
                    $scorm_object->add = 'scorm';
                    $scorm_object->update = 0;
                    $scorm_object->return = 0;
                    $scorm_object->submitbutton = '';
                    $scorm_object->groupingid = 0;
		    $scorm_object->groupmembersonly = 0;
                    $scorm_object->groupmode = 0;
		    $scorm_object->intro = '';
                    
		    //Check if is an update or a new entry
                    $scorm_record = $DB->get_record('data_content', array('fieldid' => $this->field->id, 'recordid' => $recordid));
                    if ($scorm_record->content2){
                        // Delete old scorm
                        scorm_delete_instance($scorm_record->content2);
                        $relation_id = $DB->get_record('course_modules', array('course' => '1', 'module' => $module_scorm_id, 'instance' => $scorm_record->content2));
			if ($relation_id->id) $oldscormcontext = context_module::instance($relation_id->id);
                        delete_course_module($relation_id->id);
                    }
		    $cmid = add_course_module($scorm_object);
	            $scorm_object->coursemodule = $cmid;
		    $scormcontext = context_module::instance($cmid);
		    
    	}
	// delete existing files
        $fs->delete_area_files($this->context->id, 'mod_data', 'content', $content->id);
	if ($this->field->param5 && !empty($oldscormcontext)) {
		$fs->delete_area_files($oldscormcontext->id, 'mod_scorm');
	}

        $usercontext = context_user::instance($USER->id);
        $files = $fs->get_area_files($usercontext->id, 'user', 'draft', $value, 'timecreated DESC');

        if (count($files)>=2) {
            foreach ($files as $draftfile) {
                if (!$draftfile->is_directory()) {
                   if ($this->field->param5) {
			$filename = explode('.',$draftfile->get_filename());
			$extension = array_pop($filename);
			$filename = implode('.',$filename).'_scorm.'.$extension;
			$scorm_object->reference = $filename;
                        $file_record = array(
                                'contextid' => $scormcontext->id,
                                'component' => 'mod_scorm',
                                'filearea' => 'package',
                                'itemid' => 0,
                                'filepath' => '/',
                                'filename' => $filename,
                        );
                        $fs->create_file_from_storedfile($file_record, $draftfile);
                    }
		    if ($CFG->data_filefieldid == $this->field->name && in_array($this->field->dataid,explode(',',$CFG->data_coursesdataid))) {
			$content->content = $draftfile->get_filename();
		    } else {
                    	$file_record = array(
                        	'contextid' => $this->context->id,
	                        'component' => 'mod_data',
        	                'filearea' => 'content',
                	        'itemid' => $content->id,
	                	'filepath' => '/',
        	       		'filename' => $draftfile->get_filename(),
                	);

                    	$content->content = $file_record['filename'];
		    
	                $fs->create_file_from_storedfile($file_record, $draftfile);
		    }
		    $DB->update_record('data_content', $content);
                    // Break from the loop now to avoid overwriting the uploaded file record
                    break;
                }
            }
        }
	if ($this->field->param5) {
		$scorm_id = scorm_add_instance($scorm_object);
	        $cm = new stdClass();
        	$cm->id = $cmid;
	        $cm->instance = $scorm_id;
        	$DB->update_record('course_modules',$cm);
	        $content->content2 = $scorm_id;
        	$DB->update_record('data_content',$content);
	}
	//*************** FI

	//XTEC - ALEXANDRIA ************ AFEGIT - If it's a backup, restore the course
        //2013.11.05 Marc Espinosa Zamora <marc.espinosa.zamora@upcnet.es>
	if ($CFG->data_filefieldid == $this->field->name && in_array($this->field->dataid,explode(',',$CFG->data_coursesdataid))) {
		if(empty($draftfile)) {
                        $this->delete_content($recordid);
			$DB->delete_records('data_records', array('id' => $recordid));
                        throw new Exception(get_string('recordmissingfield','mod_data',$CFG->data_filefieldid));
                }
		if(!get_data_field_by_name($CFG->data_categoryfieldid,$recordid)) {
			$this->delete_content($recordid);
			$DB->delete_records('data_records', array('id' => $recordid));
			throw new Exception(get_string('recordmissingfield','mod_data',$CFG->data_categoryfieldid));
		}
		require_once( $CFG->dirroot . '/backup/util/includes/restore_includes.php' );
		$file = $draftfile;
		$coursefieldid = $DB->get_field('data_fields','id',array('name' => $CFG->data_coursefieldid, 'dataid' => $this->field->dataid));
		$fieldcontent = $DB->get_record('data_content', array('recordid' => $recordid, 'fieldid' => $coursefieldid));
		if (!$fieldcontent) {
                	$fieldcontent = new stdClass();
                        $fieldcontent->fieldid = $coursefieldid;
                        $fieldcontent->recordid = $recordid;
                        $fieldcontent->id = $DB->insert_record('data_content',$fieldcontent);
                }
		$approved = $DB->get_field('data_records','approved',array('id' => $recordid));
		if (!$fieldcontent->content || !$course = $DB->get_record('course',array('id' => $fieldcontent->content))) {
			$courseid = restore_backup_file($file,null,$recordid);
			$fieldcontent->content = $courseid;
			$fieldcontent->content3 = time();
			$DB->update_record('data_content',$fieldcontent);
			override_course_values($courseid,$recordid);
			require_once($CFG->dirroot.'/enrol/manual/externallib.php');
			$enrol = enrol_get_plugin('manual');
			$instance = $DB->get_record('enrol',array('courseid' => $courseid, 'enrol' => 'manual'));
			$roleid = $DB->get_field('role','id',array('shortname' => 'editingteacher'));
			$enrol->enrol_user($instance, $USER->id, $roleid, time(), 0, ENROL_USER_ACTIVE);
			$guestenrol = $DB->get_record('enrol',array('enrol' => 'guest','courseid' => $courseid));
			if (!$approved) {
			// Forbid guest to access the course until it's approved
				$guestenrol->status = 1;
			} else {
				$guestenrol->status = 0;
			}
			$DB->update_record('enrol',$guestenrol);
		}
		if ($approved) {
			$backup = new stdclass();
			$backup->courseid = $courseid;
			$backup->nextstarttime = time();
			$DB->insert_record('backup_courses', $backup);
		}
	} 
	//*************** FI
    }

    function text_export_supported() {
        return false;
    }

    function file_ok($path) {
        return true;
    }
    
    //XTEC - ALEXANDRIA ************ AFEGIT - If it was a course or a SCORM, we deleted the related resources
    //2013.11.13 - Marc Espinosa Zamora <marc.espinosa.zamora@upcnet.es>
    // ******** CODI AFEGIT
    function delete_content($recordid = 0) {
	global $DB,$CFG;
	if($this->field->param5){
		require_once $CFG->dirroot.'/mod/scorm/lib.php';
                $scorm_id = $DB->get_field('data_content','content2', array('fieldid' => $this->field->id, 'recordid' => $recordid));
                $module_scorm_id = $DB->get_field('modules', 'id',array('name' => 'scorm'));
                $cmid = $DB->get_field('course_modules', 'id',array('course' => '1', 'module' => $module_scorm_id, 'instance' => $scorm_id));
		scorm_delete_instance($scorm_id);
                delete_course_module($cmid);

      	}
	if ($CFG->data_filefieldid == $this->field->name && in_array($this->field->dataid,explode(',',$CFG->data_coursesdataid))) {
		$coursefieldid = $DB->get_field('data_fields','id',array('name' => $CFG->data_coursefieldid, 'dataid' => $this->field->dataid));
                $courseid = $DB->get_field('data_content','content', array('recordid' => $recordid, 'fieldid' => $coursefieldid));
		if (!empty($courseid))
			delete_course($courseid,false);
	}
 	parent::delete_content($recordid);
    } 
    // ******** FI

}


