<?php
/**
 * Increase the counter for specified recorid
 *
 * @copyright 2009 Education Department of Catalonia
 * @author sara.arjona@gmail.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

require_once('../../../config.php');
require_once('datalib.php');

$recordid = required_param('recordid', PARAM_INT);
$fid = required_param('fid', PARAM_INT);

echo alexandria_get_downloads($recordid, $fid) + 1;
