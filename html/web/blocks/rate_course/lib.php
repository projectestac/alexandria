<?php
/*
 * Called by event handling on course deletion to tidy up database
 * @param $eventdata object event information including course id
 * @return SQL set or false on fail
 */
function block_rate_course_delete($eventdata) {
    $res =  delete_records('block_rate_course','course',$eventdata->id);
    if ($res === false) { return $res; } else {return true;}
}
?>