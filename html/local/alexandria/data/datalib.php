<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

define('ALEXANDRIA_OTHER', 0);
define('ALEXANDRIA_PDI_PDF', 1);
define('ALEXANDRIA_SCORM', 2);
define('ALEXANDRIA_COURSE_BACKUP', 3);
define('ALEXANDRIA_PDI', 4);
define('ALEXANDRIA_BACKUPS_TABLENAME', 'local_alexandria_backups');

/**
 * Report abuse
 *
 * @param $recordid
 * @return string
 * @throws coding_exception
 */
function alexandria_abuse_report_button($recordid) {
    global $CFG;

    $content = '<a href="' . $CFG->wwwroot . '/local/alexandria/data/report_abuse.php?recordid=' . $recordid . '">' .
        get_string('reportabuse', 'local_alexandria') . '</a>';

    return $content;
}

/**
 * Return the number of times the file has been downloaded
 *
 * @param $recordid
 * @param bool $fieldid
 * @return int
 * @throws dml_exception
 */
function alexandria_get_downloads($recordid, $fieldid = false) {
    global $CFG, $DB;

    if (!$fieldid) {
        $dataid = $DB->get_field('data_records', 'dataid', array('id' => $recordid));
        $fieldid = $DB->get_field('data_fields', 'id', array('name' => $CFG->data_filefieldid, 'dataid' => $dataid));
    }

    return (int)$DB->get_field('data_content', 'content4', array('recordid' => $recordid, 'fieldid' => $fieldid));
}

/**
 * @param $recordid
 * @param $fieldid
 * @param $contextid
 * @param $forcedownload
 * @throws coding_exception
 * @throws dml_exception
 */
function alexandria_download_file($recordid, $fieldid, $contextid, $forcedownload) {
    global $CFG;
    require_once($CFG->libdir . '/filelib.php');

    $file = alexandria_get_file($recordid, $fieldid, $contextid);
    if ($file) {
        if ($forcedownload) {
            alexandria_update_downloadings($recordid, $fieldid);
        }
        send_stored_file($file, 0, 0, $forcedownload);
        return;
    }

    send_file_not_found();
}

/**
 * @param $recordid
 * @param $fieldid
 * @param $contextid
 * @return bool|stored_file|null
 * @throws coding_exception
 * @throws dml_exception
 */
function alexandria_get_file($recordid, $fieldid, $contextid = 0) {
    global $CFG, $DB;
    require_once($CFG->libdir . '/filelib.php');

    $record = $DB->get_record('data_records', array('id' => $recordid));
    $field = $DB->get_record('data_fields', array('id' => $fieldid));

    if ($record && $field) {
        $data_content_id = $DB->get_field('data_content', 'id', ['fieldid' => $field->id, 'recordid' => $record->id]);

        $cm = get_coursemodule_from_instance('data', $record->dataid);
        $context = context_module::instance($cm->id);

        $fs = get_file_storage();

        if ($field->param4 == ALEXANDRIA_COURSE_BACKUP) {
            // Try to get last automated backup file
            $coursefieldid = $DB->get_field('data_fields', 'id', array('name' => $CFG->data_coursefieldid, 'dataid' => $record->dataid));
            $fieldcontentcourse = $DB->get_record('data_content', array('recordid' => $recordid, 'fieldid' => intval($coursefieldid)));
            if (isset($fieldcontentcourse->content)) {
                $contextcourse = context_course::instance($fieldcontentcourse->content, IGNORE_MISSING);

                $automatedbackups = get_config('backup', 'backup_auto_active');
                if (!empty($automatedbackups) && !empty($contextcourse->id)) {
                    $files = $fs->get_area_files($contextcourse->id, 'backup', 'automated', false, 'timecreated');
                    $files = array_reverse($files);
                    foreach ($files as $file) {
                        if (!$file->is_directory()) {
                            return $file;
                        }
                    }
                }
            }

            // Try to get original uploaded file
            if (intval($contextid) == 0) {
                $contextid = $context->id;
            }
            $files = $fs->get_area_files($contextid, 'mod_data', 'content', $data_content_id, 'timecreated DESC');
            foreach ($files as $file) {
                if (!$file->is_directory()) {
                    return $file;
                }
            }
        } else {
            // Get other files
            if (!$content = $DB->get_record('data_content', array('fieldid' => $fieldid, 'recordid' => $recordid))) {
                return null;
            }
            return $fs->get_file($context->id, 'mod_data', 'content', $content->id, '/', $content->content);
        }
    }

    return null;
}

/**
 * @param $courseid
 * @return stored_file|null
 * @throws coding_exception
 */
function alexandria_get_course_file($courseid) {
    global $CFG;
    require_once($CFG->libdir . '/filelib.php');

    if (!$courseid) {
        return null;
    }

    $fs = get_file_storage();
    $context = context_course::instance($courseid, IGNORE_MISSING);

    if ($context) {
        $files = $fs->get_area_files($context->id, 'mod_data', 'content', false, 'timecreated DESC');
        foreach ($files as $file) {
            if (!$file->is_directory()) {
                return $file;
            }
        }
    }

    return null;
}

/**
 * @param $recordid
 * @param $fieldid
 * @return int
 * @throws dml_exception
 */
function alexandria_update_downloadings($recordid, $fieldid) {
    global $DB;

    $record = $DB->get_record('data_content', array('fieldid' => $fieldid, 'recordid' => $recordid));

    $value = $record->content4;
    if (empty($value)) {
        $value = 1;
    } else {
        $value++;
    }

    $record->content3 = time();
    $record->content4 = $value;
    $record->content1 = str_replace("'", "\'", $record->content1);

    $DB->update_record('data_content', $record);

    return $value;
}

/**
 * @param $recordid
 * @param $fieldid
 * @return array
 * @throws coding_exception
 * @throws dml_exception
 */
function alexandria_get_download_info($recordid, $fieldid) {
    global $DB;

    $object = $DB->get_record('data_content', array('fieldid' => $fieldid, 'recordid' => $recordid));

    $values = [];
    $values['total'] = empty($object->content4) ? 0 : $object->content4;
    $values['last'] = empty($object->content3) ? get_string('data_never', 'local_alexandria') : date("d/m/Y, G:i", (int)$object->content3);

    return $values;
}

/**
 * @param $value
 * @param $fieldname
 * @param $template
 * @param $record
 * @param $context
 * @return lang_string|string
 * @throws coding_exception
 * @throws dml_exception
 */
function alexandria_get_replacement($value, $fieldname, $template, $record, $context) {
    global $CFG, $DB;

    switch ($fieldname) {
        case $CFG->data_filefieldid:
            if (!$value && $template == 'singletemplate') {
                return '<div>' . get_string('fileunavailable', 'local_alexandria') . '</div>';
            }
            break;
        case $CFG->data_coursefieldid:
            if ($value && $DB->record_exists('course', array('id' => $value))) {
                return '<a href="' . $CFG->wwwroot . '/course/view.php?id=' . $value . '">' . get_string('show_course', 'local_alexandria') . '</a>';
            }
            // Es desaprova el curss perquè el curs no existeix i així ho pot revisar el revisor
            if ($record->timemodified < time() - 24 * 60 * 60 && !has_capability('mod/data:approve', $context)) {
                $record->approved = 0;
                $record->timemodified = time();
                $DB->update_record('data_records', $record);
            }
            return get_string('nocourse', 'local_alexandria');
            break;
    }

    if (!$value) {
        return '<div class="dataEmptyField"></div>';
    }

    return $value;
}

/**
 * @param $recordid
 * @param $version
 * @throws dml_exception
 */
function alexandria_update_moodle_version($recordid, $version) {
    global $CFG, $DB;

    $oldversion = get_data_field_by_name($CFG->data_moodleversionfieldid, $recordid);

    if (empty($oldversion)) {
        $dataid = $DB->get_field('data_records', 'dataid', array('id' => $recordid));
        $field = $DB->get_record('data_fields', array('dataid' => $dataid, 'name' => $CFG->data_moodleversionfieldid));
        $versionfield = data_get_field($field, $dataid);
        $versionfield->update_content($recordid, $version);
    }
}

/**
 * @return bool|false|mixed|stdClass
 * @throws dml_exception
 */
function alexandria_get_admin() {
    global $DB;

    $admin = $DB->get_record('user', array('username' => 'xtecadmin'));

    if (!$admin) {
        $admin = $DB->get_record('user', array('username' => 'admin'));
    }

    if (!$admin) {
        $admin = $DB->get_record('user', array('id' => 2));
    }

    if ($admin && is_siteadmin($admin)) {
        return $admin;
    }

    return false;
}

/**
 * @param $courseid
 * @param bool $doitnow
 * @throws dml_exception
 * @throws moodle_exception
 */
function alexandria_backup_course($courseid, $doitnow = false) {

    global $CFG, $DB, $USER;

    if ($doitnow && is_xtecadmin()) {

        require_once $CFG->dirroot . '/backup/util/includes/backup_includes.php';
        require_once $CFG->dirroot . '/backup/util/helper/backup_cron_helper.class.php';

        $course = $DB->get_record('course', array('id' => $courseid));
        backup_cron_automated_helper::launch_automated_backup($course, 0, $USER->id);

    } else if (!$DB->get_record(ALEXANDRIA_BACKUPS_TABLENAME, array('course_id' => $courseid))) {

        $backup = new stdClass();
        $backup->course_id = $courseid;
        $DB->insert_record(ALEXANDRIA_BACKUPS_TABLENAME, $backup);

        // Launch event
        $contextcourse = \context_course::instance($courseid);
        $params = [
            'context' => $contextcourse,
            'objectid' => $courseid,
        ];
        $event = \local_alexandria\event\alexandria_backup_db_insert::create($params);
        $event->trigger();

    }

    redirect($CFG->wwwroot . '/course/view.php?id=' . $courseid);
}

/**
 * @param $file
 * @param $recordid
 * @return int
 * @throws dml_exception
 * @throws moodle_exception
 * @throws restore_controller_exception
 */
function alexandria_restore_course($file, $recordid) {
    global $CFG, $USER;

    require_once($CFG->dirroot . '/backup/util/includes/restore_includes.php');

    if (!$file) {
        throw new moodle_exception('filenotfound');
    }

    $useradmin = alexandria_get_admin();

    if ($useradmin) {
        $userid = $useradmin->id;
    } else if (isset($USER->id) && $USER->id != 0) {
        $userid = $USER->id;
    } else {
        print_error('user_not_found');
    }

    $category = alexandria_get_course_category($recordid);
    $fullname = get_data_field_by_name($CFG->data_fullnamefieldid, $recordid);
    $shortname = alexandria_get_course_shortname($category, $recordid);
    $courseid = restore_dbops::create_new_course($fullname, $shortname, $category->id);

    $fs = get_file_storage();
    if (get_class($file) != 'stored_file') {
        $file = $fs->get_file_instance($file);
    }

    $backupid = restore_controller::get_tempdir_name($courseid, $userid);
    $basepath = alexandria_get_basepath($backupid);

    if (!check_dir_exists($basepath, true, true)) {
        throw new moodle_exception('tempnotfound', 'moodle', $basepath);
    }
    if (!$file->extract_to_pathname(get_file_packer('application/vnd.moodle.backup'), $basepath)) {
        throw new moodle_exception('errorunzip');
    }

    $rc = new restore_controller($backupid, $courseid, backup::INTERACTIVE_NO, backup::MODE_GENERAL, $userid, backup::TARGET_NEW_COURSE);

    // Save the moodle version of the backup
    alexandria_update_moodle_version($recordid, $CFG->backup_release);

    alexandria_get_restoresettings($rc);

    // Restore backup into course
    if ($rc->get_status() == backup::STATUS_REQUIRE_CONV) {
        $rc->convert();
    }

    if (!$rc->execute_precheck()) {
        $precheckresults = $rc->get_precheck_results();
        if (is_array($precheckresults) && !empty($precheckresults['errors'])) {
            if (empty($CFG->keeptempdirectoriesonbackup)) {
                fulldelete($basepath);
            }

            $errorinfo = '';

            foreach ($precheckresults['errors'] as $error) {
                $errorinfo .= $error;
            }

            if (array_key_exists('warnings', $precheckresults)) {
                foreach ($precheckresults['warnings'] as $warning) {
                    $errorinfo .= $warning;
                }
            }
            throw new moodle_exception('backupprecheckerrors', 'webservice', '', $errorinfo);
        }
    }
    $rc->execute_plan();
    $rc->destroy();

    if (empty($CFG->keeptempdirectoriesonbackup)) {
        fulldelete($basepath);
    }

    return $courseid;
}

/**
 * @param $rc
 * @param bool $settings_override
 */
function alexandria_get_restoresettings(&$rc, $settings_override = false) {
    $settings = array(
        'activities' => 1,
        'blocks' => 0,
        'filters' => 0,
        'role_assignments' => 0,
        'comments' => 0,
        'logs' => 0,
        'calendarevents' => 0,
        'users' => 0,
        'userscompletion' => 0
    );

    if ($settings_override) {
        foreach ($settings_override as $name => $value) {
            $settings[$name] = $value;
        }
    }

    foreach ($settings as $name => $value) {
        try {
            $setting = $rc->get_plan()->get_setting($name);
            if ($setting->get_status() == backup_setting::NOT_LOCKED) {
                $setting->set_value($value);
            }
        } catch (Exception $e) {
            continue;
        }
    }
}

/**
 * @param bool $backupid
 * @return string
 */
function alexandria_get_basepath($backupid = false) {
    global $CFG;

    $basepath = $CFG->tempdir . '/backup';

    if ($backupid) {
        $basepath .= '/' . $backupid;
    }

    return $basepath;
}

/**
 * @param $recordid
 * @return bool|false|mixed|stdClass
 * @throws dml_exception
 */
function alexandria_get_course_category($recordid) {
    global $CFG, $DB;

    $cat = explode('-', get_data_field_by_name($CFG->data_categoryfieldid, $recordid));
    $category = $DB->get_record('course_categories', array('name' => $cat[1]));

    if (!$category) {
        $category = new stdClass();
        $category->name = $cat[1];
        $category->idnumber = $cat[0];
        $category->visible = 1;
        $category->parent = 0;
        $category->depth = 1;
        $category = core_course_category::create($category);
    }

    return $category;
}

/**
 * @param $category
 * @param $recordid
 * @return string
 * @throws dml_exception
 */
function alexandria_get_course_shortname($category, $recordid) {
    global $CFG, $DB;

    // Find new ccid. Shortnames will have this layout: CC_MMYY_CID_V.S
    // We need to have the greater CID and add one.
    $courseshortnames = $DB->get_records('course', array('category' => $category->id), 'shortname');
    $ccid = 0;

    foreach ($courseshortnames as $courseshortname) {
        $parts = explode('_', $courseshortname->shortname);
        if (isset($parts[2])) {
            $newccid = (int)$parts[2];
            if ($newccid > $ccid) {
                $ccid = $newccid;
            }
        }
    }
    $ccid++;

    return $category->idnumber
        . '_' . date('my', get_data_field_by_name($CFG->data_creationdatefieldid, $recordid))
        . '_' . str_pad($ccid, 3, '0', STR_PAD_LEFT)
        . '_1.0';
}

/**
 * @param $courseid
 * @param $recordid
 * @param bool $updateshortname
 * @throws coding_exception
 * @throws dml_exception
 * @throws moodle_exception
 */
function override_course_values($courseid, $recordid, $updateshortname = true) {
    global $DB, $CFG;

    $category = alexandria_get_course_category($recordid);
    $course = $DB->get_record('course', array('id' => $courseid));
    $course->fullname = get_data_field_by_name($CFG->data_fullnamefieldid, $recordid);

    if ($updateshortname) {
        $course->shortname = alexandria_get_course_shortname($category, $recordid);
    }

    $dataid = $DB->get_field('data_records', 'dataid', array('id' => $recordid));
    $field = $DB->get_record('data_fields', array('dataid' => $dataid, 'name' => $CFG->data_shortnamefieldid));
    $shortname = data_get_field($field, $dataid);
    $shortname->update_content($recordid, $course->shortname);
    $course->summary = get_data_field_by_name($CFG->data_summaryfieldid, $recordid) . '<br/>';

    if ($creator = get_data_field_by_name($CFG->data_creatorfieldid, $recordid)) {
        $course->summary .= '<br/><strong>' . get_string('creatorfield', 'local_alexandria') . ': </strong>' . $creator;
    }

    if ($license = get_data_field_by_name($CFG->data_licensefieldid, $recordid)) {
        $course->summary .= '<br/><strong>' . get_string('licensefield', 'local_alexandria') . ': </strong>' . $license;
    }

    $course->category = $category->id;
    $course->coursedisplay = 0;
    $course->legacyfiles = 1;

    update_course($course);
}

/**
 * @param $name
 * @param $recordid
 * @return bool|mixed
 * @throws dml_exception
 */
function get_data_field_by_name($name, $recordid) {
    global $DB;

    $dataid = $DB->get_field('data_records', 'dataid', array('id' => $recordid));
    $fieldid = $DB->get_field('data_fields', 'id', array('dataid' => $dataid, 'name' => $name));

    return $DB->get_field('data_content', 'content', array('fieldid' => $fieldid, 'recordid' => $recordid));
}

/**
 * @param $filename
 * @param $summary
 * @param $maxfilesize
 * @return stdClass
 * @throws dml_exception
 */
function alexandria_create_scorm_object($filename, $summary, $maxfilesize) {
    global $CFG, $DB;

    require_once($CFG->dirroot . '/mod/scorm/lib.php');
    require_once($CFG->dirroot . '/course/lib.php');

    $module_scorm_id = $DB->get_field('modules', 'id', array('name' => 'scorm'));
    $courseid = $DB->get_field('course', 'id', array('idnumber' => 'scorm'));

    if (!$courseid) {
        $courseid = SITEID;
    }

    $scorm_object = new stdClass();
    $scorm_object->MAX_FILE_SIZE = $maxfilesize;
    $scorm_object->name = $filename;
    $scorm_object->summary = $summary;
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
    $scorm_object->course = $courseid;
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
    $scorm_object->intro = $scorm_object->summary;

    return $scorm_object;
}

/**
 * Get an string that describes which type is the database with the given fields.
 *
 * @param array $fields Field records of the database
 * @return string         Type of the database.
 */
function get_alexandria_database_type($fields) {
    $field = get_alexandria_file_field($fields);

    if ($field) {
        switch ($field->param4) {
            case ALEXANDRIA_SCORM:
                return 'scorm';
            case ALEXANDRIA_PDI:
            case ALEXANDRIA_PDI_PDF:
                return 'pdi';
            case ALEXANDRIA_COURSE_BACKUP:
                return 'course';
        }
    }

    return 'none';
}

/**
 * Get the field that contains the file in the database.
 *
 * @param array $fields Field records of the database
 * @return object         Field that describes and contains the file.
 */
function get_alexandria_file_field($fields) {
    foreach ($fields as $field) {
        if ($field->type == 'file' && !empty($field->param4)) {
            switch ($field->param4) {
                case ALEXANDRIA_SCORM:
                case ALEXANDRIA_PDI:
                case ALEXANDRIA_PDI_PDF:
                case ALEXANDRIA_COURSE_BACKUP:
                    return $field;
            }
        }
    }

    return false;
}

/**
 * Get the filename save on the database record.
 *
 * @param int $fieldid Field that describes and contains the file.
 * @param int $recordid Record to get the filename.
 * @return string|false    Filename or false if no file.
 * @throws coding_exception
 * @throws dml_exception
 */
function get_alexandria_filename($fieldid, $recordid) {
    global $DB;

    if (alexandria_get_file($recordid, $fieldid)) {
        return $DB->get_field('data_content', 'content', array('fieldid' => $fieldid, 'recordid' => $recordid));
    }

    return false;
}
