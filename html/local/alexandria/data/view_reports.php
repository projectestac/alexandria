<?php
require_once('../../../config.php');
require_once($CFG->libdir.'/tablelib.php');

$context = context_system::instance();
require_login();
require_capability('moodle/site:config', $context);

$PAGE->set_context(context_system::instance());
$PAGE->set_pagelayout('report');

$page         = optional_param('page', 0, PARAM_INT);
$perpage = 30;

$params = array('page'=>$page);
$baseurl = new moodle_url('/local/alexandria/data/view_reports.php', $params);
$PAGE->set_url($baseurl);

$PAGE->set_title(get_string("abusereports", "local_alexandria"));
$PAGE->set_heading(get_string("abusereports", "local_alexandria"));
echo $OUTPUT->header();
echo $OUTPUT->heading(get_string("abusereports", "local_alexandria"));

//Pages
$num_records = $DB->count_records("data_abuse_reports");
echo $OUTPUT->paging_bar($num_records, $page, $perpage, $baseurl);

if($num_records > 0) {
	//Table with report contents
	$table = new html_table();
	$table->class = 'generaltable generalbox';
	$table->head = array(get_string("resource_reported", "local_alexandria"),get_string("reporter","local_alexandria"),  get_string("report_topic", "local_alexandria"), get_string("report_desc", "local_alexandria"), get_string("report_date","local_alexandria"));
	$table->align = array('center', 'center', 'center', 'center', 'center');

	//Get reports
	$limitfrom = $page * $perpage;
	$limitnum = $perpage;
	$reports = $DB->get_records("data_abuse_reports", NULL, "created desc", "*", $limitfrom, $limitnum);
	foreach ($reports as $report){
	    $resource = "";
	    $dataid = $DB->get_field('data_records', 'dataid', array('id' => $report->recordid));
	    $fieldid = $DB->get_field('data_fields', 'id', array('name' => "Nom", 'dataid' => $dataid));
	    if ($fieldid) $resource = $DB->get_field('data_content', 'content', array('fieldid' =>  $fieldid, 'recordid' => $report->recordid));
	    if ($resource == '') $resource = $report->recordid;
	    $resource = '<a href="'.$CFG->wwwroot.'/mod/data/view.php?rid='.$report->recordid.'">'.$resource.'</a>';
	    $reporter_record = $DB->get_record("user", array("id" => $report->report_author));
	    $reporter = '<a href="'.$CFG->wwwroot.'/user/view.php?id='.$report->report_author.'">'.$reporter_record->firstname." ".$reporter_record->lastname.'</a>';
	    if (!empty($report_abusetopic))
		$report_topic = get_string('reportabuse_'.$report->abusetopic, 'local_alexandria');
	    else
		$report_topic = get_string('reportabuse_no_topic','local_alexandria');

	    $report_desc = $report->abusedescription;
	    $report_date = date("d/m/Y", $report->created);
	    $table->data[] = array($resource, $reporter, $report_topic, $report_desc, $report_date);
	}

	echo html_writer::table($table);

	echo $OUTPUT->paging_bar($num_records, $page, $perpage, $baseurl);
}
echo $OUTPUT->footer();
