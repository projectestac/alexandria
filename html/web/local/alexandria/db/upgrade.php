<?php

// This file keeps track of upgrades to
// the choice module
//
// Sometimes, changes between versions involve
// alterations to database structures and other
// major things that may break installations.
//
// The upgrade function in this file will attempt
// to perform all the necessary actions to upgrade
// your older installation to the current version.
//
// If there's something it cannot do itself, it
// will tell you what you need to do.
//
// The commands in here will all be database-neutral,
// using the methods of database_manager class
//
// Please do not forget to use upgrade_set_timeout()
// before any action that may take longer time to finish.

function xmldb_local_alexandria_upgrade($oldversion) {
    global $CFG, $DB;

    $dbman = $DB->get_manager();

    if ($oldversion < 2014022400) {
    	$dataconfigs = array(
			'data_categoryfieldid',
			'data_coursefieldid',
			'data_creationdatefieldid',
			'data_creatorfieldid',
			'data_filefieldid',
			'data_fullnamefieldid',
			'data_licensefieldid',
			'data_shortnamefieldid',
			'data_summaryfieldid',
			'data_urlfieldid',
	    );
	    foreach($dataconfigs as $config) {
			if (!empty($CFG->$config) && is_numeric($CFG->$config)) {
				$fieldname = $DB->get_field('data_fields','name',array('id' => $CFG->$config));
				set_config($config,$fieldname);
			}
	    }
    	if($dbman->table_exists('block_download_course')){
			$sql = "SELECT dc.id,
			IFNULL((
				    SELECT downloading FROM {block_download_course} bdc
			    	WHERE bdc.course IN (
			            	SELECT content FROM {data_content} dc2
				            WHERE dc2.fieldid IN (
			    	                SELECT id FROM {data_fields} df
			            	        WHERE df.name =  '".$CFG->data_coursefieldid."'
				            ) AND dc2.recordid = dc.recordid
			    	)
			),0) as downloads
			FROM {data_content} dc
			WHERE dc.fieldid IN (
			    	SELECT df.id FROM {data_fields} df
				    WHERE df.name =  '".$CFG->data_filefieldid."'
			) AND dc.recordid IN (
			    	SELECT id FROM {data_records} dr
			    	WHERE dr.dataid = 2
			)";

			$records = $DB->get_records_sql($sql);
			foreach($records as $record) {
				$content = $DB->get_record('data_content',array('id' => $record->id));
				$content->content4 = $record->id;
				$DB->update_record('data_content',$content);
			}
		}

    	$table = new xmldb_table('data_abuse_reports');
		$field = new xmldb_field('id');
	        $field->set_attributes(XMLDB_TYPE_INTEGER, '10', XMLDB_UNSIGNED, XMLDB_NOTNULL, XMLDB_SEQUENCE, null, null, null);
		$table->addField($field);

		$field = new xmldb_field('recordid');
	        $field->set_attributes(XMLDB_TYPE_INTEGER, '10', XMLDB_UNSIGNED, XMLDB_NOTNULL, null, null, null, '0');
		$table->addField($field);

		$field = new xmldb_field('abusetopic');
	        $field->set_attributes(XMLDB_TYPE_CHAR, '20', null, XMLDB_NOTNULL, null, null, null, null);
		$table->addField($field);

		$field = new xmldb_field('report_author');
	        $field->set_attributes(XMLDB_TYPE_INTEGER, '10', XMLDB_UNSIGNED, XMLDB_NOTNULL, null, null, null, '0');
		$table->addField($field);

		$field = new xmldb_field('abusedescription');
	        $field->set_attributes(XMLDB_TYPE_TEXT, 'big', null, XMLDB_NOTNULL, null, null, null, null);
		$table->addField($field);

		$field = new xmldb_field('created');
	        $field->set_attributes(XMLDB_TYPE_INTEGER, '10', XMLDB_UNSIGNED, XMLDB_NOTNULL, null, null, null, '0');
		$table->addField($field);

		$table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'), null, null);
		$table->add_key('report_author', XMLDB_KEY_FOREIGN, array('report_author'), 'user', array('id'));

	    $result = $DB->get_manager()->create_table($table);

		upgrade_plugin_savepoint(true, 2014022400, 'local', 'alexandria');
    }

    return true;
}


