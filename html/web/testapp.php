<?php

require_once 'config.php';
require_once('testlib/testlib.php');
global $CFG;

$port = isset($CFG->dboptions['dbport'])? $CFG->dboptions['dbport'] : null;
checkMySQL($CFG->dbhost, $port, $CFG->dbname, $CFG->dbuser, $CFG->dbpass, $CFG->prefix.'user');

test_mail('ALEXANDRI');

test_ldap();


test_cli(__DIR__.'/admin/cli/cron.php');

test_server();


