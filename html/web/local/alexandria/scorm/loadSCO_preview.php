<?php
require_once('../../../config.php');
require_once($CFG->dirroot.'/mod/scorm/locallib.php');

$id    = optional_param('id', '', PARAM_INT);    // Course Module ID, or
$a     = optional_param('a', '', PARAM_INT);     // scorm ID
$scoid = required_param('scoid', PARAM_INT);     // sco ID

$delayseconds = 2;  // Delay time before sco launch, used to give time to browser to define API

if (!empty($id)) {
    if (! $cm = get_coursemodule_from_id('scorm', $id)) {
        print_error('invalidcoursemodule');
    }
    if (! $course = $DB->get_record('course', array('id'=>$cm->course))) {
        print_error('coursemisconf');
    }
    if (! $scorm = $DB->get_record('scorm', array('id'=>$cm->instance))) {
        print_error('invalidcoursemodule');
    }
} else if (!empty($a)) {
    if (! $scorm = $DB->get_record('scorm', array('id'=>$a))) {
        print_error('coursemisconf');
    }
    if (! $course = $DB->get_record('course', array('id'=>$scorm->course))) {
        print_error('coursemisconf');
    }
    if (! $cm = get_coursemodule_from_instance('scorm', $scorm->id, $course->id)) {
        print_error('invalidcoursemodule');
    }
} else {
    print_error('missingparameter');
}
$PAGE->set_url('/local/alexandria/scorm/loadSCO_preview.php', array('scoid'=>$scoid, 'id'=>$cm->id));

//check if scorm closed
$timenow = time();
if ($scorm->timeclose !=0) {
    if ($scorm->timeopen > $timenow) {
        print_error('notopenyet', 'scorm', null, userdate($scorm->timeopen));
    } else if ($timenow > $scorm->timeclose) {
        print_error('expired', 'scorm', null, userdate($scorm->timeclose));
    }
}

$context = context_module::instance($cm->id);

if (!empty($scoid)) {
    //
    // Direct SCO request
    //
    if ($sco = scorm_get_sco($scoid)) {
        if ($sco->launch == '') {
            // Search for the next launchable sco
            if ($scoes = $DB->get_records_select(
                    'scorm_scoes',
                    'scorm = ? AND '.$DB->sql_isnotempty('scorm_scoes', 'launch', false, true).' AND id > ?',
                    array($scorm->id, $sco->id),
                    'id ASC')) {
                $sco = current($scoes);
            }
        }
    }
}
//
// If no sco was found get the first of SCORM package
//
if (!isset($sco)) {
    $scoes = $DB->get_records_select(
        'scorm_scoes',
        'scorm = ? AND '.$DB->sql_isnotempty('scorm_scoes', 'launch', false, true),
        array($scorm->id),
        'id ASC'
    );
    $sco = current($scoes);
}

if ($sco->scormtype == 'asset') {
    $attempt = scorm_get_last_attempt($scorm->id, $USER->id);
    $element = (scorm_version_check($scorm->version, SCORM_13)) ? 'cmi.completion_status':'cmi.core.lesson_status';
    $value = 'completed';
    $result = scorm_insert_track($USER->id, $scorm->id, $sco->id, $attempt, $element, $value);
}

//
// Forge SCO URL
//
$connector = '';
$version = substr($scorm->version, 0, 4);
if ((isset($sco->parameters) && (!empty($sco->parameters))) || ($version == 'AICC')) {
    if (stripos($sco->launch, '?') !== false) {
        $connector = '&';
    } else {
        $connector = '?';
    }
    if ((isset($sco->parameters) && (!empty($sco->parameters))) && ($sco->parameters[0] == '?')) {
        $sco->parameters = substr($sco->parameters, 1);
    }
}

if ($version == 'AICC') {
    require_once("$CFG->dirroot/mod/scorm/datamodels/aicclib.php");
    $aicc_sid = scorm_aicc_get_hacp_session($scorm->id);
    if (empty($aicc_sid)) {
        $aicc_sid = sesskey();
    }
    $sco_params = '';
    if (isset($sco->parameters) && (!empty($sco->parameters))) {
        $sco_params = '&'. $sco->parameters;
    }
    $launcher = $sco->launch.$connector.'aicc_sid='.$aicc_sid.'&aicc_url='.$CFG->wwwroot.'/mod/scorm/aicc.php'.$sco_params;
} else {
    if (isset($sco->parameters) && (!empty($sco->parameters))) {
        $launcher = $sco->launch.$connector.$sco->parameters;
    } else {
        $launcher = $sco->launch;
    }
}

if (scorm_external_link($sco->launch)) {
    //TODO: does this happen?
    $result = $launcher;
} else if ($scorm->scormtype === SCORM_TYPE_EXTERNAL) {
    // Remote learning activity
    $result = dirname($scorm->reference).'/'.$launcher;
} else if ($scorm->scormtype === SCORM_TYPE_IMSREPOSITORY) {
    // Repository
    $result = $CFG->repositorywebroot.substr($scorm->reference, 1).'/'.$sco->launch;
} else if ($scorm->scormtype === SCORM_TYPE_LOCAL or $scorm->scormtype === SCORM_TYPE_LOCALSYNC) {
    //note: do not convert this to use get_file_url() or moodle_url()
    //SCORM does not work without slasharguments and moodle_url() encodes querystring vars
    $result = "$CFG->wwwroot/pluginfile.php/$context->id/mod_scorm/content/$scorm->revision/$launcher";
}

add_to_log($course->id, 'scorm', 'launch', 'view.php?id='.$cm->id, $result, $cm->id);

// which API are we looking for
$LMS_api = (scorm_version_check($scorm->version, SCORM_12) || empty($scorm->version)) ? 'API' : 'API_1484_11';

header('Content-Type: text/html; charset=UTF-8');

?>
<html>
    <head>
        <title>LoadSCO</title>
       <script>function doredirect() {
                location = "<?php echo $result ?>";
        }
        //]]>
        </script>
        <noscript>
            <meta http-equiv="refresh" content="0;url=<?php echo $result ?>" />
        </noscript>
    </head>
    <body onload="doredirect();">
        <p><?php echo get_string('activitypleasewait', 'scorm');?></p>
    </body>
</html>
