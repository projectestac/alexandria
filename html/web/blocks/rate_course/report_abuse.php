<?php
/**
 * Report abuse of this course
 *
 * @copyright &copy; 2009 Education Department of Catalonia
 * @author sara.arjona@gmail.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

require_once( '../../config.php' );
require_once( $CFG->dirroot .'/lib/pagelib.php' );

$courseid = required_param( 'courseid', PARAM_INT );
//  Load the course
$course = get_record('course', 'id', $courseid);
global $CFG;
global $USER;
global $COURSE;
$COURSE = $course;
$title = get_string('reportabuse','block_rate_course');
$link[] = array('name' => $title,'link' => '','type' => 'misc');
$link = build_navigation($link);
print_header_simple($title, $title, $link);

//  Require user to be logged in to view this page
if((!isloggedin() || isguestuser())) {
    notice_yesno(get_string('reportabuse_noguestuseage', 'block_rate_course').'<br /><br />'.get_string('liketologin'),
    $CFG->wwwroot.'/login/index.php', get_referer(false));
    print_footer();
    exit();
}
$context = get_context_instance(CONTEXT_COURSE,$courseid);
require_capability('block/rate_course:reportabuse', $context);

$report = optional_param( 'report' );
if ($report){   
    // Send email only to users with reportabusesender permission
    $receiverroles = get_roles_with_capability('block/rate_course:reportabusereceiver', CAP_ALLOW, $context);
    $receiverusers = array();
    if (!empty($receiverroles)) $receiverusers = get_role_users(array_keys($receiverroles), $context, true, 'u.*', 'u.id ASC');
    if (empty($receiverroles) || empty($receiverusers)) {
        // If there is no user to send the abuse, add admin user to the list
        $adminuser = get_record("user", "username", $CFG->admin);    
        array_push($receiverusers, $adminuser);
    }

    $fromuser = $USER;
    $found = false;
    foreach($receiverusers as $user) {
        if ($user->id==$fromuser->id) $found = true;
        block_rate_course_send_mail($course, $user, $fromuser);
    }
    if (!$found) {
        // If user reporting the abuse is not found, send also a copy of the generated email
        block_rate_course_send_mail($course, $fromuser, $fromuser);   
    }
    echo "<div style=\"text-align:center;\"><p><br>".get_string('reportabuse_intro','block_rate_course')."<br><br><br><br></p></div>";    

}


echo '<script>';
echo 'function checkAbuseReportForm(form){var selectedtopic = -1; var i=0; while (selectedtopic<0 && i<form.abusetopic.length){if (form.abusetopic[i].checked) selectedtopic=i; i++;};if (selectedtopic < 0 || (form.abusetopic[4].checked && form.abusedescription.value==\'\') ){alert(\''.get_string('reportabuse_mandatory','block_rate_course').'\');return false;} return true;}';

echo '</script>';
// now output the form
echo '<div ><form id="reportabuseform" name="form" method="post" action="'.$CFG->wwwroot.'/blocks/rate_course/report_abuse.php">
	<input name="courseid" type="hidden" value="'.$course->id.'" />';

    echo '<b>'.get_string('reportabuse_select','block_rate_course').' *</b><br><br>';
  
    echo '<input type="radio" name="abusetopic" value="copyrights">'.get_string('reportabuse_copyrights','block_rate_course').'<br>';
    echo '<input type="radio" name="abusetopic" value="nudity">'.get_string('reportabuse_nudity','block_rate_course').'<br>';
    echo '<input type="radio" name="abusetopic" value="hategroup">'.get_string('reportabuse_hategroup','block_rate_course').'<br>';
    echo '<input type="radio" name="abusetopic" value="violentactivities">'.get_string('reportabuse_violentactivities','block_rate_course').'<br>';
    echo '<input type="radio" name="abusetopic" value="other">'.get_string('reportabuse_other','block_rate_course').'<br>';

//Please add comments to help us understand your report. Comments are required for this option.
    
    echo '<br><br>'.get_string('reportabuse_comments','block_rate_course').'<br>';
    echo '<textarea name="abusedescription" cols="70" rows="5"></textarea><br>';

	echo '<p>';
    echo ' <input type="submit" name="report" value="'.get_string('reportabuse_submit','block_rate_course').'" onclick="return checkAbuseReportForm(this.form);"/>';
    echo '</p>';
    
	echo '</form></div></div>';

	print_footer($course);
    
    
/**
 * Send an email to specified user
 *
 * @param $info object The info used by the 'emailteachermail' language string
 * @param $format string The format (html or text) of the message. Text by default.
 * @return string
 */
function block_rate_course_send_mail($course, $user, $fromuser){
    $info = new object();
    $info->format = ($user->mailformat == 1) ? "html" : '';
    $info->course=$course;
    $info->coursename=$course->fullname;
    $info->user = $user;
    $info->username = fullname($user, true);
    $abusetopic = optional_param( 'abusetopic' );
    $abusedescription = optional_param( 'abusedescription' );
    $info->abuse = get_string('reportabuse_'.$abusetopic,'block_rate_course').($abusedescription!=''?" - ".$abusedescription:"");

    $postsubject = get_string('reportabuse_mailsubject', 'block_rate_course', $info);
    $posttext = block_rate_course_email_receivers_text($info);
    $posthtml = ($user->mailformat == 1)?block_rate_course_email_receivers_text($info, 'html'): '';
    email_to_user($user, $fromuser, $postsubject, $posttext, $posthtml);
}

/**
 * Creates the text content for emails to report abuse receivers
 *
 * @param $info object The info used by the 'emailteachermail' language string
 * @param $format string The format (html or text) of the message. Text by default.
 * @return string
 */
function block_rate_course_email_receivers_text($info, $format='text') {
    global $CFG;
    $msgtext = '';
    if (isset($format) && $format == 'html'){
        $info->abuse="<center>".$info->abuse."</center>";
        $info->coursename='<a href="'.$CFG->wwwroot.'/course/view.php?id='.$info->course->id.'">'.format_string($info->course->fullname).'</a>';
        $info->username='<a href="'.$CFG->wwwroot.'/user/view.php?id='.$info->user->id.'">'.format_string($info->username).'</a>';
        $msgtext .= '<p>'.get_string("reportabuse_mail", "block_rate_course", $info).'</p>';
    }else{
        $info->abuse="\n".$info->abuse."\n";
        $info->coursename="\"".$info->course->fullname.'" ['.$CFG->wwwroot.'/course/view.php?id='.$info->course->id.']';
        $info->username=$info->username." [".$info->user->id."]";
        $msgtext .= get_string("reportabuse_mail", "block_rate_course", $info)."\n\n";
    }
    return $msgtext;
}

    
?>