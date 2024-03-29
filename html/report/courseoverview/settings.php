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
 * Report settings
 *
 * @package    report
 * @subpackage courseoverview
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

// XTEC ************ AFEGIT - Allow access only to xtecadmin user
// 2012.06.20 @sarjona
if (get_protected_agora()) {
// ************ FI

$ADMIN->add('reports', new admin_externalpage('reportcourseoverview', get_string('pluginname', 'report_courseoverview'), "$CFG->wwwroot/report/courseoverview/index.php",'report/courseoverview:view', empty($CFG->enablestats)));

// XTEC ************ AFEGIT - Allow access only to xtecadmin user
// 2012.06.20 @sarjona
}
// ************ FI

// no report settings
$settings = null;
