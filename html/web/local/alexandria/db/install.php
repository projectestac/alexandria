<?php

defined('MOODLE_INTERNAL') || die();

function xmldb_local_alexandria_install() {
    global $CFG, $DB;

    upgrade_plugin_savepoint(true, 2014022400, 'local', 'alexandria');
}
