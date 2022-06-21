<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'calendar', language 'ca', version '3.11'.
 *
 * @package     calendar
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityevent'] = 'Esdeveniment d\'activitat';
$string['addevent'] = 'Afegeix esdeveniments';
$string['advancedoptions'] = 'Opcions avançades';
$string['allday'] = 'Tot el dia';
$string['annually'] = 'Anual';
$string['calendar'] = 'Calendari';
$string['calendarheading'] = 'Calendari {$a}';
$string['calendarpreferences'] = 'Preferències del calendari';
$string['calendartypes'] = 'Tipus de calandari';
$string['calendarurl'] = 'URL del calendari: {$a}';
$string['category'] = 'Categoria';
$string['categoryevent'] = 'Esdeveniment de categoria';
$string['categoryevents'] = 'Esdeveniments de categoria';
$string['clickhide'] = 'feu clic per ocultar';
$string['clickshow'] = 'feu clic per mostrar';
$string['colactions'] = 'Accions';
$string['colcalendar'] = 'Calendari';
$string['collastupdated'] = 'Darrera actualització';
$string['colpoll'] = 'Actualitza';
$string['commontasks'] = 'Opcions';
$string['confirmeventdelete'] = 'Esteu segur que voleu suprimir l\'esdeveniment «{$a}»?';
$string['confirmeventseriesdelete'] = 'L\'esdeveniment «{$a->name}» és part d\'una sèrie. Voleu esborrar només aquest esdeveniment o bé tots els {$a->count} de la sèrie?';
$string['course'] = 'Curs';
$string['coursecalendar'] = '{$a} calendari';
$string['courseevent'] = 'Esdeveniment de curs';
$string['courseevents'] = 'Esdeveniments del curs';
$string['courses'] = 'Cursos';
$string['customexport'] = 'Rang personalitzat ({$a->timestart} - {$a->timeend})';
$string['daily'] = 'Diàriament';
$string['day'] = 'Dia';
$string['daynext'] = 'Dia següent';
$string['dayprev'] = 'Dia anterior';
$string['dayviewfor'] = 'Vista del dia per a:';
$string['dayviewtitle'] = 'Vista del dia: {$a}';
$string['daywithnoevents'] = 'Aquest dia no té esdeveniments.';
$string['default'] = 'Per defecte';
$string['deleteallevents'] = 'Esborra tots els esdeveniments';
$string['deleteevent'] = 'Suprimeix esdeveniment';
$string['deleteevents'] = 'Suprimeix esdeveniments';
$string['deleteoneevent'] = 'Esborra aquest esdeveniment';
$string['detailedmonthviewfor'] = 'Vista detallada del mes per a:';
$string['detailedmonthviewtitle'] = 'Vista detallada del mes: {$a}';
$string['durationminutes'] = 'Durada en minuts';
$string['durationnone'] = 'Sense durada';
$string['durationuntil'] = 'Fins al dia';
$string['editevent'] = 'S\'està editant l\'esdeveniment';
$string['erroraddingevent'] = 'No s\'ha pogut afegir l\'esdeveniment';
$string['errorbadsubscription'] = 'No s\'ha trobat la subscripció al calendari.';
$string['errorbeforecoursestart'] = 'No es pot definir l\'esdeveniment abans de la data d\'inici del curs';
$string['errorcannotimport'] = 'No podeu configurar en aquest moment la subscripció a un calendari.';
$string['errorhasuntilandcount'] = 'O UNTIL (FINS) o COUNT (COMPTA) poden aparèixer a la regla de recurrència, però UNTIL (FINS) i COUNT (COMPTA) NO PODEN aparèixer a la mateixa regla de recurrència.';
$string['errorinvalidbydayprefix'] = 'Valors enters que precedeixin a regles BYDAY (PER_DIA) sols poden ser presents en una regla de recurrència MONTHLY (MENSUAL) o YEARLY (ANUAL).';
$string['errorinvalidbydaysuffix'] = 'Valors vàlids per al dia de les parts de la setmana a la regla BYDAY (PER_DIA) són MO (DILLUNS), TU (DIMARTS), WE (DIMECRES), TH (DIJOUS), FR (DIVENDRES), SA (DISSABTE) i SU (DIUMENGE).';
$string['errorinvalidbyhour'] = 'Els valors vàlids per la regla BYHOUR (PER_HORA) són de 0 a 23';
$string['errorinvalidbyminute'] = 'Els valors vàlids per la regla BYMINUTE (PER_MINUT) són de 0 a 59';
$string['errorinvalidbymonth'] = 'Els valors vàlids per la regla BYMONTH (PER_MES) són de 1 a 12';
$string['errorinvalidbymonthday'] = 'Els valors vàlids per la regla BYMONTHDAY (PER_DIAMES) són de 1 a 31 o de -31 a -1';
$string['errorinvalidbysecond'] = 'Els valors vàlids per la regla BYSECOND (PER_SEGON) són de 0 a 59';
$string['errorinvalidbysetpos'] = 'Els valors vàlids per la regla BYSETPOS (PER_CONFIGPOS) són de 1 a 366 o de -366 a -1.';
$string['errorinvalidbyweekno'] = 'Els valors vàlids per la regla BYWEEKNO (PER_NOMBRESETMANA) són de 1 a 53 o de -53 a -1.';
$string['errorinvalidbyyearday'] = 'Els valors vàlids per la regla BYYEARDAY  (PER_DIAANY) són de 1 a 366 o de -366 a -1.';
$string['errorinvaliddate'] = 'La data no és vàlida';
$string['errorinvalidicalurl'] = 'L\'URL iCal no és vàlid.';
$string['errorinvalidinterval'] = 'El valor per l\'INTERVAL de la regla cal que sigui un enter positiu.';
$string['errorinvalidminutes'] = 'Especifiqueu la durada en minuts (entre 1 i 999).';
$string['errorinvalidrepeats'] = 'Especifiqueu el nombre d\'esdeveniments (entre 1 i 999).';
$string['errormustbeusedwithotherbyrule'] = 'La regla BYSETPOS (PER_CONFIGPOS) sols pots ser usada conjuntament amb una altra regla BYxxx .';
$string['errornodescription'] = 'La descripció és necessària';
$string['errornoeventname'] = 'El nom és necessari';
$string['errornonyearlyfreqwithbyweekno'] = 'La regla BYWEEKNO (PER_NOMBRESETMANA) sols és vàlida per regles YEARLY (ANUALS).';
$string['errorrequiredurlorfile'] = 'Per importar un calendari es requereix o un URL o un fitxer.';
$string['errorrrule'] = 'La regla de recurrència passada sembla incorrecta.';
$string['errorrruleday'] = 'La regla de recurrència té un paràmetre de dia no vàlid.';
$string['errorrrulefreq'] = 'La regla de recurrència té un paràmetre de freqüència no vàlid.';
$string['eventcalendareventcreated'] = 'S\'ha creat un esdeveniment del calendari';
$string['eventcalendareventdeleted'] = 'S\'ha suprimit un esdeveniment del calendari';
$string['eventcalendareventupdated'] = 'S\'ha actualitzat un esdeveniment del calendari';
$string['eventdate'] = 'Data';
$string['eventdescription'] = 'Descripció';
$string['eventduration'] = 'Durada';
$string['eventendtime'] = 'Final';
$string['eventendtimewrapped'] = '{$a} (Temps final)';
$string['eventinstanttime'] = 'Hora';
$string['eventkind'] = 'Tipus d\'esdeveniment';
$string['eventname'] = 'Títol de l\'esdeveniment';
$string['eventnameandcategory'] = '{$a->category}: {$a->name}';
$string['eventnameandcourse'] = '{$a->course}: {$a->name}';
$string['eventnone'] = 'No hi ha esdeveniments';
$string['eventrepeat'] = 'Es repeteix';
$string['events'] = 'Esdeveniments';
$string['eventsall'] = 'Tots els esdeveniments';
$string['eventsdeleted'] = 'Esdeveniments suprimits';
$string['eventsfor'] = 'Esdeveniments {$a}';
$string['eventsimported'] = 'Esdeveniments importats: {$a}';
$string['eventskey'] = 'Llegenda d\'esdeveniments';
$string['eventsource'] = 'Font de l\'esdeveniment';
$string['eventspersonal'] = 'Esdeveniments personals';
$string['eventsrelatedtocategories'] = 'Esdeveniments relacionats amb les categories';
$string['eventsrelatedtocourses'] = 'Esdeveniments relacionats amb els cursos';
$string['eventsrelatedtogroups'] = 'Esdeveniments de grup';
$string['eventsskipped'] = 'Esdeveniments omesos: {$a}';
$string['eventstarttime'] = 'Data d\'inici';
$string['eventstoexport'] = 'Esdeveniments per exportar';
$string['eventsubscriptioncreated'] = 'S\'ha creat una subscripció al calendari';
$string['eventsubscriptiondeleted'] = 'S\'ha suprimit una subscripció al calendari';
$string['eventsubscriptioneditwarning'] = 'Aquest esdeveniment de calendari és part d\'una subscripció. Qualsevol canvi que feu a aquest esdeveniment es perdrà si la subscripció se suprimeix.';
$string['eventsubscriptionupdated'] = 'S\'ha actualitzat una subscripció al calendari';
$string['eventsupdated'] = 'Esdeveniments actualitzats: {$a}';
$string['eventtime'] = 'Hora';
$string['eventtype'] = 'Tipus d\'esdeveniment';
$string['eventtypecategory'] = 'de categoria';
$string['eventtypecourse'] = 'de curs';
$string['eventtypeglobal'] = 'globals';
$string['eventtypegroup'] = 'de grup';
$string['eventtypemodule'] = 'de mòdul';
$string['eventtypeother'] = 'altre(s)';
$string['eventtypesite'] = 'globals';
$string['eventtypeuser'] = 'd\'usuari';
$string['eventview'] = 'Detalls de l\'esdeveniment';
$string['expired'] = 'Ha vençut';
$string['explain_site_timeformat'] = 'Podeu triar la visualització de les hores a tot el lloc en format de 12 o 24 h. Si trieu «per defecte», el format es determinarà automàticament d\'acord amb l\'idioma del lloc. Els usuaris poden triar format, igualment, en les seves preferències.';
$string['export'] = 'Exportació';
$string['exportbutton'] = 'Exporta';
$string['exportcalendar'] = 'Exporta el calendari';
$string['exporthelp'] = 'Com em subscric a aquest calendari des d\'una aplicació de calendari (Google/Outlook/una altra)?';
$string['forcecalendartype'] = 'Força el calendari';
$string['fri'] = 'dv';
$string['friday'] = 'divendres';
$string['generateurlbutton'] = 'Genera URL del calendari';
$string['global'] = 'Global';
$string['globalevent'] = 'Esdeveniment global';
$string['globalevents'] = 'Esdeveniments globals';
$string['gotoactivity'] = 'Vés a l\'activitat';
$string['gotocalendar'] = 'Vés al calendari';
$string['group'] = 'Grup';
$string['groupevent'] = 'Esdeveniment de grup';
$string['groupevents'] = 'Esdeveniments de grup';
$string['hideeventtype'] = 'Oculta els esdeveniments {$a}';
$string['hourly'] = 'Cada hora';
$string['importcalendar'] = 'Importa calendari';
$string['importcalendarfrom'] = 'Importa des de';
$string['importcalendarheading'] = 'S\'està important el calendari...';
$string['importfromfile'] = 'Fitxer del calendari (*.ics)';
$string['importfrominstructions'] = 'Proporcioneu l\'URL d\'un calendari remot o pengeu un fitxer.';
$string['importfromurl'] = 'URL del calendari';
$string['invalideventtype'] = 'El tipus d\'esdeveniment que heu escollit no és vàlid.';
$string['invalidtimedurationminutes'] = 'La durada en minuts que heu introduït no és vàlida. Introduïu un valor major que zero o escolliu sense durada.';
$string['invalidtimedurationuntil'] = 'La data i hora que heu escollit per a l\'hora final és abans de l\'hora inicial. Corregiu-ho abans de continuar.';
$string['iwanttoexport'] = 'Exporta';
$string['less'] = 'Menys';
$string['managesubscriptions'] = 'Gestiona les subscripcions';
$string['manyevents'] = '{$a} esdeveniments';
$string['mon'] = 'dl';
$string['monday'] = 'dilluns';
$string['monthly'] = 'Mensual';
$string['monthlyview'] = 'Vista mensual';
$string['monthnext'] = 'Més següent';
$string['monthprev'] = 'Mes anterior';
$string['monththis'] = 'Aquest mes';
$string['more'] = 'Més';
$string['namewithsource'] = '{$a->name} ({$a->source})';
$string['never'] = 'Mai';
$string['newevent'] = 'Esdeveniment nou';
$string['nocalendarsubscriptions'] = 'No teniu subscripcions a calendaris';
$string['notitle'] = 'Cap nom';
$string['noupcomingevents'] = 'No hi ha esdeveniments propers.';
$string['oneevent'] = 'un esdeveniment';
$string['pollinterval'] = 'Interval d\'actualització';
$string['pollinterval_help'] = 'Freqüència amb què us agradaria que el calendari s\'actualitzés amb nous esdeveniments.';
$string['pref_lookahead'] = 'Esdeveniments propers';
$string['pref_lookahead_help'] = 'Això estableix el nombre (màxim) de dies futurs en què pot caure l\'inici d\'un esdeveniment per tal de mostrar-se com a esdeveniment proper. Els esdeveniments que comencin més enllà no es mostraran mai com a propers. Tingueu en compte que <strong>no hi ha cap garantia</strong> que els esdeveniments que comencin en aquest interval es mostrin; si n\'hi ha molts (més que els especificats al paràmetre «Nombre màxim d\'esdeveniments propers») aleshores els més distants no es mostraran.';
$string['pref_maxevents'] = 'Nombre màxim d\'esdeveniments propers';
$string['pref_maxevents_help'] = 'Això estableix el nombre màxim d\'esdeveniments propers que poden mostrar-se. Si hi poseu un número molt gran és possible que els esdeveniments mostrats ocupin molt d\'espai a la vostra pantalla.';
$string['pref_persistflt'] = 'Recorda els paràmetres de filtre';
$string['pref_persistflt_help'] = 'Si això està habilitat, Moodle recordarà la vostra darrera configuració del filtre i la restaurarà automàticament cada vegada que inicieu la sessió.';
$string['pref_startwday'] = 'Primer dia de la setmana';
$string['pref_startwday_help'] = 'Les setmanes del calendari es mostraran començant pel dia que escolliu aquí.';
$string['pref_timeformat'] = 'Format de visualització de l\'hora';
$string['pref_timeformat_help'] = 'Podeu escollir visualitzar les hores en format de 12 hores o bé de 24. Si escolliu «per defecte», llavors el format s\'escollirà automàticament en funció de l\'idioma que utilitzeu al lloc.';
$string['preferences'] = 'Preferències';
$string['preferences_available'] = 'Preferències personals';
$string['preferredcalendar'] = 'Calendari preferit';
$string['privacy:metadata:calendar:event'] = 'El component Calendari pot emmagatzemar els detalls d\'esdeveniment del calendari de l\'usuari en el nucli del subsistema.';
$string['privacy:metadata:calendar:event:description'] = 'La descripció de l\'esdeveniment del calendari.';
$string['privacy:metadata:calendar:event:eventtype'] = 'El tipus d\'esdeveniment de l\'esdeveniment del calendari.';
$string['privacy:metadata:calendar:event:name'] = 'El nom de l\'esdeveniment del calendari.';
$string['privacy:metadata:calendar:event:timeduration'] = 'La durada de la subscripció del calendari.';
$string['privacy:metadata:calendar:event:timestart'] = 'El temps de començament de la subscripció del calendari.';
$string['privacy:metadata:calendar:event_subscriptions'] = 'El component Calendari pot emmagatzemar els detalls de subscripcions del calendari de l\'usuari en el nucli del subsistema.';
$string['privacy:metadata:calendar:event_subscriptions:eventtype'] = 'El tipus d\'esdeveniment de la subscripció del calendari.';
$string['privacy:metadata:calendar:event_subscriptions:name'] = 'El nom de la subscripció del calendari.';
$string['privacy:metadata:calendar:event_subscriptions:url'] = 'L\'URL de la subscripció del calendari.';
$string['privacy:metadata:calendar:preferences:calendar_savedflt'] = 'El tipus d\'esdeveniment de calendari configurat mostra la preferència d\'usuari.';
$string['recentupcoming'] = 'Recents i els propers 60 dies';
$string['repeatedevents'] = 'Esdeveniments periòdics';
$string['repeateditall'] = 'Aplica els canvis als altres {$a} esdeveniments d\'aquesta sèrie';
$string['repeateditthis'] = 'Aplica els canvis només a aquest esdeveniment';
$string['repeatevent'] = 'Repeteix aquest esdeveniment';
$string['repeatnone'] = 'No es repeteix';
$string['repeatweeksl'] = 'Nombre de repeticions setmanals';
$string['repeatweeksr'] = 'esdeveniments';
$string['sat'] = 'ds';
$string['saturday'] = 'dissabte';
$string['showeventtype'] = 'Mostra els esdeveniments {$a}';
$string['shown'] = 'mostrat';
$string['site'] = 'lloc';
$string['siteevent'] = 'Esdeveniment de lloc';
$string['siteevents'] = 'Esdeveniments del lloc';
$string['spanningevents'] = 'Esdeveniments en marxa';
$string['subscriptionname'] = 'Nom del calendari';
$string['subscriptionremoved'] = 'S\'ha suprimit la subscripció al calendari {$a}';
$string['subscriptions'] = 'Subscripcions';
$string['subscriptionsource'] = 'Font de l\'esdeveniment: {$a}';
$string['subscriptionupdated'] = 'S\'ha actualitzat la subscripció al calendari {$a}';
$string['sun'] = 'dg';
$string['sunday'] = 'diumenge';
$string['thu'] = 'dj';
$string['thursday'] = 'dijous';
$string['timeformat_12'] = '12 hores (am/pm)';
$string['timeformat_24'] = '24 hores';
$string['timeperiod'] = 'Període de temps';
$string['today'] = 'Avui';
$string['todayplustitle'] = 'Avui {$a}';
$string['tomorrow'] = 'Demà';
$string['tt_deleteevent'] = 'Suprimeix esdeveniment';
$string['tt_editevent'] = 'Edita esdeveniment';
$string['tue'] = 'dt';
$string['tuesday'] = 'dimarts';
$string['typecategory'] = 'Esdeveniment de categoria';
$string['typeclose'] = '';
$string['typecourse'] = 'Esdeveniment del curs';
$string['typedue'] = 'Esdeveniment de venciment';
$string['typegradingdue'] = 'Esdeveniment de venciment de qualificació';
$string['typegroup'] = 'Esdeveniment de grup';
$string['typeopen'] = '';
$string['typesite'] = 'Esdeveniment del lloc';
$string['typeuser'] = 'Esdeveniment de l\'usuari';
$string['upcomingevents'] = 'Esdeveniments propers';
$string['upcomingeventsfor'] = 'Esdeveniments propers per a:';
$string['urlforical'] = 'URL per a subscriure\'s al calendari en format iCal';
$string['user'] = 'Usuari';
$string['userevent'] = 'Esdeveniment d\'usuari';
$string['userevents'] = 'Esdeveniments de l\'usuari';
$string['viewupcomingactivitiesdue'] = 'Visualitza el venciment de les activitats properes';
$string['wed'] = 'dc';
$string['wednesday'] = 'dimecres';
$string['weekly'] = 'Setmanal';
$string['weeknext'] = 'Setmana següent';
$string['weekthis'] = 'Aquesta setmana';
$string['when'] = 'Quan';
$string['whendate'] = 'Quan: {$a}';
$string['yesterday'] = 'Ahir';
$string['youcandeleteallrepeats'] = 'Aquest esdeveniment és part d\'una sèrie d\'esdeveniments que es repeteixen. Podeu suprimir només aquest esdeveniment, o tots els {$a} de la sèrie alhora.';
