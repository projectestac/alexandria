<div id="top_menu_date">
<?php
//print_course_search("", false, "shortest");
?>    
</div>
<ul>
     
       <!--li class="home"><div><a href="<?php echo $CFG->wwwroot.'/' ?>"><img width="18" height="17" src="<?php echo $CFG->httpswwwroot.'/theme/'.current_theme() ?>/images/home_icon.png" alt=""/></a></div>
       </li--> 

<?php
$menu = (isset($CFG->thememenuoptions)?$CFG->thememenuoptions:"");
$menu_ar= explode("$$$$", $menu);
foreach ($menu_ar as $item){
    $submenu_ar= explode("$$", $item);
    $i = 0;
    while ($i<sizeof($submenu_ar)) {
       if ($i==0) {
           echo "<li><div><a href='".$submenu_ar[$i+1]."'>$submenu_ar[$i]</a>";
           if (sizeof($submenu_ar)>2) echo "<ul>";
       }
	   else if ($i==2) echo "<li><a href='".$submenu_ar[$i+1]."'  class=\"first_submenu\">$submenu_ar[$i]</a></li>";
       else echo "<li><a href='".$submenu_ar[$i+1]."'>$submenu_ar[$i]</a></li>";
       $i=$i+2;
    }
    if (sizeof($submenu_ar)>2) echo "</ul>";
    echo "</div></li>";            
}

?>
 
        <!--li><div><a href="http://sfol.blogspot.com">El bloc</a>
            <ul><li><a href="http://">Ítem 1</a></li>
		    <li><a href="http://">Ítem 2</a></li>
		    <li><a href="http://">Ítem 3</a></li>
            </ul>
        </div></li>
 
 		<li><div><a href="<?php echo $CFG->wwwroot.'/' ?>">Menú dos</a>
        <ul>     
    <li><a href="http://">Ítem 1</a></li>
		<li><a href="http://">Ítem 2</a></li>
		            </ul></div></li>

 		<li><div><a href="<?php echo $CFG->wwwroot.'/' ?>">Menú 3</a>
        <ul>     
    <li><a href="http://">Ítem 1</a></li>
		<li><a href="http://">Ítem 2</a></li>
		            </ul></div></li-->

</ul>
 
 
        
