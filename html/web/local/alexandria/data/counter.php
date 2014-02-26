<?php
/**
 * Increase the counter for specified recorid
 *
 * @copyright &copy; 2009 Education Department of Catalonia
 * @author sara.arjona@gmail.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

include_once('../../../config.php');
include_once($CFG->wwwroot.'/mod/data/lib.php');

$fieldid = required_param( 'fieldid', PARAM_INT );
$recordid = required_param( 'recordid', PARAM_INT );

if (strrpos($_SERVER['HTTP_REFERER'], $CFG->wwwroot)!==FALSE){
	echo data_update_downloadings($fieldid, $recordid);
}

