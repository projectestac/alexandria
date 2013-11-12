<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'alexandria24';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'agora';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbsocket' => 0,
);

$CFG->wwwroot   = 'http://agora/alexandria24/web';
$CFG->dataroot  = '/srv/www/masteralexandria/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

$CFG->passwordsaltmain = '/PN~dd>bLwqEOKaMa3j9cn*vcb';

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!

/*@ini_set('display_errors', '1'); // NOT FOR PRODUCTION SERVERS!
$CFG->debug = 32767;         // DEBUG_DEVELOPER // NOT FOR PRODUCTION SERVERS!
// for Moodle 2.0 - 2.2, use:  $CFG->debug = 38911;  
$CFG->debugdisplay = true;   // NOT FOR PRODUCTION SERVERS!

define('MDL_PERF', true);
define('MDL_PERFDB', true);
define('MDL_PERFTOLOG', true);
define('MDL_PERFTOFOOT', true);*/
