<?php

require_once('../../../config.php');
global $CFG;
require_once('tree.class.php');

$top_menu_content = isset($CFG->top_menu_content) ? unserialize($CFG->top_menu_content) : '';
$top_menu_tree = isset($CFG->top_menu_tree) ? unserialize($CFG->top_menu_tree) : '';

if($top_menu_content && $top_menu_tree){
    //Get parents
    $parents = ($top_menu_tree) ? $top_menu_tree->GetChild('-1') : '';
    if(in_array($_POST['item'],$parents)){
        //Is a parent
        $parents_pos_array = array();
        foreach ($parents as $key=>$parent){
            $pos = $top_menu_content[$parent]['pos'];
            $parents_pos_array[$parent]=$pos;
        }
        asort($parents_pos_array);
        $next=false;
        $next_id='';
        $current=$top_menu_content[$_POST['item']]['pos'];
        foreach($parents_pos_array as $id=>$pos){
            if($id==$_POST['item']){
                $next=true;
            }elseif($next){
                $next_id=$id;
                break;
            }
        }
        $top_menu_content[$_POST['item']]['pos']=$top_menu_content[$next_id]['pos'];
        $top_menu_content[$next_id]['pos']=$current;
    }else{
        //Is a child
        $father = $top_menu_tree->getFather($_POST['item']);
        $children = $top_menu_tree->GetChild($father);

        $children_pos_array = array();
        foreach ($children as $key=>$child){
            if($top_menu_content[$child]['name']){
                $pos = $top_menu_content[$child]['pos'];
                $children_pos_array[$child]=$pos;
            }
        }
        asort($children_pos_array);
        $next=false;
        $next_id='';
        $current=$top_menu_content[$_POST['item']]['pos'];
        foreach($children_pos_array as $id=>$pos){
            if($id==$_POST['item']){
                $next=true;
            }elseif($next){
                $next_id=$id;
                break;
            }
        }
        $top_menu_content[$_POST['item']]['pos']=$top_menu_content[$next_id]['pos'];
        $top_menu_content[$next_id]['pos']=$current;
    }
    set_config("top_menu_content", serialize($top_menu_content));
    return true;
}else{
    return false;
}




