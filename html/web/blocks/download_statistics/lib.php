<?php 

function block_download_statistics_fields() {
	global $CFG,$DB;
	
    $sql = 'SELECT id, dataid, name  FROM {data_fields} WHERE type=\'file\'';
    if (! $result = $DB->get_records_sql($sql)){
        return false;
    } 
   
    $i=1;
    $old_dataid = '';
    $old_dataname = '';
    
    foreach($result as $key => $value){
        if ($value->dataid != $old_dataid){
            $fields[$i]['dataname'] = $DB->get_field('data', 'name', array('id' => $value->dataid));    
            $old_dataid = $value->dataid;
            $old_dataname = $fields[$i]['dataname'];
        }else{
            $fields[$i]['dataname'] = $old_dataname;
        }
        $fields[$i]['dataid'] = $value->dataid;
        $fields[$i]['id'] = $value->id;
        $fields[$i]['name'] = $value->name;
        
        $sql = 'SELECT SUM(`content4`) FROM {data_content} WHERE `fieldid`=' . $value->id;
        if (! $downloads = $DB->get_field_sql($sql)){
            $fields[$i]['downloads'] = 0;
        }else{
            $fields[$i]['downloads'] = $downloads;
        }
        $i++;            
    }
    return $fields;
}


?>
