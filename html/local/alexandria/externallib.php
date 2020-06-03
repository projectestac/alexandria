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
 * External assign API
 *
 * @package    local_alexandria
 * @since      Moodle 3.1
 * @copyright  2016 Pau Ferrer Ocaña
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

require_once("$CFG->libdir/externallib.php");
require_once("$CFG->dirroot/user/externallib.php");

/**
 * Alexandria functions
 * @copyright  2016 Pau Ferrer Ocaña
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class local_alexandria_external extends external_api {

    /**
     * Describes the parameters for get_databases
     * @return external_external_function_parameters
     * @since  Moodle 3.1
     */
    public static function get_databases_parameters() {
        return new external_function_parameters(array());
    }

    /**
     * Returns database information from alexandria.
     * @return array of available databases.
     * @throws coding_exception
     * @throws dml_exception
     * @since      Moodle 3.1
     */
    public static function get_databases() {
        global $DB;

        $dbcourses = $DB->get_records('course', array('id' => SITEID));
        $databases = get_all_instances_in_courses("data", $dbcourses);

        $return = array();
        foreach ($databases as $database) {
            $datacontext = context_module::instance($database->coursemodule);
            // Entry to return.
            $newdb = array();

            // First, we return information that any user can see in the web interface.
            $newdb['id'] = $database->id;
            $newdb['name'] = external_format_string($database->name, $datacontext->id);

            // Format intro.
            list($newdb['intro'], $newdb['introformat']) =
                external_format_text($database->intro, $database->introformat,
                    $datacontext->id, 'mod_data', 'intro', null);
            $newdb['searchtemplate'] = $database->asearchtemplate;

            $newdb['fields'] = $DB->get_records('data_fields', array('dataid' => $database->id));
            $newdb['type'] = get_alexandria_database_type($newdb['fields']);

            $return[] = $newdb;
        }

        return $return;
    }

    /**
     * Describes the get_databases return value
     * @return external_multiple_structure
     * @since  Moodle 3.1
     */
    public static function get_databases_returns() {
        return new external_multiple_structure (
            new external_single_structure(
                array(
                    'id' => new external_value(PARAM_INT, 'database id'),
                    'name' => new external_value(PARAM_TEXT, 'database name'),
                    'type' => new external_value(PARAM_TEXT, 'database type (course, scorm or pdi'),
                    'intro' => new external_value(PARAM_RAW, 'database intro text'),
                    'introformat' => new external_format_value ('text'),
                    'searchtemplate' => new external_value(PARAM_RAW, 'Search template'),
                    'fields' => new external_multiple_structure(
                        new external_single_structure(
                            array(
                                'id' => new external_value(PARAM_INT, 'id'),
                                'dataid' => new external_value(PARAM_INT, 'dataid'),
                                'type' => new external_value(PARAM_TEXT, 'type'),
                                'name' => new external_value(PARAM_TEXT, 'name'),
                                'description' => new external_value(PARAM_TEXT, 'description'),
                                'required' => new external_value(PARAM_INT, 'required'),
                                'param1' => new external_value(PARAM_RAW, 'param1'),
                                'param2' => new external_value(PARAM_RAW, 'param2'),
                                'param3' => new external_value(PARAM_RAW, 'param3'),
                                'param4' => new external_value(PARAM_RAW, 'param4'),
                                'param5' => new external_value(PARAM_RAW, 'param5'),
                                'param6' => new external_value(PARAM_RAW, 'param6'),
                                'param7' => new external_value(PARAM_RAW, 'param7'),
                                'param8' => new external_value(PARAM_RAW, 'param8'),
                                'param9' => new external_value(PARAM_RAW, 'param9'),
                                'param10' => new external_value(PARAM_RAW, 'param10'),
                            )
                        ), 'fields', VALUE_OPTIONAL
                    )
                )
            )
        );
    }


    /**
     * Describes the parameters for search
     * @return external_function_parameters
     * @since  Moodle 3.1
     */
    public static function search_parameters() {
        return new external_function_parameters(
            array(
                'dataid' => new external_value(PARAM_INT, 'Id of the data where to search', VALUE_REQUIRED),
                'from' => new external_value(PARAM_INT, 'From which records we want to load', VALUE_DEFAULT, 0),
                'search' => new external_value(PARAM_TEXT,
                    'Global search over main fields',
                    VALUE_DEFAULT, ""),
                'fields' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'id'),
                            'value' => new external_value(PARAM_TEXT, 'value')
                        )
                    ), 'Concrete search on fields', VALUE_OPTIONAL
                )
            )
        );
    }

    /**
     * Returns the results of a search on Alexandria database
     * @param $dataid
     * @param int $from
     * @param string $search
     * @param array $fields
     * @return array of results.
     * @throws coding_exception
     * @throws dml_exception
     * @throws invalid_parameter_exception
     * @since      Moodle 3.1
     */
    public static function search($dataid, $from = 0, $search = '', $fields = array()) {
        global $DB, $CFG;

        $params = self::validate_parameters(self::search_parameters(),
            array(
                'dataid' => $dataid,
                'from' => $from,
                'search' => $search,
                'fields' => $fields
            )
        );

        $return = array();
        $resuts = array();

        $dataid = $params['dataid'];
        $search = $params['search'];

        $fields = array();
        if (empty($search)) {
            foreach ($params['fields'] as $field) {
                $fields[$field['id']] = $field['value'];
            }
        }

        $data = $DB->get_record('data', array('id' => $dataid));
        if (!$data) {
            throw new invalid_parameter_exception('Not valid selected database');
        }

        require_once($CFG->dirroot . "/mod/data/lib.php");

        $fieldsindata = $DB->get_records('data_fields', array('dataid' => $data->id));
        $selectarray = [];
        $params = array('dataid' => $dataid);
        foreach ($fieldsindata as $field) {
            $value = "";
            switch ($field->type) {
                case 'text':
                case 'textarea':
                    // Search by field and main search only in text fields.
                    $value = isset($fields[$field->id]) ? $fields[$field->id] : $search;
                    break;
                case 'menu':
                    $value = isset($fields[$field->id]) ? $fields[$field->id] : "";
                    break;
                case 'multimenu':
                    $value = isset($fields[$field->id]) ? $fields[$field->id] : "";
                    if (!empty($value)) {
                        $value = array(
                            'selected' => array($value),
                            'allrequired' => false
                        );
                    }
                    break;
                default:
                    continue;
            }

            if (!empty($value)) {
                $searchfield = data_get_field_from_id($field->id, $data);
                list($sql, $sqlparams) = $searchfield->generate_sql('c', $value);
                $selectarray[] = $sql;
                $params = array_merge($params, $sqlparams);
            }
        }

        $return['moreresults'] = false;
        if (!empty($selectarray)) {
            if (!empty($search)) {
                $sql = 'SELECT r.*
                            FROM {data_records} r
                            JOIN {data_content} c ON r.id = c.recordid
                        WHERE r.dataid = :dataid AND r.approved = 1 AND (' . implode(' OR ', $selectarray) . ')
                            GROUP BY r.id';
            } else {
                // Use AND operator for non global search.
                $selectand = function ($value) {
                    return 'r.id IN (SELECT c.recordid FROM {data_content} c WHERE ' . $value . ')';
                };
                $selectarray = array_map($selectand, $selectarray);
                $sql = 'SELECT r.*
                            FROM {data_records} r
                        WHERE r.dataid = :dataid AND r.approved = 1 AND (' . implode(' AND ', $selectarray) . ')
                            GROUP BY r.id';
            }
            $records = $DB->get_records_sql($sql, $params, $from, 26);

            if (count($records) > 25) {
                $return['moreresults'] = true;
                array_pop($records);
            }
            $filefield = get_alexandria_file_field($fieldsindata);
            if (!empty($records) && $filefield) {
                $return['fieldid'] = $filefield->id;

                foreach ($records as $record) {
                    $filename = get_alexandria_filename($filefield->id, $record->id);
                    // Avoid sending records without files.
                    if ($filename) {
                        $records = array($record->id => $record);
                        $resuts[$record->id] = array(
                            'id' => $record->id,
                            'content' => data_print_template('singletemplate', $records, $data, '', 0, true),
                            'filename' => $filename
                        );
                    }
                }
            }
        }

        $return['dataid'] = $data->id;
        $return['results'] = $resuts;
        return $return;
    }

    /**
     * Describes the search return value
     * @return external_single_structure
     * @since  Moodle 3.1
     */
    public static function search_returns() {
        return new external_single_structure(
            array(
                'dataid' => new external_value(PARAM_INT, 'Database id where the search was performed'),
                'fieldid' => new external_value(PARAM_INT, 'Field where the file id is found', VALUE_OPTIONAL),
                'moreresults' => new external_value(PARAM_BOOL, 'If there are more results to fetch', VALUE_OPTIONAL),
                'results' => new external_multiple_structure(
                    new external_single_structure(
                        array(
                            'id' => new external_value(PARAM_INT, 'id'),
                            'content' => new external_value(PARAM_RAW, 'content'),
                            'filename' => new external_value(PARAM_TEXT, 'filename')
                        )
                    ), 'Result', VALUE_OPTIONAL
                )
            )
        );
    }
}
