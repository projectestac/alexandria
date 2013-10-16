<?php
//XTEC ************ FITXER AFEGIT
//2010.09.01

/**
 * Download this course
 *
 * @copyright &copy; 2009 Education Department of Catalonia
 * @author sara.arjona@gmail.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

include_once('../../config.php');
include_once('lib.php');

$file = required_param( 'file', PARAM_TEXT );
$fieldid = required_param( 'fieldid', PARAM_INT );
$recordid = required_param( 'recordid', PARAM_INT );


data_update_downloadings($fieldid, $recordid);
$file = $CFG->dataroot.$file;
data_download_file($file);
exit();   

?>
