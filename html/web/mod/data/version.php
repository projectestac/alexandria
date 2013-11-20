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
 * Data module version information
 *
 * @package    mod
 * @subpackage data
 * @copyright  2005 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$module->version   = 2012112900;       // The current module version (Date: YYYYMMDDXX)
$module->requires  = 2012112900;       // Requires this Moodle version
$module->component = 'mod_data';       // Full name of the plugin (used for diagnostics)
//XTEC - ALEXANDRIA ************ MODIFICAT - CRON configuration
//2013.11.07 - Marc Espinosa Zamora <marc.espinosa.zamora@upcnet.es>
// ******** CODI ORIGINAL
//$module->cron      = 0;
// ******** CODI MODIFICAT
$module->cron      = 3600;
$module->version   = 2013112000;       // The current module version (Date: YYYYMMDDXX)
// ******** FI
