<?php

require_once('agora_script_base.class.php');

class script_alexandria_change_motor extends agora_script_base{

	public $title = 'Change motor in Alexandria';
	public $info = "Convert all tables in DB from MyISAM to INNODB";
	public $cron = true;
	protected $test = true;

	protected function _execute($params = array(), $execute = true) {
		global $CFG, $DB, $OUTPUT;
		$db = $CFG->dbname;
		$from = 'MyISAM';
		$to = 'InnoDB';
		$error = false;

		$tables_query = "SELECT TABLE_NAME, ENGINE FROM information_schema.TABLES WHERE TABLE_SCHEMA = '$db'";
		$result = $DB->get_records_sql($tables_query);

		$count = 0;
		$altersql = "";
		foreach ($result as $row) {
			$sql = "ALTER TABLE {$row->table_name} ENGINE = $to";
			if ($row->engine != $to) {
				$count++;
				if ($execute) {
					$success = $DB->execute($sql);
					$table_query = "SELECT TABLE_NAME, ENGINE FROM information_schema.TABLES WHERE TABLE_SCHEMA = '$db' AND TABLE_NAME = '{$row->table_name}'";
					$success = $DB->get_record_sql($table_query);
					if ($success->engine == $to) {
						echo $OUTPUT->notification("{$row->table_name} - success", "notifysuccess");
					} else {
						echo $OUTPUT->notification("{$row->table_name} - failed");
				    }
				} else {
					$altersql .= $sql."\n";
				}
			} else {
				echo $OUTPUT->notification("{$row->table_name} - in $to yet", "notifysuccess");
			}
		}
		if (!empty($altersql)) {
			echo '<pre>'.$altersql.'</pre>';
		} else if (!$count) {
			echo $OUTPUT->notification('No tables in '.$from.' were found', "notifysuccess");
		}

		return !$error;
	}
}
