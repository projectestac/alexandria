<?php
/**
 * Share course block
 *
 * @copyright &copy; 2013 Education Department of Catalonia
 * @author marc.espinosa.zamora@upcnet.es (2013) 
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

class block_share_course extends block_base {

    function init() {
        $this->title = get_string('pluginname', 'block_share_course');
    }

    function has_config() {
        return false;
    }

    function instance_allow_multiple() {
        return false;
    }

    function get_content() {
        global $CFG;

        if ($this->content !== NULL) {
            return $this->content;
        }
	
	$this->content = new stdClass();

	$this->content->text = '<!-- AddThis Button BEGIN -->
		<div class="addthis_toolbox addthis_default_style ">
			<a class="addthis_button_preferred_1"></a>
			<a class="addthis_button_preferred_2"></a>
			<a class="addthis_button_preferred_3"></a>
			<a class="addthis_button_preferred_4"></a>
			<a class="addthis_button_compact"></a>
			<a class="addthis_counter addthis_bubble_style"></a>
		</div>
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-52849331087b0a96"></script>
	<!-- AddThis Button END -->';

        return $this->content;
    }


}
