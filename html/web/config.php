<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

require_once(__DIR__ . '/../../config-moodle.php');

require_once(dirname(__FILE__) . '/settings.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
require_once(dirname(__FILE__) . '/lib/setup.php');
