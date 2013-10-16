<?php
/**
 * Download this course
 *
 * @copyright &copy; 2009 Education Department of Catalonia
 * @author sara.arjona@gmail.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

define('RESTORE_SILENTLY_NOFLUSH', 0);

include_once('../../config.php');
include_once('lib.php');

$courseid = required_param( 'courseid', PARAM_INT );
unset($SESSION->backupprefs[$courseid]);

$filename = block_download_course_get_current_backup_file($courseid, true);
if ($filename==null) {
    // Generate the new one
    $filename= block_download_course_create_download($courseid);
}

if (isset($filename)){
    block_download_course_update_downloadings($courseid);
    block_download_course_download_file($filename);    
    exit();    
}

?>