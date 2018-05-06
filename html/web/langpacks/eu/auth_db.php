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
 * Strings for component 'auth_db', language 'eu', branch 'MOODLE_32_STABLE'
 *
 * @package   auth_db
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcantconnect'] = 'Ezin izan da zehaztutako autentifikaziorako datu-basearekin konektatu';
$string['auth_dbchangepasswordurl_key'] = 'Pasahitza aldatzeko URLa';
$string['auth_dbdebugauthdb'] = 'ADOdb garbitu';
$string['auth_dbdebugauthdbhelp'] = 'Araztu ADOdb konexioa kanpoko datu-basera - erabili orri hutsa jasotzen baduzu saioa hastean. Ez erabili lanean ari diren guneetan!';
$string['auth_dbdeleteuser'] = '{$a->name} id {$a->id} erabiltzailea ezabatuta';
$string['auth_dbdeleteusererror'] = 'Eorrea {$a} erabiltzailea ezabatzean';
$string['auth_dbdescription'] = 'Metodo honek kanpoko datu-base taula bat erabiltzen du emandako erabiltzaile-izen eta pasahitz bat baliozkoa den egiaztatzeko.  kontua berria bada, beste eremuetako informazioa ere zeharka kopiatu daiteke Moddlen.';
$string['auth_dbextencoding'] = 'Kanpoko datu-basearen kodifikazioa';
$string['auth_dbextencodinghelp'] = 'Erabiltzailearen kodifikazioa kanpoko datu-basean';
$string['auth_dbextrafields'] = '<p>Eremu hauek aukerazkoak dira. Moodle erabiltzaileen eremu batzuk hemen zehaztutako <b>kanpoko datu-base eremuetatik</b> aurrez betetzea erabaki dezakezu.</p><p>Hutsik uzten badituzu, lehenetsitako balioak erabiliko dira.</p><p>Edozein kasutan, erabiltzaileek eremu guztiak editatzeko aukera izango dute behin saioa hasita.</p>';
$string['auth_dbfieldpass'] = 'Pasahitzak dituen eremuaren izena';
$string['auth_dbfieldpass_key'] = 'Pasahitzaren eremua';
$string['auth_dbfielduser'] = 'Erabiltzaile-izenak dituen eremuaren izena';
$string['auth_dbfielduser_key'] = 'Erabiltzaile-izenaren eremua';
$string['auth_dbhost'] = 'Datu-base zerbitzaria ostatzen duen ordenagailua. Erabili sistemako DSN sarrera bat ODBC erabiliz gero.';
$string['auth_dbhost_key'] = 'Ostalaria';
$string['auth_dbinsertuser'] = '{$a->name} id {$a->id} erabiltzailea txertatuta';
$string['auth_dbinsertuserduplicate'] = 'Errorea {$a->username} erabiltzailea sartzean - erabiltzaile-izen hori duen erabiltzailea dagoeneko sortuta dago \'{$a->auth}\' gehigarriaren bitartez.';
$string['auth_dbinsertusererror'] = 'Errorea {$a} erabiltzailea txertatzean';
$string['auth_dbname'] = 'Datu-basearen izena. Hutsik utzi ODBC DSN bat erabiliz gero.';
$string['auth_dbname_key'] = 'Datu-basearen izena';
$string['auth_dbpass'] = 'Goiko erabiltzaile-izenarekin bat datorren pasahitza';
$string['auth_dbpass_key'] = 'Pasahitza';
$string['auth_dbpasstype'] = '<p>Pasahitzaren eremuak erabiltzen duen formatua zehaztu. MD5 zifratze-mota beste web aplikazio orokorrekin konektatzeko erabilgarria da, PostNuke adibidez.</p> <p>Erabili \'barrukoa\' kanpo datu-baseak erabiltzaile eta e-posta helbideak kudeatzea baina pasahitzak Moodle-k kudeatzea nahi baduzu. \'barrukoa\' erabiliz gero kanpo datu-baseko e-posta helbidearen eremuan betetako e-posta helbidea eman <i>beharko</i> duzu, eta admin/cron.php eta auth/db/cli/sync_users.php maiz exekutatu beharko dituzu. Moodle-k erabiltzaile berriei e-posta bat bidaliko die behin-behineko pasahitz batekin.</p>';
$string['auth_dbpasstype_key'] = 'Pasahitzaren formatua';
$string['auth_dbreviveduser'] = '{$a->name} id {$a->id} erabiltzailea berreskuratuta';
$string['auth_dbrevivedusererror'] = 'Errorea {$a} erabiltzailea berreskuratzean';
$string['auth_dbsaltedcrypt'] = 'Zifratu zentzu-bakarreko hash metodoa erabiliz.';
$string['auth_dbsetupsql'] = 'SQL ezarpen-komandoa';
$string['auth_dbsetupsqlhelp'] = 'Datu-basearen konfigurazio berezirako SQL komandoa, maiz komunikazio kodifikazioa konfiguratzeko erabilia - MySQL eta PostgreSQLrako adibidea: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Kontua etendako erabiltzailea ({$a->name}) eta IDa {$a->id}';
$string['auth_dbsuspendusererror'] = 'Errorea {$a} erabiltzailea suspenditzean';
$string['auth_dbsybasequoting'] = 'Erabili sybase kakotxak (quotes)';
$string['auth_dbsybasequotinghelp'] = 'Sybase motako kakotx sinpleen ihesbdea - beharezkoa Oracle, MS SQL eta beste datu-base batzuetan. Ez erabil MySQL-rentzat!';
$string['auth_dbtable'] = 'Taularen izena datu-basean';
$string['auth_dbtable_key'] = 'Taula';
$string['auth_dbtype'] = 'Datu-base mota (Ikus <a href="http://phplens.com/adodb/supported.databases.html">ADOdb documentation</a> xehetasun gahiagorako)';
$string['auth_dbtype_key'] = 'Datu-basea';
$string['auth_dbupdatinguser'] = '{$a->name} id {$a->id} erabiltzailea eguneratzen';
$string['auth_dbuser'] = 'Datu-basean irakurtzeko baimena duen erabiltzaile-izena';
$string['auth_dbuser_key'] = 'Datu-basearen erabiltzailea';
$string['auth_dbusernotexist'] = 'Ezin da existitzen ez den erabiltzailea eguneratu: {$a}';
$string['auth_dbuserstoadd'] = 'Gehituko diren erabiltzailearen sarrerak: {$a}';
$string['auth_dbuserstoremove'] = 'Ezabatuko diren erabiltzailearen sarrerak: {$a}';
$string['pluginname'] = 'Kanpoko datu-basea';
