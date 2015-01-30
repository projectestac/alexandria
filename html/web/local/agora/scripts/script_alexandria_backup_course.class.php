<?php

require_once('agora_script_base.class.php');

class script_alexandria_backup_course extends agora_script_base{

	public $title = 'Backup course in alexandria';
	public $info = "Backup a course as is done in scheduled backups";
	public $cron = false;
	protected $test = false;


	public function params() {
		$params = array();
		$params['courseid'] = optional_param('courseid', false, PARAM_INT);
		return $params;
	}

	protected function _execute($params = array(), $execute = true) {
		global $CFG, $DB;
		if (!empty($params['courseid']) && $params['courseid'] != 1 && $DB->record_exists('course', array('id' => $params['courseid']))) {
			if (!$DB->record_exists('backup_courses', array('courseid' => $params['courseid']))) {
				$backup = new stdclass();
	        	$backup->courseid = $params['courseid'];
	        	$backup->nextstarttime = time();
	        	$DB->insert_record('backup_courses', $backup);
        	}
        	require_once($CFG->dirroot.'/lib/cronlib.php');
        	require_once($CFG->dirroot.'/backup/util/includes/backup_includes.php');
		    require_once($CFG->dirroot.'/backup/util/helper/backup_cron_helper.class.php');
		    backup_cron_automated_helper::run_automated_backup();
        }
        return false;
	}
}
