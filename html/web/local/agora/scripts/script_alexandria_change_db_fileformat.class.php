<?php

require_once('agora_script_base.class.php');

class script_alexandria_change_db_fileformat extends agora_script_base{

	public $title = 'Change DB fileformat in Alexandria';
	public $info = "Convert all tables in DB from Antelope to Barracuda file format";
	public $cron = false;
	protected $test = true;
	protected $category = "Alexandria";

	protected function _execute($params = array(), $execute = true) {
		global $DB, $CFG;
		$generator = $DB->get_manager()->generator;

		$info = $DB->get_server_info();
		$filepertable = $DB->get_record_sql("SHOW VARIABLES LIKE 'innodb_file_per_table'");
		$filepertable = $filepertable ? $filepertable->value : '';
		$fileformat = $DB->get_record_sql("SHOW VARIABLES LIKE 'innodb_file_format'");
		$fileformat = $fileformat ? $fileformat->value : '';
		$prefix = $DB->get_prefix();
		$database = $CFG->dbname;

		self::notify("Database version:      " . $info['description']);
    	self::notify("Database name:         $database");
	    self::notify("Database engine:       " . $DB->get_dbengine());
	    self::notify("innodb_file_per_table: $filepertable");
	    self::notify("innodb_file_format:    $fileformat");

		$fixtables = array();
	    foreach ($DB->get_tables(false) as $table) {
	        $columns = $DB->get_columns($table, false);
	        $size = $generator->guess_antolope_row_size($columns);
	        $format = $DB->get_row_format($table);
	        if ($size <= $generator::ANTELOPE_MAX_ROW_SIZE) {
	            continue;
	        }
	        if ($format === 'Compact' or $format === 'Redundant') {
	            $fixtables[$table] = $format;
	        }
	    }

	    if (!$fixtables) {
	        self::notify("No changes necessary", 'OK');
	        return true;
	    }

	    if ($execute) {
	    	if ($filepertable !== 'ON') {
		        try {
		            $DB->execute("SET GLOBAL innodb_file_per_table=1");
		        } catch (dml_exception $e) {
		            self::notify("Cannot enable GLOBAL innodb_file_per_table setting, use --showsql option and execute the statements manually.", 'ERROR');
		            return false;
		        }
		    }

		    if ($fileformat !== 'Barracuda') {
		        try {
		            $DB->execute("SET GLOBAL innodb_file_format=Barracuda");
		        } catch (dml_exception $e) {
		            self::notify("Cannot change GLOBAL innodb_file_format setting, use --showsql option and execute the statements manually.", 'ERROR');
		            return false;
		        }
		    }

		    if (!$DB->is_compressed_row_format_supported(false)) {
		        self::notify("MySQL server is not compatible with compressed row format.", 'OK');
		        return true;
		    }
	    } else {
	    	self::notify("USE $database;", 'INFO');
		    self::notify("SET SESSION sql_mode=STRICT_ALL_TABLES;", 'INFO');
		    self::notify("SET GLOBAL innodb_file_per_table=1;", 'INFO');
		    self::notify("SET GLOBAL innodb_file_format=Barracuda;", 'INFO');
	    }


		foreach ($fixtables as $table => $format) {
			$text = str_pad($prefix . $table, 32, ' ', STR_PAD_RIGHT);
        	$text .= str_pad($format, 11, ' ', STR_PAD_RIGHT);
        	if ($execute) {
        		$DB->change_database_structure("ALTER TABLE {$prefix}$table ROW_FORMAT=Compressed");
        		$text .= " ... Compressed";
        		self::notify($text, 'OK');
        	} else {
        		$text .= " (needs fixing)";
	        	self::notify($text, 'ERROR');
	        	self::notify("ALTER TABLE {$prefix}$table ROW_FORMAT=Compressed;", 'INFO');
	        }
        }

		return $execute;
	}

	function is_visible() {
		global $DB;
		if ($DB->get_dbfamily() !== 'mysql') {
			return false;
		}

		$engine = strtolower($DB->get_dbengine());
		if ($engine !== 'innodb' and $engine !== 'xtradb') {
		    return false;
		}

		return true;
	}
}
