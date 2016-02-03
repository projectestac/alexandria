<?php

require_once('agora_script_base.class.php');

class script_alexandria_upgrade_scorms extends agora_script_base {

	public $title = 'Upgrade scorm courses';
	public $info = "Change course for scorms in database";
	public $cron = true;
	protected $test = true;
	protected $category = "Alexandria";

	protected function _execute($params = array(), $execute = true) {
		global $CFG, $DB;

		require_once($CFG->dirroot.'/mod/scorm/lib.php');
		require_once($CFG->dirroot.'/local/alexandria/data/datalib.php');
		require_once($CFG->dirroot.'/course/lib.php');

		$courseid = $DB->get_field('course', 'id', array('idnumber' => 'scorm'));
    	if ($courseid) {
    		mtrace('Found courseid '.$courseid, "<br>");
			$file_fields = $DB->get_records('data_fields', array('type' => 'file'));
			$file_field = false;
			foreach ($file_fields as $file_field_aux) {
				if ($file_field_aux->param4 == ALEXANDRIA_SCORM) {
					$file_field = $file_field_aux;
					break;
				}
			}
			mtrace('Found fieldid '.$file_field->id, "<br>");
			if ($file_field) {
				$module_scorm_id = $DB->get_field('modules', 'id', array('name'=>'scorm'));
				$fs = get_file_storage();

				$scorms = $DB->get_records('data_content', array('fieldid' => $file_field->id));
				foreach ($scorms as $scorm) {
					$scormid = $scorm->content2;
					$cm = $DB->get_record('course_modules', array('module' => $module_scorm_id, 'instance' => $scormid));
					mtrace('Found scorm '.$scormid.' on course '.$cm->course, "<br>");
					if ($cm->course != $courseid) {
						print_object($scorm);
						$scorm_object = alexandria_create_scorm_object($scorm->content, $file_field->name, $file_field->param3);
						if ($execute) {
					    	$cmid = add_course_module($scorm_object);
				        	$scorm_object->coursemodule = $cmid;
			            	$sectionid = course_add_cm_to_section($courseid, $cmid, 1);

							// Delete old scorm
							$scormcontext = context_module::instance($cmid);
		            		$oldscormcontext = context_module::instance($cm->id);
		            		if (!empty($oldscormcontext)) {
								$fs->move_area_files_to_new_context($oldscormcontext->id, $scormcontext->id, 'mod_scorm', 'package');
								$fs->move_area_files_to_new_context($oldscormcontext->id, $scormcontext->id, 'mod_scorm', 'content');
							}
							$scorm_object->reference = $scorm->content;
					        $scorm_id = scorm_add_instance($scorm_object);

	        				$DB->set_field('course_modules', 'instance', $scorm_id, array('id' => $cmid));
	        				$DB->set_field('data_content', 'content2', $scorm_id, array('id'=> $scorm->id));
	        				try {
	        					course_delete_module($cm->id);
	        				} catch (Exception $e) {
	        					mtrace('Cannot delete module', "<br>");
	        				}
        				}
				    }
				}
			}
		}
		return true;
	}
}
