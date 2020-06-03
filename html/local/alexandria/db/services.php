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
 * Web service for local alexandria
 *
 * @package    local_alexandria
 * @subpackage db
 * @since      Moodle 3.1
 * @copyright  2016 Pau Ferrer Ocaña
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$functions = array(
    'local_alexandria_get_databases' => array(
        'classname' => 'local_alexandria_external',
        'methodname' => 'get_databases',
        'classpath' => 'local/alexandria/externallib.php',
        'description' => 'Returns databases to search with their fields',
        'type' => 'read',
        'services' => array('alexandria'),
    ),
    'local_alexandria_search' => array(
        'classname' => 'local_alexandria_external',
        'methodname' => 'search',
        'classpath' => 'local/alexandria/externallib.php',
        'description' => 'Returns the results of a search on Alexandria database',
        'type' => 'read',
        'services' => array('alexandria'),
    ),
);

$services = array(
    'Alexandria Hub' => array(
        'functions' => array(), // Unused as we add the service in each function definition, third party services would use this.
        'enabled' => 1,
        'restrictedusers' => 0,
        'shortname' => 'alexandria',
        'downloadfiles' => 1,
        'uploadfiles' => 0
    ),
);
