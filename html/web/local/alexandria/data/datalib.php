<?php
//Functions to report an abuse of the content and show downloads
function data_abuse_report_button($recordid){
	global $CFG;
	$content = '<a href="'.$CFG->wwwroot.'/local/alexandria/data/report_abuse.php?recordid='.$recordid.'">'.
	get_string('reportabuse','local_alexandria').'</a>';
	return $content;
}

function data_display_downloads($data, $record){
    global $CFG,$DB;
    return (int)$DB->get_field('data_content', 'MAX(content4)', array('recordid' => $record->id));
}

function data_download_file($file){
	$content = $file->get_content();
    @header("Pragma: public"); // required
    @header("Expires: 0");
    @header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    @header("Cache-Control: private",false); // required for certain browsers
    @header("Content-Type: application/x-forcedownload");
    @header("Content-Transfer-Encoding: binary");
    @header("Content-Disposition: attachment; filename=\"".basename($file->get_filename())."\";" );
    @header("Content-Length: ".strlen($content));
    echo $content;
}

function download_info($fieldid, $recordid){
         global $DB;
         $object = $DB->get_record('data_content', array('fieldid' => $fieldid, 'recordid'=> $recordid));

         if (empty($object->content4)){
             $values = array ("last" => get_string('data_never','local_alexandria'),
                                  "total" => "0" );
         }else{
             $values = array ("last" => date("d/m/Y, G:i" ,(int)$object->content3),
                                  "total" => $object->content4);
	     if (empty($object->content3))
		$values["last"] = "-";
         }
         return $values;
}

function data_update_downloadings($fieldid, $recordid){
        global $DB;

        $record = $DB->get_record('data_content', array('fieldid' => $fieldid, 'recordid' => $recordid));
        $actual_value = $record->content4;
        if ($actual_value == '') { $value = 1;
        }else{ $value = $actual_value + 1;}

        $record->content3 = time();
        $record->content4 = $value;
        $record->content1 = str_replace("'", "\'", $record->content1);
        $DB->update_record('data_content', $record);
        return $value;
}


//Restore course functions
//2013.11.05 - Marc Espinosa Zamora <marc.espinosa.zamora@upcnet.es>
function restore_backup_file($file,$courseid = NULL) {
	global $CFG,$DB;
	$folder = $CFG->dataroot . '/temp/backup/alexandria/';
	create_backup_folder('alexandria');
	if (!$courseid) {
		if (!$category = $DB->get_record('course_categories',array('name' =>'Default hidden category'))) {
			$category = new stdClass();
			$category->name = 'Default hidden category';
			$category->visible = $category->visibleold = 0;
			$category = create_course_category($category);
		}
		$course = new stdClass();
		$course->fullname = '';
		$course->shortname = '';
		$course->category = $category->id;
		$course = create_course($course);
		$courseid = $course->id;
	        //$courseid = restore_dbops::create_new_course( '', '', $category->id);
	}
    $filename = $folder.'course-backup-'.$courseid.'.mbz';
    $file->copy_content_to($filename);
    $folder .= $courseid;
    mkdir($folder);
    $zip = new ZipArchive;
    $res = $zip->open($filename);
    if ($res === TRUE) {
		$zip->extractTo($folder);
        $zip->close();
        $controller = new restore_controller('alexandria/'.$courseid, $courseid,
            backup::INTERACTIVE_NO, backup::MODE_GENERAL,
	        $DB->get_field('user','id',array('username' => $CFG->admin)),
        	backup::TARGET_NEW_COURSE);
		if ($controller->get_status() == backup::STATUS_REQUIRE_CONV) {
    	    $controller->convert();
        }
    	if ($controller->get_status() == backup::STATUS_SETTING_UI) {
            $controller->finish_ui();
    	}
            $controller->execute_precheck();
            $controller->execute_plan();
    }
    unlink($filename);
	return $courseid;
}

function create_backup_folder($dirname) {
	global $CFG;
	$folder = $CFG->dataroot . '/temp';
	if (!file_exists($folder))
		mkdir($folder);
	$folder .= '/backup';
	if (!file_exists($folder))
                mkdir($folder);
	$folder .= '/'.$dirname;
	if (!file_exists($folder))
                mkdir($folder);
}

function override_course_values($courseid, $recordid, $updateshortname = true) {
	global $DB,$CFG;
	$ccid = 1;
	$cat = explode('-',get_data_field_by_name($CFG->data_categoryfieldid,$recordid));
	$category = $DB->get_record('course_categories',array('name' => $cat[1]));
	if (!$category) {
		$category = new stdClass();
		$category->name = $cat[1];
		$category->idnumber = $cat[0];
		$category->visible = 1;
		$category->parent = 0;
		$category->depth = 1;
		$category = create_course_category($category);
	}
	$course = $DB->get_record('course', array('id' => $courseid));
        $course->fullname = get_data_field_by_name($CFG->data_fullnamefieldid,$recordid);
	if ($updateshortname) {
		$ccid = $DB->get_field_sql('SELECT IFNULL(MAX(
			IFNULL(CAST(
				REPLACE(
					SUBSTRING(
						SUBSTRING_INDEX(shortname, \'_\', 3),
						LENGTH(
							SUBSTRING_INDEX(shortname, \'_\', 3 - 1)
						)+1
					), \'_\', \'\')
				 AS UNSIGNED
			),0)
		),0)+1 FROM mdl_course WHERE category = '.$category->id);
		$course->shortname = $cat[0]
			.'_'.date('my',get_data_field_by_name($CFG->data_creationdatefieldid,$recordid))
			.'_'.str_pad($ccid,3,'0',STR_PAD_LEFT)
			.'_1.0';
	}
	$dataid = $DB->get_field('data_records','dataid',array('id' => $recordid));
	$field = $DB->get_record('data_fields',array('dataid' => $dataid, 'name' => $CFG->data_shortnamefieldid));
	$shortname = data_get_field($field,$dataid);
	$shortname->update_content($recordid,$course->shortname);
	$course->summary = get_data_field_by_name($CFG->data_summaryfieldid,$recordid).'<br/>';
	if ($creator = get_data_field_by_name($CFG->data_creatorfieldid,$recordid))
		$course->summary .= '<br/><strong>'.get_string('creatorfield','mod_data').': </strong>'.$creator;
	if ($license = get_data_field_by_name($CFG->data_licensefieldid,$recordid))
                $course->summary .= '<br/><strong>'.get_string('licensefield','mod_data').': </strong>'.$license;

	$course->category = $category->id;
	$course->coursedisplay = 0;
	$course->legacyfiles = 1;
	update_course($course);
}

function get_data_field_by_name($name,$recordid) {
	global $DB;
	$dataid = $DB->get_field('data_records','dataid',array('id' => $recordid));
	$fieldid = $DB->get_field('data_fields','id',array('dataid' => $dataid, 'name' => $name));
	return $DB->get_field('data_content','content',array('fieldid' => $fieldid, 'recordid' => $recordid));
}

function sort_datarecord_files_last($a,$b) {
	$a = explode('_',$a->name);
	$a = end($a);

	$b = explode('_',$b->name);
	$b = end($b);

	if ($a == 'file' && $b == 'file') return 0;
	if ($a == 'file') return 1;
	if ($b == 'file') return -1;
	return 0;
}
