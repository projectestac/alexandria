<?php 

/**
 * This block shows the top rated entries for specified database
 *
 * @copyright &copy; 2009 Education Department of Catalonia
 * @author sara.arjona@gmail.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

class block_top_rate_entries extends block_base {
    function init() {
        $this->title = get_string('toprateentries', 'block_top_rate_entries');
        $this->version = 2009111801;
    }

    function applicable_formats() {
        return array('site' => true);
    }
    
    function specialization() {
        $this->title = isset($this->config->title) ? format_string($this->config->title) : format_string(get_string('toprateentries', 'block_top_rate_entries'));
    }

    function instance_allow_multiple() {
        return true;
    }    

    function get_content() {
        global $CFG;

        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = '';
        $this->content->footer = '';

        if (empty($this->instance)) {
            return $this->content;
        }
        
        if (isset($this->config->databaseid)){
            $caducityseconds = isset($this->config->caducityseconds)?$this->config->caducityseconds:0;
            if (isset($this->config->text) && (time() < $this->config->timemodified + $caducityseconds)){
                // Get from cache
                $this->content->text = $this->config->text;
            }else{
                // It's necessary to update this information
                $databaseid = $this->config->databaseid;
                $maxentries = isset($this->config->maxentries)?$this->config->maxentries:null;
                $topratedentries = $this->get_top_rated_entries($databaseid, $this->config->titlefieldid, $this->config->authorfieldid, $maxentries);
        		if (!empty($topratedentries)){
        	        foreach($topratedentries as $entry){
        	            if (!empty($entry->avgrating)){
        	                $title=$this->get_formatted_text($entry->title);
                            $rating=round($entry->avgrating, 1);
                            $this->content->text.= "<div><div style=\"float:left\"><a href=\"$CFG->wwwroot/mod/data/view.php?rid=$entry->id\" alt=\"".$entry->title."\" title=\"".$entry->title."\" >".$title."</a></div><div style=\"float:right\">";
                            $this->content->text.= '<img src="'.$CFG->wwwroot.'/mod/data/rating_graphic.php?avg='.$rating.'&small=1" alt="'.$rating.'" title="'.$rating.'"/></div></div>';
                            //&nbsp;&nbsp; (<span style='font-weight:bold; font-size:larger;'>".round($entry->avgrating, 1)."</span>/<span style='font-size:smaller'>5</span>)</div></div>";
        	                $author=$this->get_formatted_text($entry->author);
                            $this->content->text.= "<div style='clear:both;font-size:small;color:#666;' title=\"".$entry->author."\">".$author."</div>";
        	            }
        	        }
        		}
                $this->config->timemodified=time();
                $this->config->text=$this->content->text;
                $this->instance_config_commit();
            }
        }
        
        return $this->content;
    }
    
    function get_formatted_text($text, $maxlength=25){
        return (strlen($text)>$maxlength)?(substr($text, 0, $maxlength)."..."):$text;
    }
    
    /**
     * This function get the top rated courses
     * @return array with top rated courses
     */
    function get_top_rated_entries($databaseid, $titlefieldid, $authorfieldid, $maxentries=5){
        global $CFG;

        $topentries = array();
        $sql = "SELECT DISTINCT r.id, a.content as title, b.content as author, r.timecreated, r.timemodified, r.userid, u.firstname, u.lastname, AVG(dr.rating) AS avgrating
                FROM ".$CFG->prefix."data_content c LEFT JOIN ".$CFG->prefix."data_ratings dr ON c.recordid=dr.recordid, ".$CFG->prefix."data_records r, ".$CFG->prefix."data_content cs, ".$CFG->prefix."user u, (SELECT recordid, content FROM ".$CFG->prefix."data_content WHERE fieldid=".$titlefieldid.") a, (SELECT recordid, content FROM ".$CFG->prefix."data_content WHERE fieldid=".$authorfieldid.") b 
                WHERE c.recordid = r.id AND r.userid = u.id AND cs.recordid = r.id AND a.recordid=r.id AND b.recordid=r.id AND r.dataid = ".$databaseid."
                GROUP BY c.recordid
                ORDER BY avgrating DESC, r.timemodified DESC, r.timecreated DESC";                                
        $topentries = get_records_sql($sql, 0, $maxentries);
        return $topentries;
    }
       
    
}

?>
