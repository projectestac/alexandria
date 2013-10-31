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
        'handlerfile'      => '/blocks/version_course/lib.php',// where to call
        'handlerfunction'  => 'block_version_course_delete',// what to call 
        'schedule'         => 'instant'
    )
);
?>
