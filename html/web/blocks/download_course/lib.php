<?php

include_once("$CFG->dirroot/backup/lib.php");
include_once("$CFG->dirroot/backup/backuplib.php");
include_once("$CFG->libdir/pclzip/pclzip.lib.php");

/*
 * Called by event handling on course deletion to tidy up database
 * @param $eventdata object event information including course id
 * @return SQL set or false on fail
 */
function block_download_course_delete($eventdata) {
    $res =  delete_records('block_download_course','course', $eventdata->id);
    if ($res === false) { return $res; } else {return true;}    
}


function block_download_course_get_current_backup_file($courseid, $deletefiles=false){
    global $CFG;
    $dir = $CFG->dataroot."/".$courseid."/backupdata/";
    $lastestfiletime = 0;
    $filename = null;
    if ($handle = opendir($dir)) {
        while (false !== ($file = readdir($handle))) {
            if (strpos($file, "-")!==FALSE){
                // Get creation file date
                $filehour=substr($file, strrpos($file, "-")+1, 4);
                $fileday=substr(substr($file, 0, strrpos($file, "-")), strrpos(substr($file, 0, strrpos($file, "-")), "-")+1, 8);
                $fileminute=substr($filehour, 2, 2);
                $filehour=substr($filehour, 0, 2);
                $fileyear=substr($fileday, 0, 4);
                $filemonth=substr($fileday, 4, 2);
                $fileday=substr($fileday, 6, 2);
                $filetime=mktime($filehour, $fileminute, 0, $filemonth, $fileday, $fileyear);
                if (!isset($CFG->block_download_course_caducitydays)) $CFG->block_download_course_caducitydays = 1;
                $caducity = mktime(date("H"), date("i"), date("s"), date("m"), date("d")-$CFG->block_download_course_caducitydays, date("Y"));
                if ($deletefiles && $filetime < $caducity) {
                    // Delete the file if it's older than one day
                    unlink($dir.$file);
                } else if ($lastestfiletime < $filetime){
                    // It's the latest file version
                    $lastestfiletime = $filetime;
                    $filename = $dir.$file;
                }
            }
        }
        closedir($handle);
        return $filename;
    }    
}    

function block_download_course_formatBytes($bytes, $precision = 2) {
    $units = array('B', 'KB', 'MB', 'GB', 'TB');
  
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
  
    $bytes /= pow(1024, $pow);
  
    return round($bytes, $precision) . ' ' . $units[$pow];
}  


function block_download_course_create_download($courseid){
    global $CFG, $SESSION;
    //unset($SESSION->backupprefs[$courseid]);
    $prefs = array('backup_metacourse'=>0, 'backup_users'=>-1, 'backup_logs'=>0, 'backup_user_files'=>0, 'backup_course_files'=>1, 'backup_site_files'=>0, 'backup_messages'=>0);
    $errorstr="";
    ini_set('display_errors', 'Off');
    $filename = backup_course_silently($courseid, $prefs, $errorstr);
    return $filename;

/*    $course = get_record('course','id', $courseid);
    $backupfilename = $course->shortname.'_bkp.zip';
 
    $prefs = array();
    $prefs['backup_users'] = 0;
    $prefs['backup_course_files'] = 1;
    $prefs['backup_gradebook_history'] = false;
    $backup=backup_course_silently($courseid,$prefs,$err);
 

    //Now, copy the zip file to course directory
    if (file_exists($CFG->dataroot."/".$courseid."/downloads/") || mkdir($CFG->dataroot."/".$courseid."/downloads/")){
        backup_copy_file($backup,$CFG->dataroot."/".$courseid."/downloads/".$backupfilename);
    } else{
        notify("An error occurred while copying the zip file to the course directory");
    }
    return $backup;*/
}


function block_download_course_download_file($filename){
    @header("Pragma: public"); // required
    @header("Expires: 0");
    @header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    @header("Cache-Control: private",false); // required for certain browsers 
    @header("Content-Type: application/x-forcedownload");
    @header("Content-Transfer-Encoding: binary");
    @header("Content-Disposition: attachment; filename=\"".basename($filename)."\";" );
    @header("Content-Length: ".filesize($filename));
    readfile($filename);
} 

function block_download_course_update_downloadings($courseid){
    if (! $record = get_record('block_download_course', 'course', $courseid)){
        $record = new stdClass;
        $record->course = $courseid;
        $record->downloading = 1;
        insert_record( 'block_download_course', $record );   
    } else{
        $record->downloading = $record->downloading+1;
        update_record( 'block_download_course', $record );   
    }
}

function block_download_course_get_downloadings($courseid){
    if (! $downloading = get_field('block_download_course', 'downloading', 'course', $courseid)){
        $downloading = 0;
    }    
    return $downloading;
}

?>