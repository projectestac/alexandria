<?php

include("../../config.php");

if (empty($_GET["op"])) exit;

switch($_GET["op"]) {
	case "cursos_orfes":
		$courses = $DB->get_records('course');

		$notfound = array();


		foreach($courses as $course) {
			if (!$DB->record_exists_select('data_content', "fieldid=:fieldid AND ".$DB->sql_compare_text('content', textlib::strlen($course->id)).'=:courseid',array('courseid'=>$course->id, 'fieldid'=>27))) 
				$notfound[] = $course->id;
		}

		print_object($notfound);
		break;
}

