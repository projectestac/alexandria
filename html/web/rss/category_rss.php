<?php
//XTEC ************ FITXER AFEGIT - RSS for categories
//2010.09.01

/**
 * RSS for categories
 *
 * @copyright &copy; 2009 Education Department of Catalonia
 * @author sara.arjona@gmail.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

include_once('../config.php');
define ('MAX_COURSES', '15');

$categoryid = optional_param( 'categoryid' );
if (!isset($categoryid)) $categoryid='all';

header("Content-Type: application/xml; charset=UTF-8");
$rssfile = getRSSFile($categoryid);

// It's necessary to regenerate RSS file if the last modification file date is older than 2 a.m. of current day
$allowedtime = mktime(2, 0, 0, date("m"), date("d"), date("Y"));
if (!file_exists($rssfile) || filemtime($rssfile)<$allowedtime){
    // If not exists or is older than XX
    $rss = createRSS($categoryid);
    saveRSSFile($rssfile, $rss);    
}else{
    // The file exists and its not necessary to create it now
    $rss = getRSSContentFromFile($rssfile);
}

echo $rss;


function createRSS ($categoryid){
    global $CFG;
    if ($categoryid=='all'){
        $category->id='all';
        $category->name='Totes les categories';
        $category->description='RSS que conté la llista de tots els cursos Moodle del repositori XTEC';
        $category->visible=1;
    } else{
        // A category has been selected
        if (!$category = get_record("course_categories", "id", $categoryid)) {
            error("Category not known!");
        }
    }
    
    $rss = '<'.'?xml version="1.0" encoding="UTF-8" ?'.'>';
    $rss.= '<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://web.resource.org/cc/">';
    $rss.= ' <channel>';
    $rss.= '  <title>Repositori XTEC - '.addslashes($category->name).'</title>';
    $rss.= '  <link>'.$CFG->wwwroot.'/course/category.php?id='.$category->id.'</link>';
    $rss.= '  <description>'.addslashes($category->description).'</description>';
    $rss.= '  <generator>Moodle</generator>';
    $rss.= '  <language>ca</language>';
    $rss.= '  <copyright>http://creativecommons.org/licenses/by-nc-sa/2.0/ca/deed.ca</copyright>';
    $rss.= '  <lastBuildDate>'.'Wed, 01 Jul 2009 07:54:02 GMT'.'</lastBuildDate>';
    $rss.= '  <pubDate>'.'Wed, 01 Jul 2009 07:54:02 GMT'.'</pubDate>';
    $rss.= '  <dc:date>'.'2009-07-01T07:54:02Z'.'</dc:date>';
    $rss.= '  <dc:publisher>Departament d\'Educació</dc:publisher>';
    $rss.= '  <dc:language>ca</dc:language>';
    $rss.= '  <dc:rights>Licensed under a Creative Commons Attribution - NonCommercial-ShareAlike 2.0 Licence - see http://creativecommons.org/licenses/by-nc-sa/2.0/uk/</dc:rights>';
    $rss.= '  <cc:license>Licensed under a Creative Commons Attribution - NonCommercial-ShareAlike 2.0 Licence - see http://creativecommons.org/licenses/by-nc-sa/2.0/uk/</cc:license>';
    
    if ($category->visible && $courses = get_courses($category->id, "timemodified DESC", 'c.id, c.fullname, c.shortname, c.summary, c.timemodified, c.lang')) {
        $max = MAX_COURSES;
        foreach ($courses as $course) {
            if ($max<=0) break;
            else $max--;
            $rss.= '  <item>';
            $rss.= '   <category>'.addslashes($category->name).'</category>';
            $rss.= '   <title>'.addslashes($course->fullname).'</title>';
            $rss.= '   <link>'.$CFG->wwwroot.'/course/view.php?name='.$course->shortname.'</link>';
            $rss.= '   <pubDate>'.date('r', $course->timemodified).'</pubDate>';
            $rss.= '   <description><![CDATA['.addslashes($course->summary).']]></description>';
            $rss.= '   <guid isPermaLink="true">'.$CFG->wwwroot.'/course/view.php?name='.$course->shortname.'</guid>';
            $rss.= '   <dc:title>'.addslashes($course->fullname).'</dc:title>';
            $rss.= '   <dc:description><![CDATA['.addslashes($course->summary).']]></dc:description>';
            $rss.= '   <dc:contributor>The Open University</dc:contributor>';
            $rss.= '   <dc:publisher>Departament d\'Educació</dc:publisher>';
            $rss.= '   <dc:date>'.date('c', $course->timemodified).'</dc:date>';
            $rss.= '   <dc:format>text/html</dc:format>';
            $rss.= '   <dc:type>Course</dc:type>';
            $rss.= '   <dc:language>'.($course->lang!=''?$course->lang:'ca').'</dc:language>';
            $rss.= '   <dc:rights>Licensed under a Creative Commons Attribution - NonCommercial-ShareAlike 2.0 Licence - see http://creativecommons.org/licenses/by-nc-sa/2.0/uk/ - Original copyright The Open University</dc:rights>';
            $rss.= '   <cc:license>Licensed under a Creative Commons Attribution - NonCommercial-ShareAlike 2.0 Licence - see http://creativecommons.org/licenses/by-nc-sa/2.0/uk/ - Original copyright The Open University</cc:license>';
            $rss.= '  </item>';
        }
    }
    $rss.= ' </channel>';
    $rss.= '</rss>';
    return $rss;
}

function saveRSSFile($rssfile, $rss){
    $fp = fopen($rssfile, "w");
    fwrite($fp, $rss);
    fclose($fp);    
}

function getRSSContentFromFile($rssfile){
    $rss = file($rssfile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return $rss[0];
}

function getRSSFile($categoryid){
    global $CFG;
    $dir = $CFG->dataroot."/1/rss";
    if (!is_dir($dir)) mkdir($dir);
    $rssfile = "$dir/category_$categoryid.xml";    
    return $rssfile;
}

?>

