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

namespace local_alexandria\task;

/**
 * A scheduled task for local/alexandria.
 *
 * @package local_alexandria
 * @copyright 2021 TICxCAT
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */
class backup_courses_task extends \core\task\scheduled_task {

    public function get_name() {
        return get_string('backup_courses_task', 'local_alexandria');
    }

    public function execute() {
        global $CFG, $DB, $USER;

        mtrace('Starting Alexandria Backup Courses Task...');

        $records = $DB->get_records('local_alexandria_backups');

        require_once $CFG->dirroot . '/backup/util/includes/backup_includes.php';
        require_once $CFG->dirroot . '/backup/util/helper/backup_cron_helper.class.php';

        foreach ($records as $id => $record) {
            mtrace('Init Alexandria Backup Course ID: ' . $record->course_id);

            $course = $DB->get_record('course', ['id' => $record->course_id]);
            $result = \backup_cron_automated_helper::launch_automated_backup($course, 0, $USER->id);

            if ($result == \backup_cron_automated_helper::BACKUP_STATUS_OK) {
                mtrace('Alexandria Backup Course ID: ' . $record->course_id . ' OK');

                // Delete && Launch event
                if ($DB->delete_records('local_alexandria_backups', ['id' => $id])) {
                    $contextcourse = \context_course::instance($record->course_id);
                    $params = [
                        'context' => $contextcourse,
                        'objectid' => $record->course_id,
                    ];
                    $event = \local_alexandria\event\alexandria_backup_db_delete::create($params);
                    $event->trigger();
                }
            }
        }

        mtrace('Ending Alexandria Backup Courses Task...');
    }
}
