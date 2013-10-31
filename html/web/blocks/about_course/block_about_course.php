<?php

/**
 * This block shows to the user information about the course (author and licence)
 *
 * @copyright &copy; 2009 Education Department of Catalonia
 * @author sara.arjona@gmail.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

include_once("$CFG->dirroot/blocks/about_course/lib.php");    

class block_about_course extends block_list {

    function init() {
        $this->title = get_string('courseabout','block_about_course');
        $this->version = 2009093000;
    }

    function applicable_formats() {
        return array('course' => true);
    }
    
    function has_config() {return false;}

    function get_content() {
        global $CFG, $COURSE, $USER;

        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->items = array();
        $this->content->icons = array();

        $rid = get_field('data_content', 'recordid', 'fieldid', $CFG->data_coursefieldid, 'content', $COURSE->id);
        $author = get_field('data_content', 'content', 'recordid',$rid, 'fieldid', $CFG->data_creatorfieldid);
        $license = get_field('data_content', 'content', 'recordid',$rid, 'fieldid', $CFG->data_licensefieldid);

        // License
        $this->content->icons[] = '';
        $this->content->items[] = get_string('author','block_about_course').': <b>'.$author.'</b>';

        // License
        $this->content->icons[] = '';
        $license_img = '';
        if ($license=='' || strpos($license, "by-nc-sa")!==FALSE){
            $license_img.= 'byncsa.png';
        }else if (strpos($license, "by-nc-nd")!==FALSE){
            $license_img.= 'byncnd.png';
        }else if (strpos($license, "by-sa")!==FALSE){
            $license_img.= 'bysa.png';
        }else if (strpos($license, "by-nd")!==FALSE){
            $license_img.= 'bynd.png';
        }else if (strpos($license, "cc-by-nc")!==FALSE){
            $license_img.= 'bync.png';
        }else if (strpos($license, "cc-by")!==FALSE){
            $license_img.= 'by.png';
        }else {
            $license_img.= 'generic.gif';
        }
        
        $license_img = '<img src="'.$CFG->wwwroot.'/blocks/about_course/images/'.$license_img.'" title="'.$license.'" weight="88" />';
        $this->content->items[] = '<center>'.$license_img.'<br><span style="font-size:0.8em">'.get_string('license_warning','block_about_course').'</span></center>';

        // Metainformation (link to database entry)
        $this->content->icons[] = '';
        $this->content->items[] = '';
        $this->content->icons[] = '<img src="'.$CFG->wwwroot.'/blocks/rate_course/metainfo.gif" height="16" />';
        $this->content->items[] = '<a href="'.$CFG->wwwroot.'/mod/data/view.php?d='.$CFG->data_coursesdataid.'&mode=single&rid='.$rid.'" >'
         .get_string('metainfo','block_about_course').'</a>';

        		
        $this->content->footer = '';
        return $this->content;

    }    
    
}
 
?>