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
 * Strings for component 'repository_googledocs', language 'ca', branch 'MOODLE_26_STABLE'
 *
 * @package   repository_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID de client';
$string['configplugin'] = 'Configura el connector de Google Drive';
$string['googledocs:view'] = 'Mostra el repositori de Google Drive';
$string['oauth2upgrade_message_content'] = 'Com a part de l\'actualització a Moodle 2.3, el connector de portafolis de Google Drive s\'ha inhabilitat. A fi de tornar a habilitar-lo, el vostre lloc Moodle necessita estar registrat amb Google, tal i com es descriu a la documentació {$a->docsurl}, per tal d\'obtenir un ID de client secret. L\'ID de client secret podrà utilitzar-se llavors per a configurar tots els connectors de Google Drive i Picasa.';
$string['oauth2upgrade_message_small'] = 'Aquest connector s\'ha inhabilitat, ja que requereix una configuració com la que es descriu en la documentació de la configuració de Google OAuth 2.0.';
$string['oauth2upgrade_message_subject'] = 'Informació important sobre el connector de repositori de Google Drive';
$string['oauthinfo'] = '<p>A fi d\'emprar aquest connector, heu de registrar el vostre lloc amb Google, tal i com es descriu en la documentació de <a href="{$a->docsurl}">configuració de Google OAuth 2.0</a>.</p><p>Com a part del procés de registre, necessitareu introduir la següent URL com a \'Autoritzat a redirigir URL\':</p><p>{$a->callbackurl}</p><p>Una vegada registrat, se us proporcionarà un ID de client secret que podeu emprar per a configurar tots els connectors de Google Drive i Picasa.</p><p>Fixeu-vos que cal que habiliteu el servei \'Drive API\'.</p>';
$string['pluginname'] = 'Google Drive';
$string['secret'] = 'Secret';
$string['servicenotenabled'] = 'L\'accés no està configurat. Comproveu que el servei \'Drive API\' estigui habilitat.';
