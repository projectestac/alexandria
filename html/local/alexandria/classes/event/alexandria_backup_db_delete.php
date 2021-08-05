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
class alexandria_backup_db_delete extends \core\event\base {

	/**
     * Returns description of what happened.
     *
     * @return string
     */
    public function get_description() {
        return "Course {$this->objectid} deleted in Alexandria backup DB table.";
    }

    /**
     * Return localised event name.
     *
     * @return string
     */
    public static function get_name() {
        return get_string('event_backup_db_delete', 'local_alexandria');
    }

    /**
     * Get URL related to the action.
     *
     * @return \moodle_url
     */
    public function get_url() {
        return new \moodle_url('/course/view.php', array('id' => $this->objectid));
    }

    /**
     * Init method.
     *
     * @return void
     */
    protected function init() {
        $this->data['crud'] = 'd';
        $this->data['edulevel'] = self::LEVEL_OTHER;
        $this->data['objecttable'] = 'local_alexandria_backups';
    }
}