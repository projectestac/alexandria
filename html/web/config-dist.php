<?php  /// Moodle Configuration File 

unset($CFG);

$CFG->dbtype    = 'mysql';       // mysql or postgres7 (for now)
$CFG->dbhost    = 'localhost';   // eg localhost or db.isp.com
$CFG->dbname    = 'alexandria';      // database name, eg moodle
$CFG->dbuser    = 'root';    // your database username
$CFG->dbpass    = 'agora';    // your database password
$CFG->dbpersist =  false;
$CFG->prefix    = 'mdl_';        // Prefix to use for all table names

$CFG->wwwroot   = 'http://agora/alexandria/web';
$CFG->wwwrootfiles = $CFG->wwwroot.'/file.php/1/moddata/data';


$CFG->dirroot   = '/srv/www/alexandria/html/web';
$CFG->dataroot  = '/srv/www/alexandria/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 02777;  // try 02777 on a server in Safe Mode

//Mail information
$CFG->apligestenv = 'INT';
$CFG->apligestaplic = 'ALEXANDRI';
$CFG->apligestlogpath = $CFG->dataroot.'/1/backupdata/log/mailsender.log';
//$CFG->apligestmail = 1;
//$CFG->apligestlog = 'true';
//$CFG->apligestlogdebug = 'true';

$CFG->iseoi = 0;
$CFG->isagora = 0;
$CFG->isportal = 0;

require_once("$CFG->dirroot/lib/setup.php");
// MAKE SURE WHEN YOU EDIT THIS FILE THAT THERE ARE NO SPACES, BLANK LINES,
// RETURNS, OR ANYTHING ELSE AFTER THE TWO CHARACTERS ON THE NEXT LINE.