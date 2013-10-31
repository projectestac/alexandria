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
        $this->version = 2010042300;
    }
    
    function has_config() {return false;}
    
    function applicable_formats() {
        return array('site' => true);
    }
    
    function get_content(){
        global $CFG, $CONTEXT_SYSTEM;
        
      	if (has_capability('moodle/site:config', get_context_instance(CONTEXT_SYSTEM))){
            if ($this->content !== NULL) {
                return $this->content;
            }
            
            $this->content = new stdClass;
            $this->content->items = array();
            $this->content->icons = array();
            $this->content->footer = '';
            
            $content = get_string('total_of_downloads','block_download_statistics');
            $content.= "<ul>";
            $content .= '<li> <b> ' . get_string('courses','block_download_statistics') . '</b><br> Fitxer:' . block_download_statistics_courses()."</li>";
            
            $old_dataname = '';
            if ($fields = block_download_statistics_fields($CFG->data_coursesdataid)){
                foreach ($fields as $field){
                    if ($field['dataname'] != $old_dataname){
                        $content .= '<li> <b>' . $field['dataname'] . '</b></li>';
                        $old_dataname = $field['dataname'];
                    }
                    $content .= $field['name'] . ': ' . $field['downloads'].'<br>';
                }            
            }
            $content.="</ul>";
            $this->content->items[] = $content;
            return $this->content;    
        }                  
    }
}