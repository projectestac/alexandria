<?php
//XTEC - ALEXANDRIA ************ FITXER AFEGIT
//2010.09.01

/**
 * Report abuse of this course
 *
 * @copyright &copy; 2009 Education Department of Catalonia
 * @author Sara Arjona (sara.arjona@gmail.com)
 * @author Felix Casanellas (fcasanel@xtec.cat)
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

require_once( '../../config.php' );
require_once( $CFG->dirroot .'/lib/pagelib.php' );

$recordid = required_param( 'recordid', PARAM_INT );
$rid = $recordid;
if (! $record = $DB->get_record('data_records', array('id'=>  $rid))) {
    error('Record ID is incorrect');
}
if (! $data = $DB->get_record('data', array('id' =>  $record->dataid))) {
    error('Data ID is incorrect');
}
if (! $course = $DB->get_record('course', array('id' => $data->course))) {
    error('Course is misconfigured');

}

if (! $cm = get_coursemodule_from_instance('data', $data->id, $course->id)) {
    error('Course Module ID was incorrect');
}

$title = get_string('reportabuse','data');

$sql = "SELECT dc.content FROM ".$CFG->prefix."data_fields df, ".$CFG->prefix."data_content dc WHERE df.id=dc.fieldid AND df.name='Nom' AND df.dataid=".$data->id." AND dc.recordid=".$recordid;

$tmp = $DB->get_record_sql($sql);
$recordtitle = $data->name;
if (isset($tmp) && isset($tmp->content)){
    $recordtitle = $tmp->content;
}

$PAGE->set_context(context_system::instance());
$PAGE->set_url($CFG->wwwroot.'/mod/data/report_abuse.php?record'.(!empty($recordid)?'id='.$recordid:''));

$navigation = build_navigation($recordtitle, $cm);
print_header_simple($recordtitle, '', $navigation,
            '', '', true, update_module_button($cm->id, $course->id, get_string('modulename', 'data'),$recordtitle),
            navmenu($course, $cm));

$OUTPUT->heading($title);

//  Require user to be logged in to view this page
if((!isloggedin() || isguestuser())) {
    notice_yesno(get_string('reportabuse_noguestuseage', 'data').'<br /><br />'.get_string('liketologin'),
    $CFG->wwwroot.'/login/index.php', get_referer(false));
    print_footer();
    exit();
}


$report = optional_param( 'report','',PARAM_TEXT);
if ($report){
	// Create an entry in the abuse_reports table of the database
	$abusetopic = optional_param( 'abusetopic','',PARAM_TEXT);
    $abusedescription = optional_param( 'abusedescription','',PARAM_TEXT);
    if (empty($abusedescription)) $abusedescription = get_string('reportabuse_no_comments','data');
	$content->recordid = $recordid;
	$content->abusetopic = $abusetopic;
	$content->report_author = $USER->id;
	$content->abusedescription = $abusedescription;
	$content->created = time();                    
	
	$DB->insert_record('data_abuse_reports',$content);
	   
    // Send email only to users with reportabusereceiver permission
    // If there is no user to send the abuse, add admin user to the list
    $adminuser = $DB->get_record("user", array("username" => $CFG->admin));
    $receiverroles = get_roles_with_capability('block/rate_course:reportabusereceiver', CAP_ALLOW);
    $receiverusers = array();
    if (!empty($receiverroles)) $receiverusers = get_role_users(array_keys($receiverroles), $context, true, 'u.*', 'u.id ASC');
    if (empty($receiverusers)) {
        array_push($receiverusers, $adminuser);
    }
    
    $fromuser = $USER;
    $owneruser = $DB->get_field('data_records', 'userid', array('id' => $recordid));
    $owneruser = $DB->get_record("user", array("id" =>  $owneruser));
    $found = false;
    // Send the mail to users with reportabusereceiver permision
    //echo "<br><br>RECEIVERS...<br>";
    
    foreach($receiverusers as $user) {
        if ($user->id==$fromuser->id) $found = true;
        data_send_mail($recordid, $user, $adminuser);
    }

    if (!$found) {
        //echo "<br><br>REPORTING USER...<br>";
        // If user reporting the abuse is not a reciver too, send also a copy of the generated email
        data_send_mail($recordid, $fromuser, $adminuser);   
    }

    // Send a copy of the generated mail to the content owner
    //echo "<br><br>RESOURCE OWNER...<br>";
    data_send_mail($recordid, $owneruser, $adminuser);
    echo "<div style=\"text-align:center;\"><p><br>".get_string('reportabuse_intro','data',$CFG->thememenuconditions)."<br><br>";    
    echo "<a href=\"view.php?d=".$record->dataid."&rid=".$rid."\">".get_string('continue')."</a><br><br></p></div>";
} else{
    echo '<script>';
    echo 'function checkAbuseReportForm(form){var selectedtopic = -1; var i=0; while (selectedtopic<0 && i<form.abusetopic.length){if (form.abusetopic[i].checked) selectedtopic=i; i++;};if (selectedtopic < 0 || (form.abusetopic[4].checked && form.abusedescription.value==\'\') ){alert(\''.get_string('reportabuse_mandatory','data').'\');return false;} return true;}';
    echo '</script>';
    // now output the form
    echo '<div ><form id="reportabuseform" name="form" method="post" action="'.$CFG->wwwroot.'/mod/data/report_abuse.php">
    	<input name="recordid" type="hidden" value="'.$recordid.'" />';
    
        echo '<b>'.get_string('reportabuse_select','data').' *</b><br><br>';
      
        echo '<input type="radio" name="abusetopic" value="copyrights">'.get_string('reportabuse_copyrights','data').'<br>';
        echo '<input type="radio" name="abusetopic" value="nudity">'.get_string('reportabuse_nudity','data').'<br>';
        echo '<input type="radio" name="abusetopic" value="other">'.get_string('reportabuse_other','data').'<br>';
    
    //Please add comments to help us understand your report. Comments are required for this option.
        
        echo '<br><br>'.get_string('reportabuse_comments','data').'<br>';
        echo '<textarea name="abusedescription" cols="70" rows="5"></textarea><br>';
    
    	echo '<p>';
        echo ' <input type="submit" name="report" value="'.get_string('reportabuse_submit','data').'" onclick="return checkAbuseReportForm(this.form);"/>&nbsp;&nbsp;&nbsp;';
        echo ' <input type="button" name="cancel" value="'.get_string('reportabuse_cancel','data').'" onclick="history.back()"/>';
        echo '</p>';
        
    echo '</form></div></div>';    
}

$OUTPUT->footer();


function data_send_mail($recordid, $user, $fromuser){
    global $DB;
    $info = new stdClass();
    $info->format = ($user->mailformat == 1) ? "html" : '';
    $info->recordid = $recordid;
    $info->contentname = '';
    $dataid = $DB->get_field('data_records', 'dataid', array('id' => $recordid));
    $fieldid = $DB->get_field('data_fields', 'id', array('name' =>  "Nom", 'dataid'=> $dataid));
    if ($fieldid) $info->contentname = $DB->get_field('data_content', 'content', array('fieldid' => $fieldid, 'recordid' => $recordid));
    if ($info->contentname == '') $info->contentname = $CFG->wwwroot.'/mod/data/view.php?rid='.$recordid;
    $abusetopic = optional_param( 'abusetopic','',PARAM_TEXT);
    $abusedescription = optional_param( 'abusedescription','',PARAM_TEXT);
    $info->abuse = get_string('reportabuse_'.$abusetopic,'data').($abusedescription!=''?" - ".$abusedescription:"");
    $postsubject = get_string('reportabuse_mailsubject', 'data', $info);
    $posttext = data_email_receivers_text($info, 'text', $fromuser);
    $posthtml = ($user->mailformat == 1)?data_email_receivers_text($info, 'html', $fromuser): '';
    //echo "<br>Sending email to ".$user->username." from ".$fromuser->username."   ";//." with the subject '$postsubject' and the text '$posttext'";
    //echo "<br>Message:$posthtml";
    email_to_user($user, $fromuser, $postsubject, $posttext, $posthtml);
}

/**
 * Creates the text content for emails to report abuse receivers
 *
 * @param $info object The info used by the 'emailteachermail' language string
 * @param $format string The format (html or text) of the message. Text by default.
 * @return string
 */
function data_email_receivers_text($info, $format='text', $fromuser) {
    global $CFG;
    $msgtext = '';
    if (isset($format) && $format == 'html'){
        $info->abuse="<center>".$info->abuse."</center>";
        $info->coursename='<a href="'.$CFG->wwwroot.'/mod/data/view.php?rid='.$info->recordid.'">'.$info->contentname.'</a>';
        $msgtext .= '<p>'.$fromuser->firstname.' '.$fromuser->lastname.get_string("reportabuse_mail", "data", $info).'</p>';
    }else{
        $info->abuse="\n".$info->abuse."\n";
        $info->coursename="\"".$info->contentname.'" ['.$CFG->wwwroot.'/mod/data/view.php?rid='.$info->recordid.']';
        $msgtext .= $fromuser->firstname.' '.$fromuser->lastname.get_string("reportabuse_mail", "data", $info)."\n\n";
    }
    return $msgtext;
}

?>
