<?php
///////////////////////////////////////////////////////////////////////////
// Defines Workflow event handlers                                       //
///////////////////////////////////////////////////////////////////////////

/* List of handlers */

$handlers = array (

/*
 * course deleted 
*/
    'course_deleted' => array (
        'handlerfile'      => '/blocks/rate_course/lib.php',// where to call
        'handlerfunction'  => 'block_rate_course_delete',// what to call 
        'schedule'         => 'instant'
    )
);
?>
