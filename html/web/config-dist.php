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

$CFG->wwwroot   = 'http://agora/alexandria/web';
$CFG->dataroot  = '/srv/www/alexandria/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

$CFG->passwordsaltmain = '/PN~dd>bLwqEOKaMa3j9cn*vcb';

$CFG->defaultblocks_override = 'about_course';

$CFG->isagora = 0;
$CFG->iseoi = 0;
$CFG->isportal = 0;
$CFG->langotherroot = dirname(__FILE__) . '/lang/';

//Mail information
$CFG->apligestenv = 'INT';
$CFG->apligestaplic = 'ALEXANDRI';
$CFG->apligestlogpath = $CFG->dataroot.'/1/backupdata/log/mailsender.log';
//$CFG->apligestmail = 1;
//$CFG->apligestlog = 'true';
//$CFG->apligestlogdebug = 'true';

require_once(dirname(__FILE__) . '/local/agora/lib.php');
require_once(dirname(__FILE__) . '/lib/setup.php');
