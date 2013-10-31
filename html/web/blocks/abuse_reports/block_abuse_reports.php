<?php
/**
 * This block shows the abuse reports
 *
 * @copyright &copy; 2011 Education Department of Catalonia
 * @author felix.casanellas@gmail.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

include_once("$CFG->dirroot/blocks/abuse_reports/lib.php");

class block_abuse_reports extends block_list {

    function init() {
        $this->title = get_string('abuse_reports','block_abuse_reports');
        $this->version = 2011051100;
    }

    function has_config() {return false;}

    function applicable_formats() {
        return array('site' => true);
    }

    function  get_content() {
        global $CFG, $CONTEXT_SYSTEM;

      	if (has_capability('moodle/site:config', get_context_instance(CONTEXT_SYSTEM))){
            if ($this->content !== NULL) {
                return $this->content;
            }

            $this->content = new stdClass;
            $this->content->items = array();
            $this->content->icons = array();
            $this->content->footer = '<a href="'.$CFG->wwwroot.'/mod/data/view_reports.php">'.get_string('more_info','block_abuse_reports').'</a>';
            
            $content = get_string('last_five_reports','block_abuse_reports');

            $reports = block_abuse_reports_reports();
            foreach ($reports as $report){
                $content .= '<div class="report" style="margin-top: 10px;">';
                switch ($report['topic']){
                    case 'nudity':
                        $content .= '<img src="'.$CFG->wwwroot.'/blocks/abuse_reports/graphic/content_error.png" title="'.$report['description'].'" alt="error_abuse_report" width="15px"/>';
                        break;
                    case 'copyrights':
                        $content .= '<img src="'.$CFG->wwwroot.'/blocks/abuse_reports/graphic/copyright.png" title="'.$report['description'].'" alt="copyright_abuse_report" width="15px"/>';
                        break;
                    case 'other':
                        $content .= '<img src="'.$CFG->wwwroot.'/blocks/abuse_reports/graphic/warning.png" title="'.$report['description'].'" alt="other_abuse_report" width="15px"/>';
                        break;
                }
                $content .= ' <a href="'.$CFG->wwwroot.'/mod/data/view.php?rid='.$report['content_id'].'">'.$report['content_name'].'</a>';
                $content .= '<br/><a href="'.$CFG->wwwroot.'/user/view.php?id='.$report['reporter_id'].'" style="font-size:x-small;">'.$report['reporter_name'].'</a>';
                $content .= ' <span style="font-size:x-small;">('.date("d-m-Y", $report['date']).')</span></div>';
            }
            
            $this->content->items[] = $content;
            return $this->content;
        }
    }
}
?>