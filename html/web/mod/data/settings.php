<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    if (empty($CFG->enablerssfeeds)) {
        $options = array(0 => get_string('rssglobaldisabled', 'admin'));
        $str = get_string('configenablerssfeeds', 'data').'<br />'.get_string('configenablerssfeedsdisabled2', 'admin');

    } else {
        $options = array(0=>get_string('no'), 1=>get_string('yes'));
        $str = get_string('configenablerssfeeds', 'data');
    }
    $settings->add(new admin_setting_configselect('data_enablerssfeeds', get_string('enablerssfeeds', 'admin'),
                       $str, 0, $options));
}

//XTEC - ALEXANDRIA ************ AFEGIT - Configuration params (file field id...)
//2010.08.31
//2013.11.05 - Marc Espinosa Zamora <marc.espinosa.zamora@upcnet.es>
$settings->add(new admin_setting_configtext('data_coursesdataid', get_string('coursesdataid', 'data'),
                   get_string('configcoursesdataid', 'data'), 1, PARAM_TEXT));
$settings->add(new admin_setting_configtext('data_filefieldid', get_string('filefieldid', 'data'),
                   get_string('configfilefieldid', 'data'), 'Fitxer', PARAM_TEXT));
$settings->add(new admin_setting_configtext('data_coursefieldid', get_string('coursefieldid', 'data'),
                   get_string('coursefieldid', 'data'), 'courseid', PARAM_TEXT));

$settings->add(new admin_setting_configtext('data_fullnamefieldid', get_string('fullnamefieldid', 'data'),
                   get_string('configfullnamefieldid', 'data'), 'Nom', PARAM_TEXT));

$settings->add(new admin_setting_configtext('data_shortnamefieldid', get_string('shortnamefieldid', 'data'),
                   get_string('configshortnamefieldid', 'data'), 'Nom curt', PARAM_TEXT));

$settings->add(new admin_setting_configtext('data_summaryfieldid', get_string('summaryfieldid', 'data'),
                   get_string('configsummaryfieldid', 'data'), 'Descripció', PARAM_TEXT));

$settings->add(new admin_setting_configtext('data_creatorfieldid', get_string('creatorfieldid', 'data'),
                   get_string('configcreatorfieldid', 'data'), 'Autor/a', PARAM_TEXT));

$settings->add(new admin_setting_configtext('data_categoryfieldid', get_string('categoryfieldid', 'data'),
                   get_string('configcategoryfieldid', 'data'), 'Àrea curricular', PARAM_TEXT));

$settings->add(new admin_setting_configtext('data_urlfieldid', get_string('urlfieldid', 'data'),
                   get_string('configurlfieldid', 'data'), 'Enllaç', PARAM_TEXT));

$settings->add(new admin_setting_configtext('data_licensefieldid', get_string('licensefieldid', 'data'),
                   get_string('configlicensefieldid', 'data'), 'Llicència', PARAM_TEXT));

$settings->add(new admin_setting_configtext('data_creationdatefieldid', get_string('creationdatefieldid', 'data'),
                   get_string('configcreationdatefieldid', 'data'), 'Data de creació', PARAM_TEXT));

//************ FI

