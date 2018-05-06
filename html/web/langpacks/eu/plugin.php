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
 * Strings for component 'plugin', language 'eu', branch 'MOODLE_32_STABLE'
 *
 * @package   plugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ekintzak';
$string['availability'] = 'Eskuragarritasuna';
$string['cancelinstallall'] = 'Utzi bertan behera instalazio berriak ({$a})';
$string['cancelinstallhead'] = 'Plugin-instalazioa bertan behera uzten';
$string['cancelinstallinfo'] = 'Hurrengo gehigarriak oraindik ez daude guztiz instalatuta eta beraz euren instalazioa atzera bota daiteke. Horretarako, gehigarriaren karpeta zerbitzaritik orain ezabatu behar da. Ziur egon hori dela egin nahi duzuna istripuzko datu-galera ekiditeko (zure kode-aldaketak esaterako).';
$string['cancelinstallinfodir'] = 'Ezabatzeko karpeta: {$a}';
$string['cancelinstallone'] = 'Utzi bertan behera instalazio hau';
$string['cancelupgradeall'] = 'Utzi bertan behera eguneraketak ({$a})';
$string['cancelupgradehead'] = 'Pluginen aurreko bertsioak berreskuratzen';
$string['cancelupgradeone'] = 'Utzi bertan behera eguneraketa hau';
$string['checkforupdates'] = 'Egiaztatu zein eguneraketa dagoen eskuragarri';
$string['checkforupdateslast'] = 'Egindako azken egiaztatzea: {$a}';
$string['dependencyavailable'] = 'Eskuragarri';
$string['dependencyfails'] = 'Kale egin du';
$string['dependencyinstall'] = 'Instalatu';
$string['dependencyinstallhead'] = 'Instalatu falta diren mendekotasunak';
$string['dependencyinstallmissing'] = 'Instalatu falta diren mendekotasunak ({$a})';
$string['dependencymissing'] = 'Falta da';
$string['dependencyunavailable'] = 'Ez dago eskuragarri';
$string['dependencyupload'] = 'Igo';
$string['dependencyuploadmissing'] = 'Igo ZIP fitxategiak';
$string['detectedmisplacedplugin'] = '"{$a->component}" plugina kokapen okerrean "{$a->current}" instalatu da. Hemen behar luke: "{$a->expected}"';
$string['displayname'] = 'Pluginaren izena';
$string['err_response_curl'] = 'Ezin izan da eguneraketarik eskuratu - espero ez zen cURL errorea.';
$string['err_response_format_version'] = 'Erantzunaren formatuaren ezusteko bertsioa. Mesedez saiatu eskuragarri dauden eguneraketak berriz egiaztatzen.';
$string['err_response_http_code'] = 'Ezin izan da eskuragarri dauden eguneraketen daturik eskuratu - ezusteko HTTP erantzun-kodea-';
$string['filterall'] = 'Erakutsi guztiak';
$string['filtercontribonly'] = 'Erakutsi plugin gehigarriak bakarrik';
$string['filterupdatesonly'] = 'Erakutsi eguneratzeko modukoak bakarrik';
$string['misdepinfoplugin'] = 'Pluginaren informazioa';
$string['misdepinfoversion'] = 'Bertsioaren informazioa';
$string['misdepsavail'] = 'Falta diren menpekotasunak eskuragarri';
$string['misdepsunavail'] = 'Falta diren menpekotasunak ez daude eskuragarri';
$string['misdepsunavaillist'] = 'Ez da aurkitu menpekotasun baldintzak betetzen dituen bertsiorik: {$a}.';
$string['misdepsunknownlist'] = 'Ez dago pluginen karpetan: <strong>{$a}</strong>.';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Honelako pluginak ez daude instalatuta';
$string['notdownloadable'] = 'Ezin da paketea jaitsi';
$string['notdownloadable_help'] = 'Eguneraketa duen ZIP paketea ezin da automatikoki jaitsi. Mesedez jo dokumentazio orrira laguntza gehiago eskuratzeko.';
$string['notes'] = 'Oharrak';
$string['notwritable'] = 'Pluginaren fitxategiak ezin dira idatzi';
$string['notwritable_help'] = 'Web-zerbitzariko gehigarri-fitxategiak ezin dira idatzi. Web-zerbitzariaren prozesuak gehigarriaren karpetan eta bere edukietan idazteko baimenak izan behar ditu. Baliteke gehigarri-mota horretako jatorrizko karpetan ere idazteko baimenak behar izatea.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Plugin guztiak';
$string['overviewext'] = 'Plugin gehigarriak';
$string['overviewupdatable'] = 'Eskura dauden eguneraketak';
$string['packagesdebug'] = 'Arazketa irteera gaitu da';
$string['packagesdownloading'] = '{$a} jaisten';
$string['packagesextracting'] = '{$a} erauzten';
$string['packagesvalidating'] = '{$a} balioztatzen';
$string['packagesvalidatingfailed'] = 'Instalazioa bertan behera utzi da balioztatze-errore bat dela eta';
$string['packagesvalidatingok'] = 'Balioztatze arrakastatsua, instalazioak aurrera egin dezake';
$string['plugincheckall'] = 'Plugin guztiak';
$string['plugincheckattention'] = 'Pluginek zure arreta eskatzen dute';
$string['pluginchecknone'] = 'Orain pluginek ez dute zure arreta eskatzen';
$string['pluginchecknotice'] = 'Orri honek eguneraketa egin bitartean zure arreta eska dezaketen gehigarriak erakusten ditu, hala nola instalatuko diren gehigarriak, eguneratuko direnak, falta direnak... Egunera daitezkeen gehigarriak ere erakusten dira. Gehigarrien eguneraketak eskuragarri dauden konprobatzea gomendatzen da, eta halakorik egotekotan iturri-kodea eguneratzea gomendatzen da Moodle eguneratzen jarraitu aurretik.';
$string['plugindisable'] = 'Desgaitu';
$string['plugindisabled'] = 'Desgaituta';
$string['pluginenable'] = 'Gaitu';
$string['pluginenabled'] = 'Gaituta';
$string['release'] = 'Bertsioa';
$string['requiredby'] = 'Ondokoak behar du:  {$a}';
$string['requires'] = 'Behar du';
$string['rootdir'] = 'Direktorioa';
$string['settings'] = 'Ezarpenak';
$string['source'] = 'Iturburua';
$string['sourceext'] = 'Gehigarria';
$string['sourcestd'] = 'Estandarra';
$string['status'] = 'Egoera';
$string['status_delete'] = 'Ezabatu egingo da';
$string['status_downgrade'] = 'Dagoeneko goragoko bertsioa instalatuta dago!';
$string['status_missing'] = 'Diskotik falta da';
$string['status_new'] = 'Instalatu egingo da';
$string['status_nodb'] = 'Ez dago datu-baserik';
$string['status_upgrade'] = 'Eguneratu egingo da';
$string['status_uptodate'] = 'Instalatuta';
$string['supportedmoodleversions'] = 'Onartutako Moodle bertsioak';
$string['systemname'] = 'Identifikatzailea';
$string['type_antivirus'] = 'Antiburus-plugina';
$string['type_antivirus_plural'] = 'Antiburus-pluginak';
$string['type_auth'] = 'Autentifikazio-metodoa';
$string['type_auth_plural'] = 'Autentifikazio-pluginak';
$string['type_availability'] = 'Eskuragarritasun-murrizketa';
$string['type_availability_plural'] = 'Eskuragarritasun-murrizketak';
$string['type_block'] = 'Blokea';
$string['type_block_plural'] = 'Blokeak';
$string['type_cachelock'] = 'Cache-blokeoaren kudeatzailea';
$string['type_cachelock_plural'] = 'Cache-blokeoaren kudeatzaileak';
$string['type_cachestore'] = 'Cache-biltegia';
$string['type_cachestore_plural'] = 'Cache-biltegiak';
$string['type_calendartype'] = 'Egutegi-mota';
$string['type_calendartype_plural'] = 'Egutegi-motak';
$string['type_coursereport'] = 'Ikastaroaren txostena';
$string['type_coursereport_plural'] = 'Ikastaroaren txostenak';
$string['type_dataformat'] = 'Datuen formatua';
$string['type_dataformat_plural'] = 'Datuen formatuak';
$string['type_editor'] = 'Editorea';
$string['type_editor_plural'] = 'Editoreak';
$string['type_enrol'] = 'Matrikulazio-metodoa';
$string['type_enrol_plural'] = 'Matrikulazio-metodoak';
$string['type_filter'] = 'Testu-iragazkia';
$string['type_filter_plural'] = 'Testu-iragazkiak';
$string['type_format'] = 'Ikastaro-formatua';
$string['type_format_plural'] = 'Ikastaro-formatuak';
$string['type_gradeexport'] = 'Kalifikazioak esportatzeko metodoa';
$string['type_gradeexport_plural'] = 'Kalifikazioak esportatzeko metodoak';
$string['type_gradeimport'] = 'Kalifikazioak inportatzeko metodoa';
$string['type_gradeimport_plural'] = 'Kalifikazioak inportatzeko metodoak';
$string['type_gradereport'] = 'Kalifikazio-liburuaren txostena';
$string['type_gradereport_plural'] = 'Kalifikazio-liburuaren txostenak';
$string['type_gradingform'] = 'Kalifikazio-metodo aurreratuak';
$string['type_gradingform_plural'] = 'Kalifikazio-metodo aurreratuak';
$string['type_local'] = 'Plugin lokala';
$string['type_local_plural'] = 'Plugin lokalak';
$string['type_media'] = 'Erreproduzitzailea';
$string['type_media_plural'] = 'Erreproduzitzaileak';
$string['type_message'] = 'Mezu-prozesatzailea';
$string['type_message_plural'] = 'Mezu-prozesatzaileak';
$string['type_mnetservice'] = 'MNet zerbitzua';
$string['type_mnetservice_plural'] = 'MNet zerbitzuak';
$string['type_mod'] = 'Jarduera-modulua';
$string['type_mod_plural'] = 'Jarduera-moduluak';
$string['type_plagiarism'] = 'Plagiorako plugina';
$string['type_plagiarism_plural'] = 'Plagiorako pluginak';
$string['type_portfolio'] = 'Portfolioa';
$string['type_portfolio_plural'] = 'Portfolioak';
$string['type_profilefield'] = 'Profilerako eremu-mota';
$string['type_profilefield_plural'] = 'Profilerako eremu-motak';
$string['type_qbehaviour'] = 'Galderen jokaera';
$string['type_qbehaviour_plural'] = 'Galderen jokaerak';
$string['type_qformat'] = 'Galdera inportatzeko/esportatzeko formatua';
$string['type_qformat_plural'] = 'Galdera inportatzeko/esportatzeko formatuak';
$string['type_qtype'] = 'Galdera-mota';
$string['type_qtype_plural'] = 'Galdera-motak';
$string['type_report'] = 'Guneko txostena';
$string['type_report_plural'] = 'Txostenak';
$string['type_repository'] = 'Biltegia';
$string['type_repository_plural'] = 'Biltegiak';
$string['type_search'] = 'Bilatzailea';
$string['type_search_plural'] = 'Bilatzaileak';
$string['type_theme'] = 'Itxura';
$string['type_theme_plural'] = 'Itxurak';
$string['type_tool'] = 'Kudeaketa-tresna';
$string['type_tool_plural'] = 'Kudeaketa-tresnak';
$string['type_webservice'] = 'Web-zerbitzuen protokoloa';
$string['type_webservice_plural'] = 'Web-zerbitzuen protokoloak';
$string['uninstall'] = 'Desinstalatu';
$string['uninstallconfirm'] = '<em>{$a->name}</em> gehigarria desinstalatzera zoaz. Honek gehigarriarekin lotutako guztia datu-basetik ezabatuko du, konfigurazioa, erregistroak, gehigarriak kudeatutako erabiltzaile-fitxategiak,... barne. Honek ez du atzera bueltarik eta Moodle-k berak ez du segurtasun-kopiarik sortzen. ZIUR zaude jarraitu nahi duzula?';
$string['uninstalldelete'] = '<em>{$a->name}</em> gehigarriarekin lotutako datu guztiak datu-basetik ezabatu dira. Gehigarria berriz instalatzea ekiditeko, bere <em>{$a->rootdir}</em> karpeta zerbitzaritik eskuz ezabatu behar da orain. Moodle-k berak ezin du karpeta  ezabatu idazketa baimenak direla-eta.';
$string['uninstalldeleteconfirm'] = '<em>{$a->name}</em> gehigarriarekin lotutako datu guztiak datu-basetik ezabatu dira. Gehigarria berriz instalatzea ekiditeko, bere <em>{$a->rootdir}</em> karpeta zerbitzaritik eskuz ezabatu behar da. Gehigarriaren karpeta orain ezabatu nahi duzu?';
$string['uninstalldeleteconfirmexternal'] = 'Badirudi gehigarriaren oraingo bertsioa ({$a}) iturburu kodea kudeatzeko sistema batetik aterata lortu dela. Gehigarriaren karpeta ezabatzen baduzu kodeari egindako aldaketa lokal garrantzitsuak galdu ditzakezu. Mesedez aurrera egin baino lehen ziurtatu benetan gehigarriaren karpeta ezabatu nahi duzula.';
$string['uninstallextraconfirmblock'] = 'Bloke honen {$a->instances} instantzia dago';
$string['uninstallextraconfirmenrol'] = '{$a->enrolments} erabiltzaile matrikulatuta daude';
$string['uninstallextraconfirmmod'] = 'Modulu honen {$a->instances} instantzia dago {$a->courses} ikastarotan.';
$string['uninstalling'] = '{$a->name} desinstalatzen';
$string['updateavailable'] = 'Bada bertsio berri bat eskura {$a}!';
$string['updateavailable_moreinfo'] = 'Informazio gehiago...';
$string['updateavailable_release'] = 'Bertsioa: {$a}';
$string['updatepluginconfirm'] = 'Gehigarriaren eguneraketaren baieztapena';
$string['updatepluginconfirmexternal'] = 'Badirudi gehigarriaren oraingo bertsioa ({$a}) iturburu kodea kudeatzeko sistema batetik aterata lortu dela. Eguneraketa hau instalatzen baduzu aurrerantzean ezingo duzu iturburu kodea kudeatzeko sistematik gehigarriaren eguneraketarik jaso. Mesedez aurrera egin baino lehen ziurtatu benetan gehigarria eguneratu nahi duzula.';
$string['updatepluginconfirminfo'] = '<strong>{$a->name}</strong> gehigarriaren bertsio berri bat instalatzera zoaz. {$a->version} bertsioa duen zip pakete bat jaitsiko da <a href="{$a->url}">{$a->url}</a> helbidetik eta zure Moodle instalazioan erauziko da zure instalazioa eguneratu ahal dezazun.';
$string['updatepluginconfirmwarning'] = 'Mesedez kontuan izan Moodle-k ez duela automatikoki zure datu-basearen segurtasun-kopiarik egiten eguneratzea egin aurretik. Irmoki gomendatzen dizugu oraintxe bertan segurtasun-kopia oso bat egitea, kode berriak gunea ez erabilgarri utzi edo datu-basea hondatuko lukeen arazo arraroren bat izango balu gainditzeko aukera izan dezazun. Aurrera arriskuaren jabe izanda egin ezazu.';
$string['validationmsg_componentmatch'] = 'Osagaiaren izen osoa';
$string['validationmsg_componentmismatchname'] = 'Gehigarriaren izena ez dator bat';
$string['validationmsg_componentmismatchname_help'] = 'ZIP pakete batzuek, GitHub bidez sortutakoak adibidez, jatorrizko karpeta okerra izan dezakete. Jatorrizko karpetaren izena konpondu behar duzu gehigarriaren izenarekin bat etorri dadin.';
$string['validationmsg_componentmismatchname_info'] = 'Gehigarriak bere izena \'{$a}\' dela dio baina ez dator bat bere jatorrizko karpetaren izenarekin.';
$string['validationmsg_componentmismatchtype'] = 'Gehigarri-mota ez dator bat';
$string['validationmsg_componentmismatchtype_info'] = '\'{$a->expected}\' espero zen baina gehigarriak bere mota \'{$a->found}\' dela dio.';
$string['validationmsg_filenotexists'] = 'Ez da erauzitako fitxategia aurkitu';
$string['validationmsg_filesnumber'] = 'Paketean ez dira aurkitu behar ziren fitxategi guztiak';
$string['validationmsg_filestatus'] = 'Ezin izan dira fitxategi guztiak erauzi';
$string['validationmsg_filestatus_info'] = '\'{$a->status}\' errorea gertatu da {$a->file} fitxategia erauztean.';
$string['validationmsg_foundlangfile'] = 'Bilatutako hizkuntza-fitxategia';
$string['validationmsglevel_debug'] = 'Araztu';
$string['validationmsglevel_error'] = 'Errorea';
$string['validationmsglevel_info'] = 'Ados';
$string['validationmsglevel_warning'] = 'Oharra';
$string['validationmsg_maturity'] = 'Adierazitako kode-heldutasuna';
$string['validationmsg_maturity_help'] = 'Gehigarriak bere heldutasun-maila adierazi dezake. Mantentzaileak gehigarria egonkorra dela uste badu, adierazitako heldutasun-maila MATURITY_STABLE izango da. Beste heldutasun-maila guztiak (hala nola alpha edo beta) ezegonkortzat hartu beharko lirateke eta abisu bat erakutsiko da.';
$string['validationmsg_missingcomponent'] = 'Gehigarriak ez du bere osagarriaren izenik adierazten';
$string['validationmsg_missingcomponent_help'] = 'Gehigarri guztiek bere osagarriaren izen osoa adierazi behar dute `$plugin->component` adierazpenaren bidez version.php fitxategian.';
$string['validationmsg_missingexpectedlangenfile'] = 'Ingelesezko hizkuntza fitxategiaren izena ez dator bat';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Emandako gehigarri-motak ez du espero zen {$a} ingelesezko hizkuntza fitxategia.';
$string['validationmsg_missinglangenfile'] = 'Ez da ingelesaren hizkuntza-fitxategia aurkitu';
$string['validationmsg_missinglangenfolder'] = 'Ez da ingelesaren hizkuntza-karpeta aurkitu';
$string['validationmsg_missingversion'] = 'Pluginak ez du bertsioa adierazten';
$string['validationmsg_missingversionphp'] = 'version.php fitxategia ez da aurkitu';
$string['validationmsg_multiplelangenfiles'] = 'Ingelesaren fitxategi batzuk aurkitu dira';
$string['validationmsg_onedir'] = 'ZIP paketearen egitura ez da baliozkoa.';
$string['validationmsg_onedir_help'] = 'ZIP paketeak gehigarriaren kode guztia duen jatorrizko karpeta bakarra izan behar du. Jatorrizko karpeta horren izena gehigarriaren izenarekin bat etorri behar da.';
$string['validationmsg_pathwritable'] = 'Idazteko sarbidearen egiaztapena';
$string['validationmsg_pluginversion'] = 'Pluginaren bertsioa';
$string['validationmsg_release'] = 'Pluginaren bertsioa';
$string['validationmsg_requiresmoodle'] = 'Behar den Moodle bertsioa';
$string['validationmsg_rootdir'] = 'Instalatuko den pluginaren izena';
$string['validationmsg_rootdir_help'] = 'ZIP paketearen jatorrizko karpetaren izena instalatuko den gehigarriaren izenarekin bat etorri behar da. Izena ondo ez badago, ZIP barruko jatorrizko karpeta berrizendatu beharko duzu gehigarria instalatu baino lehen.';
$string['validationmsg_rootdirinvalid'] = 'Pluginaren izen baliogabea';
$string['validationmsg_rootdirinvalid_help'] = 'ZIP paketearen jatorrizko karpetaren izenak sintaxi formalaren eskakizunak urratzen ditu. ZIP pakete batzuek, GitHub bidez sortutakoak adibidez, jatorrizko karpetaren izena gaizki izan dezakete. Jatorrizko karpetaren izena konpondu behar duzu gehigarriaren izenarekin bat etor dadin.';
$string['validationmsg_targetexists'] = 'Helburuko kokapena dagoeneko existitzen da eta ezabatuko da';
$string['validationmsg_targetexists_help'] = 'Gehigarriaren karpeta dagoeneko existitzen da eta paketearen edukiekin ordezkatua izango da.';
$string['validationmsg_targetnotdir'] = 'Helburuko kokapena fitxategi batekin okupatuta dago';
$string['validationmsg_unknowntype'] = 'Plugin-mota ezezaguna';
$string['validationmsg_versionphpsyntax'] = 'Onartu gabeko sintaxia antzeman da version.php fitxategian';
$string['version'] = 'Bertsioa';
$string['versiondb'] = 'Oraingo bertsioa';
$string['versiondisk'] = 'Bertsio berria';
