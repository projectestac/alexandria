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

defined('MOODLE_INTERNAL') || die;

$hassiteconfig = has_capability('moodle/site:config', context_system::instance());

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_alexandria', get_string('alexandria', 'local_alexandria'));
    $ADMIN->add('localplugins', $settings);

    $settings->add(new admin_setting_configtext('data_coursesdataid', get_string('coursesdataid', 'local_alexandria'),
        get_string('configcoursesdataid', 'local_alexandria'), 1, PARAM_TEXT));
    $settings->add(new admin_setting_configtext('data_filefieldid', get_string('filefieldid', 'local_alexandria'),
        get_string('configfilefieldid', 'local_alexandria'), 'Fitxer', PARAM_TEXT));
    $settings->add(new admin_setting_configtext('data_coursefieldid', get_string('coursefieldid', 'local_alexandria'),
        get_string('coursefieldid', 'local_alexandria'), 'courseid', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('data_fullnamefieldid', get_string('fullnamefieldid', 'local_alexandria'),
        get_string('configfullnamefieldid', 'local_alexandria'), 'Nom', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('data_shortnamefieldid', get_string('shortnamefieldid', 'local_alexandria'),
        get_string('configshortnamefieldid', 'local_alexandria'), 'Nom curt', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('data_summaryfieldid', get_string('summaryfieldid', 'local_alexandria'),
        get_string('configsummaryfieldid', 'local_alexandria'), 'Descripció', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('data_creatorfieldid', get_string('creatorfieldid', 'local_alexandria'),
        get_string('configcreatorfieldid', 'local_alexandria'), 'Autor/a', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('data_categoryfieldid', get_string('categoryfieldid', 'local_alexandria'),
        get_string('configcategoryfieldid', 'local_alexandria'), 'Àrea curricular', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('data_urlfieldid', get_string('urlfieldid', 'local_alexandria'),
        get_string('configurlfieldid', 'local_alexandria'), 'Enllaç', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('data_licensefieldid', get_string('licensefieldid', 'local_alexandria'),
        get_string('configlicensefieldid', 'local_alexandria'), 'Llicència', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('data_creationdatefieldid', get_string('creationdatefieldid', 'local_alexandria'),
        get_string('configcreationdatefieldid', 'local_alexandria'), 'Data de creació', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('data_moodleversionfieldid', get_string('moodleversionfieldid', 'local_alexandria'),
        get_string('configmoodleversionfieldid', 'local_alexandria'), 'Versió de Moodle', PARAM_TEXT));
}
