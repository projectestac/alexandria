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
 * Strings for component 'calendar', language 'fr', version '3.8'.
 *
 * @package     calendar
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityevent'] = 'Événement d\'activité';
$string['addevent'] = 'Ajouter des événements';
$string['advancedoptions'] = 'Options avancées';
$string['allday'] = 'Tout le jour';
$string['annually'] = 'Chaque année';
$string['calendar'] = 'Calendrier';
$string['calendarheading'] = 'Calendrier {$a}';
$string['calendarpreferences'] = 'Préférences du calendrier';
$string['calendartypes'] = 'Types de calendriers';
$string['calendarurl'] = 'URL du calendrier : {$a}';
$string['category'] = 'Catégorie';
$string['categoryevent'] = 'Événement de catégorie';
$string['categoryevents'] = 'Événements de catégorie';
$string['clickhide'] = 'cacher';
$string['clickshow'] = 'afficher';
$string['colactions'] = 'Actions';
$string['colcalendar'] = 'Calendrier';
$string['collastupdated'] = 'Dernière mise à jour';
$string['colpoll'] = 'Mise à jour';
$string['commontasks'] = 'Options';
$string['confirmeventdelete'] = 'Voulez-vous vraiment supprimer l\'événement « {$a} » ?';
$string['confirmeventseriesdelete'] = 'L\'événement « {$a->name} » fait partie d\'une série d\'événements. Voulez-vous supprimer cet événement seulement ou les {$a->count} événements de la série ?';
$string['course'] = 'Cours';
$string['coursecalendar'] = 'Calendrier de {$a}';
$string['courseevent'] = 'Événement de cours';
$string['courseevents'] = 'Événements de cours';
$string['courses'] = 'Cours';
$string['customexport'] = 'Intervalle personnalisé ({$a->timestart} - {$a->timeend})';
$string['daily'] = 'Chaque jour';
$string['day'] = 'Jour';
$string['dayeventsmany'] = '{$a->num} événements, {$a->day}';
$string['dayeventsnone'] = 'Aucun événement, {$a}';
$string['dayeventsone'] = '1 événement, {$a}';
$string['daynext'] = 'Jour suivant';
$string['dayprev'] = 'Jour précédent';
$string['dayviewfor'] = 'Vue quotidienne pour';
$string['dayviewtitle'] = 'Vue journalière : {$a}';
$string['daywithnoevents'] = 'Il n\'y a pas d\'événement programmé à cette date.';
$string['default'] = 'Valeur par défaut';
$string['deleteallevents'] = 'Supprimer tous les événements';
$string['deleteevent'] = 'Supprimer l\'événement';
$string['deleteevents'] = 'Supprimer les événements';
$string['deleteoneevent'] = 'Supprimer cet événement';
$string['detailedmonthviewfor'] = 'Vue mensuelle détaillée pour';
$string['detailedmonthviewtitle'] = 'Vue mensuelle détaillée : {$a}';
$string['durationminutes'] = 'Durée en minutes';
$string['durationnone'] = 'Sans durée';
$string['durationuntil'] = 'Jusqu\'au';
$string['editevent'] = 'Modification de l\'événement';
$string['erroraddingevent'] = 'Impossible d\'ajouter un événement';
$string['errorbadsubscription'] = 'Abonnement au calendrier introuvable';
$string['errorbeforecoursestart'] = 'Impossible de fixer un événement avant le début du cours';
$string['errorcannotimport'] = 'Vous ne pouvez pas configurer d\'abonnement au calendrier en ce moment.';
$string['errorhasuntilandcount'] = 'Soit UNTIL, soit COUNT doit être mentionné dans une règle de récurrence, mais pas les deux termes à la fois dans une même règle.';
$string['errorinvalidbydayprefix'] = 'Des valeurs entières précédant une règle BYDAY ne peuvent être présentes que pour les règles de récurrence MONTHLY ou YEARLY.';
$string['errorinvalidbydaysuffix'] = 'Les valeurs valides pour le jour de la semaine dans une règle BYDAY sont MO, TU, WE, TH, FR, SA et SU.';
$string['errorinvalidbyhour'] = 'Les valeurs valides pour la règle BYHOUR sont 0 à 23.';
$string['errorinvalidbyminute'] = 'Les valeurs valides pour la règle BYMINUTE sont 0 à 59.';
$string['errorinvalidbymonth'] = 'Les valeurs valides pour la règle BYMONTH sont 1 à 12.';
$string['errorinvalidbymonthday'] = 'Les valeurs valides pour la règle BYMONTHDAY sont 1 à 31 ou -31 à -1.';
$string['errorinvalidbysecond'] = 'Les valeurs valides pour la règle BYSECOND sont 0 à 59.';
$string['errorinvalidbysetpos'] = 'Les valeurs valides pour la règle BYSETPOS sont 1 à 366 ou -366 à -1.';
$string['errorinvalidbyweekno'] = 'Les valeurs valides pour la règle BYWEEKNO sont 1 à 53 ou -53 à -1.';
$string['errorinvalidbyyearday'] = 'Les valeurs valides pour la règle BYYEARDAY sont 1 à 366 ou -366 à -1.';
$string['errorinvaliddate'] = 'Date invalide';
$string['errorinvalidicalurl'] = 'L\'URL iCal saisie n\'est pas valide';
$string['errorinvalidinterval'] = 'La valeur pour la règle INTERVAL doit être un entier positif.';
$string['errorinvalidminutes'] = 'Indiquez une durée en minutes (un nombre entre 1 et 999).';
$string['errorinvalidrepeats'] = 'Indiquez un nombre d\'événements (un nombre entre 1 et 99).';
$string['errormustbeusedwithotherbyrule'] = 'La règle BYSETPOS ne doit être utilisée qu\'en compagnie d\'une autre partie de règle BYxxx.';
$string['errornodescription'] = 'Une description est requise';
$string['errornoeventname'] = 'Le nom est requis';
$string['errornonyearlyfreqwithbyweekno'] = 'La règle BYWEEKNO n\'est valide que pour les règles YEARLY.';
$string['errorrequiredurlorfile'] = 'Une URL ou un fichier sont nécessaires pour importer un calendrier.';
$string['errorrrule'] = 'La règle de récurrence transmise semble incorrecte.';
$string['errorrruleday'] = 'La règle de récurrence a un paramètre de jour non valide.';
$string['errorrrulefreq'] = 'La règle de récurrence a un paramètre de fréquence non valide.';
$string['eventcalendareventcreated'] = 'Événement de calendrier créé';
$string['eventcalendareventdeleted'] = 'Événement de calendrier supprimé';
$string['eventcalendareventupdated'] = 'Événement de calendrier modifié';
$string['eventdate'] = 'Date';
$string['eventdescription'] = 'Description';
$string['eventduration'] = 'Durée';
$string['eventendtime'] = 'Fin';
$string['eventendtimewrapped'] = '{$a} (date de fin)';
$string['eventinstanttime'] = 'Heure';
$string['eventkind'] = 'Type d\'événement';
$string['eventname'] = 'Nom de l\'événement';
$string['eventnameandcategory'] = '{$a->category} : {$a->name}';
$string['eventnameandcourse'] = '{$a->course} : {$a->name}';
$string['eventnone'] = 'Pas d\'événement';
$string['eventrepeat'] = 'Répétitions';
$string['events'] = 'Événements';
$string['eventsall'] = 'Tous les événements';
$string['eventsdeleted'] = 'Événements supprimés';
$string['eventsfor'] = 'Événements du {$a}';
$string['eventsimported'] = 'Événements importés : {$a}';
$string['eventskey'] = 'Légende';
$string['eventsource'] = 'Source de l\'événement';
$string['eventspersonal'] = 'Mes événements personnels';
$string['eventsrelatedtocategories'] = 'Événements en lien avec des catégories';
$string['eventsrelatedtocourses'] = 'Événement en liens avec les cours';
$string['eventsrelatedtogroups'] = 'Événements relatifs à des groupes';
$string['eventsskipped'] = 'Événements ignorés : {$a}';
$string['eventstarttime'] = 'Début';
$string['eventstoexport'] = 'Événements à exporter';
$string['eventsubscriptioncreated'] = 'Abonnement à un calendrier créé';
$string['eventsubscriptiondeleted'] = 'Abonnement à un calendrier supprimé';
$string['eventsubscriptioneditwarning'] = 'Cet événement est issu d\'un abonnement à un calendrier. Les modifications de cet événement seront perdues si l\'abonnement est supprimé.';
$string['eventsubscriptionupdated'] = 'Abonnement à un calendrier modifié';
$string['eventsupdated'] = 'Événements mis à jour : {$a}';
$string['eventtime'] = 'à';
$string['eventtype'] = 'Type d\'événement';
$string['eventtypecategory'] = 'catégorie';
$string['eventtypecourse'] = 'cours';
$string['eventtypeglobal'] = 'global';
$string['eventtypegroup'] = 'groupe';
$string['eventtypemodule'] = 'module';
$string['eventtypesite'] = 'site';
$string['eventtypeuser'] = 'utilisateur';
$string['eventview'] = 'Détails de l\'événement';
$string['expired'] = 'Échu';
$string['explain_site_timeformat'] = 'Vous pouvez choisir d\'afficher les heures en format 12 ou 24 heures pour tout le site. Si vous choisissez le réglage « Valeur par défaut », le format sera choisi automatiquement en fonction de la langue que vous utilisez dans ce site. Ce réglage peut être modifié dans le profil des utilisateurs.';
$string['export'] = 'Exportation';
$string['exportbutton'] = 'Exporter';
$string['exportcalendar'] = 'Exporter le calendrier';
$string['exporthelp'] = 'Comment puis-je m\'abonner à ce calendrier à partir d\'une application de calendrier (Google, Outlook, Calendrier, etc.) ?';
$string['forcecalendartype'] = 'Imposer le type de calendrier';
$string['fri'] = 'Ve';
$string['friday'] = 'Vendredi';
$string['generateurlbutton'] = 'URL du calendrier';
$string['global'] = 'Global';
$string['globalevent'] = 'Événement global';
$string['globalevents'] = 'Événements globaux';
$string['gotoactivity'] = 'Vers l\'activité';
$string['gotocalendar'] = 'Aller au calendrier';
$string['group'] = 'Groupe';
$string['groupevent'] = 'Événement de groupe';
$string['groupevents'] = 'Événements de groupe';
$string['hideeventtype'] = 'Masquer les événements de type {$a}';
$string['hourly'] = 'Chaque heure';
$string['importcalendar'] = 'Importer un calendrier';
$string['importcalendarfrom'] = 'Importer depuis';
$string['importcalendarheading'] = 'Importer un calendrier…';
$string['importfromfile'] = 'Fichier calendrier (.ics)';
$string['importfrominstructions'] = 'Veuillez indiquer l\'URL d\'un calendrier ou déposer un fichier.';
$string['importfromurl'] = 'URL d\'un calendrier';
$string['invalideventtype'] = 'Le type d\'événement sélectionné n\'est pas valide.';
$string['invalidtimedurationminutes'] = 'La durée en minutes que vous avez saisie est incorrecte. Veuillez indiquer un nombre de minutes plus grand que 0 ou choisir sans durée.';
$string['invalidtimedurationuntil'] = 'La date et l\'heure choisies pour la fin de l\'événement sont antérieures au début de l\'événement. Veuillez corriger ceci avant de continuer.';
$string['iwanttoexport'] = 'Exporter';
$string['less'] = 'Moins';
$string['managesubscriptions'] = 'Gérer les abonnements';
$string['manyevents'] = '{$a} événements';
$string['mon'] = 'Lu';
$string['monday'] = 'Lundi';
$string['monthly'] = 'Chaque mois';
$string['monthlyview'] = 'Vue mensuelle';
$string['monthnext'] = 'Mois prochain';
$string['monthprev'] = 'Mois précédent';
$string['monththis'] = 'Ce mois';
$string['more'] = 'Plus';
$string['namewithsource'] = '{$a->name} ({$a->source})';
$string['never'] = 'Jamais';
$string['newevent'] = 'Nouvel événement';
$string['nocalendarsubscriptions'] = 'Vous n\'avez pas d\'abonnement à un calendrier';
$string['notitle'] = 'sans titre';
$string['noupcomingevents'] = 'Aucun événement à venir';
$string['oneevent'] = '1 événement';
$string['pollinterval'] = 'Intervalle de mise à jour';
$string['pollinterval_help'] = 'Fréquence de mise à jour de votre calendrier';
$string['pref_lookahead'] = 'Événements à venir';
$string['pref_lookahead_help'] = 'Ce paramètre détermine le nombre (maximum) de jours avant le début effectif d\'un événement pour que celui-ci soit annoncé comme événement à venir. Il n\'y a <strong>aucune garantie</strong> que tous les événements dans ce laps de temps soeint affichés : si le nombre d\'événements à venir dépasse le nombre maximal défini par le réglage « Nombre maximal d\'événements à venir »), les événements les plus récents ne seront pas affichés.';
$string['pref_maxevents'] = 'Nombre maximal d\'événements à venir';
$string['pref_maxevents_help'] = 'Ce réglage définit le nombre maximal d\'événements à venir qui seront affichés. Si vous spécifiez un nombre élevé, l\'affichage ne sera pas optimal.';
$string['pref_persistflt'] = 'Enregistrer les réglages des filtres';
$string['pref_persistflt_help'] = 'Si cette option est activée, Moodle se rappellera vos derniers réglages des filtres d\'événements et les mettra en vigueur automatiquement à chacune de vos connexions.';
$string['pref_startwday'] = 'Premier jour de la semaine';
$string['pref_startwday_help'] = 'Ce réglage définit le premier jour de la semaine et détermine la façon dont les calendriers mensuels sont affichés.';
$string['pref_timeformat'] = 'Format d\'affichage des heures';
$string['pref_timeformat_help'] = 'Ce réglage définit l\'affichage des heures dans le calendrier. Vous pouvez choisir le format 12 heures ou 24 heures. Si vous choisissez « Valeur par défaut », le format sera celui défini par la langue que vous utilisez dans le site.';
$string['preferences'] = 'Réglages';
$string['preferences_available'] = 'Vos réglages personnels';
$string['preferredcalendar'] = 'Calendrier préféré';
$string['privacy:metadata:calendar:event'] = 'Le composant Calendrier peut enregistrer dans le sous-système cœur des informations sur les événements de calendrier des utilisateurs.';
$string['privacy:metadata:calendar:event:description'] = 'La description de l\'événement de calendrier.';
$string['privacy:metadata:calendar:event:eventtype'] = 'Le type de l\'événement de calendrier.';
$string['privacy:metadata:calendar:event:name'] = 'Le nom de l\'événement de calendrier.';
$string['privacy:metadata:calendar:event:timeduration'] = 'L\'URL de l\'abonnement de calendrier.';
$string['privacy:metadata:calendar:event:timestart'] = 'La durée de l\'événement de calendrier.';
$string['privacy:metadata:calendar:event_subscriptions'] = 'Le composant Calendrier peut enregistrer dans le sous-système cœur des informations sur les abonnements de calendrier des utilisateurs.';
$string['privacy:metadata:calendar:event_subscriptions:eventtype'] = 'Le type d\'événement de l\'abonnement de calendrier.';
$string['privacy:metadata:calendar:event_subscriptions:name'] = 'Le nom de l\'abonnement de calendrier.';
$string['privacy:metadata:calendar:event_subscriptions:url'] = 'L\'URL de l\'abonnement de calendrier.';
$string['privacy:metadata:calendar:preferences:calendar_savedflt'] = 'La préférence de l\'utilisateur concernant l\'affichage du type d\'événement de calendrier.';
$string['recentupcoming'] = 'Les 60 prochains jours';
$string['repeatedevents'] = 'Événements répétés';
$string['repeateditall'] = 'Appliquer également les modifications aux {$a} autres événements de cette série';
$string['repeateditthis'] = 'Appliquer les modifications à cet événement seulement';
$string['repeatevent'] = 'Répéter cet événement';
$string['repeatnone'] = 'Sans répétition';
$string['repeatweeksl'] = 'Nombre de répétitions hebdomadaires';
$string['repeatweeksr'] = 'événements';
$string['sat'] = 'Sa';
$string['saturday'] = 'Samedi';
$string['showeventtype'] = 'Afficher {$a} événements';
$string['shown'] = 'affichés';
$string['site'] = 'Site';
$string['siteevent'] = 'Événement de site';
$string['siteevents'] = 'Événements de site';
$string['spanningevents'] = 'Événements en cours';
$string['subscriptionname'] = 'Nom du calendrier';
$string['subscriptionremoved'] = 'Abonnement de calendrier {$a} supprimé';
$string['subscriptions'] = 'Abonnements';
$string['subscriptionsource'] = 'Source de l\'événement : {$a}';
$string['subscriptionupdated'] = 'Abonnement de calendrier {$a} mis à jour';
$string['sun'] = 'Di';
$string['sunday'] = 'Dimanche';
$string['thu'] = 'Je';
$string['thursday'] = 'Jeudi';
$string['timeformat_12'] = '12 h (am/pm)';
$string['timeformat_24'] = '24 h';
$string['timeperiod'] = 'Durée';
$string['today'] = 'Aujourd\'hui';
$string['todayplustitle'] = 'Aujourd\'hui {$a}';
$string['tomorrow'] = 'Demain';
$string['tt_deleteevent'] = 'Supprimer l\'événement';
$string['tt_editevent'] = 'Modifier l\'événement';
$string['tue'] = 'Ma';
$string['tuesday'] = 'Mardi';
$string['typecategory'] = 'Événement de catégorie';
$string['typeclose'] = 'Événement de fin';
$string['typecourse'] = 'Événement de cours';
$string['typedue'] = 'Événement de délai';
$string['typegradingdue'] = 'Événement d\'évaluation à effectuer';
$string['typegroup'] = 'Événement de groupe';
$string['typeopen'] = 'Événement de début';
$string['typesite'] = 'Événement global';
$string['typeuser'] = 'Événement privé';
$string['upcomingevents'] = 'Événements à venir';
$string['upcomingeventsfor'] = 'Événements à venir pour';
$string['urlforical'] = 'URL pour abonnement au calendrier';
$string['user'] = 'Utilisateur';
$string['userevent'] = 'Événement privé';
$string['userevents'] = 'Événements privés';
$string['viewupcomingactivitiesdue'] = 'Montrer les activités à venir';
$string['wed'] = 'Me';
$string['wednesday'] = 'Mercredi';
$string['weekly'] = 'Chaque semaine';
$string['weeknext'] = 'Semaine prochaine';
$string['weekthis'] = 'Cette semaine';
$string['when'] = 'Quand';
$string['whendate'] = 'Quand : {$a}';
$string['yesterday'] = 'Hier';
$string['youcandeleteallrepeats'] = 'Cet événement fait partie d\'une série d\'événements répétés. Vous pouvez supprimer uniquement cet événement ou tous les {$a} de la série à la fois.';
