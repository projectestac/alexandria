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

                // XTEC - ALEXANDRIA ***** MODIFICAT - Capture error if cannot read the file
                // ***** CODI ORIGINAL
                // file_prepare_draft_area($itemid, $this->context->id, 'mod_data', 'content', $content->id);
                // ***** CODI MODIFICAT
                try {
                    file_prepare_draft_area($itemid, $this->context->id, 'mod_data', 'content', $content->id);
                } catch (Exception $e) {
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
        // ***** CODI AFEGIT
        $content = $DB->get_record('data_content', array('fieldid' => $this->field->id, 'recordid'=>$recordid));
        if ($content && in_array($this->field->dataid, explode(',', $CFG->data_coursesdataid)) && $this->field->name == $CFG->data_filefieldid) {
            $file = $this->get_file($recordid);
            if ($file) {
                $html .= '<a href="'.$CFG->wwwroot.'/local/alexandria/data/download.php?rid='.$recordid.'">'.$file->get_filename().'</a>';
            } else {
                $html .= get_string('file_notavalaible', 'local_alexandria');
            }
        } else {
        // ***** CONTINUA
        // database entry label
        $html .= '<div title="'.s($this->field->description).'">';
        $html .= '<fieldset><legend><span class="accesshide">'.$this->field->name.'</span></legend>';

        // itemid element
        $html .= '<input type="hidden" name="field_'.$this->field->id.'_file" value="'.$itemid.'" />';

        $options = new stdClass();
        $options->maxbytes = $this->field->param3;
        $options->maxfiles  = 1; // Limit to one file for the moment, this may be changed if requested as a feature in the future.
        $options->itemid    = $itemid;
        //XTEC - ALEXANDRIA ***** MODIFICAT - Only admited filetypes
        // 2014.09.12 @pferre22
        // $options->accepted_types = '*';
        // ***** CODI MODIFICAT
        switch($this->field->param4){
            case ALEXANDRIA_COURSE_BACKUP:
                $options->accepted_types = 'application/vnd.moodle.backup';
                break;
            case ALEXANDRIA_PDI_PDF:
                $options->accepted_types = 'application/pdf';
                break;
            case ALEXANDRIA_SCORM:
                $options->accepted_types = array('.zip', '.xml');
                break;
            case ALEXANDRIA_PDI:
                $options->accepted_types = array('.xbk', '.notebook', '.gwb', '.ink', '.flp', '.flipchart', '.ubz', '.iwb', 'presentation', 'video', 'archive');
                break;
            default:
                $options->accepted_types = '*';
                break;
        }
        // ***** FI

        $options->return_types = FILE_INTERNAL;
        $options->context = $PAGE->context;

        $fm = new form_filemanager($options);
        // Print out file manager.

        $output = $PAGE->get_renderer('core', 'files');
        $html .= $output->render($fm);

        $html .= '</fieldset>';
        $html .= '</div>';
        // ***** CODI AFEGIT
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
        global $DB;
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
        // ******* CODI MODIFICAT
        if (!$file = alexandria_get_file($recordid, $this->field->id)) {
            return null;
        }
        // ******** FI
        return $file;
    }

    function display_browse_field($recordid, $template) {
        global $CFG, $DB, $OUTPUT;

        if (!$content = $DB->get_record('data_content', array('fieldid'=>$this->field->id, 'recordid'=>$recordid))) {
            return '';
        }

        if (empty($content->content)) {
            //XTEC - ALEXANDRIA ************ AFEGIT
            //2013.11.29 @mespinosa
            // ******* CODI AFEGIT
            if (!empty($this->field->param4)) {
                switch($this->field->param4) {
                    case ALEXANDRIA_SCORM:
                    case ALEXANDRIA_PDI:
                        // Es desaprova SCORM i PDI perquè el fitxer no existeix i així ho pot revisar el revisor
                        $data_record = $DB->get_record('data_records', array('id' => $recordid));
                        if($data_record->timemodified < time() - 24 * 60 * 60 && !has_capability('mod/data:approve', $this->context)) {
                            $data_record->approved = 0;
                            $data_record->timemodified = time();
                            $DB->update_record('data_records',$data_record);
                        }
                    case ALEXANDRIA_COURSE_BACKUP:
                        return '<b>'.get_string('file_notavalaible', 'local_alexandria').'</b>';
                    case ALEXANDRIA_PDI_PDF:
                        return '<b>'.get_string('preview_notavalaible', 'local_alexandria').'</b>';
                }
            }
            // ******** FI
            return '';
        }

        if (!$file = $this->get_file($recordid, $content)) {
            //XTEC - ALEXANDRIA ************ AFEGIT
            //2013.11.29 @mespinosa
            // ******* CODI AFEGIT
            if (!empty($this->field->param4)) {
                switch($this->field->param4) {
                    case ALEXANDRIA_SCORM:
                    case ALEXANDRIA_PDI:
                        // Es desaprova SCORM i PDI perquè el fitxer no existeix i així ho pot revisar el revisor
                        $data_record = $DB->get_record('data_records', array('id' => $recordid));
                        if($data_record->timemodified < time() - 24*60*60 && !has_capability('mod/data:approve', $this->context)) {
                            $data_record->approved = 0;
                            $data_record->timemodified = time();
                            $DB->update_record('data_records', $data_record);
                        }
                    case ALEXANDRIA_COURSE_BACKUP:
                        return '<b>'.get_string('file_notavalaible', 'local_alexandria').'</b>';
                    case ALEXANDRIA_PDI_PDF:
                        return '<b>'.get_string('preview_notavalaible', 'local_alexandria').'</b>';
                }
            }
            // ******** FI
            return '';
        }

        $name   = empty($content->content1) ? $file->get_filename() : $content->content1;
        $src    = file_encode_url($CFG->wwwroot.'/pluginfile.php', '/'.$this->context->id.'/mod_data/content/'.$content->id.'/'.$file->get_filename());
        $width  = $this->field->param1 ? ' width  = "'.s($this->field->param1).'" ':' ';
        $height = $this->field->param2 ? ' height = "'.s($this->field->param2).'" ':' ';
        //XTEC - ALEXANDRIA ************ MODIFICAT - If it's a preview only return the file link
        // CODI ORIGINAL
        //$str = $OUTPUT->pix_icon(file_file_icon($file), get_mimetype_description($file), 'moodle', array('width' => 16, 'height' => 16)). '&nbsp;'.
        //       '<a href="'.$src.'" >'.s($name).'</a>';
        // CODI MODIFICAT
        if (!empty($this->field->param4)) {
            $preview_str = get_string('preview');
            if ($this->field->param4 == ALEXANDRIA_PDI_PDF) {
                $url = $CFG->wwwroot.'/local/alexandria/data/download.php?rid='.$recordid.'&fid='.$this->field->id.'&force=false';
                $icon = $OUTPUT->pix_icon('t/hide', $preview_str, null, array('id' => 'previewImg', 'title' => $preview_str));
                $str = '<div id="previewButton">'.$icon.'
                        <a id="show" href="#show" onclick="document.getElementById(\'preview_data\').style.display = \'block\'; document.getElementById(\'previewButton\').style.display = \'none\';">'.get_string('preview_resource','local_alexandria').'</a></div>';
                $str .= '<div id="preview_data" class="preview_pdf" style="display: none;">
                    <object data="'.$url.'#" type="application/pdf" width="100%" height="500px;"></object>
                    <div id="hideButton">
                        <img title="'.$preview_str.'" src="'.$OUTPUT->pix_url('t/show').'" alt="'.$preview_str.'" />
                        <a id="hide" onclick="document.getElementById(\'preview_data\').style.display = \'none\'; document.getElementById(\'previewButton\').style.display = \'block\';" href="#presentacio">'.get_string('preview_hide','local_alexandria').'</a>
                    </div>
                </div>';
            } else {
                $src = $CFG->wwwroot.'/local/alexandria/data/download.php?rid='.$recordid.'&fid='.$this->field->id;
                $str  = $OUTPUT->pix_icon(file_file_icon($file), get_mimetype_description($file), 'moodle', array('width' => 16, 'height' => 16)). '&nbsp;';

                $dwnldinfo = alexandria_get_download_info($recordid, $this->field->id);
                $str .= '<script type="text/javascript" src="'.$CFG->wwwroot.'/local/alexandria/data/files.js"></script>';
                $str .= '<a href="'.$src.'" onclick="increase_counter('.$recordid.','.$this->field->id.')">'.s($name).'</a>';
                $str .= '<p>
                    <strong>'.get_string('last_download','local_alexandria').'</strong> <span id="download_last">'.$dwnldinfo['last'].'</span> ·
                    <strong>'.get_string('total_downloads','local_alexandria').'</strong> <span id="download_counter">'.$dwnldinfo['total'].'</span> ·
                    <strong>'.get_string('size').': </strong>'.display_size($file->get_filesize()).'</p>';
                switch($this->field->param4){
                    case ALEXANDRIA_SCORM:
                        $url = $CFG->wwwroot.'/local/alexandria/scorm/preview.php?a='.$content->content2.'&scoid=0&display=popup';
                        $icon = $OUTPUT->pix_icon('t/hide', $preview_str, null, array('id' => 'previewImg', 'title' => $preview_str));
                        $str .= '<div id="previewButton">'.$icon.'
                                <a id="show" href="#show" onclick="document.getElementById(\'preview_data\').style.display = \'block\'; document.getElementById(\'previewButton\').style.display = \'none\';">'.get_string('preview_resource','local_alexandria').'</a></div>';
                        $str .= '<div id="preview_data"  class="preview_scorm" style="display: none;">
                             <iframe style="width: 100%; height: 500px;" src="'.$url.'" frameborder="0"></iframe><br/>
                             <div id="hideButton">
                                <img src="'.$OUTPUT->pix_url('t/show').'" alt="'.$preview_str.'" title="'.$preview_str.'" />
                                <a id="hide" onclick="document.getElementById(\'preview_data\').style.display = \'none\'; document.getElementById(\'previewButton\').style.display = \'block\';" href="#presentacio">'.get_string('preview_hide','local_alexandria').'</a>
                            </div>
                        </div>';
                        break;
                    case ALEXANDRIA_PDI:
                        $str .= '[[pdf]]';
                        break;
                }
            }
        } else {
            $str = $OUTPUT->pix_icon(file_file_icon($file), get_mimetype_description($file), 'moodle', array('width' => 16, 'height' => 16)). '&nbsp;'.
                   '<a href="'.$src.'" >'.s($name).'</a>';
        }
        //FI
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
        //XTEC - ALEXANDRIA ************ MODIFICAT - If it's a SCORM file insert as a new scorm object
        //2011.05.23 @fcasanel
        //2013.10.30 Marc Espinosa Zamora <marc.espinosa.zamora@upcnet.es>
        if ($this->field->param4 == ALEXANDRIA_SCORM) {
            require_once($CFG->dirroot.'/mod/scorm/lib.php');
            require_once($CFG->dirroot.'/local/alexandria/data/datalib.php');
            require_once($CFG->dirroot.'/course/lib.php');

            $scorm_object = alexandria_create_scorm_object($this->field->name, $this->field->name, $this->field->param3);

            //Check if is an update or a new entry
            $scorm_record = $DB->get_record('data_content', array('fieldid' => $this->field->id, 'recordid' => $recordid));
            if ($scorm_record->content2) {
                // Delete old scorm
                $oldcmid = $DB->get_field('course_modules', 'id', array('module' => $scorm_object->module, 'instance' => $scorm_record->content2));
                if ($oldcmid) $oldscormcontext = context_module::instance($oldcmid);
                course_delete_module($oldcmid);
            }
            $cmid = add_course_module($scorm_object);
            $scorm_object->coursemodule = $cmid;
            $scormcontext = context_module::instance($cmid);
            $sectionid = course_add_cm_to_section($scorm_object->course, $cmid, 1);
        }

        file_save_draft_area_files($value, $this->context->id, 'mod_data', 'content', $content->id);
        if ($this->field->param4 == ALEXANDRIA_SCORM && !empty($oldscormcontext)) {
            $fs->delete_area_files($oldscormcontext->id, 'mod_scorm');
        }

        $usercontext = context_user::instance($USER->id);
        $files = $fs->get_area_files($this->context->id, 'mod_data', 'content', $content->id, 'itemid, filepath, filename', false);

        // We expect no or just one file (maxfiles = 1 option is set for the form_filemanager).
        if (count($files) == 0) {
            $content->content = null;
        } else {
            $content->content = array_values($files)[0]->get_filename();

            if ($this->field->param4 == ALEXANDRIA_SCORM) {
                $content->content = null;
                $filename = $content->content;
                $extension = array_pop($filename);
                $filename = implode('.',$filename).'_scorm.'.$extension;
                $scorm_object->name = $filename;
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

            if (count($files) > 1) {
                // This should not happen with a consistent database. Inform admins/developers about the inconsistency.
                debugging('more then one file found in mod_data instance {$this->data->id} file field (field id: {$this->field->id}) area during update data record {$recordid} (content id: {$content->id})', DEBUG_NORMAL);
            }
        }
        $DB->update_record('data_content', $content);

        if ($this->field->param4 == ALEXANDRIA_SCORM) {
            $scorm_id = scorm_add_instance($scorm_object);
            $DB->set_field('course_modules', 'instance' , $scorm_id, array('id'=> $cmid));
            $DB->set_field('data_content', 'content2', $scorm_id, array('id'=> $content->id));
        }
        // ******** CODI ORIGINAL
        /*
        file_save_draft_area_files($value, $this->context->id, 'mod_data', 'content', $content->id);

        $usercontext = context_user::instance($USER->id);
        $files = $fs->get_area_files($this->context->id, 'mod_data', 'content', $content->id, 'itemid, filepath, filename', false);

        // We expect no or just one file (maxfiles = 1 option is set for the form_filemanager).
        if (count($files) == 0) {
            $content->content = null;
        } else {
            $content->content = array_values($files)[0]->get_filename();
            if (count($files) > 1) {
                // This should not happen with a consistent database. Inform admins/developers about the inconsistency.
                debugging('more then one file found in mod_data instance {$this->data->id} file field (field id: {$this->field->id}) area during update data record {$recordid} (content id: {$content->id})', DEBUG_NORMAL);
            }
        }
        $DB->update_record('data_content', $content);
        */
        //*************** FI

        //XTEC - ALEXANDRIA ************ AFEGIT - If it's a backup, restore the course
        //2013.11.05 Marc Espinosa Zamora <marc.espinosa.zamora@upcnet.es>
        if ($this->field->param4 == ALEXANDRIA_COURSE_BACKUP) {
            $file = array_values($files)[0];
            if (empty($file)) {
                $this->delete_content($recordid);
                $DB->delete_records('data_records', array('id' => $recordid));
                throw new Exception(get_string('recordmissingfield', 'local_alexandria', $CFG->data_filefieldid));
            }
            if (!get_data_field_by_name($CFG->data_categoryfieldid, $recordid)) {
                $this->delete_content($recordid);
                $DB->delete_records('data_records', array('id' => $recordid));
                throw new Exception(get_string('recordmissingfield', 'local_alexandria', $CFG->data_categoryfieldid));
            }
            require_once($CFG->dirroot . '/backup/util/includes/restore_includes.php' );
            $file = $draftfile;
            $coursefieldid = $DB->get_field('data_fields', 'id', array('name' => $CFG->data_coursefieldid, 'dataid' => $this->field->dataid));
            $fieldcontent = $DB->get_record('data_content', array('recordid' => $recordid, 'fieldid' => $coursefieldid));
            if (!$fieldcontent) {
                $fieldcontent = new stdClass();
                $fieldcontent->fieldid = $coursefieldid;
                $fieldcontent->recordid = $recordid;
                $fieldcontent->id = $DB->insert_record('data_content', $fieldcontent);
            }
            $approved = $DB->get_field('data_records', 'approved', array('id' => $recordid));
            if (!$fieldcontent->content || !$course = $DB->get_record('course', array('id' => $fieldcontent->content))) {
                // Restore de course
                $courseid = alexandria_restore_course($file, $recordid);
                if (!$courseid) {
                    throw new Exception(get_string('error_restoringcourse', 'local_alexandria'));
                }
                $fieldcontent->content = $courseid;
                $fieldcontent->content3 = time();
                $DB->update_record('data_content', $fieldcontent);
                override_course_values($courseid, $recordid);
                require_once($CFG->dirroot.'/enrol/manual/externallib.php');
                $enrol = enrol_get_plugin('manual');
                $instance = $DB->get_record('enrol', array('courseid' => $courseid, 'enrol' => 'manual'));
                $roleid = $DB->get_field('role', 'id', array('shortname' => 'editingteacher'));
                $enrol->enrol_user($instance, $USER->id, $roleid, time(), 0, ENROL_USER_ACTIVE);
                if ($guestenrol = $DB->get_record('enrol', array('enrol' => 'guest', 'courseid' => $courseid))) {
                    // Forbid guest to access the course until it's approved
                    $guestenrol->status = $approved ? 0 : 1;
                    $DB->update_record('enrol', $guestenrol);
                }

                // Start doing the backup (approved or not)
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
        global $DB, $CFG;
        if ($this->field->param4 == ALEXANDRIA_SCORM) {
            require_once($CFG->dirroot.'/mod/scorm/lib.php');
            $scorm_id = $DB->get_field('data_content', 'content2', array('fieldid' => $this->field->id, 'recordid' => $recordid));
            $module_scorm_id = $DB->get_field('modules', 'id', array('name' => 'scorm'));
            $cmid = $DB->get_field('course_modules', 'id', array('course' => '1', 'module' => $module_scorm_id, 'instance' => $scorm_id));
            scorm_delete_instance($scorm_id);
            delete_course_module($cmid);
        }
        if ($this->field->param4 == ALEXANDRIA_COURSE_BACKUP) {
            $coursefieldid = $DB->get_field('data_fields', 'id', array('name' => $CFG->data_coursefieldid, 'dataid' => $this->field->dataid));
            $courseid = $DB->get_field('data_content', 'content', array('recordid' => $recordid, 'fieldid' => $coursefieldid));
            if (!empty($courseid)) {
                delete_course($courseid, false);
            }
        }
        parent::delete_content($recordid);
    }
    // ******** FI
}


