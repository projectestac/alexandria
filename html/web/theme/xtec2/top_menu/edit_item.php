<?php

require_once("../../../config.php");
global $CFG;

$top_menu_content = isset($CFG->top_menu_content) ? unserialize($CFG->top_menu_content) : '';
if($top_menu_content){
    $item = $_POST['item'];
    $top_menu_content[$item]['name'] = $_POST['name'];
    $top_menu_content[$item]['url'] = $_POST['url'];
    set_config("top_menu_content", serialize($top_menu_content));
    return true;
}else{
    return false;
}




