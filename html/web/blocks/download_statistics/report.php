<?php

//XTEC - ALEXANDRIA ************ FITXER AFEGIT
//2010.09.01

require_once('../../config.php');
require_once('lib.php');
require_once($CFG->libdir.'/tablelib.php');

$context = context_system::instance();
require_login();
require_capability('moodle/site:config', $context);

$PAGE->set_context($context);
$PAGE->set_pagelayout('report');

$page         = optional_param('page', 0, PARAM_INT);
$order      = optional_param('order', 'name', PARAM_TEXT);
$direction  = optional_param('direction', 'ASC', PARAM_TEXT);
$perpage = 30;

$params = array('page'=>$page, 'order'=>$order,'direction'=>$direction);
$baseurl = new moodle_url('/blocks/download_statistics/report.php', $params);
$PAGE->set_url($baseurl);

$PAGE->set_title(get_string("downloadsreport", "block_download_statistics"));
$PAGE->set_heading(get_string("downloadsreport", "block_download_statistics"));
echo $OUTPUT->header();
echo $OUTPUT->heading(get_string("downloadsreport", "block_download_statistics"));
//Pages
$num_records = $DB->count_records('data_records');

echo $OUTPUT->paging_bar($num_records, $page, $perpage, $baseurl);

if($num_records > 0) {
	//Table with report contents
	$table = new html_table();
	$table->class = 'generaltable generalbox';

	$table->head = array();

	if($order == 'name'){
	    $dir = ($direction == 'DESC') ? 'ASC': 'DESC';
	} else {
		$dir = 'ASC';
	}
	$sort_params = array('order' => 'name', 'direction' => $dir, 'page'=>$page);
	$table->head[] = html_writer::link(new moodle_url('/blocks/download_statistics/report.php', $sort_params), get_string("resourcename", "block_download_statistics"));

	if($order == 'database'){
	    $dir = ($direction == 'DESC') ? 'ASC': 'DESC';
	} else {
		$dir = 'ASC';
	}
	$sort_params = array('order' => 'database', 'direction' => $dir, 'page'=>$page);
	$table->head[] = html_writer::link(new moodle_url('/blocks/download_statistics/report.php', $sort_params), get_string("resourcedatabase", "block_download_statistics"));

	if($order == 'downloads'){
	    $dir = ($direction == 'DESC') ? 'ASC': 'DESC';
	} else {
		$dir = 'DESC';
	}
	$sort_params = array('order' => 'downloads', 'direction' => $dir, 'page'=>$page);
	$table->head[] = html_writer::link(new moodle_url('/blocks/download_statistics/report.php', $sort_params), get_string("resourcedownloads", "block_download_statistics"));

	$table->align = array('left', 'center', 'center');
	$table->width = '95%';


	//Get reports
	$limitfrom = $page * $perpage;
	$limitnum = $perpage;
	$records = get_data_records($limitfrom, $limitnum, $order, $direction);

	foreach ($records as $record){
	    $nom = '<a href="'.$CFG->wwwroot.'/mod/data/view.php?rid='.$record->id.'">'.$record->Nom.'</a>';
	    $database = '<a href="'.$CFG->wwwroot.'/mod/data/view.php?d='.$record->dataid.'">'.$record->database.'</a>';
	    $table->data[] = array($nom,$database,$record->downloads);
	}

	echo html_writer::table($table);

	echo $OUTPUT->paging_bar($num_records, $page, $perpage, $baseurl);
}

echo $OUTPUT->footer();
