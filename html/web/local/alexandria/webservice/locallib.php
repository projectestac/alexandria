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

require_once($CFG->dirroot."/webservice/rest/locallib.php");

/**
 * Alexandria XML-RPC web server.
 *
 * @package   local_alexandria
 * @copyright 2009 Moodle Pty Ltd (http://moodle.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class alexandria_webservice_rest_server extends webservice_rest_server {

    /**
     * Authenticate all users using wsalexandria user.
     */
    protected function authenticate_user() {
        global $DB, $CFG;

        require_once($CFG->dirroot . '/webservice/lib.php');

        $user = $DB->get_record('user', array('username' => 'wsalexandria'));
        if (!$user) {
            throw new Exception('Create wsalexandria user first');
        }

        $webservicemanager = new webservice();
        $service = $webservicemanager->get_external_service_by_shortname('alexandria');
        if (!$service) {
            throw new Exception('Install alexandria services first');
        }

        $serviceuser = $DB->get_record('external_tokens', array('externalserviceid' => $service->id, 'userid' => $user->id, 'tokentype' => EXTERNAL_TOKEN_PERMANENT));
        if (!$serviceuser) {
            throw new Exception('Create a token first');
        }

        parent::authenticate_user();
    }
}
