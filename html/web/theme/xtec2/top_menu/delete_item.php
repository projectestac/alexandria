<?php

require_once('../../../config.php');
require_once('tree.class.php');
global $CFG;

$top_menu_content = isset($CFG->top_menu_content) ? unserialize($CFG->top_menu_content) : '';
$top_menu_tree = isset($CFG->top_menu_tree) ? unserialize($CFG->top_menu_tree) : '';

//Values are deleted but structure tree structure is maintained. Another solution is necessary

if($top_menu_content){
    $item = $_POST['item'];
    $top_menu_content[$item]['name'] = '';
    $top_menu_content[$item]['url'] = '';

    //Delete item sons
    $children = $top_menu_tree->GetChild($item);
    if($children){
        foreach ($children as $key=>$child){
            $top_menu_content[$child]['name'] = '';
            $top_menu_content[$child]['url'] = '';
        }
    }
    set_config("top_menu_content", serialize($top_menu_content));
    return true;
}else{
    return false;
}




