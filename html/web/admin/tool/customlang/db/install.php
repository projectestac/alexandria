<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Post installation and migration code.
 *
 * @package    tool
 * @subpackage customlang
 * @copyright  2011 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

function xmldb_tool_customlang_install() {
    global $CFG, $OUTPUT, $DB;

    // this is a hack - this plugin used to live in admin/report/customlang,
    // we want to remove the orphaned version info and capability
    // unless there is a new report type with the same name
    // the original tables can be dropped because they are used for caching only

    if (!file_exists("$CFG->dirroot/report/customlang")) {
        unset_all_config_for_plugin('report_customlang');
        capabilities_cleanup('report_customlang');
        $dbman = $DB->get_manager();
        $table = new xmldb_table('report_customlang');
        if ($dbman->table_exists($table)) {
            $dbman->drop_table($table);
        }
        $table = new xmldb_table('report_customlang_components');
        if ($dbman->table_exists($table)) {
            $dbman->drop_table($table);
        }
    }
}


