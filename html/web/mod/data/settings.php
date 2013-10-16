<?php  //$Id: settings.php,v 1.1.2.2 2007/12/19 17:38:47 skodak Exp $

if (empty($CFG->enablerssfeeds)) {
    $options = array(0 => get_string('rssglobaldisabled', 'admin'));
    $str = get_string('configenablerssfeeds', 'data').'<br />'.get_string('configenablerssfeedsdisabled2', 'admin');

} else {
    $options = array(0=>get_string('no'), 1=>get_string('yes'));
    $str = get_string('configenablerssfeeds', 'data');
}
$settings->add(new admin_setting_configselect('data_enablerssfeeds', get_string('enablerssfeeds', 'admin'),
                   $str, 0, $options));

//XTEC ************ AFEGIT - Configuration params (file field id...)
//2010.08.31
$settings->add(new admin_setting_configtext('data_coursesdataid', get_string('coursesdataid', 'data'),
                   get_string('configcoursesdataid', 'data'), 1, PARAM_INT));

$settings->add(new admin_setting_configtext('data_fullnamefieldid', get_string('fullnamefieldid', 'data'),
                   get_string('configfullnamefieldid', 'data'), 1, PARAM_INT));                   

$settings->add(new admin_setting_configtext('data_shortnamefieldid', get_string('shortnamefieldid', 'data'),
                   get_string('configshortnamefieldid', 'data'), 2, PARAM_INT));                   

$settings->add(new admin_setting_configtext('data_summaryfieldid', get_string('summaryfieldid', 'data'),
                   get_string('configsummaryfieldid', 'data'), 4, PARAM_INT));                   

$settings->add(new admin_setting_configtext('data_creatorfieldid', get_string('creatorfieldid', 'data'),
                   get_string('configcreatorfieldid', 'data'), 5, PARAM_INT));                   

$settings->add(new admin_setting_configtext('data_categoryfieldid', get_string('categoryfieldid', 'data'),
                   get_string('configcategoryfieldid', 'data'), 6, PARAM_INT));                   

$settings->add(new admin_setting_configtext('data_filefieldid', get_string('filefieldid', 'data'),
                   get_string('configfilefieldid', 'data'), 7, PARAM_INT));                   

$settings->add(new admin_setting_configtext('data_urlfieldid', get_string('urlfieldid', 'data'),
                   get_string('configurlfieldid', 'data'), 8, PARAM_INT));                   

$settings->add(new admin_setting_configtext('data_coursefieldid', get_string('coursefieldid', 'data'),
                   get_string('configcoursefieldid', 'data'), 9, PARAM_INT));  
                                    
$settings->add(new admin_setting_configtext('data_licensefieldid', get_string('licensefieldid', 'data'),
                   get_string('configlicensefieldid', 'data'), 10, PARAM_INT));                   
        
$settings->add(new admin_setting_configtext('data_creationdatefieldid', get_string('creationdatefieldid', 'data'),
                   get_string('configcreationdatefieldid', 'data'), 11, PARAM_INT));                   

$settings->add(new admin_setting_configtext('data_versionfieldid', get_string('versionfieldid', 'data'),
                   get_string('configversionfieldid', 'data'), 12, PARAM_INT));                   

$settings->add(new admin_setting_configtext('data_defaultlicense', get_string('defaultlicense', 'data'),
                   get_string('configdefaultlicense', 'data'), "Creative Commons: Reconeixement – NoComercial – CompartirIgual (by-nc-sa)"));                   
        
//************ FI
?>
