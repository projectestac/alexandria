<?php
/**
 * block_share.php
 * @author j.beedell@open.ac.uk Feb08
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

class block_share extends block_base {

    function init() {
        $this->title = get_string('title', 'block_share');
        $this->version = 2008021400;
    }

    function applicable_formats() {
        return array('all' => true, 'my' => false);
    }

    function get_content() {
        global $CFG, $COURSE, $USER;

        if ($this->content !== NULL) {
            return $this->content;
        }

        $path =  $CFG->wwwroot . '/course/view.php?name=' . $COURSE->shortname;
        $top = $CFG->wwwroot;
        // TODO there is an issue with course names that have extended characters bug 4836
        $unit = str_replace('?', '%'.bin2hex('?'), $COURSE->fullname); //not correct but just as effective as other solutions
        $unit = addslashes($unit);

/*        $js = "window.location = 'mailto: ?subject=".get_string('mailsubject', 'block_share')."&amp;body=Hi,%0D%0A%0D%0A";
        $js .= "I\'ve just come across the OpenLearn website ($top) where you can study Open University materials online for free.%0D%0A%0D%0A";
        $js .= "I particularly thought you might be interested in \'$unit\' which is available at:%0D%0A%0D%0A";
        $js .= "$path%0D%0A%0D%0AHope you find it useful!'; ";
        $js .= "document.blockshare.submit();return false";
*/
        $mailbody=get_string('mailbody1', 'block_share').get_string('mailbody2', 'block_share', $top).get_string('mailbody3', 'block_share', strtoupper($unit)).$path.get_string('mailbody4', 'block_share');
        $js = "window.location = 'mailto: ?subject=".get_string('mailsubject', 'block_share')."&amp;body='+escape('".$mailbody."');";

        $this->content = new stdClass;
        /*$this->content->text = '<div><form action="'.$CFG->wwwroot.'/blocks/share/share.php" method="post" name="blockshare">';
        $this->content->text .= '<input type="hidden" name="courseid" value="'.$COURSE->id.'"/>';
        $this->content->text .= '<input type="button" name="block_share" value="'.get_string('buttontxt', 'block_share').'" onclick="'.$js.'"/>';
        $this->content->text .= '</form>';
         $this->content->text .= helpbutton('block_share', get_string('helptxt', 'block_share'), '', true, false, '', true);
        $this->content->text .= '</div>';*/
        $this->content->text .= '<div style="font-size:0.8em">'.get_string('permanentlink', 'block_share').': ';
        $this->content->text .= '<input type="textbox" style="width:180px;" value="' . $path . '" readonly="readonly" name="displayonly"/>';
        $this->content->text .= '</div>';
        $this->content->text .= '<br><div style="text-align:center">';
        $this->content->text .= '<a href="http://del.icio.us/post?url='.$path.'&title='.$COURSE->fullname.'" target="_blank"><img src="'.$CFG->wwwroot.'/blocks/share/images/delicious.png" border="0" alt="Delicious"></a> ';
        $this->content->text .= '<a href="http://www.facebook.com/share.php?u='.$path.'&t='.$COURSE->fullname.'" target="_blank"><img src="'.$CFG->wwwroot.'/blocks/share/images/facebook.png" border="0" alt="Facebook"></a> ';
        $this->content->text .= '<a href="http://twitter.com/home?status='.$path.'&title='.$COURSE->fullname.'" target="_blank"><img src="'.$CFG->wwwroot.'/blocks/share/images/twitter.png" border="0" alt="twitter"></a> ';
        $this->content->text .= '</div>';
        $this->content->footer = '';

        return $this->content;
    }

}
?>
