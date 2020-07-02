<?php
require_once(dirname(__FILE__) . '/local/agora/lib.php');

get_debug();

// Force general preferences. Prevailes over database params.
$CFG->isagora = false;
$CFG->iseoi = false;
$CFG->isportal = false;
$CFG->center = false;

$CFG->legacyfilesinnewcourses = false;
$CFG->updateautocheck = false;
$CFG->disableupdatenotifications = true;
$CFG->disableupdateautodeploy = true;
$CFG->disableonclickaddoninstall = true;
$CFG->updateminmaturity = 0;
$CFG->updatenotifybuilds = false;
$CFG->slasharguments = true;

$CFG->mnet_dispatcher_mode = false;
$CFG->mnet_localhost_id = 4;
$CFG->mnet_all_hosts_id = 2;

//Mail
$CFG->smtpmaxbulk = 20;
$CFG->noreplyaddress = 'noreply@agora.xtec.cat';
$CFG->digestmailtime = 1;
$CFG->mailheader = '[Alexandria]';

//Cleanup
$CFG->disablegradehistory = 1;

//Rules
$CFG->forceloginforprofiles = 1;
$CFG->opentogoogle = 0;

//Ajax & Javascript
$CFG->enableajax = 1;
$CFG->disablecourseajax = 0;

//Session information
$CFG->session_handler_class = '\core\session\file';
$CFG->session_file_save_path = ini_get('session.save_path');
$CFG->sessiontimeout=3600;

$CFG->session_handler_class = '\core\session\database';
$CFG->session_database_acquire_lock_timeout = 120;

// These variable define DEFAULT block variables for new courses
$CFG->defaultblocks_override = 'about_course';

//Mail information
//$CFG->apligestmail = 1;          /* Set in database */
//$CFG->apligestlog = 0;        /* Set in database */
//$CFG->apligestlogdebug = 0;        /* Set in database */
$CFG->apligestlogpath = $CFG->dataroot.'/repository/files/mailsender.log';
//$CFG->apligestenv = 'DES';
$CFG->apligestaplic = 'ALEXANDRI';


$CFG->langotherroot = dirname(__FILE__) . '/langpacks/';
$CFG->langlocalroot = $CFG->langotherroot;
$CFG->skiplangupgrade  = true;

// Path of the cacheconfig.php file, to have only one MUC file for Àgora (instead of having one for each site in moodledata/usuX/muc/config.php).
// This folder has to exists and to be writable
$CFG->altcacheconfigpath = dirname(__FILE__) . '/local/agora/muc/';
$CFG->siteidentifier = 'alexandria';
$CFG->memcache_prefix = $CFG->siteidentifier.'_';
$CFG->agora_muc_path = $CFG->dataroot.'/muc';
$CFG->cachedir = $CFG->dataroot.'/cache';
$CFG->localcachedir = $CFG->dataroot.'/localcache';

$CFG->timezone = 99; // Changed by default to Server's local time


$CFG->forced_plugin_settings = array('filter_wiris' => array('uninstall' => 1));

// Here is where the cronlogs will be stored
//$CFG->savecronlog = 1;  // This parámeter is saved on database to save cronlogs
