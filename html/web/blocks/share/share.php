<?php
/**
 * share.php
 * @author j.beedell@open.ac.uk Feb08
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

require_once('../../config.php');

$courseid = optional_param('courseid', 0, PARAM_INT);

if ($courseid > 0) {
    add_to_log($courseid, 'course', 'share', "view.php?id=$courseid", 'share unit with friend');
    $myurl = $CFG->wwwroot.'/course/view.php?id='.$courseid;
} else {
    $myurl = $CFG->wwwroot.'/';
}
redirect($myurl);
?>