<?php
/**
 * About course block
 *
 * @copyright &copy; 2009-2013 Education Department of Catalonia
 * @author sara.arjona@gmail.com (2009)
 * @author marc.espinosa.zamora@upcnet.es (2013) Moodle 2.4 migration
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

include_once("$CFG->dirroot/blocks/about_course/lib.php");

class block_about_course extends block_list {

    function init() {
        $this->title = get_string('courseabout','block_about_course');
    }

    function applicable_formats() {
        return array('course' => true);
    }

    function has_config() {return false;}

    function get_content() {
        global $CFG, $COURSE, $USER, $DB;

        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->items = array();
        $this->content->icons = array();

        $rid = $DB->get_field_sql('SELECT recordid FROM {data_content} WHERE content = '.$COURSE->id.' AND fieldid IN (
    	  SELECT id FROM {data_fields} WHERE  name = \''.$CFG->data_coursefieldid.'\')');
    	if (!$rid) return $this->content;

    	$dataid = $DB->get_field('data_records','dataid',array('id' => $rid));
    	$author = $DB->get_field_sql('SELECT content FROM {data_content} WHERE recordid = '.$rid.' AND fieldid IN (
    	      SELECT id FROM {data_fields}
                  WHERE  name = \''.$CFG->data_creatorfieldid.'\'
    	)');
    	$license = $DB->get_field_sql('SELECT content FROM {data_content} WHERE recordid = '.$rid.' AND fieldid IN (
    	      SELECT id FROM {data_fields}
                  WHERE  name = \''.$CFG->data_licensefieldid.'\'
    	)');
    	$filefieldid = $DB->get_field('data_fields','id',array('dataid' => $dataid, 'name' => $CFG->data_filefieldid));
    	$content = $DB->get_record('data_content', array('recordid' => $rid, 'fieldid' => $filefieldid));

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
        $this->content->items[] = '<br/><center>'.$license_img.'<br><span style="font-size:0.8em">'.get_string('license_warning','block_about_course').'</span></center>';

        // Metainformation (link to database entry)
        $this->content->icons[] = '';
        $this->content->items[] = '';
        $this->content->icons[] = '<img src="'.$CFG->wwwroot.'/blocks/about_course/pix/metainfo.gif" height="16" />';
        $this->content->items[] = '<a href="'.$CFG->wwwroot.'/mod/data/view.php?d='.$dataid.'&mode=single&rid='.$rid.'" >'
         .get_string('metainfo','block_about_course').'</a>';

    	$module = $DB->get_field('modules','id',array('name' => 'data'));
    	$cmid = $DB->get_field('course_modules','id',array('instance' => $dataid, 'module' => $module));
    	if ($cmid) {
            $file = alexandria_get_course_file($COURSE->id);

    		if (!empty($file)) {
    			$filesize = block_about_course_formatBytes($file->get_filesize());
                $counter = alexandria_get_downloads($rid, $filefieldid);
    			$url = $CFG->wwwroot.'/local/alexandria/data/download.php?rid='.$rid.'&fid='.$filefieldid;
    			$this->content->icons[] = '<img src="'.$CFG->wwwroot.'/blocks/about_course/pix/download_icon.png" height="16" />';
    			$this->content->items[] = '<a href="'.$url.'" onclick="increase_counter('.$rid.','.$filefieldid.');">'.get_string('download_course','block_about_course').'</a>';
    			$this->content->icons[] = '';
    			$this->content->items[] = '<p id="download_text" style="font-size: 10px;">('.$filesize.' - '.get_strign('downloads','local_alexandria',$counter).')</p>'.
                                '<script type="text/javascript" src="'.$CFG->wwwroot.'/local/alexandria/data/files.js"></script>';
    		}
    	}

        $this->content->footer = '<br/><a style = "font-size: 11px;" href="'.$CFG->wwwroot.'/local/alexandria/data/report_abuse.php?recordid='.$rid.'">'.
                        get_string('reportabuse','local_alexandria').'</a>';
        return $this->content;

    }

}
