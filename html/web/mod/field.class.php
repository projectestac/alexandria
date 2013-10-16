<?php  // $Id: field.class.php,v 1.17.2.7 2009/03/23 21:29:22 thepurpleblob Exp $
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

    function data_field_file($field=0, $data=0) {
        parent::data_field_base($field, $data);
    }

    function display_add_field($recordid=0) {
        global $CFG;
        if ($recordid){
            if ($content = get_record('data_content', 'fieldid', $this->field->id, 'recordid', $recordid)) {
                $contents[0] = $content->content;
                $contents[1] = $content->content1;
            } else {
                $contents[0] = '';
                $contents[1] = '';
            }
            $src         = empty($contents[0]) ? '' : $contents[0];
            $name        = empty($contents[1]) ? $src : $contents[1];
            $displayname = empty($contents[1]) ? '' : $contents[1];
            require_once($CFG->libdir.'/filelib.php');
            $source = get_file_url($this->data->course.'/'.$CFG->moddata.'/data/'.$this->data->id.'/'.$this->field->id.'/'.$recordid);
        } else {
            $src = '';
            $name = '';
            $displayname = '';
            $source = '';
        }
        $str = '<div title="' . s($this->field->description) . '">';
        $str .= '<fieldset><legend><span class="accesshide">'.$this->field->name.'</span></legend>';
        $str .= '<input type="hidden" name ="field_'.$this->field->id.'_file" value="fakevalue" />';
        //XTEC ************* MODIFICAT - When there are different file fields in the form, each one takes its own MAX_FILE_SIZE param
        //30.03.2011 @fcasanel
        $str .= '<input type="hidden" name="MAX_FILE_SIZE" value="'.s($this->field->param3).'" />';
        //************* FI
        $str .= get_string('file','data'). ' <input type="file" name ="field_'.$this->field->id.'" id="field_'.
                            $this->field->id.'" title="'.s($this->field->description).'" /><br />';
        $str .= get_string('optionalfilename','data').' <input type="text" name="field_' .$this->field->id.'_filename"
                            id="field_'.$this->field->id.'_filename" value="'.s($displayname).'" /><br />';
        //*************** ORIGINAL
        //$str .= '<input type="hidden" name="MAX_FILE_SIZE" value="'.s($this->field->param3).'" />';
        //*************** FI
        $str .= '</fieldset>';
        $str .= '</div>';
        if ($recordid and isset($content) and !empty($content->content)) {
            // Print icon
            require_once($CFG->libdir.'/filelib.php');
            $icon = mimeinfo('icon', $src);
            $str .= '<img src="'.$CFG->pixpath.'/f/'.$icon.'" class="icon" alt="'.$icon.'" />'.
                    '<a href="'.$source.'/'.$src.'" >'.$name.'</a>';
        }
        return $str;
    }

    function display_search_field($value = '') {
        return '<input type="text" size="16" name="f_'.$this->field->id.'" value="'.$value.'" />';
    }

    function generate_sql($tablealias, $value) {
        return " ({$tablealias}.fieldid = {$this->field->id} AND {$tablealias}.content LIKE '%{$value}%') ";
    }

    function parse_search_field() {
        return optional_param('f_'.$this->field->id, '', PARAM_NOTAGS);
    }

    function display_browse_field($recordid, $template) {
        global $CFG;
        if (!$content = get_record('data_content', 'fieldid', $this->field->id, 'recordid', $recordid)) {
            return false;
        }
        $width = $this->field->param1 ? ' width = "'.s($this->field->param1).'" ':' ';
        $height = $this->field->param2 ? ' height = "'.s($this->field->param2).'" ':' ';
        if (empty($content->content)) {
            return '';
        }
        require_once($CFG->libdir.'/filelib.php');
        $src  = $content->content;
        $name = empty($content->content1) ? $src : $content->content1;
        $source = get_file_url($this->data->course.'/'.$CFG->moddata.'/data/'.$this->data->id.'/'.$this->field->id.'/'.$recordid);
        $icon = mimeinfo('icon', $src);

		//XTEC ************ MODIFICAT
                //Download the file and call the function that increment the downloads counter - 2010.08.31
                //If the file is a PDF to show PDI materials (param4) shows PDF viewer - 2011.02.28 @fcasanel
                if($this->field->param4){
                    $str = $CFG->wwwrootfiles.'/'.$this->data->id.'/'.$this->field->id.'/'.$recordid.'/'.$src;
                }else{
                    $dwnldinfo = download_info($this->field->id, $recordid);
                    $str = '<img src="'.$CFG->pixpath.'/f/'.$icon.'" height="16" width="16" alt="'.$icon.'" />&nbsp;'.
                               '<script type="text/javascript" src="counter.js"></script>'.
                               '<a href="'.$CFG->wwwrootfiles.'/'.$this->data->id.'/'.$this->field->id.'/'.$recordid.'/'.$src.'" onclick="increase_counter('.$this->field->id.','.$recordid.')" >'.$name.'</a>'.
                               '<p class="downloadinfo">'.get_string('data_last_download','data').
                               '<label id="datelastdownload_'.$this->field->id.'">'.$dwnldinfo['last'].'</label>'.
                               get_string('data_total_downloads','data').'<label id="totaldownloads_'.$this->field->id.'">'.$dwnldinfo['total'].'</label>'.
                               get_string('data_downloads','data').'</p>';
                }
		//************ ORIGINAL
		/*
                $str = '<img src="'.$CFG->pixpath.'/f/'.$icon.'" height="16" width="16" alt="'.$icon.'" />&nbsp;'.
                        '<a href="'.$source.'/'.$src.'" >'.$name.'</a>';		*/
		//************ FI

        return $str;
    }


    // content: "a##b" where a is the file name, b is the display name
    function update_content($recordid, $value, $name) {
        global $CFG;
        if (!$oldcontent = get_record('data_content','fieldid', $this->field->id, 'recordid', $recordid)) {
        // Quickly make one now!
            $oldcontent = new object;
            $oldcontent->fieldid = $this->field->id;
            $oldcontent->recordid = $recordid;
            if (!$oldcontent->id = insert_record('data_content', $oldcontent)) {
                error('Could not make an empty record!');
            }
        }
        $content = new object;
        $content->id = $oldcontent->id;
        $names = explode('_',$name);
        switch ($names[2]) {
            case 'file':
                die('ei');
                // file just uploaded
#                $course = get_course('course', 'id', $this->data->course);
                $filename = $_FILES[$names[0].'_'.$names[1]];
                $filename = $filename['name'];
                $dir = $this->data->course.'/'.$CFG->moddata.'/data/'.$this->data->id.'/'.$this->field->id.'/'.$recordid;
                // only use the manager if file is present, to avoid "are you sure you selected a file to upload" msg
                if ($filename){
                    require_once($CFG->libdir.'/uploadlib.php');
                    // FIX ME: $course not defined here
                    $um = new upload_manager($names[0].'_'.$names[1],true,false,$this->data->course,false,$this->field->param3);
                    if ($um->process_file_uploads($dir)) {
                        $newfile_name = $um->get_new_filename();
                        $content->content = $newfile_name;
                        update_record('data_content',$content);
                    }
                }
                break;

            case 'filename':
                // only changing alt tag
                $content->content1 = clean_param($value, PARAM_NOTAGS);
                update_record('data_content', $content);
                break;

            default:
                break;
        }

        /*print_r($this);
        print_r($content);
        die();*/

        //XTEC ************ AFEGIT - If it's a SCORM file insert as a new scorm object
        //2011.05.23 @fcasanel
        if ($this->field->param5){
            require_once $CFG->dirroot.'/mod/scorm/lib.php';

            $scorm_object = new stdClass();
            $scorm_object->MAX_FILE_SIZE = $this->field->param3;
            $scorm_object->name = $this->field->name;
            $scorm_object->summary = $this->field->description;
            $scorm_object->reference = $content->content;
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
            $scorm_object->visible = 1;
            $scorm_object->cmidnumber = '';
            $scorm_object->gradecat = 1;
            $scorm_object->course = 1;
            $scorm_object->coursemodule = '';
            $scorm_object->section = 1;
            $scorm_object->module = 201;
            $scorm_object->modulename = 'scorm';
            $scorm_object->instance = '';
            $scorm_object->add = 'scorm';
            $scorm_object->update = 0;
            $scorm_object->return = 0;
            $scorm_object->submitbutton = '';
            $scorm_object->groupingid = 0;
            $scorm_object->groupmembersonly = 0;
            $scorm_object->groupmode = 0;

            $scorm_id = insert_record('scorm', $scorm_object);
            //$scorm_id = scorm_add_instance($scorm_object);
            print_r($dir);
            die();
        }
        //*************** FI
    }

    function notemptyfield($value, $name) {
        $names = explode('_',$name);
        if ($names[2] == 'file') {
            $filename = $_FILES[$names[0].'_'.$names[1]];
            return !empty($filename['name']);
            // if there's a file in $_FILES, not empty
        }
        return false;
    }

    function text_export_supported() {
        return false;
    }

}

?>
