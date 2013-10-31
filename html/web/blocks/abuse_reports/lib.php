<?php

function block_abuse_reports_reports(){
    //Get reports
    $limitfrom = 0;
    $limitnum = 5;
    $reports_content = array();
    $reports = get_records("data_abuse_reports", "", "", "created desc", "*", $limitfrom, $limitnum);
    foreach ($reports as $report){
        $reports_content[$report->id]['content_id']=$report->recordid;
        $resource = "";
        $dataid = get_field('data_records', 'dataid', 'id', $report->recordid);
        $fieldid = get_field('data_fields', 'id', 'name', "Nom", 'dataid', $dataid);
        if ($fieldid) $resource = get_field('data_content', 'content', 'fieldid', $fieldid, 'recordid', $report->recordid);
        $reports_content[$report->id]['content_name']=$resource;
        $reports_content[$report->id]['topic']=$report->abusetopic;
        $reports_content[$report->id]['description']=$report->abusedescription;
        $reports_content[$report->id]['reporter_id']=$report->report_author;
        $reporter_record = get_record("user", "id", $report->report_author);
        $reports_content[$report->id]['reporter_name']=$reporter_record->firstname." ".$reporter_record->lastname;
        $reports_content[$report->id]['date']=$report->created;
    }
    return $reports_content;
}

?>