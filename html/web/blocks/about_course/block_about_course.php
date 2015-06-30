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

class block_about_course extends block_base {

    function init() {
        $this->title = get_string('courseabout','block_about_course');
    }

    function applicable_formats() {
        return array('course' => true);
    }

    function has_config() {return false;}

    function get_content() {
        global $CFG, $COURSE, $DB, $OUTPUT;

        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass();

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

        // Authos
        $content_text = '<p>'.get_string('author','block_about_course',$author).'</p>';

        // License
        if ($license=='' || strpos($license, "by-nc-sa")!==FALSE){
            $license_type = 'by-nc-sa';
        }else if (strpos($license, "by-nc-nd")!==FALSE){
            $license_type = 'by-nc-nd';
        }else if (strpos($license, "by-sa")!==FALSE){
            $license_type = 'by-sa';
        }else if (strpos($license, "by-nd")!==FALSE){
            $license_type = 'by-nd';
        }else if (strpos($license, "cc-by-nc")!==FALSE){
            $license_type = 'by-nc';
        }else if (strpos($license, "cc-by")!==FALSE){
            $license_type = 'by';
        }else {
            $license_type = 'generic';
        }

        if($license_type != 'generic'){
            $license_url = 'http://creativecommons.org/licenses/'.$license_type.'/4.0/';
            $license_img = '<a rel="license" href="'.$license_url.'"><img src="'.$CFG->wwwroot.'/blocks/about_course/images/'.$license_type.'.png" title="'.$license.'" align="left" style="margin-right: 6px;"/></a>';
        } else {
            $license_url = 'http://creativecommons.org/licenses/';
            $license_img = '<a rel="license" href="'.$license_url.'"><img src="'.$CFG->wwwroot.'/blocks/about_course/images/generic.gif" title="'.$license.'" align="left" style="margin-right: 6px;"/></a>';
        }

        $content_text .= '<p>'.$license_img.'<span style="font-size:0.9em">'.get_string('license_warning','block_about_course', $license_url).'</span></p>';

        // Metainformation (link to database entry)
        $content_text .= '<p><a href="'.$CFG->wwwroot.'/mod/data/view.php?d='.$dataid.'&mode=single&rid='.$rid.'" >'.$OUTPUT->pix_icon('i/info','','moodle',array('class'=>'iconlarge', 'style'=>'margin-right:6px;vertical-align: text-bottom;')).get_string('metainfo','block_about_course').'</a></p>';

    	$module = $DB->get_field('modules','id',array('name' => 'data'));
    	$cmid = $DB->get_field('course_modules','id',array('instance' => $dataid, 'module' => $module));
    	if ($cmid) {
            $file = alexandria_get_course_file($COURSE->id);

    		if (!empty($file)) {
    			$filesize = block_about_course_formatBytes($file->get_filesize());
                $counter = alexandria_get_downloads($rid, $filefieldid);
    			$url = $CFG->wwwroot.'/local/alexandria/data/download.php?rid='.$rid.'&fid='.$filefieldid;
    			$content_text .= '<p><a href="'.$url.'" onclick="increase_counter('.$rid.','.$filefieldid.');">'.$OUTPUT->pix_icon('a/download_all','','moodle',array('class'=>'iconlarge', 'style'=>'margin-right:6px;vertical-align: text-bottom;')).get_string('download_course','block_about_course').'</a></p>';
    			$content_text .= '<p id="download_text" style="font-size: 0.9em; margin-left: 32px;">('.$filesize.' - '.get_string('downloads','local_alexandria',$counter).')</p>'.
                                '<script type="text/javascript" src="'.$CFG->wwwroot.'/local/alexandria/data/files.js"></script>';
    		}
    	}

        $content_text .= '<div><strong>'.get_string('share','block_about_course').'</strong>
                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style ">
                        <a class="addthis_button_preferred_1"> </a>
                        <a class="addthis_button_preferred_2"> </a>
                        <a class="addthis_button_preferred_3"> </a>
                        <a class="addthis_button_preferred_4"> </a>
                        <a class="addthis_button_compact"> </a>
                        <a class="addthis_counter addthis_bubble_style"> </a>
                    </div></div>
                    <script src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5284bae877c8c08c" type="text/javascript"></script>
                    <!-- AddThis Button END -->';

        $this->content->text = $content_text;

        $this->content->footer = '<a style = "font-size: 0.9em;" href="'.$CFG->wwwroot.'/local/alexandria/data/report_abuse.php?recordid='.$rid.'">'.get_string('reportabuse','local_alexandria').'</a>';
        return $this->content;
    }
}
