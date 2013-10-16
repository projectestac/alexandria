<?php 

$settings->add(new admin_setting_configtext('block_download_course_caducitydays', get_string('caducitydays', 'block_download_course'),
                   get_string('caducitydays_txt', 'block_download_course'), 1, PARAM_INT));

?>
