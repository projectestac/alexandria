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

namespace local_alexandria\event;

defined('MOODLE_INTERNAL') || die();

/**
 * An event for local/alexandria.
 *
 * @package local_alexandria
 * @copyright 2021 TICxCAT
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */
class alexandria_backup_db_insert extends \core\event\base {

    /**
     * Returns description of what happened.
     *
     * @return string
     */
    public function get_description(): string {
        return "Course {$this->objectid} inserted in Alexandria backup DB table.";
    }

    /**
     * Return localised event name.
     *
     * @return string
     * @throws \coding_exception
     */
    public static function get_name(): string {
        return get_string('event_backup_db_insert', 'local_alexandria');
    }

    /**
     * Get URL related to the action.
     *
     * @return \moodle_url
     * @throws \moodle_exception
     */
    public function get_url(): \moodle_url {
        return new \moodle_url('/course/view.php', ['id' => $this->objectid]);
    }

    /**
     * Init method.
     *
     * @return void
     */
    protected function init() {
        $this->data['crud'] = 'c';
        $this->data['edulevel'] = self::LEVEL_OTHER;
        $this->data['objecttable'] = 'local_alexandria_backups';
    }
}
