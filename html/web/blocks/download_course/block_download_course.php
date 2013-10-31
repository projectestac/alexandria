<?php

/**
 * This block allows the user to download the course
 *
 * @copyright &copy; 2009 Education Department of Catalonia
 * @author sara.arjona@gmail.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

include_once("$CFG->dirroot/blocks/download_course/lib.php");    

class block_download_course extends block_list {

    function init() {
        $this->title = get_string('coursedownload','block_download_course');
        $this->version = 2009060500;
    }

    function applicable_formats() {
        return array('course' => true);
    }
    
    function has_config() {return true;}

    function get_content() {
        global $CFG, $COURSE, $USER;

        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->items = array();
        $this->content->icons = array();
        
        $this->content->icons[] = '<img src="'.$CFG->wwwroot.'/blocks/download_course/graphic/download_icon.png" width="16" height="16" />';
        $backupname=strtolower('backup-'.$COURSE->shortname.'-'.date("Ymd-Hi").'.zip');
        //$download_content = '<a href="'.$CFG->wwwroot.'/backup/backup.php?backup_users=0&backup_logs=0&backup_user_files=0&backup_course_files=1&backup_site_files=0&backup_gradebook_history=0&backup_metacourse=0&backup_messages=0&backup_blogs=0&id='.$COURSE->id.'&to=&backup_unique_code=1243428006&backup_name='.$backupname.'&launch=execute" >'

        $download_content = '<a href="'.$CFG->wwwroot.'/blocks/download_course/download.php?courseid='.$COURSE->id.'" >'
         .get_string('download','block_download_course').'</a>';
        $filename = block_download_course_get_current_backup_file($COURSE->id);
        if ($filename!=null && file_exists($filename)){
            $download_content.= '<br> ('.block_download_course_formatBytes(filesize($filename), 0).')';
        } else{
            $download_content.= '<br><br>';
        }
        $this->content->items[] = $download_content;
        
        $downloading = block_download_course_get_downloadings($COURSE->id);
        $downloadings_info = '';
        if ($downloading>0){
            //$this->content->icons[] = '';
            $downloadings_info = '<div style="text-align:center">'.get_string('total_downloading','block_download_course').$downloading.'</div>';
        }
		
        $this->content->footer = $downloadings_info;
        return $this->content;

    }    
    
}
 
?>