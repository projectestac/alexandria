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
 * Queue Alexandria Backup
 *
 * @copyright 2021 Education Department of Catalonia
 * @author sara.arjona@gmail.com
 * @author TICxCAT
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

require_once '../../../config.php';
require_once 'datalib.php';

require_xtecadmin(true);

$courseid = required_param('courseid', PARAM_INT);

alexandria_backup_course($courseid);
