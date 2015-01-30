<?php

require_once('agora_script_base.class.php');

class script_alexandria_orphan_courses extends agora_script_base{

	public $title = 'Get orphan courses';
	public $info = "Get the list of courses that are not related to database activity";
	public $cron = false;
	protected $test = false;

	protected function _execute($params = array(), $execute = true) {
		global $DB, $CFG;
		$courses = $DB->get_records('course');
		$found = false;
        foreach($courses as $course) {
			if ($course->id == 1) {
				continue;
			}
			echo '<ul>';
			if (!$DB->record_exists_select('data_content', "fieldid=:fieldid AND ".$DB->sql_compare_text('content', textlib::strlen($course->id)).'=:courseid',array('courseid'=>$course->id, 'fieldid'=>27))) {
				echo '<li><a href="'.$CFG->wwwroot.'/course/view.php?id='.$course->id.'">'.$course->id.': '.$course->fullname.'</a></li>';
				$found = true;
			}
			echo '</ul>';
		}
		return !$found;
	}
}
