<?php

//XTEC ************ FITXER AFEGIT
//2010.09.01

require_once('../../config.php');

$context = get_context_instance(CONTEXT_SYSTEM);
require_login();
require_capability('block/rate_course:reportabuse', $context);
    
//print_header_simple('View Reports', '', '');
$links = array(array('name' => 'alexandria', 'link' => $CFG->wwwroot, 'type' => 'title'));
$navigation = build_navigation($links);
print_header_simple(get_string("abusereports", "data"), get_string("abusereports", "data"), $navigation);

//Table with report contents
$table->class = 'generaltable';
$table->head = array(get_string("resource_reported", "data"),get_string("reporter","data"),  get_string("report_topic", "data"), get_string("report_desc", "data"), get_string("report_date","data"));
$table->align = array('center', 'center', 'center', 'center', 'center');
$table->size = array('', '', '', '', '');


//Pages
$rpp = 20; //Records Per Page
$num_records = count_records("data_abuse_reports");
$num_pages = intval($num_records / $rpp);
$first = false;
$last = false;
if ($num_records % $rpp) $num_pages++;
$actual_page = (isset($_GET['page'])) ? $_GET['page'] : 1;

//Print page links
echo '<div class="paging">';
echo $num_records.' '.get_string("reports", "data").' ('.$num_pages.' '.get_string("pages", "data").')<br/>';
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
if(!$first) echo '<a href="'.$CFG->wwwroot.'/mod/data/view_reports.php?page=1">1</a>&nbsp;...&nbsp;&nbsp;';
for ($i=$first_page; $i<=$last_page; $i++){
    if ($i == $actual_page){
        echo $i.'&nbsp;&nbsp;';
    }else{
        echo '<a href="'.$CFG->wwwroot.'/mod/data/view_reports.php?page='.$i.'">'.$i.'</a>&nbsp;&nbsp;';
    }
}
if(!$last && ($num_pages>11)) echo '...&nbsp;<a href="'.$CFG->wwwroot.'/mod/data/view_reports.php?page='.($num_pages).'">'.($num_pages).'</a>';
echo '</div>';

//Get reports
$limitfrom = ($actual_page-1)*$rpp;
$limitnum = $rpp;
$reports = get_records("data_abuse_reports", "", "", "created desc", "*", $limitfrom, $limitnum);
foreach ($reports as $report){
    $resource = "";
    $dataid = get_field('data_records', 'dataid', 'id', $report->recordid);
    $fieldid = get_field('data_fields', 'id', 'name', "Nom", 'dataid', $dataid);
    if ($fieldid) $resource = get_field('data_content', 'content', 'fieldid', $fieldid, 'recordid', $report->recordid);
    if ($resource == '') $resource = $report->recordid;
    $resource = '<a href="'.$CFG->wwwroot.'/mod/data/view.php?rid='.$report->recordid.'">'.$resource.'</a>';
    $reporter_record = get_record("user", "id", $report->report_author);
    $reporter = '<a href="'.$CFG->wwwroot.'/user/view.php?id='.$report->report_author.'">'.$reporter_record->firstname." ".$reporter_record->lastname.'</a>';
    $report_topic = get_string("reportabuse_".$report->abusetopic, "data");
    $report_desc = $report->abusedescription;
    $report_date = date("d-m-Y", $report->created);
    $table->data[] = array($resource, $reporter, $report_topic, $report_desc, $report_date);
}

print_table($table);
print_footer();