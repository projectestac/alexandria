<?php

require_once('../../../config.php');
require_once('tree.class.php');
global $CFG;

$top_menu_content = isset($CFG->top_menu_content) ? unserialize($CFG->top_menu_content) : '';
$top_menu_tree = isset($CFG->top_menu_tree) ? unserialize($CFG->top_menu_tree) : '';

$url = ($_POST['url']=='http://') ? '' : $_POST['url'];


if($top_menu_content && $top_menu_tree){
    //Isn't the first item
    $id = count($top_menu_content);
    $parent = $_POST['item'];
    $top_menu_content[$id] = array('name' => $_POST['name'],
                                   'url'=>  $url,
                                    'pos'=> $id);
    $top_menu_tree->AddNode($id,$parent);
}else{
    //Is the first item
    $top_menu_tree = new Tree;
    $top_menu_content = array();
    $top_menu_content[0] = array('name' => $_POST['name'],
                                 'url'=>  $url,
                                 'pos'=>  '0');
    $top_menu_tree->AddNode('0','-1');
}

set_config("top_menu_content", serialize($top_menu_content));
set_config("top_menu_tree", serialize($top_menu_tree));




