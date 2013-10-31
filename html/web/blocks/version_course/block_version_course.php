<?php

/**
 * This block allows the user to give the course a rating, which
 * is displayed in a custom table (<prefix>_block_rate_course).
 *
 * @copyright &copy; 2009 Education Department of Catalonia
 * @author sara.arjona@gmail.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

class block_version_course extends block_list {

    function init() {
        $this->title = get_string('courseversion','block_version_course');
        $this->version = 2009070700;
    }

    function applicable_formats() {
        return array('course' => true);
    }

    function get_content() {
        global $CFG, $COURSE, $USER;

        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;

        $this->content->items = array();
        $this->content->icons = array();
        $this->content->footer = '';
        $this->content->text = '';

        $versions = $this->get_versions($COURSE->id);
        if (!empty($versions)){
            foreach ($versions as $version){
                $this->content->icons[] = "";
                $course = get_record("course", "id", $version->course);
                $this->content->items[] = "$version->versionname <a href=\"$CFG->wwwroot/course/view.php?id=$version->course\">$course->fullname</a>".
                                          (property_exists("version", "changes")===TRUE && $version->changes!=''?"<br><span style=\"font-size: 0.7em;line-height:1;padding-left:25px;\">$version->changes</span>":"");
            }    		
        }
        
        // RSS ?
        // List of all the versions of this course ?
        
        return $this->content;

    }   
    
    /**
     * This function get the versions associated to this course
     * @param int $courseid The ID of the course.
     * @return an array with all versions related with specified course
     */
    function get_versions($courseid){
        global $CFG;
//        $versions = get_records("block_version_course", "course", $courseid, "id");
        $sql = "SELECT bc2.* FROM {$CFG->prefix}block_version_course bc1, {$CFG->prefix}block_version_course bc2
            WHERE bc1.course = $courseid AND bc1.versionid=bc2.versionid ORDER BY bc2.id ASC";
        $versions = get_records_sql($sql);
        return $versions;
    }
}
?>