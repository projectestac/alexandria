<?php

function block_abuse_reports_reports(){
    global $DB;
    $limitfrom = 0;
    $limitnum = 5;
    $reports_content = array();
    $reports = $DB->get_records("data_abuse_reports", null, "created desc", "*", $limitfrom, $limitnum);
    foreach ($reports as $report){
        $reports_content[$report->id]['content_id']=$report->recordid;
        $resource = "";
        $dataid = $DB->get_field('data_records', 'dataid', array('id' => $report->recordid));
        $fieldid = $DB->get_field('data_fields', 'id', array('name' => "Nom", 'dataid' => $dataid));
        if ($fieldid) $resource = $DB->get_field('data_content', 'content', array('fieldid' => $fieldid, 'recordid'=> $report->recordid));
        $reports_content[$report->id]['content_name']=$resource;
        $reports_content[$report->id]['topic']=$report->abusetopic;
        $reports_content[$report->id]['description']=$report->abusedescription;
        $reports_content[$report->id]['reporter_id']=$report->report_author;
        $reporter_record = $DB->get_record('user', array('id' => $report->report_author));
        $reports_content[$report->id]['reporter_name']=$reporter_record->firstname." ".$reporter_record->lastname;
        $reports_content[$report->id]['date']=$report->created;
    }
    return $reports_content;
}

