<?php
/**
 * Rate this course
 *
 * @copyright &copy; 2006 The Open University
 * @author j.e.c.brisland@open.ac.uk
 * @author j.m.gray@open.ac.uk
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

require_once( '../../config.php' );
require_once( $CFG->dirroot .'/lib/pagelib.php' );

$courseid = required_param( 'courseid', PARAM_INT );
$recordid = required_param( 'rid', PARAM_INT );

//  Load the course
$course = get_record('course', 'id', $courseid);
global $COURSE;
$COURSE = $course;
$title = get_string('giverating','block_rate_course');
$link[] = array('name' => $title,'link' => '','type' => 'misc');
$link = build_navigation($link);
print_header_simple($title, $title, $link);

//  Require user to be logged in to view this page
if((!isloggedin() || isguestuser())) {
    notice_yesno(get_string('noguestuseage', 'block_rate_course').'<br /><br />'.get_string('liketologin'),
    $CFG->wwwroot.'/login/index.php', get_referer(false));
    print_footer();
    exit();
}
require_capability('block/rate_course:rate', get_context_instance(CONTEXT_COURSE,$courseid));

echo "<div style='text-align:center'>";
$block = block_instance('rate_course');

$data = get_record('data', 'id', $CFG->data_coursesdataid);
echo data_display_rating($data, $recordid);

if (!$rating = get_record("data_ratings", "userid", $USER->id, "recordid", $recordid)) {
    $rating->rating = -999;
}
if (empty($strrate)) {
    $strrate = get_string("rate", "data");
}

// now output the form
echo '<form name="form" method="post" action="'.$CFG->wwwroot.'/mod/data/rate.php">
	    <input name="dataid" type="hidden" value="'.$CFG->data_coursesdataid.'" />
	    <input name="sesskey" type="hidden" value="'.sesskey().'" />';
        
        $ratingsscale = make_grades_menu($data->scale);
        choose_from_menu($ratingsscale, $recordid, $rating->rating, "$strrate...", '', -999);

/*	for( $i = 1; $i <= 5; $i++ ){
	    $checked = '';
	    if( isset( $existing_answer ) && ( $existing_answer !== false ) ){
	        if( $existing_answer->rating == $i ){
	            $checked = 'checked="checked"';
	        }
	    }

	    echo '<input type="radio" name="'.$recordid.'" ';
	    if ($existing_answer) {
	        echo 'disabled="disabled" ';
	    }
	    echo 'value="'.$i.'" '.$checked.' alt="Rating of '.$i.'"  />'.$i.' ';
	}
	*/

	echo '<p><input type="submit" value="'.get_string('submit','block_rate_course').'"';
	echo '/></p></form>';

	echo '</div>';

	print_footer($course);
?>