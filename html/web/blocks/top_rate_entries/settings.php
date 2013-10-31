<?php 

$settings->add(new admin_setting_configtext('block_top_rate_entries_title', get_string('title', 'block_top_rate_entries'),
                   get_string('title_txt', 'block_top_rate_entries'), ''));

$settings->add(new admin_setting_configtext('block_top_rate_entries_databaseid', get_string('databaseid', 'block_top_rate_entries'),
                   get_string('databaseid_txt', 'block_top_rate_entries'), 0, PARAM_INT));
                   
$settings->add(new admin_setting_configtext('block_top_rate_entries_titlefieldid', get_string('titlefieldid', 'block_top_rate_entries'),
                   get_string('titlefieldid_txt', 'block_top_rate_entries'),0, PARAM_INT));
                   
$settings->add(new admin_setting_configtext('block_top_rate_entries_authorfieldid', get_string('authorfieldid', 'block_top_rate_entries'),
                   get_string('authorfieldid_txt', 'block_top_rate_entries'), 0, PARAM_INT));
                   
$settings->add(new admin_setting_configtext('block_top_rate_entries_maxentries', get_string('maxentries', 'block_top_rate_entries'),
                   get_string('maxentries_txt', 'block_top_rate_entries'), 5, PARAM_INT));
                   
$settings->add(new admin_setting_configtext('block_top_rate_entries_caducityseconds', get_string('caducityseconds', 'block_top_rate_entries'),
                   get_string('caducityseconds_txt', 'block_top_rate_entries'), 86400, PARAM_INT));
                   
?>
