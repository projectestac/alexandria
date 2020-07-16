<?php

/**
 * Download this course
 *
 * @copyright 2009 Education Department of Catalonia
 * @author sara.arjona@gmail.com
 * @author marc.espinosa.zamora@upcnet.es
 * @author Toni Ginard
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

require_once('../../../config.php');
require_once('datalib.php');

$recordid = required_param('rid', PARAM_INT);
$fieldid = required_param('fid', PARAM_INT);
$contextid = optional_param('cid', 0, PARAM_INT);
$forcedownload = optional_param('force', true, PARAM_BOOL);

alexandria_download_file($recordid, $fieldid, $contextid, $forcedownload);