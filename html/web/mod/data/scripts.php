<?php

include("../../config.php");


if (empty($_GET["op"])) exit;


switch($_GET["op"]) {
	case "llistar_cursos_orfes":
		print_object(get_orphan_courses());
		break;
	case "borrar_cursos_orfes":
		$courses = get_orphan_courses();		
		print_object($courses);
		foreach($courses as $courseid) {
			delete_course($courseid);
		}
		break;
}
exit;
function get_orphan_courses() {
	global $DB;
	$courses = $DB->get_records('course');
        $notfound = array();
        foreach($courses as $course) {
		if ($course->id == 1) continue;
		if (!$DB->record_exists_select('data_content', "fieldid=:fieldid AND ".$DB->sql_compare_text('content', textlib::strlen($course->id)).'=:courseid',array('courseid'=>$course->id, 'fieldid'=>27)))
			$notfound[] = $course->id;
	}
	return $notfound;
}
