<?php
require_once('../../../config.php');

$context = context_system::instance();
require_login();
require_capability('moodle/site:config', $context);

$PAGE->set_context(context_system::instance());
$PAGE->set_url($CFG->wwwroot.'/local/alexandria/data/view_reports.php');

//print_header_simple('View Reports', '', '');
$links = array(array('name' => 'alexandria', 'link' => $CFG->wwwroot, 'type' => 'title'));
$navigation = build_navigation($links);
print_header_simple(get_string("abusereports", "data"), get_string("abusereports", "data"), $navigation);

//Table with report contents
$table = new html_table();
$table->class = 'generaltable';
$table->head = array(get_string("resource_reported", "data"),get_string("reporter","data"),  get_string("report_topic", "data"), get_string("report_desc", "data"), get_string("report_date","data"));
$table->align = array('center', 'center', 'center', 'center', 'center');
$table->size = array('', '', '', '', '');


//Pages
$rpp = 20; //Records Per Page
$num_records = $DB->count_records("data_abuse_reports");
$num_pages = intval($num_records / $rpp);
$first = false;
$last = false;
if ($num_records % $rpp) $num_pages++;
$actual_page = (isset($_GET['page'])) ? $_GET['page'] : 1;

//Print page links
echo '<div class="paging">';
echo $num_records.' '.get_string("reports", "data").' ('.$num_pages.' '.get_string("pages", "data").')<br/>';
if ($num_pages > 1) {
	if ($actual_page<10){
	    $first_page = '1';
	    $last_page = ($num_pages>11) ? 11 : $num_pages;
	    $first = true;
	}elseif ($actual_page >= $num_pages-5){
	    $first_page = $num_pages-10;
	    $last_page = $num_pages;
	    $last = true;
	}else{
	    $first_page = $actual_page-5;
	    $last_page = $actual_page+5;
	}
	if(!$first) echo '<a href="'.$CFG->wwwroot.'/local/alexandria/data/view_reports.php?page=1">1</a>&nbsp;...&nbsp;&nbsp;';
	for ($i=$first_page; $i<=$last_page; $i++){
	    if ($i == $actual_page){
        	echo $i.'&nbsp;&nbsp;';
	    }else{
	        echo '<a href="'.$CFG->wwwroot.'/local/alexandria/data/view_reports.php?page='.$i.'">'.$i.'</a>&nbsp;&nbsp;';
	    }
	}
	if(!$last && ($num_pages>11)) echo '...&nbsp;<a href="'.$CFG->wwwroot.'/local/alexandria/data/view_reports.php?page='.($num_pages).'">'.($num_pages).'</a>';
	echo '</div>';
}

//Get reports
$limitfrom = ($actual_page-1)*$rpp;
$limitnum = $rpp;
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
	$report_topic = get_string('reportabuse_'.$report->abusetopic, 'data');
    else
	$report_topic = get_string('reportabuse_no_topic','data');

    $report_desc = $report->abusedescription;
    $report_date = date("d-m-Y", $report->created);
    $table->data[] = array($resource, $reporter, $report_topic, $report_desc, $report_date);
}

echo html_writer::table($table);
echo $OUTPUT->footer();
