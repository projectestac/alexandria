<?php 

function block_download_statistics_courses() {
	global $CFG;
	
    $sql = 'SELECT SUM(`downloading`) FROM `'.$CFG->prefix.'block_download_course`';
    if (! $downloading = get_field_sql($sql)){
        $downloading = 0;
    }    
    return $downloading;
}

function block_download_statistics_fields($courses_dataid) {
	global $CFG;
	
	$statistics_db = split(',', $CFG->block_download_statistics_db);
    $sql = 'SELECT id, dataid, name  FROM '.$CFG->prefix.'data_fields WHERE type=\'file\' AND (';
    $i = 1;
	foreach ($statistics_db as $db){
		$sql.=' dataid='.$db.' ';
		if ($i < sizeof($statistics_db)){
			$sql.=' OR ';
		}
		$i++;
	}
    $sql.=' ) ORDER BY `dataid` DESC';
    
    if (! $result = get_records_sql($sql)){
        return false;
    } 
   
    $i=1;
    $old_dataid = '';
    $old_dataname = '';
    
    foreach($result as $key => $value){
        if ($value->dataid != $old_dataid){
            $fields[$i]['dataname'] = get_field('data', 'name', 'id', $value->dataid);        
            $old_dataid = $value->dataid;
            $old_dataname = $fields[$i]['dataname'];
        }else{
            $fields[$i]['dataname'] = $old_dataname;
        }
        $fields[$i]['dataid'] = $value->dataid;
        $fields[$i]['id'] = $value->id;
        $fields[$i]['name'] = $value->name;
        
        $sql = 'SELECT SUM(`content4`) FROM `'.$CFG->prefix.'data_content` WHERE `fieldid`=' . $value->id;
        if (! $downloads = get_field_sql($sql)){
            $fields[$i]['downloads'] = 0;
        }else{
            $fields[$i]['downloads'] = $downloads;
        }
        $i++;            
    }
    return $fields;
}


?>
