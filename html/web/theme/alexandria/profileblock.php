<table border="0" height="55">
  <!--tr>
    <td width="600" height="60" valign="bottom"><div class="header-profilename" id="header-profilename">
    <?PHP
	
	    function get_content () {
        global $USER, $CFG, $SESSION, $COURSE;
        $wwwroot = '';
        $signup = '';}

        if (empty($CFG->loginhttps)) {
            $wwwroot = $CFG->wwwroot;
        } else {
            $wwwroot = str_replace("http://", "https://", $CFG->wwwroot);
        }
        
	
if (!isloggedin() or isguestuser()) {
echo '<a href="'.$CFG->wwwroot.'/login/index.php">'.get_string('loggedinnot').'</a>';

} else {
echo '<a href="'.$CFG->wwwroot.'/user/view.php?id='.$USER->id.'&amp;course='.$COURSE->id.'">'.$USER->firstname.' '.$USER->lastname.'</a>';
}		


?>
    </div></td>
  </tr-->
<tr>
    <td width="600" height="40" valign="bottom" align="right">
    <div class="header-right-logo" id="header-right-logo">
        <a href="http://www.gencat.cat/educacio/" style="display: block; width: 200px; height: 30px;"><div id="logo_gene"></div></a>
    </div></td>
  </tr>  
  <tr>
    <td width="600" height="35" valign="bottom"> <div class="header-profileoptions" id="header-profileoptions">

 <?PHP
				
if (!isloggedin() or isguestuser()) {
echo '<form class="loginform" id="login" method="post" action="'.$wwwroot.'/login/index.php">';
echo '<label for="login_username">'.get_string('username').'</label><input class="loginform" type="text" name="username" id="login_username" value="" />&nbsp;&nbsp;';
echo '<label for="login_password">'.get_string('password').'</label><input class="loginform" type="password" name="password" id="login_password" value="" />&nbsp;&nbsp;';
echo '<input type="submit" value="&nbsp;&nbsp;'.get_string('login').'&nbsp;&nbsp;" />';
echo '</form>';

} else {
echo '<a class="username" href="'.$CFG->wwwroot.'/user/view.php?id='.$USER->id.'&amp;course='.$COURSE->id.'">'.$USER->firstname.' '.$USER->lastname.'</a>';
//echo '<a href="'.$CFG->wwwroot.'/user/edit.php?id='.$USER->id.'&amp;course='.$COURSE->id.'">'.get_string('updatemyprofile').'</a></li> | ';
echo ' [<a href="'.$CFG->wwwroot.'/login/logout.php?sesskey='.sesskey().'">'.get_string('logout').'</a>] ';
}

?>


    
    </div>
    </td>
  </tr>
</table>
