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
 * Strings for component 'grades', language 'sv', version '3.11'.
 *
 * @package     grades
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activities'] = 'Aktiviteter';
$string['addcategory'] = 'Lägg till kategori';
$string['addcategoryerror'] = 'Det gick inte att lägga till kategori.';
$string['addexceptionerror'] = 'Ett fel inträffade när ett undantag lades till för <code>userid:gradeitem</code>';
$string['addfeedback'] = 'Lägg till återkoppling';
$string['addgradeletter'] = 'Lägg till betygsbokstav';
$string['addidnumbers'] = 'Lägg till ID-nummer';
$string['additem'] = 'Lägg till betygsobjekt';
$string['additionalfeedback'] = 'Ytterligare återkoppling';
$string['addoutcome'] = 'Lägg till ett resultat';
$string['addoutcomeitem'] = 'Lägg till resultatpost';
$string['addscale'] = 'Lägg till en skala';
$string['adjustedweight'] = 'Viktning justerad';
$string['aggregateextracreditmean'] = 'Medelbetyg (med extra tillgodoräknanden)';
$string['aggregatemax'] = 'Högsta betyg';
$string['aggregatemean'] = 'Medelbetyg';
$string['aggregatemedian'] = 'Medianvärde för betyg';
$string['aggregatemin'] = 'Lägsta betyg';
$string['aggregatemode'] = 'Typ av betyg';
$string['aggregatenotonlygraded'] = 'Inkludera tomma betyg';
$string['aggregateonlygraded'] = 'Exkludera tomma betyg';
$string['aggregateonlygraded_help'] = '<p>Icke-existerande betyg behandlas antingen som minimibetyg eller så tas de inte med i aggregationen. </p>';
$string['aggregateoutcomes'] = 'Ta med resultaten i aggregeringen.';
$string['aggregateoutcomes_help'] = 'Om aktiverat inkluderas resultat i aggregeringen. Detta kan resultera i en oväntad kategorisumma.';
$string['aggregatesonly'] = 'Byt till <em>Endast aggregeringar</em>';
$string['aggregatesubcatsupgradedgrades'] = 'OBS! Aggregeringsinställningen "Aggregera inklusive underkategorier" har tagits bort som en del av en webbplatsuppgraderingen. Eftersom "Aggregera inklusive underkategorier" tidigare användes i den här kursen rekommenderas du att granska denna ändring i betygsboken.';
$string['aggregatesum'] = 'Summan av alla betyg';
$string['aggregateweightedmean'] = 'Viktat medelbetyg';
$string['aggregateweightedmean2'] = 'Enkelt vägt medelbetyg';
$string['aggregation'] = 'Aggregering';
$string['aggregation_help'] = '<p>Den här menyn gör det möjligt för dig att välja vilken strategi för aggregering som ska användas för att beräkna
    varje students övergripande betyg för den här kategorin. De olika alternativen förklarar vi här nedan:</p>
<p>Betygen omvandlas först till värden i procent (i intervall från 0 till 1, detta kallas normalisation), sedan
    aggregeras de med hjälp av en av funktionerna här nedan och slutligen omvandlas de i förhållande till intervallet
    för objektet tillhörande den associerade kategorin (mellan <em>minimibetyget</em> och <em>maxbetyget</em>).</p>
<p><strong>Viktigt!</strong><br /> Ett tomt fält för betyg innebär bara att det saknas en post i betygsboken.
    Detta kan betyda lite olika saker. Det kan t.ex. vara så att en student ännu inte har skickat in en viss uppgift;
    det kan röra sig om en inskickad uppgift som ännu inte har blivit betygssatt av läraren eller ett betyg som har
    tagits bort manuellt av den som administrerar betygsboken. Du bör alltså iaktta viss försiktighet när du tolkar
    vad dessa \'tomma betyg\' egentligen innebär. </p>
<dl id="grade-aggregation-help">
    <dt>Medelbetyg</dt>
    <dd>Summan av alla betyg dividerat med det totala antalet betyg.</dd>
    <dd class="example">A1 70/100, A2 20/80, A3 10/10, kategori max 100:<br />
        <code>(0.7 + 0.25 + 1.0)/3 = 0.65 &#10132; 65/100</code></dd>
    <dt>Medianvärde för betyg</dt>
    <dd>Det mittersta betyget (eller medelvärdet av de två mittersta betygen) när betygen har arrangerats efter storlek.
        Fördelen med detta i förhållande till medelvärdet är att det inte påverkas av undantagsvärden (betyg som ligger
        extremt långt från medelvärdet).</dd>
    <dd class="example">A1 70/100, A2 20/80, A3 10/10, kategori max 100:<br />
        <code>0.7 + 0.25 + 1.0 --> 0.25 &#10132; 25/100</code></dd>
    <dt>Lägsta betyg</dt>
    <dd>Resultatet är det lägsta betyget efter normalisering. Det används vanligen i kombination med <em>Aggregera bara
            icke-tomma betyg</em>.</dd>
    <dd class="example">A1 70/100, A2 20/80, A3 10/10, kategori max 100:<br />
        <code>min(0.7 + 0.25 + 1.0) = 0.25 &#10132; 25/100</code></dd>
    <dt>Högsta betyg</dt>
    <dd>Resultatet är det högsta betyget efter normalisering.</dd>
    <dd class="example">A1 70/100, A2 20/80, A3 10/10, category max 100:<br />
        <code>max(0.7 + 0.25 + 1.0) = 1.0 &#10132; 100/100</code></dd>
    <dt>"Mode" för betyg</dt>
    <dd>"Mode" är det betyg som är det vanligaste. Det används mer ofta för icke-numeriska betyg. Fördelen jämfört med
        medelvärdet är att det inte påverkas av undantagsvärden. (betyg som ligger extremt långt från medelvärdet).
        Detta förlorar dock sin mening så fort det finns mer än ett betyg som är det vanligaste (det är bara ett som
        används), eller när alla betyg skiljer sig från varandra.</dd>
    <dd class="example">A1 70/100, A2 35/50, A3 20/80, A4 10/10, A5 7/10 kategori max 100:<br />
        <code>mode(0.7; 0.7; 0.25; 1.0; 0.7) = 0.7 &#10132; 70/100</code></dd>
    <dt>Summan av betygen</dt>
    <dd>Summan av alla betygsvärden. Ingen hänsyn tas till betyg i skalor. Detta är den enda typen som inte omvandlar
        betygen till procentvärden internt (normalisering). <em>Maxbetyget</em> för ett associerat betygsobjekt i en kategori
        beräknas automatiskt som en summa av max från alla aggregerade betygsobjekt.</dd>
    <dd class="example">A1 70/100, A2 20/80, A3 10/10:<br /> <code>(70 + 20 + 10) / (100 + 80 + 10) = 100/190</code></dd>
</dl>';
$string['aggregationcoef'] = 'Aggregeringskoefficient';
$string['aggregationcoefextra'] = 'Extra tillägg';
$string['aggregationcoefextra_help'] = 'Om aggregeringen är \'Summan av alla betyg\' eller \'Enkelt vägt medelvärde\' och checkboxen för extra tilläggär förkryssad läggs inte betygspostens högsta betyg till kategorins högsta betyg. Detta kommer att resultera i möjligheten att uppnå högsta betyg i kategorin utan att ha högsta betyg i alla betygsposter. Om webbplatsadministratören har aktiverat resultat över max kan det finnas resultat över det högsta.

Om aggregeringen är \'Medelvärde av betyg (med extra tillägg)\' och det extra tillägget är inställt på ett värde som är större än noll är det extra tillägget den faktor med vilken betyget multipliceras innan den läggs till summan efter uträkningen av medelvärdet.';
$string['aggregationcoefextrasum'] = 'Extra tillägg';
$string['aggregationcoefextrasum_help'] = 'Om checkboxen för extra tillägg är förkryssad läggs inte betygsobjektets högsta betyg till i kategorins högsta betyg, vilket resulterar i möjligheten att högsta betyg kan uppnås (eller betyg över det högsta om det är aktiverat av webbplatsens administratör) i kategorin utan att ha högsta betyg i alla betygsobjekten.';
$string['aggregationcoefextrasumabbr'] = '+';
$string['aggregationcoefextraweight'] = 'Vikt för extra tillägg';
$string['aggregationcoefextraweight_help'] = 'Om den extra tilläggsvikten är inställd på ett värde som är större än noll fungerar betyget som ett extra tillägg under aggregering. Talet är den faktor med vilken betyget multipliceras innan det läggs till summan för uträkningen av medelvärdet.';
$string['aggregationcoefweight'] = 'Vikt för komponent';
$string['aggregationcoefweight_help'] = 'Viktningen används i kategoriaggregeringen för att påverka objektets betydelse jämfört med andra betygsobjekt i samma kategori.';
$string['aggregationhintdropped'] = '( Överhoppad )';
$string['aggregationhintexcluded'] = '( Exkluderad )';
$string['aggregationhintextra'] = '( Extra tillägg )';
$string['aggregationhintnovalue'] = '( Tom )';
$string['aggregationofa'] = 'Aggregering av {$a}';
$string['aggregationposition'] = 'Aggregeringsposition';
$string['aggregationposition_help'] = '<p>Detta definierar vilken position aggregationens kolumn för totalsumman ska ha i rapporten i förhållande till de betyg som aggregeras.</p>';
$string['aggregationsvisible'] = 'Tillgängliga aggregeringstyper';
$string['aggregationsvisiblehelp'] = 'Välj alla aggregeringstyper som ska vara tillgängliga. Håll ner Ctrl-tangenten för att välja flera alternativ.';
$string['allgrades'] = 'Alla betyg efter kategori';
$string['allstudents'] = 'Alla studenter';
$string['allusers'] = 'Alla användare';
$string['autosort'] = 'Sortera automatiskt';
$string['availableidnumbers'] = 'Tillgängliga ID-nummer';
$string['average'] = 'Medelvärde';
$string['averagesdecimalpoints'] = 'Antal decimaler i kolumngenomsnitt';
$string['averagesdecimalpoints_help'] = 'Den här inställningen bestämmer hur många decimaler som ska visas för varje genomsnitt eller om den övergripande decimalinställningen för kategori- eller betygsobjekten används (ärv).';
$string['averagesdisplaytype'] = 'Visningstyp för medelvärde i kolumner';
$string['averagesdisplaytype_help'] = '<p>Detta specificerar hur medelvärdet för varje kolumn ska visas. Om du väljer Ärv så kommer visningstypen för varje kolumn att användas.</p>';
$string['backupwithoutgradebook'] = 'Säkerhetskopian innehåller inte betygsbogskonfigurationen';
$string['badgrade'] = 'Angivet betyg är ogiltigt';
$string['badlyformattedscale'] = 'Ange en kommaseparerad lista med värden (minst två värden krävs).';
$string['baduser'] = 'Angiven användare ogiltig';
$string['bonuspoints'] = 'Bonuspoäng';
$string['bulkcheckboxes'] = 'Kryssrutor för bulk';
$string['calculatedgrade'] = 'Beräknat betyg';
$string['calculation'] = 'Beräkning';
$string['calculation_help'] = 'En betygsberäkning är en formel som används för att bestämma betyg. Formeln ska börja med ett likhetstecken (=) och kan använda vanliga matematiska operatorer som till exempel max, min och summa. Om så önskas kan andra betygsobjekt tas med i beräkningen genom att skriva ID-numren i dubbla hakparenteser.';
$string['calculationadd'] = 'Lägg till beräkning';
$string['calculationedit'] = 'Redigera beräkning';
$string['calculationsaved'] = 'Beräkningen har sparats';
$string['calculationview'] = 'Visa beräkning';
$string['cannotaccessgroup'] = 'Det går inte att komma åt betygen i den valda gruppen, tyvärr.';
$string['categories'] = 'Kategorier';
$string['category'] = 'Kategori';
$string['categoryedit'] = 'Redigera kategori';
$string['categoryname'] = 'Kategorinamn';
$string['categorytotal'] = 'Summa för kategori';
$string['categorytotalfull'] = 'Summa {$a->category}';
$string['categorytotalname'] = 'Namn på kategorisumma';
$string['changedefaults'] = 'Ändra standardvärdena';
$string['changereportdefaults'] = 'Ändra standardvärdena för rapport';
$string['chooseaction'] = 'Välj en åtgärd...';
$string['choosecategory'] = 'Välj kategori';
$string['collapsecriterion'] = 'Fäll ihop kriterier';
$string['combo'] = 'Flikar och nedrullningsmeny';
$string['compact'] = 'Kompakt';
$string['componentcontrolsvisibility'] = 'Huruvida detta betygsobjekt döljs styrs av aktivitetens inställningar.';
$string['contract'] = 'Fäll ihop';
$string['contributiontocoursetotal'] = 'Bidrag till kurstotalen';
$string['controls'] = 'Kontroller';
$string['courseavg'] = 'Medelbetyg för kurs';
$string['coursegradecategory'] = 'Kurskategorityp';
$string['coursegradedisplaytype'] = 'Visningstyp för kursbetyg';
$string['coursegradedisplayupdated'] = 'Visningstypen för kursbetyg har uppdaterats.';
$string['coursegradesettings'] = 'Kursbetygsinställningar';
$string['coursename'] = 'Kursnamn';
$string['coursescales'] = 'Skalor för kurs';
$string['coursesettings'] = 'Kursinställningar';
$string['coursesettingsexplanation'] = 'Kursinställningar bestämmer hur betygsboken visas för kursdeltagarna.';
$string['coursesiamtaking'] = 'Kurser som jag deltar i';
$string['coursesiamteaching'] = 'Kurser där jag undervisar';
$string['coursetotal'] = 'Totalt för kurs';
$string['createcategory'] = 'Skapa kategori';
$string['createcategoryerror'] = 'Det gick inte att skapa någon ny kategori';
$string['creatinggradebooksettings'] = 'Skapar betygsboksinställningar';
$string['csv'] = 'CSV';
$string['currentparentaggregation'] = 'Aktuell överliggande aggregering';
$string['curveto'] = 'Kurva till';
$string['decimalpoints'] = 'Övergripande antal decimaler';
$string['decimalpoints_help'] = 'Detta specificerar det antal decimaler som ska visas för varje betyg. Den här inställningen har ingen inverkan på beräkningen av betyg eftersom den utförs med en precision av 5 decimaler.';
$string['default'] = 'Standardvärde';
$string['defaultprev'] = 'Standardvärde ({$a})';
$string['deletecategory'] = 'Ta bort kategori';
$string['disablegradehistory'] = 'Inaktivera betygshistorik';
$string['disablegradehistory_help'] = 'Inaktivera spårning av ändringshistorik i betygsrelaterade tabeller. Detta kan snabba upp servern lite och bevara utrymme i databasen.';
$string['displaylettergrade'] = 'Visa bokstavsbetyg';
$string['displaypercent'] = 'Visa procent';
$string['displaypoints'] = 'Visa poäng';
$string['displayweighted'] = 'Visa viktade betyg';
$string['dropdown'] = 'Nedrullningsmeny';
$string['droplow'] = 'Ignorera de lägsta';
$string['droplow_help'] = '<p>Om detta är aktiverat, så kommer de X lägsta betygen att undantas från beräkningen. X är det valda värdet för det här alternativet.</p>';
$string['droplowestvalue'] = 'Uteslut det lägsta betygsvärdet';
$string['droplowestvalues'] = 'Uteslut de {$a} lägsta betygsvärdena';
$string['dropped'] = 'Inte inkluderad';
$string['dropxlowest'] = 'Uteslut de X lägsta';
$string['dropxlowestwarning'] = 'OBS! Om du använder dig av \'Ta inte med X lägsta\' så innebär det att alla enheter i den kategorin har samma värde i poäng räknat. Om poängtalen varierar så kommer resultaten att bli oförutsägbara.';
$string['duplicatedgradeitem'] = '{$a} (kopia)';
$string['duplicatescale'] = 'Duplicera skala';
$string['edit'] = 'Redigera';
$string['editcalculation'] = 'Redigera beräkning';
$string['editcalculationverbose'] = 'Redigera beräkning för  {$a->category} {$a->itemmodule} {$a->itemname}';
$string['editfeedback'] = 'Redigera återkoppling';
$string['editgrade'] = 'Redigera betyg';
$string['editgradeletters'] = 'Redigera betygsbokstäver';
$string['editoutcome'] = 'Redigera resultat';
$string['editoutcomes'] = 'Redigera resultat';
$string['editscale'] = 'Redigera skala';
$string['edittree'] = 'Inställningar';
$string['editverbose'] = 'Redigera {$a->category} {$a->itemmodule} {$a->itemname}';
$string['enableajax'] = 'Aktivera AJAX';
$string['enableajax_help'] = 'Detta lägger till ett lager av AJAX-funktionalitet till betygsrapporten, vilket förenklar och snabbar på vanliga operationer. Detta förutsätter att JavaScript är aktiverat i användarens webbläsare.';
$string['enableoutcomes'] = 'Aktivera resultat';
$string['enableoutcomes_help'] = 'Om aktiverat kan betygsobjekt bedömas med hjälp av en eller flera skalor knutna till resultat.';
$string['encoding'] = 'Teckenkodning';
$string['encoding_help'] = 'Välj den teckenkodning som används för data. (Standard är UTF-8). Om fel kodning väljs av misstag kommer det att synas vid förhandsgranskningen av den importerade filen.';
$string['errorcalculationbroken'] = 'Troligtvis cirkulär referens eller felaktig formel';
$string['errorcalculationnoequal'] = 'Formler måste inledas med likhetstecken (=1+2)';
$string['errorcalculationunknown'] = 'Ogiltig formel';
$string['errorgradevaluenonnumeric'] = 'Fick icke-numerisk för lågt eller högt betyg för';
$string['errornocalculationallowed'] = 'Det är inte tillåtet med beräkningar av den här komponenten.';
$string['errornocategorisedid'] = 'Det gick inte att hämta något icke-kategoriserat id!';
$string['errornocourse'] = 'Det gick inte att hitta någon information om kurs';
$string['errorreprintheadersnonnumeric'] = 'Fick ett icke-numeriskt värde för skriv-ut-igen-rubriker';
$string['errorsavegrade'] = 'Det gick tyvärr inte att spara betyg.';
$string['errorsettinggrade'] = 'Ett fel uppstod då "{$a->itemname}"-betyget för användare {$a->userid} skulle sparas';
$string['errorupdatinggradecategoryaggregateonlygraded'] = 'Fel vid uppdatering av inställningen för "Aggregera enbart icke-tomma betyg" för betygskategori med ID {$a->id}';
$string['errorupdatinggradecategoryaggregateoutcomes'] = 'Fel vid uppdatering av inställningen för "Inkludera resultat i aggregeringen" för betygskategori med ID {$a->id}';
$string['errorupdatinggradecategoryaggregation'] = 'Fel vid uppdatering av aggregeringstypen för betygskategori med ID {$a->id}';
$string['errorupdatinggradeitemaggregationcoef'] = 'Fel vid uppdatering av aggregeringskoefficienten (viktning eller extra tillägg) för betygsobjekt med ID {$a->id}';
$string['eventgradedeleted'] = 'Betyg borttaget';
$string['eventgradeitemcreated'] = 'Betygsobjekt skapat';
$string['eventgradeitemdeleted'] = 'Betygsobjekt borttaget';
$string['eventgradeitemupdated'] = 'Betygsobjekt uppdaterat';
$string['eventgradelettercreated'] = 'Betygsbokstav skapad';
$string['eventgradeletterdeleted'] = 'Betygsbokstav borttagen';
$string['eventgradeletterupdated'] = 'Betygsbokstav uppdaterad';
$string['eventgradeviewed'] = 'Betyg visades i betygsboken';
$string['eventscalecreated'] = 'Betygsskala skapad';
$string['eventscaledeleted'] = 'Betygsskala borttagen';
$string['eventscaleupdated'] = 'Betygsskala uppdaterad';
$string['eventusergraded'] = 'Användare betygssatt';
$string['excluded'] = 'Exkluderat';
$string['excluded_help'] = 'Om markerat kommer betyget inte inkluderas i aggregeringar.';
$string['expand'] = 'Expandera kategori';
$string['expandcriterion'] = 'Expandera kriterier';
$string['export'] = 'Exportera';
$string['exportalloutcomes'] = 'Exportera alla resultat';
$string['exportfeedback'] = 'Ta med återkoppling i export';
$string['exportfeedback_desc'] = 'Denna kan åsidosättas under export.';
$string['exportformatoptions'] = 'Alternativ för exportformat';
$string['exportonlyactive'] = 'Exkludera avstängda användare';
$string['exportonlyactive_help'] = 'Inkludera enbart studenter med aktiv registrering och som inte blivit avstängda';
$string['exportplugins'] = 'Exportplugins';
$string['exportsettings'] = 'Exportinställningar';
$string['exportto'] = 'Exportera till';
$string['externalurl'] = 'Extern URL';
$string['externalurl_desc'] = 'Om en extern betygsbok specificerats, ange webbadressen här.';
$string['extracreditvalue'] = 'Värde för extra tillägg för {$a}';
$string['extracreditwarning'] = 'OBS! Om Du ställer in alla enheter i en kategori till \'Extra tillgodoräknande\' så kommer det att effektivt ta bort dem från beräkningen av betyg. Detta eftersom det inte kommer att bli någon totalsumma för poäng.';
$string['fail'] = 'Ej godkänd';
$string['feedback'] = 'Återkoppling';
$string['feedback_help'] = '<p>Detta är anteckningar som läraren lägger till betyget. Det kan vara omfattande, individualiserad återkoppling eller en enkel kod som hänvisar till ett internt system för återkoppling.</p>';
$string['feedbackadd'] = 'Lägg till återkoppling';
$string['feedbackedit'] = 'Redigera återkoppling';
$string['feedbackfiles'] = 'Återkopplingsfiler';
$string['feedbackforgradeitems'] = 'Återkoppling för {$a}';
$string['feedbackhistoryfiles'] = 'Historikfiler för återkoppling';
$string['feedbacks'] = 'Återkopplingar';
$string['feedbacksaved'] = 'Återkoppling sparad';
$string['feedbackview'] = 'Visa återkoppling';
$string['finalgrade'] = 'Slutbetyg';
$string['finalgrade_help'] = '<p>Det slutliga betyget (cachat) efter det att alla beräkningar har genomförts.</p>';
$string['fixedstudents'] = 'Statisk kolumn för studenter';
$string['fixedstudents_help'] = 'Tillåt betyg att scrollas horisontellt utan att tappa översikt över elevkolunmen genom att göra den statisk.';
$string['forceimport'] = 'Tvinga import';
$string['forceimport_help'] = 'Tvinga import av betyg även om betygen uppdaterades efter att importfilen exporterades';
$string['forceoff'] = 'Tvinga: Av';
$string['forceon'] = 'Tvinga: På';
$string['forelementtypes'] = 'för den markerade {$a}';
$string['forstudents'] = 'För studenter';
$string['full'] = 'Fullständig';
$string['fullmode'] = 'Växla till fullständig vy';
$string['generalsettings'] = 'Generella inställningar';
$string['grade'] = 'Betyg';
$string['grade_help'] = 'Betyget som ska tilldelas studenten för sitt arbete.';
$string['gradeadministration'] = 'Administrera betyg';
$string['gradealreadyupdated'] = '{$a} betyg importerades inte eftersom betygen i importfilen äldre än de i betygssättarrapporten. För att gå vidare med importen trots allt, använd "Tvinga import" alternativet.';
$string['gradeanalysis'] = 'Betygsanalys';
$string['gradebook'] = 'Betygsbok';
$string['gradebookcalculationsfixbutton'] = 'Acceptera betygsändringar och korrigera beräkningsfel';
$string['gradebookcalculationsuptodate'] = 'Beräkningarna i betygsboken är aktuella. Du kan behöva uppdatera den här sidan för att se ändringarna.';
$string['gradebookcalculationswarning'] = 'OBS! Vissa fel har upptäckts vid beräkningen av de betyg som visas i betygsboken. Om din kurs inte har startat eller pågår rekommenderas att felen åtgärdas genom att klicka på knappen nedan, även om detta kommer att resultera i att vissa betyg ändras. Om din kurs redan har avslutats och resultat har skickats in vill du antagligen inte åtgärda det här problemet.

Den nyare versionen är {$a->currentversion}; du använder betygsboksversion {$a->gradebookversion}. Du kan se en lista över ändringar i <a href="{$a->url}">Förändringar i betygsboksberäkningar</a>.';
$string['gradebookhiddenerror'] = 'Betygsboken är inställd att dölja allt för studenterna.';
$string['gradebookhistories'] = 'Historik för betyg';
$string['gradebooksetup'] = 'Betygsboksinställningar';
$string['gradeboundary'] = 'Gräns för bokstavsbetyg';
$string['gradeboundary_help'] = 'Den här inställningen bestämmer den lägsta procentsats över vilken betyg tilldelas betygsbokstäver.';
$string['gradecategories'] = 'Betygskategorier';
$string['gradecategory'] = 'Betygskategori';
$string['gradecategoryonmodform'] = 'Betygskategori';
$string['gradecategoryonmodform_help'] = 'Denna inställning bestämmer under vilken kategori den här aktivitetens betyg placeras i betygsboken.';
$string['gradecategorysettings'] = 'Inställningar för betygskategori';
$string['gradedisplay'] = 'Visning av betyg';
$string['gradedisplaytype'] = 'Visningstyp för betyg';
$string['gradedisplaytype_help'] = 'Den här inställningen avgör hur resultat visas i bedömnings- och användarrapporterna.

* Bokstav - Bokstäver eller ord används för att representera ett betygsintervall som definieras i "Betygsbokstäver" i betygsboksinställningarna
* Procent - Relativt högsta och lägsta betyg
* Reellt - Faktiska betyg eller skalvärden';
$string['gradedon'] = 'Betygsatt: {$a}';
$string['gradeexport'] = 'Betygsexport';
$string['gradeexportcolumntype'] = '{$a->name} ({$a->extra})';
$string['gradeexportcustomprofilefields'] = 'Anpassade användarfält för betygsexport';
$string['gradeexportcustomprofilefields_desc'] = 'Inkludera dessa anpassade användarfält, separerade med komma, i betygsexporten.';
$string['gradeexportdecimalpoints'] = 'Antal decimaler i exporterade betyg';
$string['gradeexportdecimalpoints_desc'] = 'Antalet decimaler att visa i samband med export. Detta kan åsidosättas vid export.';
$string['gradeexportdisplaytype'] = 'Visningstyp för exporterade betyg';
$string['gradeexportdisplaytype_desc'] = 'Betyg kan visas som heltal, procenttal (i förhållande till lägsta- och högstabetyg) eller som bokstäver (A, B, C, ...) vid export. Detta kan åsidosättas vid export.';
$string['gradeexportdisplaytypes'] = 'Visningstyper för betygsexport';
$string['gradeexportuserprofilefields'] = 'Användarfält för betygsexport';
$string['gradeexportuserprofilefields_desc'] = 'Inkludera dessa användarfält, separerade med kommatecken, i betygsexporten.';
$string['gradeforstudent'] = '{$a->student}<br />{$a->item}{$a->feedback}';
$string['gradegrademinmax'] = 'Initiala lägsta och högsta betyg';
$string['gradehelp'] = 'Hjälp angående betyg';
$string['gradehistorylifetime'] = 'Livscykel för betygshistorik';
$string['gradehistorylifetime_help'] = 'Detta anger hur länge du vill att ändringshistoriken ska finnas kvar när det gäller betygsrelaterade tabeller. Det bästa är att behålla denna så länge det går. Om du upplever prestandaproblem eller har begränsat utrymme i databasen kan du försöka sänka värdet.';
$string['gradeimport'] = 'Import av betyg';
$string['gradeimportfailed'] = 'Betygsimporten misslyckades då den skulle sparas. Detaljer:';
$string['gradeitem'] = 'Betygsobjekt';
$string['gradeitemaddusers'] = 'Undanta från betygssättning';
$string['gradeitemadvanced'] = 'Avancerade alternativ för betygsobjekt';
$string['gradeitemadvanced_help'] = 'Markera alla element som bör visas som avancerade när du redigerar betygsobjekt.';
$string['gradeitemislocked'] = 'Den här aktivitieten är låst av betygskatalogen. Ändringar som görs på betyg i den här aktiviteten kommer inte att kopieras till betygskatalogen förrän den har låsts upp.';
$string['gradeitemlocked'] = 'Betygssättning är låst';
$string['gradeitemmembersselected'] = 'Undantagen från betygssättning';
$string['gradeitemminmax'] = 'Lägsta och högsta betyg enligt inställningarna för betygsobjektet';
$string['gradeitemnonmembers'] = 'Inkluderat i betygssättning';
$string['gradeitemremovemembers'] = 'Inkludera i betygssättning';
$string['gradeitems'] = 'Betygsobjekt';
$string['gradeitemsettings'] = 'Inställningar för betygsobjekt';
$string['gradeitemsinc'] = 'Betygsobjekt som ska inkluderas';
$string['gradeletter'] = 'Betygsbokstav';
$string['gradeletter_help'] = 'Betygsbokstäver är bokstäver, <em>A, B, C,</em> ..., eller ord som t.ex. <em>Godkänd, Utmärkt, MVG,</em> ..., som används för att representera ett betygsintervall.';
$string['gradeletternote'] = 'För att ta bort en betygsbokstav tömmer du bara något av de<br />tre textfälten för den bokstaven och bekräftar.';
$string['gradeletteroverridden'] = 'Standardbetygsbokstäverna är för närvarande åsidosatta.';
$string['gradeletters'] = 'Betygsbokstäver';
$string['gradelocked'] = 'Betyg är låst';
$string['gradelong'] = '{$a->grade} / {$a->max}';
$string['grademax'] = 'Maxbetyg';
$string['grademax_help'] = 'Den här inställningen bestämmer maxbetyget när ett betyg av typen värde används. Det högsta betyget för ett aktivitetsbaserat betygsobjekt anges på sidan för aktivitetsinställningar.';
$string['grademin'] = 'Minimibetyg';
$string['grademin_help'] = 'Den här inställningen bestämmer lägstabetyget när ett betyg av typen värde används.';
$string['gradenotificationmessage'] = 'Det finns ny återkoppling för "{$a}"';
$string['gradenotificationsubject'] = 'Du har fått ett betyg';
$string['gradeoutcomeitem'] = 'Komponent för betygsresultat';
$string['gradeoutcomes'] = 'Resultat';
$string['gradeoutcomescourses'] = 'Kursresultat';
$string['gradepass'] = 'Betygsgräns för godkänt';
$string['gradepass_help'] = 'Den här inställningen avgör vilket minimibetyg som krävs för att bli godkänd. Värdet används i aktiviteten, kursslutförandet samt i betygsboken. Godkända betyg markeras med grönt och underkända med rött.';
$string['gradepassgreaterthangrade'] = 'Gränsen för godkänt kan inte vara högre än maxbetyget {$a}';
$string['gradepointdefault'] = 'Standardbetygspoäng';
$string['gradepointdefault_help'] = 'Denna inställning anger standardvärdet för betygspoängen för ett betygsobjekt.';
$string['gradepointdefault_validateerror'] = 'Denna inställning måste vara ett värde mellan 1 och maxbetyget.';
$string['gradepointmax'] = 'Maximal betygspoäng';
$string['gradepointmax_help'] = 'Den här inställningen anger den maximala betygspoängen som gäller för en aktivitet.';
$string['gradepointmax_validateerror'] = 'Denna inställning måste vara ett värde mellan 1 och 10000.';
$string['gradepreferences'] = 'Betygsinställningar';
$string['gradepreferenceshelp'] = 'Hjälp för betyg';
$string['gradepublishing'] = 'Aktivera publicering';
$string['gradepublishing_help'] = 'Betygspublicering är ett sätt att importera och exportera resultat via en URL utan att vara inloggad i Moodle. Om det här alternativet är aktiverat får administratörer och de användare som har behörighet att publicera resultat (som standard endast användare med rollen som <em>Chef</em>) inställningar för exportpublicering i respektive betygsbok.';
$string['gradepublishinglink'] = 'Hämta: {$a}';
$string['gradereport'] = 'Betygsrapport';
$string['graderreport'] = 'Betygssättarrapport';
$string['grades'] = 'Betyg';
$string['gradesforuser'] = 'Betyg för {$a->user}';
$string['gradesmoduledeletionpendingwarning'] = 'Varning! Borttagning av aktiviteter pågår. Vissa betyg är på väg att tas bort.';
$string['gradesmoduledeletionprefix'] = '[Borttagning pågår]';
$string['gradesonly'] = 'Ändra till enbart betyg';
$string['gradessettings'] = 'Betygsinställningar';
$string['gradetype'] = 'Betygstyp';
$string['gradetype_help'] = 'Det finns 4 betygstyper:

* Inget - Ingen betygsättning
* Värde - Ett numeriskt värde med ett högsta och lägsta
* Skala - Ett objekt i en lista
* Text - Endast återkoppling (text)

Endast värde- och skaltyper kan aggregeras. Betygstypen för ett aktivitetsbaserat betygsobjekt anges på sidan för aktivitetsinställningen.';
$string['gradevaluetoobig'] = 'Ett av betygsvärdena är högre än det maximalt tillåtna värdet på {$a}';
$string['gradeview'] = 'Visa betyg';
$string['gradewasmodifiedduringediting'] = 'Betyget som angavs för {$a->itemname} för användare {$a->username} ignorerades eftersom någon annan gjort en senare uppdatering av det.';
$string['gradeweighthelp'] = 'Hjälp angående viktning av betyg';
$string['gradingmodulename'] = 'Betygsätter ({$a})';
$string['groupavg'] = 'Medelbetyg för grupp';
$string['hidden'] = 'Dold';
$string['hidden_help'] = 'Om markerat döljs betyg för elever. Ett <em>Dölj till</em>-datum kan anges för att publicera betyg efter att betygssättningen är slutförd.';
$string['hiddenasdate'] = 'Visa datum för dolda betyg';
$string['hiddenasdate_help'] = 'Om en användare inte kan se dolda betyg visa då datum för inskickning istället för  \'-\'.';
$string['hiddenuntil'] = 'Dold tills';
$string['hiddenuntildate'] = 'Dold tills: {$a}';
$string['hideadvanced'] = 'Dölj avancerade egenskaper';
$string['hideaverages'] = 'Dölj medel';
$string['hidecalculations'] = 'Dölj beräkningar';
$string['hidecategory'] = 'Dold';
$string['hideeyecons'] = 'Dölj visa/dölj-ikoner';
$string['hidefeedback'] = 'Dölj återkoppling';
$string['hideforcedsettings'] = 'Dölj tvingande inställningar';
$string['hideforcedsettings_help'] = 'Visa inte tvingande inställningar i användargränssnittet vid betygssättning.';
$string['hidegroups'] = 'Dölj grupper';
$string['hidelocks'] = 'Dölj lås';
$string['hidenooutcomes'] = 'Visa resultat';
$string['hidequickfeedback'] = 'Dölj snabb återkoppling';
$string['hideranges'] = 'Dölj intervall';
$string['hidetotalifhiddenitems'] = 'Dölj totalresultat om det innehåller dolda delar';
$string['hidetotalifhiddenitems_help'] = 'Denna inställning specificerar om totalresultat som innehåller dolda betyg ska visas för elever eller ersättas med bindestreck (-). Om de visas kan totalen beräknas antingen med eller utan dolda delar.

Om dolda delar exkluderas kommer totalen bli annorlunda mot totalen som visas för läraren i betygsrapporten efterssom lärare alltid ser totalresultat beräknat på alla delar, dolda och ej dolda. Om dolda delar inkluderas kan elever kanske räkna ut deras värde.';
$string['hidetotalshowexhiddenitems'] = 'Visa totalresultat förutom dolda delar';
$string['hidetotalshowinchiddenitems'] = 'Visa totalresultat inklusive dolda delar';
$string['hideverbose'] = ' {Dölj {$a->category} {$a->itemmodule} {$a->itemname}';
$string['highgradeascending'] = 'Sortera efter stigande skala för höga betyg';
$string['highgradedescending'] = 'Sortera efter fallande skala för höga betyg';
$string['highgradeletter'] = 'Högt';
$string['identifier'] = 'Identifiera användare genom';
$string['idnumbers'] = 'ID-nummer';
$string['ignore'] = 'Ignorera';
$string['import'] = 'Importera';
$string['importcsv'] = 'Importera CSV';
$string['importcsv_help'] = 'Betyg kan importeras via en CSV-fil formaterad enligt följande:

* Varje rad i filen innehåller en post
* Varje post är en serie data åtskilda av kommatecken eller annan avgränsare
* Den första posten innehåller en lista med fältnamn som definierar formatet för resten av filen
* Ett fältnamn som innehåller användaridentitetsdata krävs - antingen användarnamn, ID-nummer eller e-postadress

En fil med rätt format kan erhållas genom att du först exporterar några betyg. Filen kan sedan redigeras och sparas som en CSV-fil.';
$string['importcustom'] = 'Importera som standardresultat (endast den här kursen).';
$string['importdata'] = 'Data';
$string['importdata_help'] = 'Betyg kan klistras in direkt från ett OpenDocument- eller Excel-kalkylblad formaterat enligt följande:

* Minst en kolumn ska innehålla identiteten för användaren - användarnamn, e-postadress eller ID-nummer.
* Andra kolumner bör ha rubriker som för befintliga aktiviteter eller resultatobjekt.

Ett korrekt formaterat kalkylblad kan erhållas genom att först exportera några betyg. Kalkylbladet kan sedan redigeras för att lägga till fler betyg och sedan sparas.

Markera och kopiera de kolumner du vill importera från kalkylbladet och klistra sedan in dem i det här fältet.';
$string['importerror'] = 'Det inträffade ett fel, det här skriptet anropades inte med rätt parametrar.';
$string['importfailed'] = 'Importen misslyckades. Ingen data importerades.';
$string['importfeedback'] = 'Importera återkoppling';
$string['importfile'] = 'Importera fil';
$string['importfilemissing'] = 'Det gick inte att ta emot någon fil. gå tillbaka till formuläret och säkerställ att du laddar upp en giltig fil.';
$string['importfrom'] = 'Importera från';
$string['importoutcomenofile'] = 'Den upppladdade filen är tom eller skadad. V.g. verifiera att det här är en giltig fil. Problemet upptäcktes vid rad {$a}; detta utlöses av att dataraderna inte har lika många kolumner som den första raden (raden med rubriker) eller av att den importerade filen saknar de förväntade rubrikerna. Titta på den exporterade filen för att se ett exempel på en giltig rubrik.';
$string['importoutcomes'] = 'Importera resultat';
$string['importoutcomes_help'] = 'Resultat kan importeras via csv fil med samma format som för csv fil för exporterade resultat.';
$string['importoutcomesuccess'] = 'Importerade resultat "{$a->name}" med ID #{$a->id}';
$string['importplugins'] = 'Importpluginmoduler';
$string['importpreview'] = 'Förhandsgranskning av import';
$string['importsettings'] = 'Inställningar för import';
$string['importskippednomanagescale'] = 'Du har inte behörighet att lägga till en ny skala, så resultatet "{$a}" hoppades över eftersom det krävde en ny skala.';
$string['importskippedoutcome'] = 'Ett resultat med kortnamnet "{$a}" finns redan in det här sammanhanget, det som fanns i den importerade filen hoppades över.';
$string['importstandard'] = 'Importera som standardresultat';
$string['importsuccess'] = 'Import av betyg lyckades';
$string['importxml'] = 'Importera XML';
$string['includescalesinaggregation'] = 'Ta med skalor i aggregering';
$string['includescalesinaggregation_help'] = 'Du kan ändra huruvida skalor ska tas med som tal i alla aggregerade betyg i alla betygsböcker i alla kurser. VARNING: Om du ändrar den här inställningen kommer alla aggregerade betyg att beräknas om på nytt.';
$string['incorrectcourseid'] = 'ID för kurs var felaktigt';
$string['incorrectcustomscale'] = '(Felaktig anpassad betygsskala, vänligen ändra.)';
$string['incorrectminmax'] = 'Minimum måste vara lägre än maximum';
$string['inherit'] = 'Ärv';
$string['intersectioninfo'] = 'Student/Betygsinfo';
$string['invalidgradeexporteddate'] = 'Exportdatumet är ogiltigt eftersom det infaller för mer än ett år sedan, eller i framtiden, eller för att formatet är ogiltigt.';
$string['item'] = 'Komponent';
$string['iteminfo'] = 'Objektsinformation';
$string['iteminfo_help'] = '<p>Det här är ett utrymme där du kan mata in information om komponenten. Den text som matas in visas inte någon annanstans.</p>';
$string['itemname'] = 'Komponentnamn';
$string['itemnamehelp'] = 'Namnet på den här komponenten som har laddats in av modulen.';
$string['items'] = 'Komponenter';
$string['itemsedit'] = 'Redigera betygsobjekt';
$string['keephigh'] = 'Behåll det högsta';
$string['keephigh_help'] = 'Om detta är inställt så kommer detta alternativ endast att behålla de X högsta betygen, där X är det utvalda värdet för det här alternativet.';
$string['keephighestvalues'] = 'Behåll de {$a} högsta värdena';
$string['keymanager'] = 'Nyckelhanterare';
$string['lessthanmin'] = 'Det betyg som har matats in för {$a->itemname} för {$a->username} är lägre än minimum';
$string['letter'] = 'Bokstav';
$string['lettergrade'] = 'Bokstavsbetyg';
$string['lettergradenonnumber'] = 'Lågt och/eller högt betyg var icke-numeriskt för';
$string['letterpercentage'] = 'Bokstav (procent)';
$string['letterreal'] = 'Bokstav (real)';
$string['letters'] = 'Bokstäver';
$string['linkedactivity'] = 'Länkad aktivitet';
$string['linkedactivity_help'] = '<p>Det här specificerar en valfri aktivitet som den här komponenten för resultat är länkad till. Detta kan du använda för att mäta det som studenterna/eleverna/deltagarna/de lärande presterar när det gäller kriterier som inte utvärderas genom betyget på aktiviteten.</p>';
$string['linktoactivity'] = 'Länka till {$a->name}-aktiviteten {$a->title}';
$string['lock'] = 'Lås';
$string['locked'] = 'Låst';
$string['locked_help'] = 'Om förbockat kan betyg inte längre uppdateras automatiskt av den relaterade aktiviteten.';
$string['locktime'] = 'Lås efter';
$string['locktimedate'] = 'Låst efter: {$a}';
$string['lockverbose'] = 'Lås {$a->category} {$a->itemmodule} {$a->itemname}';
$string['lowest'] = 'Lägsta';
$string['lowgradeletter'] = 'Lågt';
$string['manualitem'] = 'Manuell komponent';
$string['mapfrom'] = 'Mappa från';
$string['mapfrom_help'] = 'Välj kolumnen i kalkylbladet som innehåller data för att identifiera användaren, till exempel användarnamn, användar-ID eller e-postadress.';
$string['mappings'] = 'Mappning av betygsobjekt';
$string['mappings_help'] = 'För varje kolumn med resultat i kalkylbladet väljer du motsvarande betygsobjekt som du vill importera betygen till.';
$string['mapto'] = 'Mappa till';
$string['mapto_help'] = 'Välj samma identifierande data som valts för "Mappa från".';
$string['max'] = 'Högsta';
$string['maxgrade'] = 'Maxbetyg';
$string['meanall'] = 'Alla betyg';
$string['meangraded'] = 'Icke-tomma betyg';
$string['meanselection'] = 'Betyg som har valts ut för medel';
$string['meanselection_help'] = 'Markera vilka typer av betyg som ska tas med i medelvärdena på kolumnnivå. Fält som inte innehåller något betyg kan bortses från eller räknas som 0 (det sista är det förinställda värdet).';
$string['median'] = 'Medel';
$string['min'] = 'Lägsta';
$string['minimum_show'] = 'Visa lägsta betyg';
$string['minimum_show_help'] = 'Lägsta betyg som används vid beräkning av betyg och viktningar. Om inaktiverat sätts lägsta betyg till 0 och går inte att redigera.';
$string['minmaxtouse'] = 'Lägsta och högsta betyg i beräkningar';
$string['minmaxtouse_desc'] = 'Den här inställningen avgör om de initiala lägsta- och högstabetygen från när betyget gavs ska användas, eller de lägsta och högsta betygen enligt vad som anges i inställningarna för betygsobjektet när den beräknar det betyg som visas i betygsboken. Det rekommenderas att den här inställningen ändras vid en lågtrafiktid, eftersom alla betyg kommer att räknas  om, vilket kan resultera i en hög serverbelastning.';
$string['minmaxtouse_help'] = 'Den här inställningen avgör om du ska använda de första minimi- och maximibetygen från när resultatet gavs, eller de lägsta och högsta resultat som anges i inställningarna för betygsobjektet när du beräknar betyget som visas i betygsboken.';
$string['minmaxupgradedgrades'] = 'Vissa resultat har ändrats för att lösa en inkonsekvens i betygsboken som orsakas av en ändring av de lägsta och högsta betyg som används vid beräkning av det betyg som visas. Vi rekommenderar att ändringarna granskas och accepteras.';
$string['minmaxupgradefixbutton'] = 'Lös inkonsekvent betygsinställning';
$string['minmaxupgradewarning'] = 'En inkonsekvens har upptäckts för vissa betyg. Detta på grund av en ändring av de lägsta- och högstabetyg som använts vid beräkningen av det betyg som visas i betygsboken. Vi rekommenderar att inkonsekvensen löses genom att klicka på knappen nedan, även om detta resulterar i att vissa betyg ändras.';
$string['missingitemtypeoreid'] = 'Vektornyckeln (itemtype eller eid) saknas för 2:a parametern i <code> grade_edit_tree_column_select::get_item_cell($item, $params)</code>';
$string['missingscale'] = 'Du måste välja en skala';
$string['mode'] = 'Läge';
$string['modgrade'] = 'Betyg';
$string['modgrade_help'] = 'Välj vilken typ av bedömning som ska användas för den här aktiviteten. Om "skala" väljs kan du välja skalan i nedrullningsmenyn. Om du använder poängbedömning kan du ange det maximala betyget som är möjligt att erhålla i den här aktiviteten.';
$string['modgradecantchangegradetype'] = 'Du kan inte ändra betygstypen eftersom det redan finns utdelade betyg av nuvarande typ.';
$string['modgradecantchangegradetypemsg'] = 'Vissa betyg har redan tilldelats, så betygstypen kan inte ändras. Om du vill ändra högsta betyg måste du först välja om du vill räkna om befintliga betyg eller inte.';
$string['modgradecantchangegradetyporscalemsg'] = 'Vissa betyg har redan delats ut och därför kan betygstypen och skalan kan inte ändras.';
$string['modgradecantchangeratingmaxgrade'] = 'Du kan inte ändra det maxbetygen när det redan finns betyg för en aktivitet med betyg.';
$string['modgradecantchangescale'] = 'Du kan inte ändra skalan eftersom det redan finns resultat för det här objektet.';
$string['modgradecategorycantchangegradetypemsg'] = 'Den här kategorin har betygsobjekt som är åsidosatta. Därför har vissa betyg redan tilldelats vilket innebär att betygstypen kan inte ändras. Om du vill ändra högsta betyg måste du först välja om du vill räkna om befintliga betyg eller inte.';
$string['modgradecategorycantchangegradetyporscalemsg'] = 'Den här kategorin har associerade betygsobjekt som har åsidosatts. Detta innebär implicit att vissa betyg redan delats ut. Därför kan betygstypen eller skalan kan inte ändras.';
$string['modgradecategoryrescalegrades'] = 'Beräkna om skalan för åsidosatta betyg';
$string['modgradecategoryrescalegrades_help'] = 'När du ändrar de maxbetyget för ett betygsobjekt måste du ange om detta också kommer att leda till att befintliga procentbetyg ändras.

Om detta är inställt på "Ja" skalas alla befintliga åsidosatta betyg om så att procentbetyget förblir detsamma.

Om det här alternativet till exempel är inställt på "Ja" skulle en ändring av det maximala resultatet för ett objekt från 10 till 20 orsaka ett betyg på 6/10 (60 %) skalas om till 12/20 (60 %). Om "Nej" förblir  betyget oförändrat, vilket kräver manuell justering av betygsobjekten för att säkerställa korrekta poäng.';
$string['modgradedonotmodify'] = 'Ändra inte befintliga betyg';
$string['modgradeerrorbadpoint'] = 'Ogiltigt betygsvärde. Det måste vara ett heltal mellan 1 och {$a}';
$string['modgradeerrorbadscale'] = 'Ogiltig skala vald. Vänligen välj en skala från alternativen nedan.';
$string['modgrademaxgrade'] = 'Maxbetyg';
$string['modgraderescalegrades'] = 'Beräkna om skalan för befintliga betyg';
$string['modgraderescalegrades_help'] = 'När du ändrar de maxbetyget för ett betygsobjekt måste du ange om detta också kommer att leda till att befintliga procentbetyg ändras.

Om detta är inställt på "Ja" skalas alla befintliga betyg om så att procentbetyget förblir detsamma.

Om det här alternativet till exempel är inställt på "Ja" skulle en ändring av det maximala betyg för ett objekt från 10 till 20 orsaka ett betyg på 6/10 (60 %) skalas om till 12/20 (60 %). Om "Nej" ändras betyget från 6/10 (60%) till 6/20 (30%), vilket kräver manuell justering av betygsobjekten för att säkerställa korrekta poäng.';
$string['modgradetype'] = 'Typ';
$string['modgradetypenone'] = 'Inget';
$string['modgradetypepoint'] = 'Poäng';
$string['modgradetypescale'] = 'Skala';
$string['morethanmax'] = 'Betyget som har matats in för {$a->itemname} för {$a->username} är högre än maximum';
$string['moveselectedto'] = 'Flytta valda komponenter till';
$string['movingelement'] = 'Flyttar {$a}';
$string['multfactor'] = 'Multiplikator';
$string['multfactor_help'] = 'Multiplikatorn är den faktor med vilken alla betyg för detta betygsobjekt kommer att multipliceras, med ett maximalt värde från det högsta betyget. Om multiplikatorn till exempel är 2 och det högsta betyget är 100 multipliceras alla betyg mindre än 50 med 2 och alla betyg från 50 och uppåt ändras till 100.';
$string['multfactorvalue'] = 'Multiplikator för {$a}';
$string['mustchooserescaleyesorno'] = 'Du måste välja om du ska beräkna om skalan för befintliga betyg, eller ej.';
$string['mygrades'] = 'Betygsbokslänk för användare';
$string['mygrades_desc'] = 'Denna inställning gör det möjligt att länka till en extern betygsbok i användarmenyn.';
$string['mypreferences'] = 'Mina inställningar';
$string['myreportpreferences'] = 'Mina rapportinställningar';
$string['navmethod'] = 'Navigeringsmetod';
$string['neverdeletehistory'] = 'Radera aldrig historiken';
$string['newcategory'] = 'Ny kategori';
$string['newitem'] = 'Nytt betygsobjekt';
$string['newoutcomeitem'] = 'Ny resultatkomponent';
$string['no'] = 'Ingen';
$string['nocategories'] = 'Det gick inte att hitta eller lägga till betygskategorier för denna kurs';
$string['nocategoryname'] = 'Inget kategorinamn angavs';
$string['nocategoryview'] = 'Ingen kategori att visa per';
$string['nocourses'] = 'Det finns inga kurser ännu';
$string['noforce'] = 'Tvinga inte';
$string['nogradeletters'] = 'Inga betygsbokstäver har angivits';
$string['nogradesreturned'] = 'Inga betyg returnerades';
$string['noidnumber'] = 'Inget ID-nummer';
$string['nolettergrade'] = 'Inget bokstavsbetyg för';
$string['nomode'] = 'NA';
$string['nonnumericweight'] = 'Mottaget icke-numeriskt värde för';
$string['nonunlockableverbose'] = 'Det här betyget går inte att låsa upp förrän {$a->itemname} har låsts upp';
$string['nonweightedpct'] = 'icke-viktat %';
$string['nooutcome'] = 'Inget resultat';
$string['nooutcomes'] = 'Resultatdelar måste länkas till ett kursresultat men det finns inga resultat för denna kurs. Vill du lägga till ett resultat?';
$string['nopermissiontoresetweights'] = 'Ingen behörighet att återställa viktningen';
$string['nopublish'] = 'Publicera inte';
$string['noreports'] = 'Du är inte handledare eller kursdeltagare på någon kurs.';
$string['norolesdefined'] = 'Inga roller definierade i <em>Hantera webbplats &#10132; Betyg &#10132; Generella inställningar &#10132; Betygssatta roller</em>';
$string['noscales'] = 'Resultat måste länkas till en kursskala eller en global skala men det finns ingen. Vill du lägga till en skala?';
$string['noselectedcategories'] = 'inga kategorier valdes';
$string['noselecteditems'] = 'inga komponenter valdes';
$string['notenrolled'] = 'Du är inte registrerad på några kurser.';
$string['notteachererror'] = 'Du måste vara lärare för att kunna använda den här funktionen.';
$string['nousersloaded'] = 'Inga användare inlästa';
$string['nouserstograde'] = 'Inga användare att betygsätta';
$string['numberofgrades'] = 'Antal betyg';
$string['onascaleof'] = 'på en skala av  {$a->grademin} till {$a->grademax}';
$string['operations'] = 'Operationer';
$string['options'] = 'Alternativ';
$string['others'] = 'Andra';
$string['outcome'] = 'Resultat';
$string['outcome_help'] = 'Den här inställningen bestämmer utfallet som det här betygsobjektet kommer att representera i betygsboken.';
$string['outcomeassigntocourse'] = 'Tilldela ett annat resultat till den här kursen';
$string['outcomecategory'] = 'Skapa resultat i kategori';
$string['outcomecategorynew'] = 'Ny kategori';
$string['outcomeconfirmdelete'] = 'Är du säker på att du vill ta bort resultatet "{$a}"?';
$string['outcomecreate'] = 'Lägg till ett nytt resultat';
$string['outcomedelete'] = 'Ta bort resultat';
$string['outcomefullname'] = 'Fullständigt namn';
$string['outcomeitem'] = 'Resultatobjekt';
$string['outcomeitemsedit'] = 'Redigera resultatobjekt';
$string['outcomereport'] = 'Resultatrapport';
$string['outcomes'] = 'Resultat';
$string['outcomescourse'] = 'Resultat som används i kursen';
$string['outcomescoursecustom'] = 'Använder anpassad (ta inte bort)';
$string['outcomescoursenotused'] = 'Använder ej standard';
$string['outcomescourseused'] = 'Använder standard (ta inte bort)';
$string['outcomescustom'] = 'Anpassade resultat';
$string['outcomeshortname'] = 'Kortnamn';
$string['outcomesstandard'] = 'Standardresultat';
$string['outcomesstandardavailable'] = 'Tillgängliga standarresultat';
$string['outcomestandard'] = 'Standardresultat';
$string['outcomestandard_help'] = 'Ett standardresultat är tillgängligt (för alla kurser) på webbplatsnivå.';
$string['overallaverage'] = 'Övergripande medelbetyg';
$string['overridden'] = 'Åsidosatt';
$string['overridden_help'] = 'Om markerat kan betyget inte längre ändras av den relaterade aktiviteten.

När ett betyg redigeras i betygsrapporten är alternativet "Åsidosatt" automatiskt markerat. Alternativet kan dock avmarkeras för att åter låta betyget kunna ändras av den relaterade aktiviteten.';
$string['overriddennotice'] = 'Ditt slutbetyg för den här aktiviteten har justerats manuellt.';
$string['overridecat'] = 'Tillåt manuellt åsidosättande av kategoribetyg';
$string['overridecat_help'] = 'Om detta alternativ är inaktivt förhindras användare från att åsidosätta kategoribetyg.';
$string['overridesitedefaultgradedisplaytype'] = 'Åsidosätt standardvärdena för webbplatsen';
$string['overridesitedefaultgradedisplaytype_help'] = 'Om markerat kan betygsbokstäver och gränser i kursen anges i stället för standardinställningarna på webbplatsen.';
$string['overrideweightofa'] = 'Åsidosätt viktning för {$a}';
$string['parentcategory'] = 'Överliggande kategori';
$string['pass'] = 'Godkänd';
$string['pctoftotalgrade'] = '% av sammanlagda betyget/omdömet';
$string['percent'] = 'Procent';
$string['percentage'] = 'Procent';
$string['percentageletter'] = 'Procent (bokstav)';
$string['percentagereal'] = 'Procent (real)';
$string['percentascending'] = 'Sortera stigande enligt procent';
$string['percentdescending'] = 'Sortera fallande enligt procent';
$string['percentshort'] = '%';
$string['plusfactor'] = 'Offset';
$string['plusfactor_help'] = 'Förskjutningen är ett tal som läggs till i varje resultat för detta betygsobjekt efter att multiplikatorn har tillämpats.';
$string['plusfactorvalue'] = 'Kompensera värdet för {$a}';
$string['points'] = 'poäng';
$string['pointsascending'] = 'Sortera stigande enligt poäng';
$string['pointsdescending'] = 'Sortera poäng fallande';
$string['positionfirst'] = 'Först';
$string['positionlast'] = 'Sist';
$string['preferences'] = 'Inställningar';
$string['prefgeneral'] = 'Generellt';
$string['prefletters'] = 'Betygsbokstäver och -gränser';
$string['prefrows'] = 'Specialrader';
$string['prefshow'] = 'Visa/dölj';
$string['previewrows'] = 'Förhandsgranska rader';
$string['privacy:metadata:categorieshistory'] = 'En post med tidigare versioner av betygskategorier';
$string['privacy:metadata:filepurpose'] = 'Återkopplingsfiler som är lagrade i en användares betygsbok.';
$string['privacy:metadata:grade_import_newitem'] = 'Tillfällig tabell för lagring av nya grade_item namn från resultatimport';
$string['privacy:metadata:grade_import_newitem:importcode'] = 'En unik batchkod för identifiering av en importbatch';
$string['privacy:metadata:grade_import_newitem:importer'] = 'Användare som importerar data';
$string['privacy:metadata:grade_import_newitem:itemname'] = 'Nytt namn på betygsobjekt';
$string['privacy:metadata:grade_import_values'] = 'Temporär tabell för import av betyg';
$string['privacy:metadata:grade_import_values:feedback'] = 'Betygsätt återkoppling';
$string['privacy:metadata:grade_import_values:finalgrade'] = 'Ursprungligt betygsvärde';
$string['privacy:metadata:grade_import_values:importcode'] = 'En unik batchkod för identifiering av en importbatch';
$string['privacy:metadata:grade_import_values:importer'] = 'Användaren som importerar datat';
$string['privacy:metadata:grade_import_values:importonlyfeedback'] = 'Flagga om enbart återkopplingen importerades';
$string['privacy:metadata:grade_import_values:userid'] = 'Användare vars betyg importerades';
$string['privacy:metadata:grades'] = 'En post med betyg';
$string['privacy:metadata:grades:aggregationstatus'] = 'Aggregeringsstatusen';
$string['privacy:metadata:grades:aggregationweight'] = 'Viktningen i aggregeringen';
$string['privacy:metadata:grades:feedback'] = 'Återkopplingen';
$string['privacy:metadata:grades:finalgrade'] = 'Detta betyg';
$string['privacy:metadata:grades:information'] = 'Ytterligare information om betyget';
$string['privacy:metadata:grades:timemodified'] = 'Tidpunkt då betyget senast ändrades';
$string['privacy:metadata:grades:userid'] = 'ID:t för den användare vars resultat det är';
$string['privacy:metadata:grades:usermodified'] = 'ID:t för den användare som senast ändrade posten';
$string['privacy:metadata:gradeshistory'] = 'En post med tidigare betyg';
$string['privacy:metadata:history:loggeduser'] = 'ID:t för den användare som loggades in när versionshanteringen inträffade';
$string['privacy:metadata:history:timemodified'] = 'Den tidpunkt då versionshanteringen av betyget inträffade';
$string['privacy:metadata:itemshistory'] = 'En post med tidigare versioner av betygsobjekt';
$string['privacy:metadata:outcomes'] = 'En post med resultat';
$string['privacy:metadata:outcomes:timemodified'] = 'Den tidpunkt då posten ändrades';
$string['privacy:metadata:outcomes:usermodified'] = 'Användaren som senast ändrade posten';
$string['privacy:metadata:outcomeshistory'] = 'En post över tidigare versioner av resultat';
$string['privacy:metadata:scale'] = 'En post med skalor';
$string['privacy:metadata:scale:timemodified'] = 'Den tidpunkt då posten ändrades senast';
$string['privacy:metadata:scale:userid'] = 'Användaren som senast ändrade posten';
$string['privacy:metadata:scalehistory'] = 'En post över tidigare versioner av skalor';
$string['privacy:path:relatedtome'] = 'Relaterat till mig';
$string['privacy:request:historyactiondelete'] = 'Ta bort';
$string['privacy:request:historyactioninsert'] = 'Infoga';
$string['privacy:request:historyactionupdate'] = 'Uppdatera';
$string['privacy:request:unknowndeletedgradeitem'] = 'Okänt (betygsobjektet borttaget)';
$string['profilereport'] = 'Användarprofilrapport';
$string['profilereport_help'] = 'Betygsrapport som används på profilsidan.';
$string['publishing'] = 'Publicerar';
$string['publishingoptions'] = 'Publiceringsalternativ';
$string['quickfeedback'] = 'Snabb återkoppling';
$string['quickgrading'] = 'Snabb betygssättning';
$string['quickgrading_help'] = 'Snabb Betygssättning lägger till en inmatningsbar textkomponent i varje betygsruta i betygsrapporten så att Du ska kunna redigera många betyg på samma gång. Du kan sedan klicka på knappen \'Uppdatera\' för att genomföra alla dessa ändringar samtidigt istället för en i taget.';
$string['range'] = 'Intervall';
$string['rangedecimals'] = 'Antal decimaler i intervall';
$string['rangedecimals_help'] = 'Antalet decimaler att visa för intervallet.';
$string['rangesdecimalpoints'] = 'Decimaler som visas i intervall';
$string['rangesdecimalpoints_help'] = 'Den här inställningen bestämmer antalet decimaler som ska visas för varje intervall eller om den övergripande decimalinställningen för kategori eller betygsposten används (ärv).';
$string['rangesdisplaytype'] = 'Visningstyp för intervall';
$string['rangesdisplaytype_help'] = 'Den här inställningen avgör om intervallet visas som verkliga betyg, procenttal, bokstäver eller om visningstypen för kategori- eller betygsobjekten används (ärv).';
$string['rank'] = 'Rankning';
$string['rawpct'] = 'Rå %';
$string['real'] = 'Reell';
$string['realletter'] = 'Real (bokstav)';
$string['realpercentage'] = 'Real (procent)';
$string['recalculatinggrades'] = 'Räknar om betyg';
$string['recovergradesdefault'] = 'Standard för betygsåterställning';
$string['recovergradesdefault_help'] = 'Som standard, återställ gamla betyg när en användare återregistreras på en kurs.';
$string['refreshpreview'] = 'Uppdatera förhandsgranskning';
$string['regradeanyway'] = 'Gör om betygssättningen ändå';
$string['removeallcoursegrades'] = 'Ta bort alla betyg';
$string['removeallcoursegrades_help'] = 'Om markerat kommer alla resultatobjekt som lades till i betygsboken manuellt att tas bort, tillsammans med betyg och data för åsidosatta, uteslutna, dolda och låsta betyg. Enbart betygsposter associerade med aktiviteter behålls.';
$string['removeallcourseitems'] = 'Ta bort alla komponenter och kategorier';
$string['removeallcourseitems_help'] = 'Om markerat kommer alla kategorier och resultatobjekt som lades till i betygsboken manuellt att raderas, tillsammans med betyg och data om åsidosatta, uteslutna, dolda och låsta betyg. Endast betygsposter som är kopplade till aktiviteter kommer att finnas kvar.';
$string['report'] = 'Rapport';
$string['reportdefault'] = 'Rapportera standard ({$a})';
$string['reportplugins'] = 'Pluginmoduler för rapport';
$string['reportsettings'] = 'Rapportinställningar';
$string['reprintheaders'] = 'Skriv ut rubrikerna igen';
$string['resetweights'] = 'Återställ viktningar för {$a->itemname}';
$string['resetweightsshort'] = 'Återställ viktningar';
$string['respectingcurrentdata'] = 'den aktuella konfigurationen oförändrad';
$string['rowpreviewnum'] = 'Antal rader i förhandsgranskning';
$string['rowpreviewnum_help'] = 'Importdata kan förhandsgranskas innan den importeras. Denna inställning anger hur många rader som visas i förhandsgranskningen.';
$string['savechanges'] = 'Spara';
$string['savepreferences'] = 'Spara inställningar';
$string['scaleconfirmdelete'] = 'Är du säker på att du vill ta bort "{$a}"-skalan?';
$string['scaledpct'] = 'Skalad %';
$string['seeallcoursegrades'] = 'Visa alla kursbetyg';
$string['select'] = 'Välj {$a}';
$string['selectalloroneuser'] = 'Välj alla eller en användare';
$string['selectauser'] = 'Välj en användare';
$string['selectdestination'] = 'Välj destination för {$a}';
$string['separator'] = 'Avgränsare';
$string['separator_help'] = 'Välj avgränsare som används i CSF-filen. Vanligtvis är detta ett komma eller semikolon.';
$string['sepcolon'] = 'Kolon';
$string['sepcomma'] = 'Komma';
$string['sepsemicolon'] = 'Semikolon';
$string['septab'] = 'Tabb';
$string['setcategories'] = 'Ange kategorier';
$string['setcategorieserror'] = 'Du måste först ställa in kategorierna för din kurs innan du kan ge dem viktningar.';
$string['setgradeletters'] = 'Ange betygsbokstäver';
$string['setpreferences'] = 'Ställ in inställningar';
$string['setting'] = 'Inställning';
$string['settings'] = 'Inställningar';
$string['setweights'] = 'Ange viktningar';
$string['showactivityicons'] = 'Visa aktivitetsikoner';
$string['showactivityicons_help'] = 'Om aktiverad visas aktivitetsikoner bredvid aktivitetsnamnen.';
$string['showallhidden'] = 'Visa dolda';
$string['showallstudents'] = 'Visa alla studenter';
$string['showanalysisicon'] = 'Visa betygsanalysikonen';
$string['showanalysisicon_desc'] = 'Om betygsanalysikonen ska visas som standard. Om aktivitetsmodulen stödjer det länkar ikonen för betygsanalys till en sida med en mer detaljerad förklaring av betyget och hur det erhölls.';
$string['showanalysisicon_help'] = 'Om aktivitetsmodulen stödjer det länkar analysikonen till en sida med mer detaljerad förklaring av betyget samt hur det erhölls.';
$string['showaverage'] = 'Visa medel';
$string['showaverage_help'] = 'Om kolumnen med genomsnittsbetyg ska visas. Observera att deltagarna kanske kan härleda andras betyg om genomsnittet beräknas utifrån ett litet antal resultat. Av prestandaskäl är medelvärdet ungefärligt om det är beroende av dolda objekt.';
$string['showaverages'] = 'Visa medel för kolumner';
$string['showaverages_help'] = 'Visa medelvärdena för kolumner i betygsrapporten.';
$string['showcalculations'] = 'Visa beräkningar';
$string['showcalculations_help'] = 'Om aktiverad visas vid redigering en kalkylatorikon för varje betygsobjekt och kategori tillsammans med en visuell indikation på att betygsobjektet är beräknat.';
$string['showcontributiontocoursetotal'] = 'Visa bidrag till kurstotalen';
$string['showcontributiontocoursetotal_help'] = 'Om en kolumn med procentsatser ska visas som anger hur mycket varje betygsobjekt bidrar till användarens kurstotal-procent (efter att viktningen har tillämpats).';
$string['showeyecons'] = 'Visa \'visa/dölj\'-ikoner';
$string['showeyecons_help'] = 'Detta avgör huruvida en ikon för visa/dölj ska visas bredvid varje betyg (vilket styr huruvida betyget ska vara synligt för användaren eller inte).';
$string['showfeedback'] = 'Visa återkoppling';
$string['showfeedback_help'] = 'Ska kolumnen med återkoppling visas?';
$string['showgrade'] = 'Visa betyg';
$string['showgrade_help'] = 'Ska betygskolumnen visas?';
$string['showgroups'] = 'Visa grupper';
$string['showhiddenitems'] = 'Visa dolda element';
$string['showhiddenitems_help'] = 'Huruvida dolda betygsobjekt döljs helt eller om namnen på dolda betygsobjekt är synliga för deltagarna.

* Visa dolda - Namnet på dolda betygsobjekt visas men själva betyget döljs
* Endast dolda tills - Betygsobjekt med ett "dölj till"-datum döljs helt tills det inställda datumet infaller, varefter hela objektet visas
* Visa inte - Betygsobjekt är fullständigt dolda';
$string['showhiddenuntilonly'] = 'Endast dolda tills';
$string['showingaggregatesonly'] = 'Visar endast aggregeringar';
$string['showingfullmode'] = 'Visar fullständig vy';
$string['showinggradesonly'] = 'Visar enbart betyg';
$string['showlettergrade'] = 'Visa bokstavsbetyg';
$string['showlettergrade_help'] = 'Visa bokstavsbetygskolumnen?';
$string['showlocks'] = 'Visa lås';
$string['showlocks_help'] = 'Om aktiverad visas en lås/upplåsningsikon för varje betyg för att styra om betyget automatiskt kan uppdateras av den relaterade aktiviteten.';
$string['shownohidden'] = 'Visa inte';
$string['shownooutcomes'] = 'Dölj resultat';
$string['shownumberofgrades'] = 'Visa antal betyg i medelvärden';
$string['shownumberofgrades_help'] = 'Om aktiverad visas antalet betyg som används vid beräkning av medelvärdet inom hakparenteser efter varje medelvärde.';
$string['showonlyactiveenrol'] = 'Visa endast aktiva registreringar';
$string['showonlyactiveenrol_help'] = 'Den här inställningen avgör om endast aktiva registrerade användare kommer att vara synliga i betygsboksrapporten. Om aktiverad visas inga avstängda användare i betygsboken.';
$string['showpercentage'] = 'Visa procent';
$string['showpercentage_help'] = 'Visa procentvärdet för varje betygsobjekt?';
$string['showquickfeedback'] = 'Visa snabb återkoppling';
$string['showquickfeedback_help'] = 'Om aktiverad visas en inmatningsruta för återkoppling med en prickad kantlinje för varje resultat när redigeringen är aktiverad. Detta gör att återkopplingen för flera betyg kan göras samtidigt. Ändringar sparas och markeras när uppdateringsknappen klickas.

Observera att när återkopplingen redigeras i betygsrapporten sätts en flagga för åsidosättande, vilket innebär att återkopplingen inte längre kan ändras inifrån den relaterade aktiviteten.';
$string['showrange'] = 'Visa intervall';
$string['showrange_help'] = 'Visa intervallkolumnen?';
$string['showranges'] = 'Visa intervall';
$string['showranges_help'] = 'Om aktiverad kommer betygsrapporten att innehålla ytterligare en rad som visar intervallet för varje kategori och betygsobjekt.';
$string['showrank'] = 'Visa rangordning';
$string['showrank_help'] = 'Visa användarens ställning i förhållande till resten av klassen, för varje betygsobjekt.';
$string['showuserimage'] = 'Visa bilderna från användarnas profiler';
$string['showuserimage_help'] = 'Detta avgör huruvida användarnas bilder ska visas bredvid namnet i betygsrapporten.';
$string['showverbose'] = 'Visa {$a->category} {$a->itemmodule} {$a->itemname}';
$string['showweight'] = 'Visa viktningar';
$string['showweight_help'] = 'Om en kolumn ska visas för betygsvikten.';
$string['simpleview'] = 'Enskild vy';
$string['singleview'] = 'Enskild vy för {$a}';
$string['sitewide'] = 'Webbplatsövergripande';
$string['sort'] = 'Sortera';
$string['sortasc'] = 'Sortera i stigande ordning';
$string['sortbyfirstname'] = 'Sortera efter förnamn';
$string['sortbylastname'] = 'Sortera efter efternamn';
$string['sortdesc'] = 'Sortera i fallande ordning';
$string['standarddeviation'] = 'Standardavvikelse';
$string['stats'] = 'Statistik';
$string['statslink'] = 'Stats';
$string['student'] = 'Student';
$string['studentsperpage'] = 'Studenter per sida';
$string['studentsperpage_help'] = 'Antalet studenter som ska visas på varje sida i betygsrapporten.';
$string['studentsperpagereduced'] = 'Minskade antalet deltagare per sida från {$a->originalstudentsperpage} till {$a->studentsperpage}. Överväg att öka PHP-max_input_vars från {$a->maxinputvars}.';
$string['subcategory'] = 'Normal kategori';
$string['submissions'] = 'Inskickningar';
$string['submittedon'] = 'Inskickad: {$a}';
$string['sumofgradesupgradedgrades'] = 'OBS! Aggregeringsmetoden "Summan av betyg" har ändrats till "Naturlig" som en del av en webbplatsuppgradering. Eftersom "Summan av resultat" tidigare användes i den här kursen rekommenderar vi att du granskar den här ändringen i betygsboken.';
$string['switchtofullview'] = 'Växla till fullständig vy';
$string['switchtosimpleview'] = 'Växla till enkel vy';
$string['tabs'] = 'Flikar';
$string['topcategory'] = 'Superkategori';
$string['total'] = 'Summa';
$string['totalweight100'] = 'Den sammanlagda viktningen är lika med 100';
$string['totalweightnot100'] = 'Den sammanlagda viktningen är inte lika med 100';
$string['turnfeedbackoff'] = 'Inaktivera återkoppling';
$string['turnfeedbackon'] = 'Aktivera återkoppling';
$string['typenone'] = 'Ingen';
$string['typescale'] = 'Skala';
$string['typescale_help'] = 'Den här inställningen bestämmer den skala som används när betygstypen skala används. Skalan för ett aktivitetsbaserat betygsobjekt ställs in på sidan med aktivitetsinställningarna.';
$string['typetext'] = 'Text';
$string['typevalue'] = 'Värde';
$string['uncategorised'] = 'Ospecificerad';
$string['unchangedgrade'] = 'Betyget har inte ändrats';
$string['unenrolledusersinimport'] = 'Den här importen tar med de följande betygen för användare som f.n. inte är registrerade på den här kursen: {$a}';
$string['unlimitedgrades'] = 'Obegränsade betyg';
$string['unlimitedgrades_help'] = 'Som standard begränsas betyg av de högsta och lägsta värdena för betygsobjektet. Om du aktiverar den här inställningen tas den här gränsen bort och resultat på över 100% kan anges direkt i betygsboken.';
$string['unlock'] = 'Lås upp';
$string['unlockverbose'] = 'Lås upp {$a->category} {$a->itemmodule} {$a->itemname}';
$string['unused'] = 'Ej använd';
$string['updatedgradesonly'] = 'Exportera bara nya eller uppdaterade betyg';
$string['upgradedgradeshidemessage'] = 'Stäng notis';
$string['upgradedminmaxrevertmessage'] = 'Ångra ändringarna';
$string['uploadgrades'] = 'Ladda upp betyg';
$string['useadvanced'] = 'Använd avancerade egenskaper';
$string['usedcourses'] = 'Använda kurser';
$string['usedgradeitem'] = 'Använt betygsobjekt';
$string['usenooutcome'] = 'Använd inget resultat';
$string['usenoscale'] = 'Använd ingen skala';
$string['usepercent'] = 'Använd procent';
$string['user'] = 'Användare';
$string['userenrolmentsuspended'] = 'Användarregistrering avstängd';
$string['userfields_show'] = 'Visa användarfält';
$string['userfields_show_help'] = 'Visa ytterligare användarfält, som t.ex. e-postadress i bedömarrapporten. De specifika fält som visas styrs av webbplatsinställningen <em>Visa användarens identitet</em> under <em>Administration / Användare / Behörigheter / Användarprinciper</em>';
$string['usergrade'] = 'Användare {$a->fullname} ({$a->useridnumber}) på komponent {$a->gradeidnumber}';
$string['userid'] = 'Användar-ID';
$string['useridnumberwarning'] = 'Användare utan ID-nummer undantas från exporten eftersom de inte kan importeras';
$string['usermappingerror'] = 'Fel vid användarmappning: Det gick inte att hitta användaren med värdet "{$a->value}" för fältet "{$a->field}"';
$string['usermappingerrorcurrentgroup'] = 'Användare är inte medlem i aktuell grupp.';
$string['usermappingerrormultipleusersfound'] = 'Fel vid användarmappning: Flera användare hittades med {$a->field} med "{$a->value}". Använd ett mer unikt mappningsfält.';
$string['usermappingerrorusernotfound'] = 'Fel vid användarmappning. Hittade inte användaren.';
$string['userpreferences'] = 'Användarinställningar';
$string['useweighted'] = 'Använd viktat';
$string['verbosescales'] = 'Detaljerade skalor';
$string['verbosescales_help'] = 'En utförlig skala använder ord i stället för siffror. Ställ in på \'Ja\' om både numeriska och utförliga skalor ska importeras. Ställ in på \'Nej\' om endast numeriska skalor ska importeras.';
$string['viewbygroup'] = 'Grupp';
$string['viewgrades'] = 'Visa betyg';
$string['weight'] = 'Vikt';
$string['weight_help'] = 'Ett värde som används för att bestämma det relativa värdet för flera betygsobjekt i en kategori eller kurs.';
$string['weightcourse'] = 'Använd viktade betyg för kurs';
$string['weightedascending'] = 'Sortera stigande viktad procent';
$string['weighteddescending'] = 'Sortera efter fallande viktad procent';
$string['weightedpct'] = 'viktad %';
$string['weightedpctcontribution'] = 'viktat  %  bidrag';
$string['weightofa'] = 'Viktning för {$a}';
$string['weightorextracredit'] = 'Viktning eller extra tillägg';
$string['weightoverride'] = 'viktjustering';
$string['weightoverride_help'] = 'Avmarkera detta om du vill återställa vikten för betygsobjektet till dess automatiskt beräknade värde. Om du markerar detta kan vikten inte justeras automatiskt.';
$string['weights'] = 'Viktningar';
$string['weightsadjusted'] = 'Dina vikter har justerats till totalt 100.';
$string['weightsedit'] = 'Redigera vikter och extrapoäng';
$string['weightuc'] = 'Beräknad viktning';
$string['writinggradebookinfo'] = 'Sparar betygsboksinställningar';
$string['xml'] = 'XML';
$string['yes'] = 'Ja';
$string['yourgrade'] = 'Ditt betyg';
