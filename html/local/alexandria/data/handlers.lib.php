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
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.

/**
 * Remove course from local_alexandria_backups when the course is removed
 *
 * @param $params
 * @return bool
 * @throws dml_exception
 */
function local_alexandria_coursedeleted_handler($params): bool {
    global $DB, $CFG;

    if (!isset($params->objectid) || empty($params->objectid)) {
        return false;
    }

    $courseid = intval($params->objectid);

    return $DB->delete_records('local_alexandria_backups', ['course_id' => $courseid]);
}