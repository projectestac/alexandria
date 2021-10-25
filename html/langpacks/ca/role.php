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
 * Strings for component 'role', language 'ca', version '3.11'.
 *
 * @package     role
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = 'S\'està afegint un rol nou';
$string['addrole'] = 'Afegeix un rol nou';
$string['advancedoverride'] = 'Redefinició avançada de rols';
$string['allow'] = 'Permet';
$string['allowassign'] = 'Permís per assignar rols';
$string['allowed'] = 'Permès';
$string['allowoverride'] = 'Permís per redefinir rols';
$string['allowroletoassign'] = 'Permet que els usuaris amb rol {$a->fromrole} assignin el rol {$a->targetrole}';
$string['allowroletooverride'] = 'Permet que els usuaris amb rol {$a->fromrole} redefineixin el rol {$a->targetrole}';
$string['allowroletoswitch'] = 'Permet que els usuaris amb rol {$a->fromrole} commutin al rol {$a->targetrole}';
$string['allowroletoview'] = 'Permet als usuaris amb el rol {$a->fromrole} visualitzar el rol {$a->targetrole}';
$string['allowswitch'] = 'Permís per commutar rols';
$string['allowview'] = 'Permís per visualitzar';
$string['allsiteusers'] = 'Tots els usuaris del lloc';
$string['analytics:listinsights'] = 'Enumera les prediccions';
$string['analytics:listowninsights'] = 'Enumera les pròpies prediccions';
$string['analytics:managemodels'] = 'Gestiona els models';
$string['archetype'] = 'Arquetipus del rol';
$string['archetype_help'] = 'L\'arquetipus de rol determina els permisos quan un rol es reinicia als valors per defecte. També determina qualsevol permís nou per al rol quan s\'actualitza el lloc.';
$string['archetypecoursecreator'] = 'ARQUETIPUS: Creador de cursos';
$string['archetypeeditingteacher'] = 'ARQUETIPUS: Professor (editor)';
$string['archetypefrontpage'] = 'ARQUETIPUS: Usuari autenticat a la primera pàgina';
$string['archetypeguest'] = 'ARQUETIPUS: Convidat';
$string['archetypemanager'] = 'ARQUETIPUS: Gestor';
$string['archetypestudent'] = 'ARQUETIPUS: Estudiant';
$string['archetypeteacher'] = 'ARQUETIPUS: Professor (no-editor)';
$string['archetypeuser'] = 'ARQUETIPUS: Usuari autenticat';
$string['assignanotherrole'] = 'Assigna un altre rol';
$string['assignedroles'] = 'Rols assignats';
$string['assignerror'] = 'S\'ha produït un error en assignar el rol {$a->role} a l\'usuari {$a->user}.';
$string['assignglobalroles'] = 'Assigna rols globals';
$string['assignmentcontext'] = 'Context d\'assignació';
$string['assignmentoptions'] = 'Opcions d\'assignació';
$string['assignrole'] = 'Assigna un rol';
$string['assignrolenameincontext'] = 'Assigna el rol \'{$a->role}\' en el context \'{$a->context}';
$string['assignroles'] = 'Assigna rols';
$string['assignroles_help'] = 'Quan assigneu un rol a un usuari en un context, li atorgueu els permisos que conté aquest rol, en aquest context i en tots els contextos «inferiors». Per exemple, si atorgueu el rol d\'estudiant a un usuari en un curs, aquesta persona tindrà aquest rol en aquest curs i en tots els blocs i totes les activitats dins del curs.';
$string['assignrolesin'] = 'Assigna rols en aquest context: {$a}';
$string['assignrolesrelativetothisuser'] = 'Assigna rols relatius a aquest usuari';
$string['backtoallroles'] = 'Torna a la llista de tots els rols';
$string['backup:anonymise'] = 'Anonimitza les dades d\'usuari en fer la còpia de seguretat';
$string['backup:backupactivity'] = 'Còpia de seguretat d\'activitats';
$string['backup:backupcourse'] = 'Còpia de seguretat de cursos';
$string['backup:backupsection'] = 'Còpia de seguretat de seccions';
$string['backup:backuptargetimport'] = 'Còpia de seguretat de la importació';
$string['backup:configure'] = 'Configura les opcions de còpia de seguretat';
$string['backup:downloadfile'] = 'Descarregar fitxers de l\'àrea de còpies de seguretat';
$string['backup:userinfo'] = 'Còpia de seguretat de les dades d\'usuari';
$string['badges:awardbadge'] = 'Concedeix una insígnia a un usuari';
$string['badges:configurecriteria'] = 'Configura/edita els criteris per guanyar una insígnia';
$string['badges:configuredetails'] = 'Configura/edita els detalls de la insígnia';
$string['badges:configuremessages'] = 'Configura els missatges de la insígnia';
$string['badges:createbadge'] = 'Crea/duplica insígnies';
$string['badges:deletebadge'] = 'Suprimeix insígnies';
$string['badges:earnbadge'] = 'Guanya una insígnia';
$string['badges:manageglobalsettings'] = 'Gestiona la configuració global de les insígnies';
$string['badges:manageownbadges'] = 'Visualitzar i gestionar les insígnies guanyades pròpies';
$string['badges:revokebadge'] = 'Revocar la insígnia d\'un usuari';
$string['badges:viewawarded'] = 'Visualitza els usuaris que guanyaren una insígnia concreta sense que pogueren guanyar una insígnia';
$string['badges:viewbadges'] = 'Visualitza les insígnies disponibles sense guanyar-les';
$string['badges:viewotherbadges'] = 'Visualitzar les insígnies públiques en els perfils d\'altres usuaris';
$string['block:edit'] = 'Editar els paràmetres d\'un bloc';
$string['block:view'] = 'Visualitzar un bloc';
$string['blog:create'] = 'Crear noves entrades del blog';
$string['blog:manageentries'] = 'Editar i gestionar entrades';
$string['blog:manageexternal'] = 'Editar i gestionar blogs externs';
$string['blog:search'] = 'Cercar entrades del blogs';
$string['blog:view'] = 'Veure entrades del blog';
$string['blog:viewdrafts'] = 'Veure esborranys d\'entrades del blog';
$string['calendar:manageentries'] = 'Gestionar totes les entrades del calendari';
$string['calendar:managegroupentries'] = 'Gestionar entrades de calendari de grup';
$string['calendar:manageownentries'] = 'Gestionar les entrades pròpies del calendari';
$string['capabilities'] = 'Capacitats';
$string['capability'] = 'Capacitat';
$string['category:create'] = 'Crear categories';
$string['category:delete'] = 'Suprimir categories';
$string['category:manage'] = 'Gestionar les categories';
$string['category:update'] = 'Actualitzar les categories';
$string['category:viewcourselist'] = 'Visualitza les categories de cursos o els cursos que contenen';
$string['category:viewhiddencategories'] = 'Mostrar les categories ocultes';
$string['category:visibility'] = 'Mostrar les categories ocultes';
$string['checkglobalpermissions'] = 'Comprova els permisos del sistema';
$string['checkpermissions'] = 'Comprova els permisos';
$string['checkpermissionsin'] = 'Comprova els permisos en aquest context: {$a}';
$string['checksystempermissionsfor'] = 'Comprova els permisos de {$a->fullname}';
$string['checkuserspermissionshere'] = 'Comprova els permisos que {$a->fullname} té en aquest {$a->contextlevel}';
$string['chooseroletoassign'] = 'Escolliu un rol per assignar';
$string['cohort:assign'] = 'Afegir i eliminar membres de la cohort';
$string['cohort:manage'] = 'Crear, esborrar i moure cohorts';
$string['cohort:view'] = 'Mostrar les cohorts globals al lloc';
$string['comment:delete'] = 'Esborrar comentaris';
$string['comment:post'] = 'Enviar un comentari';
$string['comment:view'] = 'Mostra els comentaris';
$string['competency:competencygrade'] = 'Fixa la puntuació de la competència';
$string['competency:competencymanage'] = 'Gestiona els marcs de competències';
$string['competency:competencyview'] = 'Visualitza els marcs de competències';
$string['competency:coursecompetencyconfigure'] = 'Configura les opcions de les competències del curs';
$string['competency:coursecompetencygradable'] = 'Rep puntuacions de les competències';
$string['competency:coursecompetencymanage'] = 'Gestiona les competències del curs';
$string['competency:coursecompetencyview'] = 'Visualitza les competències del curs';
$string['competency:evidencedelete'] = 'Eliminar les evidències';
$string['competency:plancomment'] = 'Comentar un pla d\'aprenentatge';
$string['competency:plancommentown'] = 'Comentar el pla d\'aprenentatge propi';
$string['competency:planmanage'] = 'Gestionar els plans d\'aprenentatge';
$string['competency:planmanagedraft'] = 'Gestionar els esborranys dels plans d\'aprenentatge';
$string['competency:planmanageown'] = 'Gestionar els plans d\'aprenentatge propis';
$string['competency:planmanageowndraft'] = 'Gestionar els esborranys dels plans d\'aprenentatge propis';
$string['competency:planrequestreview'] = 'Sol·licitar una revisió d\'un pla d\'aprenentatge';
$string['competency:planrequestreviewown'] = 'Sol·licitar una revisió d\'un pla d\'aprenentatge propi';
$string['competency:planreview'] = 'Revisar un pla d\'aprenentatge';
$string['competency:planview'] = 'Visualitzar tots els plans d’aprenentatge';
$string['competency:planviewdraft'] = 'Visualitzar els esborranys dels plans d\'aprenentatge';
$string['competency:planviewown'] = 'Visualitzar els plans d\'aprenentatge propis';
$string['competency:planviewowndraft'] = 'Visualitzar els esborranys dels plans d\'aprenentatge propis';
$string['competency:templatemanage'] = 'Gestionar les plantilles dels plans d\'aprenentatge';
$string['competency:templateview'] = 'Visualitzar les plantilles dels plans d\'aprenentatge';
$string['competency:usercompetencycomment'] = 'Comentar una competència d\'usuari';
$string['competency:usercompetencycommentown'] = 'Comentar una competència d\'usuari pròpia';
$string['competency:usercompetencyrequestreview'] = 'Sol·licitar una revisió d\'una competència d\'usuari';
$string['competency:usercompetencyrequestreviewown'] = 'Sol·licitar una revisió d\'una competència d\'usuari pròpia';
$string['competency:usercompetencyreview'] = 'Revisar una competència d\'usuari';
$string['competency:usercompetencyview'] = 'Visualitzar una competència d\'usuari';
$string['competency:userevidencemanage'] = 'Gestionar evidències d\'aprenentatge previ';
$string['competency:userevidencemanageown'] = 'Gestionar evidències d\'aprenentatge previ pròpies';
$string['competency:userevidenceview'] = 'Visualitzar evidències d\'aprenentatge propi d\'un usuari';
$string['confirmaddadmin'] = 'Realment voleu afegir l\'usuari <strong>{$a}</strong> com a nou administrador del lloc?';
$string['confirmdeladmin'] = 'Realment voleu eliminar l\'usuari <strong>{$a}</strong> de la llista d\'administradors del lloc?';
$string['confirmroleprevent'] = 'Realment voleu eliminar <strong>«{$a->role}»</strong> de la llista de rols permesos per la capacitat «{$a->cap}» en el context «{$a->context}»?';
$string['confirmroleunprohibit'] = 'Realment voleu eliminar <strong>«{$a->role}»</strong> de la llista de rols prohibits per la capacitat «{$a->cap}» en el context «{$a->context}»?';
$string['confirmunassign'] = 'Esteu segur que voleu eliminar aquest rol d\'aquest usuari?';
$string['confirmunassignno'] = 'Cancel·la';
$string['confirmunassigntitle'] = 'Confirma el canvi de rol';
$string['confirmunassignyes'] = 'Esborra';
$string['contentbank:access'] = 'Accedeix al banc de continguts';
$string['contentbank:deleteanycontent'] = 'Esborra materials del banc de continguts';
$string['contentbank:deleteowncontent'] = 'Esborra materials del banc de continguts propi';
$string['contentbank:downloadcontent'] = 'Baixa materials del banc de continguts';
$string['contentbank:manageanycontent'] = 'Gestiona els materials del banc de continguts';
$string['contentbank:manageowncontent'] = 'Gestiona els materials del banc de continguts propi';
$string['contentbank:upload'] = 'Puja nous materials al banc de continguts';
$string['contentbank:useeditor'] = 'Crea o edita materials emprant un editor de tipus de continguts';
$string['contentbank:viewunlistedcontent'] = 'Visualitza materials no llistats del banc de continguts';
$string['context'] = 'Context';
$string['course:activityvisibility'] = 'Ocultar/mostrar activitats';
$string['course:bulkmessaging'] = 'Envia un missatge a moltes persones';
$string['course:changecategory'] = 'Canviar la categoria del curs';
$string['course:changefullname'] = 'Canviar el nom complet del curs';
$string['course:changeidnumber'] = 'Canviar el número ID del curs';
$string['course:changelockedcustomfields'] = 'Canvia els camps personalitzats blocats';
$string['course:changeshortname'] = 'Canviar el nom curt del curs';
$string['course:changesummary'] = 'Canvia el resum del curs';
$string['course:configurecustomfields'] = 'Configura els camps personalitzats';
$string['course:configuredownloadcontent'] = 'Configura les descàrregues de continguts del curs';
$string['course:create'] = 'Crear cursos';
$string['course:creategroupconversations'] = 'Crea converses de grup';
$string['course:delete'] = 'Suprimir cursos';
$string['course:downloadcoursecontent'] = 'Descarrega contingut del curs';
$string['course:enrolconfig'] = 'Configurar les instàncies d\'inscripció als cursos';
$string['course:enrolreview'] = 'Revisar les inscripcions als cursos';
$string['course:ignoreavailabilityrestrictions'] = 'Ignora les restriccions de disponibilitat';
$string['course:ignorefilesizelimits'] = 'Utilitzar fitxers més grans que les restriccions de mida de fitxer';
$string['course:isincompletionreports'] = 'Mostrar en els informes de compleció';
$string['course:manageactivities'] = 'Gestionar activitats';
$string['course:managefiles'] = 'Gestionar fitxers';
$string['course:managegrades'] = 'Gestionar qualificacions';
$string['course:managegroups'] = 'Gestionar grups';
$string['course:managescales'] = 'Gestionar escales';
$string['course:markcomplete'] = 'Marca usuaris com a completats en la compleció del curs';
$string['course:movesections'] = 'Moure seccions';
$string['course:overridecompletion'] = 'Canvia l\'estat de compleció de l\'activitat';
$string['course:recommendactivity'] = 'Recomana activitats al selector d\'activitats';
$string['course:renameroles'] = 'Canvia el nom dels rols';
$string['course:request'] = 'Demanar nous cursos';
$string['course:reset'] = 'Reiniciar un curs';
$string['course:reviewotherusers'] = 'Revisar altres usuaris';
$string['course:sectionvisibility'] = 'Controlar la visibilitat de seccions';
$string['course:setcurrentsection'] = 'Definir la secció actual';
$string['course:setforcedlanguage'] = 'Força l\'idioma del curs';
$string['course:tag'] = 'Canvia les etiquetes del curs';
$string['course:togglecompletion'] = 'Marca manualment les activitats com a completades';
$string['course:update'] = 'Actualitzar els paràmetres del curs';
$string['course:useremail'] = 'Habilitar/inhabilitar adreces de correu';
$string['course:view'] = 'Mostrar els cursos sense participació';
$string['course:viewcoursegrades'] = 'Veure qualificacions de cursos';
$string['course:viewhiddenactivities'] = 'Veure activitats ocultes';
$string['course:viewhiddencourses'] = 'Veure cursos ocults';
$string['course:viewhiddensections'] = 'Veure seccions ocultes';
$string['course:viewhiddenuserfields'] = 'Veure camps d\'usuari ocults';
$string['course:viewparticipants'] = 'Veure participants';
$string['course:viewscales'] = 'Veure escales';
$string['course:viewsuspendedusers'] = 'Mostra els usuaris amb la inscripció suspesa.';
$string['course:visibility'] = 'Ocultar/mostrar cursos';
$string['createrolebycopying'] = 'Crear un nou rol copiant {$a}';
$string['createthisrole'] = 'Crear aquest rol';
$string['currentcontext'] = 'Context actual';
$string['currentrole'] = 'Rol actual';
$string['customroledescription'] = 'Descripció personalitzada';
$string['customroledescription_help'] = 'Les descripcions dels rols estàndard es tradueixen automàticament si la descripció personalitzada és buida.';
$string['customrolename'] = 'Nom complet personalitzat';
$string['customrolename_help'] = 'Els noms dels rols estàndard es tradueixen automàticament si el nom personalitzat és buit. Heu de proporcionar un nom complet per a tots els rols personalitzats.';
$string['defaultrole'] = 'Rol per defecte';
$string['defaultx'] = 'Omissió: {$a}';
$string['defineroles'] = 'Definició de rols';
$string['deletecourseoverrides'] = 'Suprimeix totes les redefinicions del curs';
$string['deletelocalroles'] = 'Suprimeix totes les assignacions de rols locals';
$string['deleterolesure'] = '<p>Confirmeu que voleu suprimir el rol «{$a->name} ({$a->shortname})»?</p><p>Actualment aquest rol està assignat a {$a->count} usuaris.</p>';
$string['deletexrole'] = 'Esborra el rol {$a}';
$string['duplicaterole'] = 'Duplica el rol';
$string['duplicaterolesure'] = 'Confirmeu que voleu duplicar el rol «{$a->name} ({$a->shortname})»?</p>';
$string['editingrolex'] = 'S\'està editant el rol «{$a}»';
$string['editrole'] = 'Edita rol';
$string['editxrole'] = 'Edita el rol {$a}';
$string['errorbadrolename'] = 'El nom del rol és incorrecte';
$string['errorbadroleshortname'] = 'Nom curt de rol incorrecte';
$string['errorexistsrolename'] = 'Aquest nom de rol ja existeix';
$string['errorexistsroleshortname'] = 'El nom ja existeix';
$string['errorroleshortnametoolong'] = 'El nom curt no ha d\'excedir de 100 caràcters';
$string['eventcapabilityassigned'] = 'Capacitat assignada';
$string['eventcapabilityunassigned'] = 'Capacitat desassignada';
$string['eventroleallowassignupdated'] = 'Habilita l\'assignació de rol';
$string['eventroleallowoverrideupdated'] = 'Habilita la redefinició del rol';
$string['eventroleallowswitchupdated'] = 'Habilita la commutació de rols';
$string['eventroleallowviewupdated'] = 'Habilita la visualització de rols';
$string['eventroleassigned'] = 'Rol assignat';
$string['eventrolecapabilitiesupdated'] = 'S\'han actualitzat les capacitats del rol';
$string['eventroledeleted'] = 'Rol suprimit';
$string['eventroleunassigned'] = 'Rol sense assignar';
$string['eventroleupdated'] = 'El rol s\'ha actualitzat';
$string['existingadmins'] = 'Administradors actuals del lloc';
$string['existingusers'] = '{$a} usuaris existents';
$string['explanation'] = 'Explicació';
$string['export'] = 'Exporta';
$string['extusers'] = 'Usuaris existents';
$string['extusersmatching'] = 'Usuaris existents que concordin amb «{$a}»';
$string['filter:manage'] = 'Gestiona els paràmetres del filtre local';
$string['frontpageuser'] = 'Usuari autenticat a la primera plana';
$string['frontpageuserdescription'] = 'Tots els usuaris i usuàries amb sessió iniciada al curs de la primera pàgina.';
$string['globalrole'] = 'Rol del sistema';
$string['globalroleswarning'] = 'AVÍS! Els rols que assigneu des d\'aquesta pàgina s\'aplicaran als usuaris assignats en tot el sistema, inclosos en tots els cursos i en la pàgina principal.';
$string['gotoassignroles'] = 'Vés a Assigna rols per aquest {$a->contextlevel}';
$string['gotoassignsystemroles'] = 'Vés a Assigna rols globals';
$string['grade:edit'] = 'Editar qualificacions';
$string['grade:export'] = 'Exportar qualificacions';
$string['grade:hide'] = 'Mostrar/ocultar qualificacions o elements';
$string['grade:import'] = 'Importar qualificacions';
$string['grade:lock'] = 'Blocar qualificacions o elements';
$string['grade:manage'] = 'Gestionar elements de qualificació';
$string['grade:managegradingforms'] = 'Gestiona mètodes avançats de qualificació';
$string['grade:manageletters'] = 'Gestionar qualificacions per lletres';
$string['grade:manageoutcomes'] = 'Gestiona els resultats de la qualificació';
$string['grade:managesharedforms'] = 'Gestionar qualificacions avançades des de plantilles';
$string['grade:override'] = 'Esmenar qualificacions';
$string['grade:sharegradingforms'] = 'Compartir el formulari de qualificacions avançades com a plantilla';
$string['grade:unlock'] = 'Desblocar qualificacions o elements';
$string['grade:view'] = 'Veure les qualificacions pròpies';
$string['grade:viewall'] = 'Veure les qualificacions d\'altres usuaris';
$string['grade:viewhidden'] = 'Veure qualificacions ocultes pròpies';
$string['h5p:deploy'] = 'Desplega contingut H5P';
$string['h5p:setdisplayoptions'] = 'Estableix les opcions de visualització l\'H5P';
$string['h5p:updatelibraries'] = 'Gestiona els tipus de contingut H5P';
$string['highlightedcellsshowdefault'] = 'Les cel·les ressaltades de la taula del dessota mostren els permisos per defecte per a aquest tipus de rol, basat en el «tipus de rol heretat» del damunt.';
$string['highlightedcellsshowinherit'] = 'Les cel·les ressaltades de la taula del dessota mostren els permisos (si n\'hi ha) que s\'heretaran. Hauríeu de deixar-ho tot establert a «Hereta» llevat d\'aquelles capacitats de les quals voleu alterar els permisos.';
$string['inactiveformorethan'] = 'inactiu més de {$a->timeperiod}';
$string['ingroup'] = 'en el grup «{$a->group}»';
$string['inherit'] = 'Hereta';
$string['invalidpresetfile'] = 'Fitxer de definició de rol invàlid';
$string['legacy:admin'] = 'ROL HERETAT: Administrador';
$string['legacy:coursecreator'] = 'ROL HERETAT: Creador de cursos';
$string['legacy:editingteacher'] = 'ROL HERETAT: Professor/a (editor)';
$string['legacy:guest'] = 'ROL HERETAT: Visitant';
$string['legacy:student'] = 'ROL HERETAT: Estudiant';
$string['legacy:teacher'] = 'ROL HERETAT: Professor/a (no editor)';
$string['legacy:user'] = 'ROL HERETAT: Usuari autenticat';
$string['legacytype'] = 'Tipus de rol heretat';
$string['listallroles'] = 'Llista tots els rols';
$string['localroles'] = 'Rols assignats localment';
$string['mainadmin'] = 'Administrador principal';
$string['mainadminset'] = 'Estableix l\'administrador principal';
$string['manageadmins'] = 'Gestiona els administradors del lloc';
$string['manager'] = 'Gestor';
$string['managerdescription'] = 'Els gestors poden accedir als cursos i modificar-los, però normalment no hi participen.';
$string['manageroles'] = 'Gestiona els rols';
$string['maybeassignedin'] = 'Tipus de context en què es pot assignar aquest rol';
$string['morethan'] = 'Més que {$a}';
$string['multipleroles'] = 'Rols múltiples';
$string['my:configsyspages'] = 'Configura les plantilles del sistema per a les pàgines de Tauler';
$string['my:manageblocks'] = 'Gestiona els blocs de la pàgina Tauler';
$string['neededroles'] = 'Rols amb permís';
$string['nocapabilitiesincontext'] = 'No hi ha capacitats disponibles en aquest context';
$string['noneinthisx'] = 'Cap en aquest {$a}';
$string['noneinthisxmatching'] = 'No hi ha usuaris que concordin amb «{$a->search}» en aquest {$a->contexttype}';
$string['norole'] = 'Sense rol';
$string['noroleassignments'] = 'Aquest usuari no té cap rol assignat enlloc del web';
$string['noroles'] = 'Sense rols';
$string['notabletoassignroleshere'] = 'L\'administrador no ha habilitat l\'assignació de rols en aquest context.';
$string['notabletooverrideroleshere'] = 'No teniu capacitat per redefinir els permisos de cap rol d\'aquí.';
$string['notes:manage'] = 'Gestionar anotacions';
$string['notes:view'] = 'Veure anotacions';
$string['notset'] = 'No definit';
$string['novisibleroles'] = 'Sense rols';
$string['overrideanotherrole'] = 'Redefineix un altre rol';
$string['overridecontext'] = 'Redefineix el context';
$string['overridepermissions'] = 'Redefineix els permisos';
$string['overridepermissions_help'] = 'La redefinició de permisos possibilita habilitar o inhabilitar capacitats concretes en contextos específics.';
$string['overridepermissionsforrole'] = 'Redefineix els permisos del rol «{$a->role}» a {$a->context}';
$string['overridepermissionsin'] = 'Defineix excepcions als permisos en {$a}';
$string['overrideroles'] = 'Redefineix els rols';
$string['overriderolesin'] = 'Defineix excepcions als rols en {$a}';
$string['overrides'] = 'Redefincions';
$string['overridesbycontext'] = 'Redefinicions (per context)';
$string['payment:manageaccounts'] = 'Gestiona els comptes';
$string['payment:viewpayments'] = 'Mostra els pagaments';
$string['permission'] = 'Permís';
$string['permission_help'] = 'Els permisos són les definicions de capacitats. Hi ha 4 opcions:

* No definit
* Permet - S\'atorga el permís per a aquesta capacitat
* Impedeix - Se suprimeix el permís per a aquesta capacitat, encara que s\'hagi atorgat el permís en un context superior
* Prohibeix - Es denega completament el permís i no es poden definir excepcions en un context inferior (més específic)';
$string['permissions'] = 'Permisos';
$string['permissionsforuser'] = 'Permisos de l\'usuari {$a}';
$string['permissionsincontext'] = 'Permisos en {$a}';
$string['portfolio:export'] = 'Exporta als portfolis';
$string['potentialusers'] = '{$a} usuaris potencials';
$string['potusers'] = 'Usuaris potencials';
$string['potusersmatching'] = 'Usuaris potencials que concorden amb «{$a}»';
$string['prevent'] = 'Impedeix';
$string['privacy:metadata:preference:showadvanced'] = 'Gestiona el botó de commutació al mode avançat';
$string['privacy:metadata:role_assignments'] = 'Assignació de rols';
$string['privacy:metadata:role_assignments:component'] = 'Connector responsable de l\'assignació de rols; és buit quan s\'assignen manualment.';
$string['privacy:metadata:role_assignments:itemid'] = 'L\'ID de la inscripció/instància d\'autenticació responsable d\'aquesta assignació de rol';
$string['privacy:metadata:role_assignments:modifierid'] = 'L\'ID de l\'usuari que creà o modificà l\'assignació de rol';
$string['privacy:metadata:role_assignments:roleid'] = 'L\'ID del rol';
$string['privacy:metadata:role_assignments:tableexplanation'] = 'Aquesta taula emmagatzema els rols assignats en cada context.';
$string['privacy:metadata:role_assignments:timemodified'] = 'La data en què es creà o modificà el rol.';
$string['privacy:metadata:role_assignments:userid'] = 'L\'ID de l\'usuari';
$string['privacy:metadata:role_capabilities'] = 'Capacitats del rol';
$string['privacy:metadata:role_capabilities:capability'] = 'El nom de la capacitat.';
$string['privacy:metadata:role_capabilities:modifierid'] = 'L\'ID de l\'usuari que creà o modificà la capacitat';
$string['privacy:metadata:role_capabilities:permission'] = 'El permís de la capacitat: hereta, permet, impedeix o prohibeix.';
$string['privacy:metadata:role_capabilities:roleid'] = 'l\'ID del rol';
$string['privacy:metadata:role_capabilities:tableexplanation'] = 'Les capacitats i capacitats redefinides per un rol particular en un context particular';
$string['privacy:metadata:role_capabilities:timemodified'] = 'La data en què es creà o modificà la capacitat.';
$string['privacy:metadata:role_cohortroles'] = 'Rols de cohort';
$string['prohibit'] = 'Prohibeix';
$string['prohibitedroles'] = 'Prohibit';
$string['question:add'] = 'Afegir noves preguntes';
$string['question:config'] = 'Configurar tipus de preguntes';
$string['question:editall'] = 'Editar totes les preguntes';
$string['question:editmine'] = 'Editar les preguntes pròpies';
$string['question:flag'] = 'Marcar preguntes mentre s\'estan responent';
$string['question:managecategory'] = 'Editar categories de preguntes';
$string['question:moveall'] = 'Moure totes les preguntes';
$string['question:movemine'] = 'Moure les preguntes pròpies';
$string['question:tagall'] = 'Etiqueta totes les qüestions';
$string['question:tagmine'] = 'Etiqueta les pròpies qüestions';
$string['question:useall'] = 'Utilitzar totes les preguntes';
$string['question:usemine'] = 'Utilitzar les preguntes pròpies';
$string['question:viewall'] = 'Veure totes les preguntes';
$string['question:viewmine'] = 'Veure les preguntes pròpies';
$string['rating:rate'] = 'Afegir puntuacions als elements';
$string['rating:view'] = 'Veure la puntuació total rebuda';
$string['rating:viewall'] = 'Veure totes les puntuacions en brut subministrades pels particulars';
$string['rating:viewany'] = 'Veure les puntuacions totals rebudes per qualsevol';
$string['resetrole'] = 'Reinicia';
$string['resettingrole'] = 'S\'està reiniciant el rol \'{$a}\'';
$string['restore:configure'] = 'Configurar les opcions de restauració';
$string['restore:createuser'] = 'Crear usuaris en restaurar';
$string['restore:restoreactivity'] = 'Restaurar activitats';
$string['restore:restorecourse'] = 'Restaurar cursos';
$string['restore:restoresection'] = 'Restaurar seccions';
$string['restore:restoretargetimport'] = 'Restaurar des de fitxers destinats a importar';
$string['restore:rolldates'] = 'Permet recalular les dates de configuració de l\'activitat en restaurar.';
$string['restore:uploadfile'] = 'Pujar fitxers a les àrees de còpies de seguretat';
$string['restore:userinfo'] = 'Restaurar les dades d\'usuari';
$string['restore:viewautomatedfilearea'] = 'Restaura cursos des de les còpies de seguretat automàtiques';
$string['risks'] = 'Riscos';
$string['role:assign'] = 'Assignar rols a usuaris';
$string['role:manage'] = 'Crear i gestionar rols';
$string['role:override'] = 'Redefinir els permisos d\'altri';
$string['role:review'] = 'Revisar els permisos d\'altri';
$string['role:safeoverride'] = 'Redefinir els permisos segurs d\'altri';
$string['role:switchroles'] = 'Canviar de rol';
$string['roleallowheader'] = 'Permet el rol:';
$string['roleallowinfo'] = 'Escolliu un rol per tal d\'afegir-lo a la llista de rols permesos en el context «{$a->context}», capacitat «{$a->cap}»:';
$string['roleassignments'] = 'Assignacions de rol';
$string['roledefinitions'] = 'Definicions de rols';
$string['rolefullname'] = 'Nom del rol';
$string['roleincontext'] = '{$a->role} a {$a->context}';
$string['roleprohibitheader'] = 'Prohibeix el rol';
$string['roleprohibitinfo'] = 'Escolliu un rol per tal d\'afegir-lo a la llista de rols prohibits en el context «{$a->context}», capacitat «{$a->cap}»:';
$string['rolerepreset'] = 'Utilitza el rol preconfigurat';
$string['roleresetdefaults'] = 'Per defecte';
$string['roleresetrole'] = 'Utilitza el rol o l\'arquetipus';
$string['rolerisks'] = 'Riscs del rol';
$string['roles'] = 'Rols';
$string['roles_help'] = 'Un rol és una col·leció de permisos, definits per a tot el lloc, que podeu assignar a usuaris específics en contextos específics.';
$string['roleselect'] = 'Escull un rol';
$string['rolesforuser'] = 'Rols per a l\'usuari {$a}';
$string['roleshortname'] = 'Nom curt';
$string['roleshortname_help'] = 'El nom curt del rol és un identificador de rol de nivell baix en el qual només s\'admeten caràcters alfanumèrics ASCII. No canvieu els noms curts dels rols estàndard.';
$string['roletoassign'] = 'Rol per assignar';
$string['roletooverride'] = 'Excepcions pel que fa al rol';
$string['safeoverridenotice'] = 'Nota: Les capacitats amb risc més elevat estan blocades perquè només teniu permís per redefinir les capacitats segures.';
$string['search:query'] = 'Fes cerques globals al lloc';
$string['selectanotheruser'] = 'Escull un altre usuari';
$string['selectauser'] = 'Escull un usuari';
$string['selectrole'] = 'Seleccioneu un rol';
$string['showallroles'] = 'Mostra tots els rols';
$string['showthisuserspermissions'] = 'Mostra els permisos d\'aquest usuari';
$string['site:accessallgroups'] = 'Accedir a tots els grups';
$string['site:approvecourse'] = 'Aprovar la creació de cursos';
$string['site:backup'] = 'Fer còpies de seguretat de cursos';
$string['site:config'] = 'Canviar la configuració del lloc';
$string['site:configview'] = 'Visualitza l\'arbre d\'administració del lloc (però no totes les seves pàgines)';
$string['site:deleteanymessage'] = 'Suprimeix tots el missatges del lloc';
$string['site:deleteownmessage'] = 'Suprimeix els missatges enviats per i cap a l\'usuari';
$string['site:doanything'] = 'Tot permès';
$string['site:doclinks'] = 'Mostrar enllaços a documents fora del lloc';
$string['site:forcelanguage'] = 'Canviar l\'idioma del curs';
$string['site:import'] = 'Importar altres cursos en un curs';
$string['site:maintenanceaccess'] = 'Accedeix al lloc mentre és en mode de manteniment';
$string['site:manageallmessaging'] = 'Afegeix, elimina, bloqueja i desbloqueja contactes per a qualsevol usuari';
$string['site:manageblocks'] = 'Gestionar blocs en una pàgina';
$string['site:managecontextlocks'] = 'Gestiona la congelació de contextos';
$string['site:messageanyuser'] = 'Circumval·la les preferències de privadesa de l\'usuari en enviar-li missatges';
$string['site:mnetloginfromremote'] = 'Inicia la sessió des d\'una aplicació remota via MNet';
$string['site:mnetlogintoremote'] = 'Derivar a una aplicació remota via MNet';
$string['site:readallmessages'] = 'Llegir tots els missatges del lloc';
$string['site:restore'] = 'Restaurar cursos';
$string['site:senderrormessage'] = 'Envia un missatge a l\'usuari de suport des de la pàgina d\'error';
$string['site:sendmessage'] = 'Enviar missatges a qualsevol usuari';
$string['site:trustcontent'] = 'Confiar en continguts tramesos';
$string['site:uploadusers'] = 'Carregar nous usuaris des d\'un fitxer';
$string['site:viewanonymousevents'] = 'Visualitza els esdeveniments anònims en els informes';
$string['site:viewfullnames'] = 'Veure sempre els noms complets dels usuaris';
$string['site:viewparticipants'] = 'Veure els participants';
$string['site:viewreports'] = 'Veure informes';
$string['site:viewuseridentity'] = 'Veure la identitat completa de l\'usuari en les llistes';
$string['siteadministrators'] = 'Administradors del lloc';
$string['tag:edit'] = 'Editar etiquetes existents';
$string['tag:editblocks'] = 'Editar blocs en pàgines d\'etiquetes';
$string['tag:flag'] = 'Marcar etiquetes com a inadequades';
$string['tag:manage'] = 'Gestionar totes les etiquetes';
$string['thisnewrole'] = 'Aquest rol nou';
$string['thisusersroles'] = 'Rols assignats a aquest usuari';
$string['unassignarole'] = 'Desassigna el rol {$a}';
$string['unassignconfirm'] = 'Voleu realment desassignar el rol «{$a->role}» de l\'usuari «{$a->user}»?';
$string['unassignerror'] = 'S\'ha produït un error en anul·lar el rol {$a->role} a l\'usuari {$a->user}.';
$string['user:changeownpassword'] = 'Canviar la contrasenya pròpia';
$string['user:create'] = 'Crear usuaris';
$string['user:delete'] = 'Suprimir usuaris';
$string['user:editmessageprofile'] = 'Editar el perfil de missatgeria dels usuaris';
$string['user:editownmessageprofile'] = 'Editar el perfil de missatgeria propi';
$string['user:editownprofile'] = 'Editar el perfil d\'usuari propi';
$string['user:editprofile'] = 'Editar perfils d\'usuari';
$string['user:ignoreuserquota'] = 'Ignorar el límit de quota d\'usuari';
$string['user:loginas'] = 'Inicia la sessió com un altre usuari';
$string['user:manageblocks'] = 'Gestionar els blocs del perfil d\'usuari d\'altres usuaris';
$string['user:manageownblocks'] = 'Gestionar els blocs del propi perfil públic d\'usuari';
$string['user:manageownfiles'] = 'Gestionar els fitxers de les àrees privades pròpies';
$string['user:managesyspages'] = 'Configura la disposició per defecte de la pàgina per als perfils públics d\'usuari';
$string['user:readuserblogs'] = 'Veure tots els blocs dels usuaris';
$string['user:readuserposts'] = 'Veure tots els missatges dels usuaris als fòrums';
$string['user:update'] = 'Actualitzar els perfils d\'usuari';
$string['user:viewalldetails'] = 'Mostrar la informació completa de l\'usuari';
$string['user:viewdetails'] = 'Veure els perfils d\'usuari';
$string['user:viewhiddendetails'] = 'Veure els detalls ocults dels usuaris';
$string['user:viewlastip'] = 'Veure la darrera adreça IP de l\'usuari';
$string['user:viewuseractivitiesreport'] = 'Veure els informes d\'activitat dels usuaris';
$string['user:viewusergrades'] = 'Veure qualificacions dels usuaris';
$string['usersfrom'] = 'Usuaris de {$a}';
$string['usersfrommatching'] = 'Usuaris de {$a->contextname} que concorden amb «{$a->search}»';
$string['usersinthisx'] = 'Usuaris en aquest {$a}';
$string['usersinthisxmatching'] = 'Usuaris en aquest {$a->contexttype} que concorden amb «{$a->search}»';
$string['userswithrole'] = 'Tots els usuaris amb rol';
$string['userswiththisrole'] = 'Usuaris amb el rol';
$string['useshowadvancedtochange'] = 'Utilitza «Mostra avançats» per canviar';
$string['viewingdefinitionofrolex'] = 'S\'està mostrant la definició del rol «{$a}»';
$string['viewrole'] = 'Veure detalls dels rols';
$string['webservice:createmobiletoken'] = 'Crear un testimoni de servei web per a l\'accés amb dispositius mòbils';
$string['webservice:createtoken'] = 'Crear una fitxa de servei web';
$string['webservice:managealltokens'] = 'Gestiona tots els testimonis dels serveis web dels usuaris';
$string['whydoesuserhavecap'] = 'Per què {$a->fullname} té la capacitat {$a->capability} en el context {$a->context}?';
$string['whydoesusernothavecap'] = 'Per què {$a->fullname} no té la capacitat {$a->capability} en el context {$a->context}?';
$string['xroleassignments'] = 'Assignació de rols de {$a}';
$string['xuserswiththerole'] = 'Usuaris amb el rol "{$a->role}"';
