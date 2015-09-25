<?php  // Moodle configuration file
unset($CFG);
global $CFG;

$CFG = new stdClass();
$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'alexandria';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'agora';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbsocket' => '',
);
$CFG->wwwroot   = 'http://agora/alexandria';
$CFG->dataroot  = '/dades/alexandria/docs';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

$CFG->passwordsaltmain = '/PN~dd>bLwqEOKaMa3j9cn*vcb';
$CFG->memcache_servers = '127.0.0.1';

//Mail information
$CFG->apligestenv = 'LOCAL';

require_once(dirname(__FILE__) . '/settings.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
require_once(dirname(__FILE__) . '/lib/setup.php');
