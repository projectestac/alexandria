<?php 

function block_download_statistics_fields() {
    global $CFG,$DB;
	
    $sql = "
	SELECT df.id, df.dataid, df.name  FROM {data_fields} df
	WHERE df.name IN ('Fitxer','Fitxer SCORM')
	AND df.dataid IN (
		SELECT cm.instance FROM {course_modules} cm
		WHERE df.dataid = cm.instance
		AND cm.course = 1
		AND cm.module IN (
			SELECT id FROM {modules} m
			WHERE m.name = 'data'
		)
	)	
    ";
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

function get_data_records($limitfrom = 0,$limitnum = 0,$order = null, $direction='ASC') {
	global $DB;
	
	$sql = 'SELECT * FROM {data_records} dr';

	$sql .= ' ORDER BY (';
	switch($order) {
		default: case 'name':
			$sql .= "SELECT dc.content FROM {data_content} dc
				WHERE dc.recordid = dr.id
				AND dc.fieldid IN (
					SELECT df.id FROM {data_fields} df
					WHERE df.dataid = dr.dataid
					AND df.name = 'Nom'
				)
			";
			break;
		case 'database':
			$sql .= "SELECT d.name FROM {data} d
				WHERE d.id = dr.dataid
			";
			break;
		case 'downloads':	
			$sql .= "SELECT CAST(dc.content4 as UNSIGNED) FROM {data_content} dc
                                WHERE dc.recordid = dr.id
                                AND dc.fieldid IN (
                                        SELECT df.id FROM {data_fields} df
                                        WHERE df.dataid = dr.dataid
                                        AND df.name IN ('Fitxer','Fitxer SCORM')
                                )
                        ";
			break;
	}

	$sql .= ') '.$direction;

	if (!empty($limitnum)) 
		$sql .= ' LIMIT '.$limitfrom.','.$limitnum;

	$records = $DB->get_records_sql($sql);

	$filefields = array('Fitxer','Fitxer SCORM');	

	$items = array();
	foreach($records as $record) {
		$item = new stdClass();
		$contents = $DB->get_records('data_content',array('recordid' => $record->id));
		foreach($contents as $content) {
			$field = $DB->get_field('data_fields','name',array('id' => $content->fieldid));
			$item->$field = $content->content;
			if (in_array($field,$filefields))
				$item->downloads = $content->content4;
		}
		if (empty($item->downloads)) $item->downloads = 0;
		$item->id = $record->id;
		$item->dataid = $record->dataid;
		$item->database = $DB->get_field('data','name',array('id' => $record->dataid));
		$items[] = $item;
	}	
	return $items;
}


?>
