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
 * Strings for component 'workshop', language 'de', version '3.8'.
 *
 * @package     workshop
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregategrades'] = 'Bewertungen neu berechnen';
$string['aggregation'] = 'Punkteberechnung';
$string['allocate'] = 'Einreichungen zuordnen';
$string['allocatedetails'] = 'erwartet: {$a->expected}<br />eingereicht: {$a->submitted}<br />zuzuordnen: {$a->allocate}';
$string['allocation'] = 'Einreichungen zuordnen';
$string['allocationconfigured'] = 'Zuordnung konfiguriert';
$string['allocationdone'] = 'Zuordnung erledigt';
$string['allocationerror'] = 'Zuordnungsfehler';
$string['allowedfiletypesforoverallfeedback'] = 'Erlaubte Dateitypen für Feedbackanhänge';
$string['allowedfiletypesforoverallfeedback_help'] = 'Die erlaubten Dateitypen für das Feedback können über eine kommagetrennte Liste von Dateitypen eingeschränkt werden. Wenn die Liste leer ist, sind alle Dateitypen zugelassen.';
$string['allowedfiletypesforsubmission'] = 'Erlaubte Dateitypen für Dateianhänge zur Einreichung';
$string['allowedfiletypesforsubmission_help'] = 'Die erlaubten Dateitypen für Dateianhänge zur Einreichung können über eine kommagetrennte Liste von Dateitypen eingeschränkt werden. Wenn die Liste leer ist, sind alle Dateitypen zugelassen.';
$string['allsubmissions'] = 'Alle Einreichungen ({$a})';
$string['alreadygraded'] = 'Bereits bewertet';
$string['areaconclusion'] = 'Abschlusstext';
$string['areainstructauthors'] = 'Anleitungen für die Einreichung';
$string['areainstructreviewers'] = 'Hinweise zur Beurteilung';
$string['areaoverallfeedbackattachment'] = 'Gesamtfeedback Anhänge';
$string['areaoverallfeedbackcontent'] = 'Gesamtfeedback Texte';
$string['areasubmissionattachment'] = 'Dateianhänge zur Einreichung';
$string['areasubmissioncontent'] = 'Einreichungstexte';
$string['assess'] = 'Beurteilen';
$string['assessedexample'] = 'Beurteilte Beispieleinreichung';
$string['assessedsubmission'] = 'Beurteilte Einreichung';
$string['assessingexample'] = 'Beispieleinreichung beurteilen';
$string['assessingsubmission'] = 'Einreichung beurteilen';
$string['assessment'] = 'Beurteilung';
$string['assessmentby'] = 'von <a href="{$a->url}">{$a->name}</a>';
$string['assessmentbyfullname'] = 'Beurteilt von {$a}';
$string['assessmentbyyourself'] = 'Ihre Beurteilung';
$string['assessmentdeleted'] = 'Beurteilung freigeben';
$string['assessmentend'] = 'Beurteilungen bis';
$string['assessmentendbeforestart'] = 'Der Abgabetermin der Beurteilungen kann nicht vor dem Beginn der Beurteilungsphase liegen';
$string['assessmentenddatetime'] = 'Beurteilungen sind möglich bis {$a->daydatetime} ({$a->distanceday})';
$string['assessmentendevent'] = '{$a} Abgabetermin für Beurteilungen';
$string['assessmentform'] = 'Beurteilungsbogen';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">Beurteilung</a> von <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentreference'] = 'Referenzbeurteilung';
$string['assessmentreferenceconflict'] = 'Es ist nicht möglich eine Beispieleinreichung zu bewerten, für die man selbst eine Referenzbeurteilung abgegeben hat.';
$string['assessmentreferenceneeded'] = 'Sie müssen diese Beispieleinreichung beurteilen, um eine Referenzbeurteilung zur Verfügung zu stellen. Um die Einreichung zu beurteilen, klicken Sie bitte auf den \'Weiter\'-Button.';
$string['assessments'] = 'Beurteilungen';
$string['assessmentsettings'] = 'Beurteilungseinstellungen';
$string['assessmentstart'] = 'Beurteilungen ab';
$string['assessmentstartdatetime'] = 'Beurteilungen sind möglich ab {$a->daydatetime} ({$a->distanceday})';
$string['assessmentstartevent'] = '{$a} Beginn der Beurteilungen';
$string['assessmentweight'] = 'Gewichtung Beurteilung';
$string['assignedassessments'] = 'Zur Beurteilung zugeordnete Einreichungen';
$string['assignedassessmentsnone'] = 'Sie haben keine zugeordneten Einreichungen zu beurteilen';
$string['backtoeditform'] = 'Zurück zur Einstellungsseite';
$string['byfullname'] = 'von <a href="{$a->url}">{$a->name}</a>';
$string['byfullnamewithoutlink'] = 'von {$a}';
$string['calculategradinggrades'] = 'Punkte für die Beurteilungen berechnen';
$string['calculategradinggradesdetails'] = 'erwartet: {$a->expected}<br />errechnet: {$a->calculated}';
$string['calculatesubmissiongrades'] = 'Punkte für die Einreichungen berechnen';
$string['calculatesubmissiongradesdetails'] = 'erwartet: {$a->expected}<br />berechnet: {$a->calculated}';
$string['chooseuser'] = 'Nutzer/in auswählen';
$string['clearaggregatedgrades'] = 'Alle errechneten Punkte löschen';
$string['clearaggregatedgrades_help'] = 'Die errechneten Punkte für die Einreichung und die Beurteilungen werden zurückgesetzt. Sie können diese Punkte in der Bewertungsphase von Grund auf neu berechnen.';
$string['clearaggregatedgradesconfirm'] = 'Sind Sie sich sicher, dass Sie alle berechneten Punkte für die Einreichungen und die Beurteilungen löschen wollen?';
$string['clearassessments'] = 'Beurteilungen löschen';
$string['clearassessments_help'] = 'Die berechneten Bewertungen für Einreichungen und Beurteilungen werden zurückgesetzt. Die Information in den ausgefüllten Beurteilungsbögen bleiben erhalten. Alle Bewerter müssen jedoch den Beurteilungsbogen noch einmal aufrufen und wieder speichern, damit die Bewertungen neu errechnet werden.';
$string['clearassessmentsconfirm'] = 'Sind Sie sich sicher, dass Sie alle Punkte aus der Beurteilungen löschen wollen? Sie sind nicht in der Lage, diesen Vorgang rückgängig zu machen. Die Beurteilenden müssen die Einreichungen erneut beurteilen.';
$string['conclusion'] = 'Abschluss';
$string['conclusion_help'] = 'Der Abschlusstext wird Teilnehmer/innen am Ende der gegenseitigen Beurteilung angezeigt. Er kann ein Gesamt-Feedback, eine Zusammenfassung oder Anregungen für nächste Schritte (z.B. verfassen eines Blog-Beitrages zu den gesammelten Erfahrungen) enthalten.';
$string['configexamplesmode'] = 'Standardmodus für Beispielbeurteilungen in gegenseitigen Beurteilungen';
$string['configgrade'] = 'Standardwert max. Einreichungspunktzahl in gegenseitigen Beurteilungen';
$string['configgradedecimals'] = 'Standardanzahl von Nachkommastellen bei der Anzeige von Punkten.';
$string['configgradinggrade'] = 'Standardwert für max. Bewertungspunktzahl für Beurteilungen in gegenseitigen Beurteilungen';
$string['configmaxbytes'] = 'Standardwert für die Größe von Dateianhängen an Einreichungen für alle gegenseitigen Beurteilungen dieser Website (Kurseinstellungen und andere lokale Einstellungen gelten weiter)';
$string['configstrategy'] = 'Standardwert für Beurteilungsart für gegenseitige Beurteilungen';
$string['createsubmission'] = 'Einreichung hinzufügen';
$string['crontask'] = 'Hintergrundprozess für gegenseitige Beurteilung';
$string['daysago'] = 'vor {$a} Tagen';
$string['daysleft'] = '{$a} Tage verbleibend';
$string['daystoday'] = 'heute';
$string['daystomorrow'] = 'morgen';
$string['daysyesterday'] = 'gestern';
$string['deadlinesignored'] = 'Die Zeitvorgaben treffen auf Sie nicht zu';
$string['deletesubmission'] = 'Einreichung löschen';
$string['editassessmentform'] = 'Beurteilungsbogen bearbeiten';
$string['editassessmentformstrategy'] = 'Beurteilungsbogen ({$a}) bearbeiten';
$string['editingassessmentform'] = 'Beurteilungsbogen bearbeiten';
$string['editingsubmission'] = 'Einreichung bearbeiten';
$string['editsubmission'] = 'Abgabe bearbeiten';
$string['err_multiplesubmissions'] = 'Während der Bearbeitung des Formulars wurde eine neue Einreichung abgegeben. Mehrere Einreichungen je Nutzer sind jedoch nicht erlaubt.  ';
$string['err_removegrademappings'] = 'Es ist nicht möglich die nicht verwendeten Punktetabellen zu löschen';
$string['evaluategradeswait'] = 'Bitte warten Sie bis die Beurteilungen bewertet und die Bewertungen berechnet sind.';
$string['evaluation'] = 'Bewertung';
$string['evaluationmethod'] = 'Bewertungsmethode';
$string['evaluationmethod_help'] = 'Das Auswertungsverfahren bestimmt, wie die Bewertung für die Beurteilung berechnet wird. Sie können die Bewertung wiederholt mit unterschiedlichen Einstellungen neu berechnen lassen, wenn Sie mit dem Ergebnis nicht zufrieden sind.';
$string['evaluationsettings'] = 'Einstellungen für rechnerische Bewertungen';
$string['eventassessableuploaded'] = 'Eine Einreichung wurde hochgeladen';
$string['eventassessmentevaluated'] = 'Beurteilung geprüft';
$string['eventassessmentevaluationsreset'] = 'Beurteilungsprüfung zurückgesetzt';
$string['eventassessmentreevaluated'] = 'Beurteilung neu geprüft';
$string['eventphaseswitched'] = 'Phase gewechselt';
$string['eventsubmissionassessed'] = 'Einreichung beurteilt';
$string['eventsubmissionassessmentsreset'] = 'Einreichungsbeurteilungen gelöscht';
$string['eventsubmissioncreated'] = 'Einreichung angelegt';
$string['eventsubmissiondeleted'] = 'Einreichung gelöscht';
$string['eventsubmissionreassessed'] = 'Einreichung neu beurteilt';
$string['eventsubmissionupdated'] = 'Einreichung aktualisiert';
$string['eventsubmissionviewed'] = 'Einreichung angezeigt';
$string['example'] = 'Beispieleinreichung';
$string['exampleadd'] = 'Beispieleinreichung hinzufügen';
$string['exampleassess'] = 'Beurteilen einer Beispieleinreichung';
$string['exampleassessments'] = 'Beispieleinreichungen zur Beurteilung';
$string['exampleassesstask'] = 'Beurteilungsbeispiel';
$string['exampleassesstaskdetails'] = 'erwartet: {$a->expected}<br />beurteilt: {$a->assessed}';
$string['examplecomparing'] = 'Abgleich der Beurteilungen für die Beispieleinreichung';
$string['exampledelete'] = 'Beispieleinreichung löschen';
$string['exampledeleteconfirm'] = 'Möchten Sie dieses Beispieleinreichung wirklich löschen? Ein Klick auf \'Weiter\' löscht die Einreichung.';
$string['exampleedit'] = 'Beispieleinreichung ändern';
$string['exampleediting'] = 'Beispieleinreichung wird geändert';
$string['exampleneedassessed'] = 'Sie müssen zuerst alle Beispieleinreichungen beurteilen';
$string['exampleneedsubmission'] = 'Sie haben zu erst Ihre Einreichung vorzunehmen und alle Beispieleinreichungen zu beurteilen';
$string['examplesbeforeassessment'] = 'Beispieleinreichungen stehen nach Ihrer eigenen Einreichung zur Verfügung. Bevor Sie andere Einreichungen beurteilen können, müssen Sie die Beispieleinreichungen beurteilen.';
$string['examplesbeforesubmission'] = 'Beispieleinreichungen müssen vor der eigenen Einreichung beurteilt werden';
$string['examplesmode'] = 'Modus für Beispielbeurteilungen';
$string['examplesubmissions'] = 'Beispieleinreichungen';
$string['examplesvoluntary'] = 'Die Beurteilung der Beispieleinreichung ist freiwillig';
$string['exportsubmission'] = 'Diese Seite exportieren';
$string['feedbackauthor'] = 'Rückmeldung an den / die Autor/in';
$string['feedbackauthorattachment'] = 'Dateianhang';
$string['feedbackby'] = 'Beurteilung von {$a}';
$string['feedbackreviewer'] = 'Rückmeldung an den/die Beurteiler/in';
$string['feedbacksettings'] = 'Feedback';
$string['formataggregatedgrade'] = '{$a->grade}';
$string['formataggregatedgradeover'] = '<del>{$a->grade}</del><br /><ins>{$a->over}</ins>';
$string['formatpeergrade'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span>';
$string['formatpeergradeover'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span>';
$string['formatpeergradeoverweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span> @ <span class="weight">{$a->weight}</span>';
$string['formatpeergradeweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span> @ <span class="weight">{$a->weight}</span>';
$string['givengrades'] = 'Vergebene Bewertungen';
$string['grade_grading_name'] = 'Beurteilung';
$string['grade_submission_name'] = 'Einreichung';
$string['gradecalculated'] = 'Berechnete Bewertung für Einreichung';
$string['gradedecimals'] = 'Dezimalstellen bei Punkten';
$string['gradegivento'] = '&gt;';
$string['gradeinfo'] = 'Bewertung: {$a->received} von {$a->max}';
$string['gradeitemassessment'] = '{$a->workshopname} (Beurteilung)';
$string['gradeitemsubmission'] = '{$a->workshopname} (Einreichung)';
$string['gradeover'] = 'Bewertung für die Einreichung überschreiben';
$string['gradereceivedfrom'] = '&lt;';
$string['gradesreport'] = 'Punktebericht für gegenseitige Beurteilung';
$string['gradetopassgrading'] = 'Erforderliche Beurteilungsbewertung zum Bestehen';
$string['gradetopasssubmission'] = 'Erforderliche Bewertung zum Bestehen';
$string['gradinggrade'] = 'Bewertung für die Beurteilung';
$string['gradinggrade_help'] = 'Diese Einstellung gibt an, wie viele Punkte maximal für die Einreichungsbeurteilung vergeben werden.';
$string['gradinggradecalculated'] = 'Berechnete Bewertung für die Beurteilung';
$string['gradinggradeof'] = 'Bewertung für die Beurteilung (von {$a})';
$string['gradinggradeover'] = 'Bewertung für die Beurteilung überschreiben';
$string['gradingsettings'] = 'Punkteeinstellungen';
$string['groupnoallowed'] = 'Sie können keiner Gruppe in dieser gegenseitigen Beurteilung beitreten.';
$string['iamsure'] = 'Ja, ich bin mir sicher';
$string['indicator:cognitivedepth'] = 'Gegenseitige Beurteilung kognitiv';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die eine Person in einer gegenseitigen Beurteilungsaktivität erreicht hat.';
$string['indicator:cognitivedepthdef'] = 'Gegenseitige Beurteilung kognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Die Person hat diesen Prozentsatz des kognitiven Engagements erreicht, das die gegenseitigen Beurteilungsaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Ansicht, Ansicht, Beiträge, Feedback anzeigen, Feedback kommentieren, Beiträge nach Feedback überarbeiten).';
$string['indicator:socialbreadth'] = 'Gegenseitige Beurteilung sozial';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die eine Person in einer gegenseitigen Beurteilungsaktivität erreicht hat.';
$string['indicator:socialbreadthdef'] = 'Gegenseitige Beurteilung sozial';
$string['indicator:socialbreadthdef_help'] = 'Die Person hat diesen Prozentsatz des soziale Engagements erreicht, das die gegenseitige Beurteilungsaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Teilnahme, Teilnahme allein, Teilnahme mit anderen).';
$string['info'] = 'Info';
$string['instructauthors'] = 'Anleitungen für die Einreichung';
$string['instructreviewers'] = 'Hinweise zur Beurteilung';
$string['introduction'] = 'Beschreibung';
$string['latesubmissions'] = 'Verspätete Einreichungen';
$string['latesubmissions_desc'] = 'Erlaube verspätete Einreichungen';
$string['latesubmissions_help'] = 'Wenn diese Option aktiviert ist, können Einreichungen auch nach dem festgelegten Abgabezeitpunkt oder während der Beurteilungsphase noch abgegeben werden. Diese können danach jedoch nicht mehr bearbeitet werden.';
$string['latesubmissionsallowed'] = 'Verspätete Einreichungen sind zugelassen';
$string['legacyallocationplugincron'] = 'Alte Cron-Zuteilung für gegenseitige Beurteilungen';
$string['maxbytes'] = 'Maximale Dateigröße';
$string['modulename'] = 'Gegenseitige Beurteilung';
$string['modulename_help'] = 'Die gegenseitige Beurteilung (Peer Assessment, früher Workshop) ist ein besonderer mehrstufiger Aufgabentyp:

Die Teilnehmer/innen können beliebige digitalen Inhalte (Dateien), wie z.B. textverarbeitete Dokumente oder Tabellenkalkulationen einreichen und mit dem Texteditor auch direkt Text in ein Feld eingeben.

Die Einreichungen werden anhand eines von der Trainerin/vom Trainer festgelegten Beurteilungsbogen mit mehreren Kriterien bewertet. Der Prozess der gegenseitige Beurteilung und des Verständnisses des Beurteilungsbogen kann im Voraus anhand von Beispieleinreichungen geübt werden, die von der Trainerin/vom Trainer zusammen mit einer Referenzbeurteilung zur Verfügung gestellt werden. Die Teilnehmer/innen haben die Möglichkeit, eine oder mehrere Einreichungen ihrer Kolleg/innen zu beurteilen. Einreichungen und Bewerter können bei Bedarf anonym bleiben.

Hinweis: Es müssen nicht alle Schritte aktiviert werden.

Die Teilnehmer/innen erhalten in einer gegenseitigen Beurteilung zwei Bewertungen - eine Bewertung für ihre Einreichung und eine Bewertung für die Beurteilung der Einreichungen ihrer Kollegen. Beide Noten werden in den Bewertungen festgehalten.';
$string['modulenameplural'] = 'Gegenseitige Beurteilungen';
$string['myassessments'] = 'Meine Beurteilungen';
$string['mysubmission'] = 'Meine Einreichung';
$string['nattachments'] = 'Maximalzahl von Dateianhängen';
$string['noexamples'] = 'Es gibt in dieser gegenseitigen Beurteilung keine Beispieleinreichungen';
$string['noexamplesformready'] = 'Sie müssen zuerst den Beurteilungsbogen erstellen, bevor Sie Beispieleinreichungen zur Verfügung stellen können';
$string['nogradeyet'] = 'Bisher keine Bewertung';
$string['nosubmissionfound'] = 'Für diese/n Nutzer/in wurde keine Einreichung gefunden';
$string['nosubmissions'] = 'Bisher gibt es in dieser gegenseitigen Beurteilung keine Einreichungen';
$string['nosubmissiontype'] = 'Zumindest ein Einreichungstyp muss aktiviert sein';
$string['notassessed'] = 'Bisher nicht beurteilt';
$string['nothingfound'] = 'Nichts anzuzeigen';
$string['nothingtoreview'] = 'Nichts zu beurteilen';
$string['notoverridden'] = 'Nicht überschrieben';
$string['noworkshops'] = 'Es gibt keine gegenseitigen Beurteilungen in diesem Kurs';
$string['noyoursubmission'] = 'Sie haben Ihre Einreichung bisher nicht übermittelt';
$string['nullgrade'] = '-';
$string['overallfeedback'] = 'Gesamtfeedback';
$string['overallfeedbackfiles'] = 'Höchstzahl der Dateianhänge an Gesamtfeedback';
$string['overallfeedbackmaxbytes'] = 'Maximale Gesamtgröße';
$string['overallfeedbackmode'] = 'Gesamtfeedbackmodus';
$string['overallfeedbackmode_0'] = 'Deaktiviert';
$string['overallfeedbackmode_1'] = 'Aktiviert (optional)';
$string['overallfeedbackmode_2'] = 'Aktiviert (notwendig)';
$string['overallfeedbackmode_help'] = 'Wenn diese Option aktiviert ist, wird ein Textfeld unter dem Beurteilungsbogen angezeigt. Bewertende können dort eine zusammenfassende Bewertung/Kommentierung der Einreichung vornehmen und zusätzliche Erläuterungen für ihre Beurteilung geben.';
$string['page-mod-workshop-x'] = 'Jede Seite einer gegenseitigen Beurteilung';
$string['participant'] = 'Teilnehmer/in';
$string['participantrevierof'] = 'Teilnehmer/in ist Beurteiler/in von';
$string['participantreviewedby'] = 'Teilnehmer/in wird beurteilt von';
$string['phaseassessment'] = 'Beurteilungsphase';
$string['phaseclosed'] = 'Geschlossen';
$string['phaseevaluation'] = 'Bewertungsphase';
$string['phasesetup'] = 'Vorbereitungsphase';
$string['phasesoverlap'] = 'Die Einreichungsphase und die Beurteilungsphase dürfen sich nicht überlappen.';
$string['phasesubmission'] = 'Einreichungsphase';
$string['pluginadministration'] = 'Administration gegenseitige Beurteilung';
$string['pluginname'] = 'Gegenseitige Beurteilung';
$string['prepareexamples'] = 'Beispieleinreichungen erstellen';
$string['previewassessmentform'] = 'Vorschau';
$string['privacy:metadata:aggregatedgradinggrade'] = 'Zusammengefasste Bewertung aller Beurteilungen des Nutzers in der Aktivität gegenseitige Beurteilung';
$string['privacy:metadata:assessmentgrade'] = 'Zusammengefasste Bewertung für die Lösungen dieser Aufgabe';
$string['privacy:metadata:assessmentgradinggrade'] = 'Bewertung für die Abgabe dieser Beurteilung';
$string['privacy:metadata:assessmentgradinggradeover'] = 'Manuell überschriebene Bewertungart für die Aufgabe';
$string['privacy:metadata:assessmentid'] = 'ID der Beurteilung';
$string['privacy:metadata:authorid'] = 'ID der Person, die die Einreichung abgibt';
$string['privacy:metadata:dimensiongrade'] = 'Bewertung in der festgelegten Aufgabendimension';
$string['privacy:metadata:dimensionid'] = 'ID der Beurteilungsdimension';
$string['privacy:metadata:example'] = 'Ob der Datensatz zu einer Beispieleinreichung gehört';
$string['privacy:metadata:feedbackauthor'] = 'Feedback für den Verfasser';
$string['privacy:metadata:feedbackauthorformat'] = 'Textformat des Feedbacks für den Verfasser';
$string['privacy:metadata:feedbackreviewer'] = 'Feedback an den Nutzer, der eine Beurteilung abgegeben hat';
$string['privacy:metadata:feedbackreviewerformat'] = 'Textformat des Feedbacks an den Nutzer der die Beurteilung abgegeben hat';
$string['privacy:metadata:late'] = 'Ob die Einreichunge nach dem Abgabetermin eingereicht wurde';
$string['privacy:metadata:peercomment'] = 'Kommentar zur vergebenen Bewertung des Nutzer, der die Beurteilung abgegeben hat';
$string['privacy:metadata:peercommentformat'] = 'Textformat des Kommentars';
$string['privacy:metadata:preference:perpage'] = 'Anzahl der Lösungen auf einer Seite für den Nutzer';
$string['privacy:metadata:published'] = 'Ob die Lösungen für alle Nutzer angezeigt werden sollen, wenn die \'gegenseitige Beurteilung\' abgeschlossen wurde';
$string['privacy:metadata:reviewerid'] = 'ID der Person, die die Beurteilung abgibt';
$string['privacy:metadata:strategy'] = 'Name des Bewertungsstratgieplugins, das Datensätze auswertet';
$string['privacy:metadata:submissioncontent'] = 'Inhalt der Einreichung';
$string['privacy:metadata:submissioncontentformat'] = 'Textformat des Einreichungsinhalts';
$string['privacy:metadata:submissiongrade'] = 'Zusammengefasste Bewertung der Einreichung als Dezimalzahl zwischen 0.. 100';
$string['privacy:metadata:submissiongradeover'] = 'Manuell angepasster Wert der zusammengefassten Bewertung';
$string['privacy:metadata:submissionid'] = 'ID der Einreichung';
$string['privacy:metadata:submissiontitle'] = 'Titel der Einreichung';
$string['privacy:metadata:subsystem:corefiles'] = 'Das Modul \'gegenseitige Beurteilung\' speichert Dateien, die in den Lösungstext eingebunden oder an diesen angehängt wurden';
$string['privacy:metadata:subsystem:coreplagiarism'] = 'Das Modul \'gegenseitige Beurteilung\' verfügt über ein integriertes Plagiatssystem.';
$string['privacy:metadata:timeaggregated'] = 'Wann die aggregrierte Bewertung zuletzt berechnet wurde';
$string['privacy:metadata:timecreated'] = 'Wann der Datensatz in der Datenbank angelegt wurde';
$string['privacy:metadata:timemodified'] = 'Wann der Datensatz zuletzt verändert wurde';
$string['privacy:metadata:userid'] = 'Identifier des Nutzers, für den aggregierte Bewertung erstellt wird';
$string['privacy:metadata:weight'] = 'Gewichtung der Beurteilung';
$string['privacy:metadata:workshopaggregations'] = 'Enthält aggregierte Bewertung für Beurteilungen';
$string['privacy:metadata:workshopassessments'] = 'Enthält Informationen über zugwiesene Aufgabeneinreichungen im Modul \'gegenseitige Beurteilung\'.';
$string['privacy:metadata:workshopgrades'] = 'Enthält Informationen wie die Beurteilungsbögen mit Bewertungen und Kommentaren befüllt wurden';
$string['privacy:metadata:workshopid'] = 'ID der Workshop-Aktivität';
$string['privacy:metadata:workshopsubmissions'] = 'Enthält Informationen über Einreichungen in der Aktivität \'gegenseitige Beurteilung\'.';
$string['privacy:request:delete:content'] = 'Der Inhalt wurde auf Anfrage des Nutzers oder wegen Zeitablauf gelöscht';
$string['privacy:request:delete:title'] = '[Gelöscht]';
$string['publishedsubmissions'] = 'Veröffentlichte Einreichungen';
$string['publishsubmission'] = 'Einreichung veröffentlichen';
$string['publishsubmission_help'] = 'Wenn die gegenseitige Beurteilung beendet ist, werden die Einreichungen den anderen Teilnehmer/innen veröffentlicht.';
$string['reassess'] = 'Erneut beurteilen';
$string['receivedgrades'] = 'Erhaltene Bewertung';
$string['recentassessments'] = 'Beurteilungen der gegenseitigen Beurteilung';
$string['recentsubmissions'] = 'Einreichungen der gegenseitigen Beurteilung';
$string['resetassessments'] = 'Alle Beurteilungen löschen';
$string['resetassessments_help'] = 'Sie können wählen, ob nur zugewiesene Beurteilungen gelöscht werden, ohne die abgegebenen Einreichungen zu löschen. Wenn Einreichungen gelöscht werden sollen, werden Bewertungen implizit mit gelöscht und diese Option wird ignoriert. In diesem Fall werden auch Beurteilungen für Beispieleinreichungen gelöscht werden.';
$string['resetphase'] = 'Zurück zur Vorbereitungsphase';
$string['resetphase_help'] = 'Wenn diese Option aktiviert ist, werden alle gegenseitigen Beurteilungen in die Ausgangseinstellung des Setups zurückgesetzt.';
$string['resetsubmissions'] = 'Alle Einreichungen löschen';
$string['resetsubmissions_help'] = 'Alle Einreichungen und Beurteilungen werden gelöscht. Beispieleinreichungen sind hiervon nicht betroffen.';
$string['saveandclose'] = 'Speichern und schließen';
$string['saveandcontinue'] = 'Speichern und weiter bearbeiten';
$string['saveandpreview'] = 'Speichern und Vorschau';
$string['saveandshownext'] = 'Sichern und weiter';
$string['search:activity'] = 'Gegenseitige Beurteilung - Beschreibung';
$string['selfassessmentdisabled'] = 'Selbstbeurteilung deaktiviert';
$string['showingperpage'] = '{$a} Einträge pro Seite';
$string['showingperpagechange'] = 'Ändern...';
$string['someuserswosubmission'] = 'Mindestens eine Person hat ihre Einreichung noch nicht vorgenommen';
$string['sortasc'] = 'Aufsteigend sortieren';
$string['sortdesc'] = 'Abwärts sortieren';
$string['strategy'] = 'Punktestrategie';
$string['strategy_help'] = 'Die Bewertungsstrategie legt den verwendeten Beurteilungsbogen und die Methode für das Bewerten der Einreichungen fest. Es gibt vier Optionen:

* Bewerten mit Kommentaren und Punkten: Kommentare und eine Bewertung für vordefinierte Aspekte
* Kommentare: Es gibt nur Kommentare zu vordefinierten Aspekten, jedoch keine Bewertung
* Aussagen zustimmen oder ablehnen: Kommentare und Ja/Nein Bewertungen zu vordefinierten Aussagen
* Bewertungskriterien: Verschiedene Level zu vordefinierten Aspekten';
$string['strategyhaschanged'] = 'Die Punktestrategie der gegenseitigen Beurteilung wurde seit dem Beginn der Änderungen geändert.';
$string['submission'] = 'Einreichung';
$string['submissionattachment'] = 'Dateianhang';
$string['submissionby'] = 'Eingereicht von {$a}';
$string['submissioncontent'] = 'Einreichungsinhalt';
$string['submissiondeleteconfirm'] = 'Möchten Sie wirklich die folgende Einreichung löschen?';
$string['submissiondeleteconfirmassess'] = 'Möchten Sie wirklich die folgende Einreichung löschen? Beachten Sie, dass auch die {$a->count} Beurteilungen entfernt werden, die mit der Einreichung verbunden sind. Damit könnten auch die Bewertungen der Beurteilter beeinflusst werden.';
$string['submissionend'] = 'Einreichungen bis';
$string['submissionendbeforestart'] = 'Der Abgabetermin für Einreichungen kann nicht vor dem Beginn der Einreichungphase liegen';
$string['submissionenddatetime'] = 'Einreichungen sind möglich bis {$a->daydatetime} ({$a->distanceday})';
$string['submissionendevent'] = '{$a} (Abgabetermin für Einreichungen)';
$string['submissionendswitch'] = 'Nach Abgabetermin automatisch zur nächsten Phase wechseln';
$string['submissionendswitch_help'] = 'Wenn diese Option aktiviert und ein Abgabetermin für Einreichungen festgelegt sind, wechselt die gegenseitige Beurteilung automatisch in die Beurteilungsphase.

Wenn diese Option aktiviert ist, sollte außerdem die Methode zur Einreichungszuteilung konfiguriert sein. Wenn die Einreichungen nicht zugewiesen sind, kann keine Beurteilung stattfinden, selbst wenn die gegenseitige Beurteilung sich in der Beurteilungsphase befindet.';
$string['submissiongrade'] = 'Bewertung für die Einreichung';
$string['submissiongrade_help'] = 'Diese Einstellung gibt an, wie viele Punkte maximal für eine Einreichung erhalten werden können.';
$string['submissiongradeof'] = 'Bewertung für die Einreichung (von {$a})';
$string['submissionlastmodified'] = 'Zuletzt bearbeitet';
$string['submissionrequiredcontent'] = 'Text eingeben oder Datei hinzufügen';
$string['submissionrequiredfile'] = 'Datei hinzufügen oder Text eingeben';
$string['submissionsettings'] = 'Einstellungen Einreichungen';
$string['submissionsreport'] = 'Einreichungsübersicht für gegenseitige Beurteilung';
$string['submissionstart'] = 'Einreichungen ab';
$string['submissionstartdatetime'] = 'Einreichungen sind möglich ab {$a->daydatetime} ({$a->distanceday})';
$string['submissionstartevent'] = '{$a} (Start für Einreichungen)';
$string['submissiontitle'] = 'Titel';
$string['submissiontypedisabled'] = 'Der Einreichungstyp ist für diese Gegenseitige Beurteilung deaktiviert.';
$string['submissiontypefileavailable'] = 'Dateianhang <span class="accesshide">verfügbar</span>';
$string['submissiontypefilerequired'] = '<span class="accesshide">Dateianhang </span> Erforderlich';
$string['submissiontypes'] = 'Einreichungstypen';
$string['submissiontypetextavailable'] = 'Online-Texteingabe<span class="accesshide"> verfügbar</span>';
$string['submissiontypetextrequired'] = '<span class="accesshide">Online-Texteingabe </span>Erforderlich';
$string['submittednotsubmitted'] = 'Abgegeben ({$a->submitted}) / nicht abgegeben ({$a->notsubmitted})';
$string['subplugintype_workshopallocation'] = 'Methode zur Einreichungszuteilung';
$string['subplugintype_workshopallocation_plural'] = 'Methoden zur Einreichungszuteilung';
$string['subplugintype_workshopeval'] = 'Bewertungsmethode';
$string['subplugintype_workshopeval_plural'] = 'Methode zur Bewertungsüberprüfung';
$string['subplugintype_workshopform'] = 'Punktestrategie';
$string['subplugintype_workshopform_plural'] = 'Bewertungsstrategien';
$string['switchingphase'] = 'Wechseln der Phase';
$string['switchphase'] = 'Phase wechseln';
$string['switchphase10'] = 'In Vorbereitungsphase wechseln';
$string['switchphase10info'] = 'Sie sind dabei in die <strong>Vorbereitungsphase</strong> der gegenseitigen Beurteilung zu wechseln. In dieser Phase können Teilnehmer/innen ihre Einreichungen oder Beurteilungen nicht bearbeiten. Trainer/innen können diese Phase dazu nutzen, um die Einstellungen, die Bewertungsstrategie oder Beurteilungsbögen zu ändern.';
$string['switchphase20'] = 'In Einreichungsphase wechseln';
$string['switchphase20info'] = 'Sie sind dabei in die <strong>Einreichungsphase</strong> der gegenseitigen Beurteilung zu wechseln. In dieser Phase können Teilnehmer/innen ihre Einreichungen innerhalb des ggf. definierten Zeitfensters übermitteln. Trainer/innen ordnen anschließend die Einreichungen den Beurteilenden zu.';
$string['switchphase30'] = 'In Beurteilungsphase wechseln';
$string['switchphase30auto'] = 'Die gegenseitige Beurteilung wechselt nach {$a->daydatetime} ({$a->distanceday}) automatisch in die Beurteilungsphase.';
$string['switchphase30info'] = 'Sie sind dabei in die <strong>Beurteilungsphase</strong> der gegenseitigen Beurteilung zu wechseln. In dieser Phase können Teilnehmer/innen innerhalb des ggf. definierten Zeitfensters Beurteilungen zu den zugeordneten Einreichungen erstellen oder bearbeiten.';
$string['switchphase40'] = 'In Bewertungsphase wechseln';
$string['switchphase40info'] = 'Sie sind dabei in die <strong>Bewertungsphase</strong> der gegenseitigen Beurteilung zu wechseln. In dieser Phase können Teilnehmer/innen ihre Einreichungen oder Beurteilungen nicht bearbeiten. Trainer/innen nutzen die Bewertungswerkzeuge, um die abschließende Bewertung vorzunehmen und Rückmeldungen an die Beurteilenden zu geben.';
$string['switchphase50'] = 'Gegenseitige Beurteilung abschließen';
$string['switchphase50info'] = 'Sie sind dabei die gegenseitige Beurteilung zu beenden. Die errechneten Bewertungen werden in die Kursbewertung übernommen. Teilnehmer/innen können ihre Einreichungen, ihre Beurteilungen und Bewertungen aufrufen.';
$string['switchphaseauto'] = 'Der Wechsel wurde terminiert';
$string['switchphasenext'] = 'Zur nächsten Phase wechseln';
$string['taskassesspeers'] = 'Andere Teilnehmende bewerten';
$string['taskassesspeersdetails'] = 'gesamt: {$a->total}<br />ausstehend: {$a->todo}';
$string['taskassessself'] = 'Selbstbeurteilung';
$string['taskconclusion'] = 'Abschluss der gegenseitigen Beurteilung aktivieren';
$string['taskdone'] = 'Aufgabe erledigt';
$string['taskfail'] = 'Aufgabe nicht betanden';
$string['taskinfo'] = 'Information zur Aufgabe';
$string['taskinstructauthors'] = 'Hinterlegen Sie hier die Anleitungen für die Einreichung';
$string['taskinstructreviewers'] = 'Hinterlegen Sie hier Hinweise zur Durchführung der Beurteilung';
$string['taskintro'] = 'Beschreibung für gegenseitige Beurteilung verfassen';
$string['tasksubmit'] = 'Übermitteln Sie Ihre Einreichung';
$string['tasktodo'] = 'Zu erledigender Schritt';
$string['toolbox'] = 'Hilfsmittel für gegenseitige Beurteilung';
$string['undersetup'] = 'Die gegenseitige Beurteilung wird gerade aktualisiert. Warten Sie, bis die nächste Phase freigegeben wird.';
$string['useexamples'] = 'Beispieleinreichungen';
$string['useexamples_desc'] = 'Beispieleinreichungen sind für Praxiserfahrungen im Beurteilen sinnvoll';
$string['useexamples_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer/innen eine oder mehrere Beispieleinreichungen selber beurteilen und ihre eigene Beurteilung mit der Referenzbeurteilung abgleichen. Die Bewertung wird bei der Gesamtbewertung für die Beurteilung nicht berücksichtigt.';
$string['usepeerassessment'] = 'Gegenseitige Beurteilung verwenden';
$string['usepeerassessment_desc'] = 'Teilnehmer/innen beurteilen Einreichungen von anderen';
$string['usepeerassessment_help'] = 'Wenn diese Option aktiviert ist, erhalten Teilnehmende Einreichungen anderer Teilnehmender zum beurteilen und erhalten dafür ebenfalls eine Bewertung, die der Bewertung für die eigene Einreichung zugerechnet wird.';
$string['userdatecreated'] = 'eingereicht am <span>{$a}</span>';
$string['userdatemodified'] = 'geändert am <span>{$a}</span>';
$string['userplan'] = 'Navigator für gegenseitige Beurteilung';
$string['userplan_help'] = 'Der Navigator für die gegenseitige Beurteilung zeigt alle Phasen und einzelne Schritte in den Phasen an. Die aktuelle Phase ist farblich gekennzeichnet und erledigte Schritte sind mit einem Haken gekennzeichnet.
Zum Wechseln der Phase klicken Sie bitte auf den Stern rechts neben der Phasen-Überschrift.';
$string['userplanaccessibilityskip'] = 'Zum aktuellen Schritt springen';
$string['userplanaccessibilitytitle'] = 'Zeitleiste mit {$a} Phasen';
$string['userplancurrentphase'] = 'Aktuelle Phase';
$string['useselfassessment'] = 'Selbstbeurteilung';
$string['useselfassessment_desc'] = 'Teilnehmer/innen können ihre eigene Einreichung beurteilen';
$string['useselfassessment_help'] = 'Wenn diese Option aktiviert ist, kann einem Nutzer auch seine eigene Einreichung zur Beurteilung zugewiesen werden. Er erhält dann dafür eine Bewertung, die der Bewertung für die eigene Einreichung zugerechnet wird.';
$string['viewworkshopsummary'] = 'Zusammenfassung für gegenseitige Beurteilung';
$string['weightinfo'] = 'Gewichtung: {$a}';
$string['withoutsubmission'] = 'Beurteiler ohne eigene Einreichung';
$string['workshop:addinstance'] = 'Neue gegenseitige Beurteilung hinzufügen';
$string['workshop:allocate'] = 'Einreichungen Beurteiler/innen zuordnen';
$string['workshop:deletesubmissions'] = 'Einreichungen löschen';
$string['workshop:editdimensions'] = 'Beurteilungsbögen bearbeiten';
$string['workshop:exportsubmissions'] = 'Einreichungen exportieren';
$string['workshop:ignoredeadlines'] = 'Zeitvorgaben ignorieren';
$string['workshop:manageexamples'] = 'Beispieleinreichungen organisieren';
$string['workshop:overridegrades'] = 'Berechnete Punkte überschreiben';
$string['workshop:peerassess'] = 'Gegenseitiges Beurteilen';
$string['workshop:publishsubmissions'] = 'Einreichungen veröffentlichen';
$string['workshop:submit'] = 'Absenden';
$string['workshop:switchphase'] = 'Phase wechseln';
$string['workshop:view'] = 'Gegenseitige Beurteilung anzeigen';
$string['workshop:viewallassessments'] = 'Alle Beurteilungen betrachten';
$string['workshop:viewallsubmissions'] = 'Alle Einreichungen betrachten';
$string['workshop:viewauthornames'] = 'Autorennamen betrachten';
$string['workshop:viewauthorpublished'] = 'Autor/innen von veröffentlichten Beiträgen ansehen';
$string['workshop:viewpublishedsubmissions'] = 'Veröffentlichte Einreichungen betrachten';
$string['workshop:viewreviewernames'] = 'Beurteilernamen anzeigen';
$string['workshopname'] = 'Name für gegenseitige Beurteilung';
$string['yourassessmentfor'] = 'Ihre Beurteilung für {$a}';
$string['yourgrades'] = 'Ihre Bewertungen';
$string['yoursubmission'] = 'Ihre Einreichung';
