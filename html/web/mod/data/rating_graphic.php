<?php
//XTEC ************ FITXER AFEGIT
//2010.09.01

/**
 * This PHP script is designed to display a graphical indication of the
 * rating.  It will be called from HTML exactly as if it were an image, and will return
 * an image to the browser with the correct headers.  The image will contain between one
 * and five stars
 *
 * @copyright &copy; 2008 The Open University
 * @author j.m.gray@open.ac.uk
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

require_once(dirname(__FILE__).'/../../config.php');

$avg = required_param('avg');  // Rating to show
$small = optional_param('small', 0, PARAM_BOOL);

@header('Content-Type: image/gif');
@header("Expires: ".gmdate("D, d M Y H:i:s") . " GMT" );
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", false);
@header("Pragma: no-cache");

if( $avg >= 0 ){
    if ($small) $small='_small';
    else $small = '';
    $avg = floatval(str_replace(',', '.', $avg)) * 2;  //Double it for half star scores
    $avg = round($avg);    //Round it up or down.
    echo file_get_contents( $CFG->dirroot.'/blocks/rate_course/graphic/star'.$avg.$small.'.png' );
}
?>
