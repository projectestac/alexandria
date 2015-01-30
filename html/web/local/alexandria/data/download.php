<?php
//2013.12.17 - Marc Espinosa Zamora <marc.espinosa.zamora@upcnet.es>

/**
 * Download this course
 *
 * @copyright &copy; 2009 Education Department of Catalonia
 * @author sara.arjona@gmail.com
 * @author marc.espinosa.zamora@upcnet.es
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

require_once('../../../config.php');
require_once('datalib.php');

$recordid = required_param( 'rid', PARAM_INT );
$fieldid = required_param( 'fid', PARAM_INT );
$forcedownload = optional_param( 'force', true, PARAM_BOOL);
alexandria_download_file($recordid, $fieldid, $forcedownload);