<?php
/**
 * Increase the counter for specified recorid
 *
 * @copyright &copy; 2009 Education Department of Catalonia
 * @author sara.arjona@gmail.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

require_once('../../../config.php');
require_once('datalib.php');
require_xtecadmin(true);

$courseid = required_param('courseid', PARAM_INT);
alexandria_backup_course($courseid, true);
