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

    if ($oldversion < 2014031300) {
    	require_once($CFG->dirroot.'/local/alexandria/data/datalib.php');
    	$file_fields = $DB->get_records('data_fields', array('type'=>'file'));
    	foreach($file_fields as $file_field) {
    		if(!empty($file_field->param4)){
				$file_field->param4 = ALEXANDRIA_PDI_PDF;
				$file_field->param5 = '';
				$DB->update_record('data_fields',$file_field);
    		} else if(!empty($file_field->param5)){
    			$file_field->param4 = ALEXANDRIA_SCORM;
				$file_field->param5 = '';
				$DB->update_record('data_fields',$file_field);
    		}
    	}

		upgrade_plugin_savepoint(true, 2014031300, 'local', 'alexandria');
    }

    if ($oldversion < 2015110200) {
        $table = new xmldb_table('course');

        $field = new xmldb_field('navigationbar');
        if ($dbman->field_exists($table, $field)) {
            $dbman->drop_field($table, $field);
        }

        $field = new xmldb_field('gradesonnav');
        if ($dbman->field_exists($table, $field)) {
            $dbman->drop_field($table, $field);
        }

        $field = new xmldb_field('showblocks');
        if ($dbman->field_exists($table, $field)) {
            $dbman->drop_field($table, $field);
        }

        $field = new xmldb_field('topicsonnav');
        if ($dbman->field_exists($table, $field)) {
            $dbman->drop_field($table, $field);
        }

        $field = new xmldb_field('topicslistonnav');
        if ($dbman->field_exists($table, $field)) {
            $dbman->drop_field($table, $field);
        }

        // Alexandria savepoint reached.
        upgrade_plugin_savepoint(true, 2015110200, 'local', 'alexandria');
    }

    if ($oldversion < 2016091900) {
        $result = enable_alexandria_webservices();
        if (!$result) {
            return false;
        }

        // Alexandria savepoint reached.
        upgrade_plugin_savepoint(true, 2016091900, 'local', 'alexandria');
    }

    return true;
}

/**
 * Enables and configures alexandria webservices.
 * @return boolean success
 */
function enable_alexandria_webservices() {
    global $DB, $CFG, $USER, $OUTPUT;

    $servicename = 'alexandria';
    $systemcontext = context_system::instance();

    require_once($CFG->dirroot . '/webservice/lib.php');

    // Enable web service system if necessary.
    set_config('enablewebservices', true);

    // Enable alexandria service.
    $webservicemanager = new webservice();
    $service = $webservicemanager->get_external_service_by_shortname($servicename);
    if (!$service) {
        // Force install service.
        external_update_descriptions('local_alexandria');
        $service = $webservicemanager->get_external_service_by_shortname($servicename);
        if (!$service) {
            echo $OUTPUT->notification('Alexandria services not found', 'error');
            return false;
        } else {
            echo $OUTPUT->notification('Creation of alexandria services forced. ID: '.$service->id, 'success');
        }
    } else {
        echo $OUTPUT->notification('Found alexandria services. ID: '.$service->id, 'success');
    }

    $service->enabled = 1;
    $webservicemanager->update_external_service($service);

    // Enable REST server.
    $activeprotocols = empty($CFG->webserviceprotocols) ? array() : explode(',', $CFG->webserviceprotocols);
    if (!in_array('rest', $activeprotocols)) {
        $activeprotocols[] = 'rest';
        set_config('webserviceprotocols', implode(',', $activeprotocols));
        echo $OUTPUT->notification('Rest WS protocol enabled', 'success');
    }

    $role = $DB->get_record('role', array('shortname' => 'wsalexandria'));
    if (!$role) {
        $roleid = create_role('wsalexandria', 'wsalexandria', 'Role created to user alexandria db', null);
        set_role_contextlevels($roleid, array(CONTEXT_SYSTEM));

        $systemcontext->mark_dirty();
        echo $OUTPUT->notification('Created role wsalexandria', 'success');
    } else {
        $roleid = $role->id;
        echo $OUTPUT->notification('Role wsalexandria found', 'success');
    }

    assign_capability('webservice/rest:use', CAP_ALLOW, $roleid, $systemcontext->id, true);
    echo $OUTPUT->notification('Role capabilities assigned', 'success');

    $user = $DB->get_record('user',  array('username' => 'wsalexandria'));
    if (!$user) {
        $user = create_user_record('wsalexandria', '*', 'none');
        $user->firstname = 'Webservice';
        $user->lastname = 'Alexandria';
        $user->email = 'wsalexandria@invalid.invalid';
        $DB->update_record('user',  $user);
        echo $OUTPUT->notification('Created user wsalexandria with userid '.$user->id, 'success');
    } else {
        echo $OUTPUT->notification('User wsalexandria found with userid '.$user->id, 'success');
    }

    role_assign($roleid, $user->id, $systemcontext->id);

    // Create the token if it doesn't exists.
    $token = $DB->get_record('external_tokens',
            array('userid' => $user->id, 'externalserviceid' => $service->id, 'tokentype' => EXTERNAL_TOKEN_PERMANENT));

    if ($USER->id) {
        $creatorid = $USER->id;
    } else {
        // Get the main admin.
        $adminsaux = explode(',', $CFG->siteadmins);
        $creatorid = array_shift($adminsaux);
    }
    if (!$token) {
        $newtoken = new stdClass();
        $newtoken->token = md5(uniqid(rand(), 1));
        $newtoken->tokentype = EXTERNAL_TOKEN_PERMANENT;
        $newtoken->userid = $user->id;
        $newtoken->externalserviceid = $service->id;
        $newtoken->contextid = $systemcontext->id;
        $newtoken->validuntil = 0;
        $newtoken->creatorid = $creatorid;
        $newtoken->timecreated = time();

        $DB->insert_record('external_tokens', $newtoken);
        echo $OUTPUT->notification('Created token '.$newtoken->token, 'success');
    } else {
        echo $OUTPUT->notification('Token found '.$token->token, 'success');
    }

    return true;
}