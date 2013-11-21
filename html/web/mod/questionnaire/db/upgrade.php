<?php //$Id$

function xmldb_questionnaire_upgrade($oldversion) {
    global $CFG, $DB;

    $dbman = $DB->get_manager(); /// loads ddl manager and xmldb classes

    $result = true;

    // v2.2.0 release upgrade line
    if ($oldversion < 2010110101) {
        cli_error('Version of questionnaire must be upgraded to latest version of 2.2 before upgrading to 2.3.');
    }

    // v2.3.0 release upgrade line
    if ($oldversion < 2012100800) {
        // Changing precision of field name on table questionnaire_survey to (255).

        // First drop the index.
        //XTEC ************ AFEGIT - To avoid questionnaire_survey->name ddldependencyerror
        //2012.12.27  @sarjona
        try{
        //************ FI
            $table = new xmldb_table('questionnaire_survey');
            $index = new xmldb_index('name');
            $index->set_attributes(XMLDB_INDEX_NOTUNIQUE, array('name'));
            $dbman->drop_index($table, $index);

        // Launch change of precision for field name.
        $field = new xmldb_field('name', XMLDB_TYPE_CHAR, '255', null, XMLDB_NOTNULL, null, null, 'id');
        $dbman->change_field_precision($table, $field);

        // Add back in the index.
        $table = new xmldb_table('questionnaire_survey');
        $index = new xmldb_index('name');
        $index->set_attributes(XMLDB_INDEX_NOTUNIQUE, array('name'));
        $dbman->add_index($table, $index);
        //XTEC ************ AFEGIT - To avoid questionnaire_survey->name ddldependencyerror
        //2012.12.27  @sarjona
        } catch (Exception $e){
            
        }
        //************ FI

        // questionnaire savepoint reached
        upgrade_mod_savepoint(true, 2012100800, 'questionnaire');
    }
    //XTEC ************* AFEGIT - Change summary field to intro, and add introformat field
    //2013.11.21 @mespinosa
    if ($oldversion < 2013112102) {
	$questionnaire = new xmldb_table('questionnaire');
        $summary = new xmldb_field('summary');
	$intro = new xmldb_field('intro');
	$introformat = new xmldb_field('introformat');
	if (!$dbman->field_exists($questionnaire,$intro) && $dbman->field_exists($questionnaire,$summary)) {
		$summary->set_attributes(XMLDB_TYPE_TEXT, 'small', null, XMLDB_NOTNULL, null, null, null, null, 'name');
		$dbman->rename_field($questionnaire,$summary,'intro');
	}
	if (!$dbman->field_exists($questionnaire,$introformat)) {
		$introformat->set_attributes(XMLDB_TYPE_INTEGER, '4', XMLDB_UNSIGNED, XMLDB_NOTNULL, null, 1, 'intro'); 
		$dbman->add_field($questionnaire,$introformat);
	}
    }
    //************ FI
    return $result;
}
