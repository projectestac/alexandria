<?php

/**
 * This block shows the downloads statistics
 *
 * @copyright &copy; 2010 Education Department of Catalonia
 * @author felix.casanellas@gmail.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

include_once("$CFG->dirroot/blocks/download_statistics/lib.php"); 

class block_download_statistics extends block_list {
    
    function init() {
        $this->title = get_string('download_statistics','block_download_statistics');
    }
    
    function has_config() {return false;}
    
    function applicable_formats() {
        return array('all' => true);
    }
    
    function get_content(){
        global $CFG;
      	if (has_capability('moodle/site:config', context_system::instance())) {
            if ($this->content !== NULL) {
                return $this->content;
            }
             
            $this->content = new stdClass;
            $this->content->items = array();
            $this->content->icons = array();
            $this->content->footer = '';
            
            $content = get_string('total_of_downloads','block_download_statistics');
            $content.= "<ul>";
            $old_dataname = '';
	    $data = array();
            if ($fields = block_download_statistics_fields()){
                foreach ($fields as $field) {
		    if (!isset($data[$field['dataname']]))
			$data[$field['dataname']] = 0;
		    $data[$field['dataname']] += $field['downloads'];
		}
		foreach($data as $key => $value) {
			$content .= '<li><b>'.$key.':</b> '.$value.'</li>';
		}
            }
            $content.="</ul>";
            $this->content->items[] = $content;
            return $this->content;    
        }                  
    }
}
