<?php
    //XTEC - ALEXANDRIA  ************ AFEGIT - File added to prevew SCORM files
    //2011.05.23 @fcasanel
    //2013.11.08 Marc Espinosa Zamora <marc.espinosa.zamora@upcnet.es>

    require_once('../../config.php');
    require_once('locallib.php');

    $a = optional_param('a', '', PARAM_INT);         // scorm ID
    $scoid = required_param('scoid', PARAM_INT);  // sco ID
    if ($USER->id == '0') $USER = authenticate_user_login('guest', 'guest');
    
    //Get $scorm object
    if (!empty($a)) {
        if (! $scorm = $DB->get_record("scorm", array("id" => $a))) {
            error("Course module is incorrect");
        }
        if (! $course = $DB->get_record("course", array("id" => $scorm->course))) {
            error("Course is misconfigured");
        }
        if (! $cm = get_coursemodule_from_instance("scorm", $scorm->id, $course->id)) {
            error("Course Module ID was incorrect");
        }
    } else {
        error('A required parameter is missing');
    }

    //SCORM version
    $scorm->version = strtolower(clean_param($scorm->version, PARAM_SAFEDIR));   // Just to be safe
    if (!file_exists($CFG->dirroot.'/mod/scorm/datamodels/'.$scorm->version.'lib.php')) {
        $scorm->version = 'scorm_12';
    }
    //Include library for the SCORM version
    require_once($CFG->dirroot.'/mod/scorm/datamodels/'.$scorm->version.'lib.php');

    $mode = 'browse'; //Fixed

    //Get $toc object
    $toc = scorm_get_toc($USER, $scorm, $cm->id, TOCJSLINK, '', $scoid, $mode, 0, true, true);
    $sco = $toc->sco;
    $index = $toc->toc;
    $index = str_replace('player.php', 'preview.php', $index);
    $index = '<div id="scorm_index">'.str_replace("\'", "'", $index).'</div>';
    $menu = $toc->tocmenu;
    $menu = str_replace('player.php', 'preview.php', $menu);
    $title = $sco->title;
    $title = '<h3>'.str_replace("\'", "'", $title).'</h3>';
    $index = str_replace('<a','<a onclick="document.getElementById(\'sco_container\').src = \'loadSCO_preview.php?display=popup&\'+this.title;"',$index);
    //Get Iframe
    $scoidstr = '&amp;scoid='.$sco->id;
    $modestr = '&amp;mode='.$mode;
    $iframe = '<iframe id="sco_container" class="content_frame" src="loadSCO_preview.php?a='.$a.$scoidstr.$modestr.'&display=popup" style="width: 100%; height: 500px;"></iframe>';

    //Javascript to hide and show index
    $javascript =
        '<script type="text/javascript" src="request.js"></script>
        <script type="text/javascript" src="api.php?a='.$a.$scoidstr.$modestr.'&attempt=1"></script>
        <script type="text/javascript" src="'.$CFG->wwwroot.'/mod/scorm/rd.js"></script>
        <script type="text/javascript">

            function hide_index(){
                document.getElementById("scorm_index").style.display="none";
                document.getElementById("show_hide").innerHTML=\'<span onclick="show_index()">'.get_string('show_index','scorm').'</span>\';
            }

            function show_index(){
                document.getElementById("scorm_index").style.display="block";
                document.getElementById("show_hide").innerHTML=\'<span onclick="hide_index()">'.get_string('hide_index','scorm').'</span>\';
            }

        </script>';
    
    if (($sco->previd != 0) && ((!isset($sco->previous)) || ($sco->previous == 0))) {
        $scostr = '&scoid='.$sco->previd;
        $javascript .= '    <script type="text/javascript">'."\n//<![CDATA[\n".'var prev="'.$CFG->wwwroot.'/mod/scorm/preview.php?a='.$a.$scostr."\";\n//]]>\n</script>\n";
    } else {
        $javascript .= '    <script type="text/javascript">'."\n//<![CDATA[\n".'var prev="'.$CFG->wwwroot.'/mod/scorm/preview.php?a='.$a.'&scoid=0'."\";\n//]]>\n</script>\n";
    }
    if (($sco->nextid != 0) && ((!isset($sco->next)) || ($sco->next == 0))) {
        $scostr = '&scoid='.$sco->nextid;
        $javascript .= '    <script type="text/javascript">'."\n//<![CDATA[\n".'var next="'.$CFG->wwwroot.'/mod/scorm/preview.php?a='.$a.$scostr."\";\n//]]>\n</script>\n";
    } else {
        $javascript .= '    <script type="text/javascript">'."\n//<![CDATA[\n".'var next="'.$CFG->wwwroot.'/mod/scorm/preview.php?a='.$a."\";\n//]]>\n</script>\n";
    }
        

    $show_hide = '<div id="show_hide"><span onclick="show_index()">'.str_replace("\'", "'", get_string('show_index','scorm')).'</span></div>';

    echo $OUTPUT->header();
    echo $javascript;
    echo '<div id="scormapi-parent">
            <script id="external-scormapi" type="text/JavaScript"></script>
        </div>';
    echo $title;
    echo $show_hide;
    echo $index;
    echo '<script>hide_index();</script>';
    echo $iframe;
