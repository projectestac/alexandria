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

include_once('../../../config.php');
include_once('lib.php');

$recordid = required_param( 'rid', PARAM_INT );
$record = $DB->get_record('data_records',array('id' => $recordid));

$coursefieldid = $DB->get_field('data_fields','id',array('name' => $CFG->data_coursefieldid, 'dataid' => $record->dataid));
$courseid = $DB->get_field('data_content','content',array('fieldid' => $coursefieldid, 'recordid' => $recordid));
if (!$courseid) return null;

$fs = get_file_storage();

$files = $fs->get_area_files(context_course::instance($courseid)->id, 'backup', 'automated', false, 'timecreated DESC');
foreach($files as $file) {
	if (!$file->is_directory())
        	break;
}

data_download_file($file);
exit();
