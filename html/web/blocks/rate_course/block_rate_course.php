<?php

/**
 * This block allows the user to give the course a rating, which
 * is displayed in a custom table (<prefix>_block_rate_course).
 *
 * @copyright &copy; 2009 Education Department of Catalonia
 * @author j.m.gray@open.ac.uk
 * @author sara.arjona@gmail.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

include_once("$CFG->dirroot/mod/data/lib.php");    

class block_rate_course extends block_list {

    function init() {
        $this->title = get_string('courserating','block_rate_course');
        $this->version = 2009030500;
    }

    function applicable_formats() {
        return array('course' => true);
    }

    function get_content() {
        global $CFG, $COURSE, $USER;

        if ($this->content !== NULL) {
            return $this->content;
        }

        if (isset($CFG->ousite)) {
            //Ensure that block is not displayed if this is a non-OER category.
            $oercategories = explode(',',$CFG->oercategories);
            if( !( in_array( $COURSE->category, $oercategories ) ) ){
                return null;
            }
        }

        $this->content = new stdClass;
        $this->content->items = array();
        $this->content->icons = array();

        // Metainformation (link to database entry)
        $rid = get_field('data_content', 'recordid', 'fieldid', $CFG->data_coursefieldid, 'content', $COURSE->id);
        /*$this->content->icons[] = '<img src="'.$CFG->wwwroot.'/blocks/rate_course/metainfo.gif" height="16" />';
        $this->content->items[] = '<a href="'.$CFG->wwwroot.'/mod/data/view.php?d='.$CFG->data_coursesdataid.'&mode=single&rid='.$rid.'" >'
         .get_string('metainfo','block_rate_course').'</a>';*/

        // Comment
        $this->content->icons[] = '<img src="'.$CFG->wwwroot.'/blocks/rate_course/comments.gif" width="16" />';
        $this->content->items[] = '<a href="'.$CFG->wwwroot.'/mod/data/view.php?d='.$CFG->data_coursesdataid.'&mode=single&rid='.$rid.'&addcomment=1#comments" >'
         .get_string('viewreview','block_rate_course').'</a>';

        if (!data_isowner($rid)){
            // Rating
            $this->content->icons[] = '<img src="'.$CFG->wwwroot.'/blocks/rate_course/star.gif" width="16" height="16" />';
            $this->content->items[] = '<a href="'.$CFG->wwwroot.'/blocks/rate_course/rate.php?courseid='.$COURSE->id.'&rid='.$rid.'">'
             .get_string('giverating','block_rate_course').'</a> ';            
        }
        
        // Current rate
        $data = get_record('data', 'id', $CFG->data_coursesdataid);
        $this->content->icons[] = '<img src="'.$CFG->wwwroot.'/pix/spacer.gif" width="1" height="1" />';
        //$this->content->items[] = '<center><div class="centered">'.$this->display_rating($COURSE->id,true).'</div></center>';
        $this->content->items[] = '<center><div class="centered">'.data_display_rating($data, $rid).'</div></center>';

        $this->content->icons[] = '<img src="'.$CFG->wwwroot.'/pix/spacer.gif" width="1" height="1" />';
        $this->content->items[] = '<br><br>';

        // Report abuse
        $this->content->icons[] = '<img src="'.$CFG->wwwroot.'/blocks/rate_course/abuse.gif" width="16" />';
        //$this->content->items[] = '<a href="'.$CFG->wwwroot.'/blocks/rate_course/report_abuse.php?courseid='.$COURSE->id.'" >'
        $this->content->items[] = '<a href="'.$CFG->wwwroot.'/mod/data/report_abuse.php?recordid='.$rid.'" >'
         .get_string('reportabuse','block_rate_course').'</a>';


        // output current rating
        //$this->content->footer = '<div class="centered">'.
        //$this->display_rating($COURSE->id,true).'</div>';
        
        $this->content->footer = '';
        
        return $this->content;

    }


    /**
     * This function checks whether any version of the course already exists.
     * @param int $courseid The ID of the course.
     * @return int  rating.
     */
    function get_rating( $courseid ){
        global $CFG;
        $avg = -1;
        if ($courseid!=''){
            $sql = "SELECT AVG(rating) AS avg FROM {$CFG->prefix}block_rate_course
            WHERE course = $courseid";

            if( $avgrec = get_record_sql($sql) ){
                $avg = $avgrec->avg * 2;  //Double it for half star scores
                //Now round it up or down.
                $avg = round($avg);
            }
        }        
        return $avg;
    }

    /**
     * This function will output the current rating
     * and can be called outside the block if you wish
     * @param int $courseid the ID of the course
     * @param bool $return return the string (true) or echo it immediately (false)
     * @return string the html to output graphic, alt text and number of ratings
     */
    function display_rating( $courseid,$return=false,$show_ratedby=true) {
        global $CFG;
        $count = count_records('block_rate_course','course',$courseid);
        $ratedby = '';
        if ($count > 0) {
            $ratedby = get_string ('rating_users','block_rate_course',$count);
        }

        $numstars = $this->get_rating( $courseid );
        if( $numstars == -1 ){
            $alt = '';
        }else if ($numstars == 0) {
            $alt = get_string( 'rating_alt0', 'block_rate_course' );
        } else {
            $alt = get_string( 'rating_altnum', 'block_rate_course', $numstars/2 );
        }

        $res = '<img src="'.$CFG->wwwroot.'/blocks/rate_course/graphic/rating_graphic.php?courseid='.
        $courseid.'" alt="'.$alt.'"/><br/>';
		if ($show_ratedby) $res.=$ratedby;

        if ($return) {
            return $res;
        } else {
            echo $res;
        }
    }

}
?>