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
 * WIRIS Filter settings.
 *
 * @package    filter
 * @subpackage wiris
 * @copyright  Maths for More S.L. <info@wiris.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    global $CFG;
    global $wirisconfigurationclass;

    require_once("$CFG->dirroot/filter/wiris/lib.php");
    // Automatic class loading not avaliable for Moodle 2.4 and 2.5.
    wrs_loadclasses();
    $wirisplugin = new filter_wiris_pluginwrapper();

    $editorplugininstalled = filter_wiris_pluginwrapper::get_wiris_plugin();
    if (!empty($editorplugininstalled)) {
        // Editor and CAS checkbox.
        $output = '';
        $wirisplugin->begin();
        $waseditorenabled = $wirisplugin->was_editor_enabled();
        $wascasenabled = $wirisplugin->was_cas_enabled();
        $waschemeditorenabled = $wirisplugin->was_chem_editor_enabled();
        $conf = $wirisplugin->get_instance()->getConfiguration();
        $wirisplugin->end();

        if ($oldconfile = filter_wiris_pluginwrapper::get_old_configuration()) {
            $warningoutput = '<center><br />
                <div style="border-style: solid; border-color: red;">'.
                'An old configuration.ini file has been detected on ' . $oldconfile .
                '<br> Please move it to ' .  $CFG->wwwroot .
                '/filter/wiris/configuration.ini.' . 'For further information go to: xxx' .
                '</div></center>';
            $settings->add(new admin_setting_heading('filter_wiris_old_configuration', '', $warningoutput));
        }

        // Text to be shown when editor and cas are disabled in MoodleConfigurationUpdater.
        if (!$waseditorenabled) {
            $output = '<div class="form-item clearfix">'.
                '<div class="form-label" style="color:#aaaaaa;" >WIRIS editor<span class="form-shortname" style="color:#aaaaaa;">'.
                'filter_wiris_editor_enable</span></div><div class="form-setting"><div class="form-checkbox defaultsnext">'.
                '<input type="checkbox" disabled="disabled"></div></div><div class="form-description"></div></div>';
        }

        $output = '';
        if ($waseditorenabled) {
            $settings->add(new admin_setting_configcheckbox('filter_wiris_editor_enable',
                                                            get_string('wirismatheditor', 'filter_wiris'), '', '1'));
        }

        if ($waschemeditorenabled) {
            $settings->add(new admin_setting_configcheckbox('filter_wiris_chem_editor_enable',
                                                            get_string('wirischemeditor', 'filter_wiris'), '', '0'));
        }

        if ($wascasenabled) {
            $settings->add(new admin_setting_configcheckbox('filter_wiris_cas_enable',
                                                            get_string('wiriscas', 'filter_wiris'), '', '0'));
        }

    } else {
        if (!get_config('filter_wiris', 'filter_standalone')) {
            $output = '<center><br />' .
                '<div style="border-style: solid; border-color: red;">A plugin dependency is broken:' .
                '  WIRIS filter requires that either <a target="_blank"' .
                ' href="https://moodle.org/plugins/atto_wiris">WIRIS plugin for Atto</a> ' .
                'or <a target="_blank" href="https://moodle.org/plugins/tinymce_tiny_mce_wiris">' .
                'WIRIS plugin for TinyMCE</a> is installed. For further information see our documentation page' .
                ' <a target="_blank" href="http://www.wiris.com/plugins/docs/moodle/troubleshooting">'.
                '<img style="vertical-align:-3px;" alt="" ' .
                'src="https://www.wiris.com/system/files/attachments/1689/WIRIS_manual_icon_17_17.png" />'.
                '</a>'.
                '</div></center>';
            $settings->add(new admin_setting_heading('filter_wiris_disabled', '', $output));
            if (strrpos($_SERVER["SCRIPT_FILENAME"], 'upgradesettings.php')) {
                echo $output;
            }
        }
        $settings->add(new admin_setting_configcheckbox('filter_wiris/filter_standalone',
                                                        get_string('filter_standalone',
                                                        'filter_wiris'),
                                                        get_string('filter_standalonedesc',
                                                        'filter_wiris'), false, true, false));
    }

    $wirisquizzes = dirname(__FILE__) . '/../../question/type/wq/';
    $quizzesinstalled = file_exists($wirisquizzes);

    if ($quizzesinstalled) {
        $url = $CFG->wwwroot . '/admin/settings.php?section=qtypesettingwq';
        $url = '<a href="' . $url . '">WIRIS quizzes settings</a>';
        $settings->add(new admin_setting_heading('filter_wirisquizzesheading', $url, ''));
    }

}
