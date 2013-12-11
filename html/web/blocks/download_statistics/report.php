<?php

//XTEC - ALEXANDRIA ************ FITXER AFEGIT
//2010.09.01

require_once('../../config.php');

$context = context_system::instance();
require_login();
require_capability('moodle/site:config', $context);

$PAGE->set_context($context);
$PAGE->set_url($CFG->wwwroot.'/mod/data/view_reports.php');
    
$links = array(array('name' => 'Alexandria', 'link' => $CFG->wwwroot, 'type' => 'title'));
$navigation = build_navigation($links);
print_header_simple(get_string("downloadsreport", "block_download_statistics"), get_string("downloadsreport", "block_download_statistics"), $navigation);
//Table with report contents
$table = new html_table();
$table->class = 'generaltable';
$table->head = array(get_string("resourcename", "block_download_statistics"),get_string("resourcedatabase","block_download_statistics"),  get_string("resourcedownloads", "block_download_statistics"));
$table->align = array('center', 'center', 'center');
$table->size = array('', '', '');


//Pages
$rpp = 20; //Records Per Page
$num_records = $DB->count_records("data_records");
$num_pages = intval($num_records / $rpp);
$first = false;
$last = false;
if ($num_records % $rpp) $num_pages++;
$actual_page = (isset($_GET['page'])) ? $_GET['page'] : 1;

//Print page links
echo '<div class="paging">';
echo $num_records.' '.get_string("records", "block_download_statistics").' ('.$num_pages.' '.get_string("pages", "block_download_statistics").')<br/>';
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
	if(!$first) echo '<a href="'.$CFG->wwwroot.'/blocks/download_statistics/report.php?page=1">1</a>&nbsp;...&nbsp;&nbsp;';
	for ($i=$first_page; $i<=$last_page; $i++){
	    if ($i == $actual_page){
        	echo $i.'&nbsp;&nbsp;';
	    }else{
	        echo '<a href="'.$CFG->wwwroot.'/blocks/download_statistics/report.php?page='.$i.'">'.$i.'</a>&nbsp;&nbsp;';
	    }
	}
	if(!$last && ($num_pages>11)) echo '...&nbsp;<a href="'.$CFG->wwwroot.'/blocks/download_statistics/report.php?page='.($num_pages).'">'.($num_pages).'</a>';
	echo '</div>';
}

//Get reports
$limitfrom = ($actual_page-1)*$rpp;
$limitnum = $rpp;
$records = get_data_records($limitfrom,$limitnum);

foreach ($records as $record){
    $nom = '<a href="'.$CFG->wwwroot.'/mod/data/view.php?rid='.$record->id.'">'.$record->Nom.'</a>';
    $database = '<a href="'.$CFG->wwwroot.'/mod/data/view.php?d='.$record->dataid.'">'.$record->database.'</a>';
    $table->data[] = array($nom,$database,$record->downloads);
}

echo html_writer::table($table);
echo $OUTPUT->footer();
