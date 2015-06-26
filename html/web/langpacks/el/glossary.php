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
 * Strings for component 'glossary', language 'el', branch 'MOODLE_28_STABLE'
 *
 * @package   glossary
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Προσθήκη σχολίου';
$string['addentry'] = 'Προσθήκη νέας εγγραφής';
$string['addingcomment'] = 'Προσθήκη ενός σχολίου';
$string['alias'] = 'Λέξη κλειδί';
$string['aliases'] = 'Λέξεις κλειδιά';
$string['aliases_help'] = '<p align="center"><b>Λέξεις κλειδιά</b></p>

<p> Κάθε καταχώρηση στο λεξιλόγιο μπορεί να είναι συσχετιζόμενη με μια λίστα λέξεων κλειδιών.</p>

<p><b>Κάθε ψευδώνυμο μπαίνει σε νέα γραμμή</b> (δε διαχωρίζεται από κόμμα).</p>

<p> Οι ψευδείς λέξεις και φράσεις μπορούν να χρησιμοποιηθούν ως εναλλακτικοί τρόποι αναφοράς μιας εισαγωγής. Για παράδειγμα, εάν χρησιμοποιηθεί το φίλτρο αυτόματης σύνδεσης του λεξιλογίου, τότε τα ψευδώνυμα θα εμφανιστούν (καθώς και το κύριο όνομα της εισαγωγής) όταν αποφασιστεί ποιες λέξεις θα συνδεθούν με την εγγραφή αυτή. </p>';
$string['allcategories'] = 'Όλες οι κατηγορίες';
$string['allentries'] = 'ΟΛΑ';
$string['allowcomments'] = 'Να επιτρέπονται τα σχόλια στις εγγραφές';
$string['allowcomments_help'] = '<p align="center"><b>Επιτρέπονται τα σχόλια στις καταχωρήσεις</b></p>

<p>Οι μαθητές ανάλογα με την πρόσβαση που τους δίδεται μπορούν να προσθέσουν σχόλια στις καταχωρήσεις λεξιλογίου.</p>

<p>Οι καθηγητές μπορούν πάντα να προσθέσουν σχόλια στις καταχωρήσεις λεξιλογίου.</p>';
$string['allowduplicatedentries'] = 'Επιτρέπονται οι διπλές εγγραφές';
$string['allowduplicatedentries_help'] = '<p align="center"><b>Επιτρέπονται οι διπλές καταχωρήσεις</b></p>

<p>Εάν ενεργοποιηθεί αυτή η επιλογή, τότε πολλαπλές καταχωρήσεις μπορούν να χρησιμοποιήσουν την ίδια έννοια.</p>';
$string['allowprintview'] = 'Να επιτρέπεται η προεπισκόπιση εκτύπωσης';
$string['allowprintview_help'] = '<p align="center"><b>Επιτρέπεται η επισκόπηση εκτύπωσης</b></p>

<p>Οι μαθητές ανάλογα με την πρόσβαση που τους δίδεται μπορούν να κάνουν επισκόπηση εκτύπωσης λεξιλογίου.</p>

<p>Οι καθηγητές μπορούν πάντα να χρησιμοποιήσουν την επισκόπηση εκτύπωσης.</p>';
$string['answer'] = 'Απάντηση';
$string['approve'] = 'Αποδοχή';
$string['areaattachment'] = 'Συνημμένα';
$string['areaentry'] = 'Ορισμοί';
$string['areyousuredelete'] = 'Σίγουρα θέλετε να διαγράψετε αυτήν την εγγραφή;';
$string['areyousuredeletecomment'] = 'Σίγουρα θέλετε να διαγράψετε αυτό το σχόλιο;';
$string['areyousureexport'] = 'Σίγουρα θέλετε να εξάγετε αυτήν την εγγραφή στο';
$string['ascending'] = '(αύξουσα)';
$string['attachment'] = 'Επισυναπτόμενο';
$string['attachment_help'] = '<p align="center"><b>Επισυναπτόμενα για καταχωρήσεις</b></p>

<p>Προαιρετικά, είναι δυνατή η επισύναψη μόνο ΕΝΟΣ αρχείου σε οποιαδήποτε καταχώρηση λεξιλογίου.</p>

<p>Είναι χρήσιμο όταν κάποιος θέλει να διαμοιράσει π.χ. μια εικόνα ή ένα Word αρχείο.</p>

<p> Αυτό το αρχείο μπορεί να είναι οποιαδήποτε τύπου, αλλά προτείνεται η κατάληξη να ακολουθεί διαδικτυακά πρότυπα π.χ. .jpg ή .doc που μπορούν να προβληθούν από εξερευνητές ιστού.</p>

<p>Εάν γίνει επεξεργασία εκ νέου μιας εγγραφής και επισύναψη ενός νέου αρχείου, τότε τα παλιά αρχεία αντικαθίστανται.</p>

<p> Εάν γίνει επεξεργασία εκ νέου ενός επισυναπτομένου αρχείου και μείνει κενό, τότε το αυθεντικό αρχείο παραμένει.</p>';
$string['author'] = 'συγγραφέας';
$string['authorview'] = 'Προβολή ανά συγγραφέα';
$string['back'] = 'Πίσω';
$string['cantinsertcat'] = 'Δεν είναι δυνατή η εισαγωγή κατηγορίας';
$string['cantinsertrec'] = 'Δεν είναι δυνατή η εισαγωγή εγγραφής';
$string['cantinsertrel'] = 'Δεν είναι δυνατή η εισαγωγή σχέσης κατηγορίας-εγγραφής';
$string['casesensitive'] = 'Αυτή η εγγραφή είναι ευαίσθητη σε μικρά/κεφαλαία';
$string['casesensitive_help'] = '<p align="center"><b>Ευαισθησία κατά το ταίριασμα χαρακτήρων</b></p>

<p>Καθορίζει εάν το ακριβές ταίριασμα κεφαλαίων η μικρών χαρακτήρων είναι απαραίτητο όταν πραγματοποιείται αυτόματη διασύνδεση στις εγγραφές αυτές.

<p>Για παράδειγμα, όταν ενεργοποιείται, η λέξη &quot;html&quot; δεν θα συνδεθεί με την εγγραφή &quot;HTML&quot; του λεξιλογίου.</p>';
$string['cat'] = 'κατηγορία';
$string['categories'] = 'Κατηγορίες';
$string['category'] = 'Κατηγορία';
$string['categorydeleted'] = 'Διαγράφηκε η κατηγορία';
$string['categoryview'] = 'Προβολή ανά κατηγορία';
$string['changeto'] = 'αλλαγή σε {$a}';
$string['cnfallowcomments'] = 'Ορίστε εάν ένα λεξικό θα δέχεται σχόλια στις εγγραφές εξ ορισμού';
$string['cnfallowdupentries'] = 'Ορίστε εάν ένα λεξικό θα επιτρέπει τις διπλές εγγραφές εξ ορισμού';
$string['cnfapprovalstatus'] = 'Ορίστε την εξ ορισμού κατάσταση αποδοχής μιας εγγραφής που αναρτήθηκε από φοιτητή';
$string['cnfcasesensitive'] = 'Ορίστε εάν μια εγγραφή, όταν είναι σύνδεσμος, είναι ευαίσθητη σε μικρά/κεφαλαία εξ ορισμού';
$string['cnfdefaulthook'] = 'Επιλέξτε την προκαθορισμένη επιλογή για προβολή όταν εμφανίζεται το λεξικό για πρώτη φορά';
$string['cnfdefaultmode'] = 'Επιλέξτε το προκαθορισμένο πλαίσιο για προβολή όταν εμφανίζεται το λεξικό για πρώτη φορά';
$string['cnffullmatch'] = 'Ορίστε εάν μια εγγραφή, όταν είναι σύνδεσμος, θα πρέπει να ταιριάζει τα πεζά-κεφαλαίο του κειμένου προορισμού εξ ορισμού';
$string['cnflinkentry'] = 'Ορίστε εάν μια εγγραφή θα πρέπει να είναι αυτόματα σύνδεσμος εξ ορισμού';
$string['cnflinkglossaries'] = 'Ορίστε εάν ένα λεξικό θα πρέπει να είναι αυτόματα σύνδεσμος εξ ορισμού';
$string['cnfrelatedview'] = 'Επιλέξτε τη μορφή εμφάνισης που θα χρησιμοποιείται για αυτόματο σύνδεσμο και προβολή εγγραφής.';
$string['cnfshowgroup'] = 'Προσδιορίστε εάν θα εμφανίζεται ο διαχωριστής της ομάδας.';
$string['cnfsortkey'] = 'Επιλέξτε το προκαθορισμένο πλήκτρο ταξινόμησης.';
$string['cnfsortorder'] = 'Επιλέξτε την προκαθορισμένη σειρά ταξινόμησης.';
$string['cnfstudentcanpost'] = 'Ορίστε εάν οι φοιτητές μπορούν ή όχι να αναρτήσουν εγγραφές εξ ορισμού';
$string['comment'] = 'Σχόλιο';
$string['commentdeleted'] = 'Το σχόλιο διαγράφηκε.';
$string['comments'] = 'Σχόλια';
$string['commentson'] = 'Σχόλια για';
$string['commentupdated'] = 'Το σχόλιο ενημερώθηκε.';
$string['concept'] = 'Έννοια';
$string['concepts'] = 'Έννοιες';
$string['configenablerssfeeds'] = 'Αυτή η ρύθμιση ενεργοποιεί τη δυνατότητα τροφοδοτήσεων RSS για όλα τα λεξικά. Εξακολουθεί να απαιτείται η ενεργοποίηση των τροφοδοτήσεων στις ρυθμίσεις κάθε λεξικού ξεχωριστά.';
$string['current'] = 'Ταξινομημένα προς το παρόν {$a}';
$string['currentglossary'] = 'Τρέχον λεξικό';
$string['date'] = 'ημερομηνία';
$string['dateview'] = 'Προβολή ανα ημερομηνία';
$string['defaultapproval'] = 'Αποδοχή εξ ορισμού';
$string['defaultapproval_help'] = '<p align="center"><strong>Εγκεκριμένο εξ ορισμού</strong></p>

<p align="center"><br />
  Αυτή η ρύθμιση επιτρέπει στον καθηγητή να καθορίσει τι θα ισχύει στις νέες
  καταχωρήσεις που προστίθενται από τους σπουδαστές. Μπορούν να τεθούν αυτόματα
  στην διάθεση του καθενός, διαφορετικά ο δάσκαλος θα πρέπει να τις εγκρίνει μία
  μία.</p>';
$string['defaulthook'] = 'Προεπιλεγμένο άγκιστρο';
$string['defaultmode'] = 'Προεπιλεγμένη κατάσταση';
$string['defaultsortkey'] = 'Προεπιλεγμένο κλειδί ταξινόμησης';
$string['defaultsortorder'] = 'Προεπιλεγμένη σειρά ταξινόμησης';
$string['definition'] = 'Ορισμός';
$string['definitions'] = 'Ορισμοί';
$string['deleteentry'] = 'Διαγραφή εγγραφής';
$string['deletenotenrolled'] = 'Διαγραφή των καταχωρήσεων από χρήστες που δεν έχουν εγγραφεί στο μάθημα';
$string['deletingcomment'] = 'Διαγραφή σχολίου';
$string['deletingnoneemptycategory'] = 'Διαγράφοντας αυτήν την κατηγορία δεν θα διαγραφούν οι εγγραφές που περιέχει- θα χαρακτηριστούν ως μη κατηγοριοποιημένες.';
$string['descending'] = '(φθίνουσα)';
$string['destination'] = 'Προορισμός';
$string['destination_help'] = '<p align="center"><strong>Καθορισμός του προορισμού των εισαγομένων καταχωρήσεων</strong></p>

<p align="center"><br />
  Μπορείτε να καθορίσετε που θέλετε να γίνει η εισαγωγή των δικών σας
  καταχωρήσεων:</p>
<ul type="disc">
  <li><strong>Τρέχον λεξιλόγιο:</strong> Θα επισυνάψει τις εισαγόμενες
    καταχωρήσεις στο τρέχον χρησιμοποιούμενο λεξιλόγιο. </li>
  <li><strong>Νέο λεξιλόγιο:</strong> Θα δημιουργήσει ένα καινούργιο λεξιλόγιο
    βασισμένο στις πληροφορίες που θα βρει στο φάκελο εισαγωγής και θα εισαγάγει
    τις καινούριες καταχωρήσεις σε αυτόν. </li>
</ul>';
$string['displayformat'] = 'Μορφή προβολής';
$string['displayformatcontinuous'] = 'Συνεχής χωρίς συγγραφέα';
$string['displayformatdictionary'] = 'Απλό, στυλ λεξικού';
$string['displayformatencyclopedia'] = 'Εγκυκλοπαίδεια';
$string['displayformatentrylist'] = 'Λίστα εγγραφών';
$string['displayformatfaq'] = 'Συχνές Ερωτήσεις';
$string['displayformatfullwithauthor'] = 'Πλήρης με συγγραφέα';
$string['displayformatfullwithoutauthor'] = 'Πλήρης χωρίς συγγραφέα';
$string['displayformat_help'] = '<p align="center"><strong>Διάταξη Εμφάνισης</strong></p>

<p align="left"><br />
  Αυτή η ρύθμιση καθορίζει τον τρόπο με τον οποίο θα εμφανίζονται τα στοιχεία που
  περνάμε μέσα στο λεξιλόγιο. Οι προεπιλεγμένες διατάξεις&nbsp; είναι:<br />
  <strong>Απλό λεξικό</strong>: <br />
  μοιάζει με ένα συμβατικό λεξικό με κάθε λήμμα χωριστά. Δεν εμφανίζεται το όνομα
  κανενός συντάκτη και οι επισυνάψεις παρουσιάζονται ως συνδέσεις. <br />
  <strong>Συνεχής</strong>: <br />
  παρουσιάζει τις καταχωρήσεις τη μία μετά την άλλη, χωρίς κανένα είδος
  διαχωρισμού μεταξύ τους, παρά μόνο τα εικονίδια τροποποίησης. <br />
  <strong>Ολόκληρο μαζί με το Συντάκτη</strong>: <br />
  Μία εμφάνιση σε στυλ φόρουμ που παρουσιάζει τα στοιχεία του συντάκτη. Οι
  επισυνάψεις παρουσιάζονται ως συνδέσεις. <br />
  <strong>Ολόκληρο χωρίς το συντάκτη</strong>: <br />
  Μία εμφάνιση σε στυλ φόρουμ που δεν παρουσιάζει τα στοιχεία του συντάκτη. Οι
  επισυνάψεις παρουσιάζονται ως συνδέσεις. <br />
  <strong>Εγκυκλοπαίδεια</strong>: <br />
  Όπως &quot;<strong>Ολόκληρο μαζί με το Συντάκτη</strong>&quot; αλλά τις συνημμένες εικόνες
  τις παρουσιάζει στην ίδια σειρά. <br />
  <strong>FAQ (συνηθέστερες απορίες)</strong>: <br />
  Χρήσιμος για την εμφάνιση κατηγοριών FAQ &quot;συνηθέστερων αποριών - ερωτήσεων&quot;. Επισυνάπτει αυτόματα τις
  λέξεις ΕΡΩΤΗΣΗ και ΑΠΑΝΤΗΣΗ στο θέμα και στην εξήγηση αντίστοιχα. </p>
<p>Οι διαχειριστές του Moodle μπορούν να δημιουργήσουν νέες διατάξεις εμφάνισης
  ακολουθώντας τις οδηγίες που θα βρουν στο αρχείο <strong>mod/</strong><strong>glossary/</strong><strong>formats/</strong><strong>README.</strong><strong>txt</strong>.</p>';
$string['displayformats'] = 'Μορφές προβολής';
$string['displayformatssetup'] = 'Ρύθμιση Μορφών προβολής';
$string['duplicateentry'] = 'Διπλή εγγραφή';
$string['editalways'] = 'Πάντα επεξεργασία';
$string['editalways_help'] = '<p align="center"><strong>Τροποποίηση πάντα</strong></p>

<p align="center">Αυτή η επιλογή σας επιτρέπει να αποφασίσετε εάν οι σπουδαστές μπορούν να
  τροποποιήσουν τις καταχωρήσεις τους οποιαδήποτε στιγμή.</p>
<p align="left">Μπορείτε να επιλέξετε:</p>
<ul type="disc">
  <li><strong>Ναι:</strong> Οι καταχωρήσεις μπορούν πάντα να τροποποιηθούν. </li>
  <li><strong>Όχι:</strong> Οι καταχωρήσεις μπορούν να τροποποιηθούν μέσα σε
    κάποιο καθορισμένο χρονικό διάστημα. </li>
</ul>';
$string['editcategories'] = 'Επεξεργασία κατηγοριών';
$string['editentry'] = 'Επεξεργασία εγγραφών';
$string['editingcomment'] = 'Επεξεργασία σχολίου';
$string['entbypage'] = 'Εγγραφές ανά σελίδα';
$string['entries'] = 'Εγγραφές';
$string['entrieswithoutcategory'] = 'Εγγραφές χωρίς κατηγορία';
$string['entry'] = 'Εγγραφή';
$string['entryalreadyexist'] = 'Εγγραφή υπάρχει ήδη';
$string['entryapproved'] = 'Αυτή η εγγραφή έχει εγκριθεί';
$string['entrydeleted'] = 'Εγγραφή διαγράφηκε';
$string['entryexported'] = 'Εγγραφή εξάχθηκε επιτυχώς';
$string['entryishidden'] = '(αυτή η εγγραφή είναι προς το παρόν κρυμμένη)';
$string['entryleveldefaultsettings'] = 'Προκαθορισμένες Ρυθμίσεις Επιπέδου Εγγραφής';
$string['entrysaved'] = 'Αυτή η εγγραφή αποθηκεύτηκε';
$string['entryupdated'] = 'Αυτή η εγγραφή ενημερώθηκε';
$string['entryusedynalink'] = 'Αυτή η εγγραφή θα πρέπει να γίνει αυτόματα σύνδεσμος';
$string['errcannoteditothers'] = 'Δεν μπορείτε να επεξεργαστείτε τις καταχωρήσεις άλλων χρηστών.';
$string['errconceptalreadyexists'] = 'Αυτή η έννοια υπάρχει ήδη. Δεν επιτρέπονται διπλότυπα σε αυτό το λεξικό.';
$string['errdeltimeexpired'] = 'Δεν μπορείτε να το διαγράψετε αυτό. Ο χρόνος έληξε!';
$string['erredittimeexpired'] = 'Ο χρόνος επεξεργασίας αυτής της καταχώρησης έληξε.';
$string['errorparsingxml'] = 'Συνέβησαν σφάλματα κατά την ανάλυση αυτού του αρχείου. Σιγουρευτείτε οτι η σύνταξη του είναι έγκυρη XML.';
$string['explainaddentry'] = 'Προσθέστε μια νέα εγγραφή στο τρέχον λεξικό.<br /> Η έννοια και ο ορισμός είναι υποχρεωτικά πεδία.';
$string['explainall'] = 'Εμφανίζει όλες τις εγγραφές σε μια σελίδα';
$string['explainalphabet'] = 'Προβολή του λεξικού χρησιμοποιώντας αυτό το ευρετήριο';
$string['explainexport'] = 'Πατήστε το κουμπί παρακάτω για τα εξάγετε τις εγγραφές λεξιλογίου.<br /> Μπορείτε να το εισάγετε όποτε θελήσετε σε αυτό ή σε άλλο μάθημα.<p> Παρακαλώ σημειώστε πως τα επισυναπτόμενα (π.χ. εικόνες) και οι συγγραφείς δεν εξάγονται. </p>';
$string['explainimport'] = 'Πρέπει να προσδιορίσετε το αρχείο εισαγωγής και να ορίσετε τα κριτήρια της διαδικασίας.<p> Υποβάλετε το αίτημά σας και δείτε τα αποτελέσματα. </p>';
$string['explainspecial'] = 'Εμφάνιση εγγραφών που δεν ξεκινάνε με γράμμα';
$string['exportedentry'] = 'Εξαγόμενη εγγραφή';
$string['exportentries'] = 'Εξαγωγή εγγραφών';
$string['exportentriestoxml'] = 'Εξαγωγή καταχωρήσεων σε αρχείο XML';
$string['exportfile'] = 'Εξαγωγή εγγραφών σε αυτό το αρχείο';
$string['exportglossary'] = 'Εξαγωγή λεξικού';
$string['exporttomainglossary'] = 'Εξαγωγή στο κύριο λεξικό';
$string['filetoimport'] = 'Αρχείο για εισαγωγή';
$string['filetoimport_help'] = '<p align="center"><b>Αρχείο για εισαγωγή</b></p>

<p>Επιλογή του XML αρχείου που περιέχει τα στοιχειά για εισαγωγή.</p>';
$string['fillfields'] = 'Η έννοια και ο ορισμός είναι υποχρεωτικά πεδία.';
$string['filtername'] = 'Αυτόματοι σύνδεσμοι για το λεξικό';
$string['fullmatch'] = 'Ταίριασμα ολόκληρων λέξεων μόνο';
$string['fullmatch_help'] = '<p align="center"><b>Ταύτιση / σύνδεση ολόκληρων λέξεων</b></p>

<p>Αν η αυτόματη ταύτιση/σύνδεση είναι ενεργοποιημένη, με την εφαρμογή της ρύθμισης θα ταυτίζονται/συνδέονται μόνο ολόκληρες λέξεις.
</p>

<p>Για παράδειγμα, αν εισάγουμε τη λέξη &quot;και&quot;, δεν πρόκειται να γίνει σύνδεση με τη λέξη &quot;καιρός&quot;, παρά το γεγονός ότι το &quot;και&quot; εμπεριέχεται στο &quot;καιρός&quot;.</p>';
$string['glossary:approve'] = 'Αποδοχή μη εγκεκριμένων εγγραφών';
$string['glossary:comment'] = 'Δημιουργία σχολίων';
$string['glossary:export'] = 'Εξαγωγή εγγραφών';
$string['glossary:exportentry'] = 'Εξαγωγή μονής καταχώρησης';
$string['glossary:exportownentry'] = 'Εξαγωγή μια μονής καταχώρησης σας';
$string['glossary:import'] = 'Εισαγωγή εγγραφών';
$string['glossaryleveldefaultsettings'] = 'Προκαθορισμένες Ρυθμίσεις Επιπέδου Λεξικού';
$string['glossary:managecategories'] = 'Διαχείριση κατηγοριών';
$string['glossary:managecomments'] = 'Διαχείριση σχολίων';
$string['glossary:manageentries'] = 'Διαχείριση εγγραφών';
$string['glossary:rate'] = 'Βαθμολόγιση εγγραφών';
$string['glossarytype'] = 'Τύπος λεξικού';
$string['glossarytype_help'] = '<p align="center"><strong>Καθορισμός του κύριου λεξιλογίου του Μαθήματος.</strong></p>
<p align="left">Το σύστημα του λεξιλογίου σας επιτρέπει να εξαγάγετε   καταχωρήσεις από οποιοδήποτε δευτερεύον λεξιλόγιο στο κυρίως λεξιλόγιο του   μαθήματος.</p>
<p align="left">Προκειμένου να γίνει αυτό, πρέπει να διευκρινίσετε ποιο   λεξιλόγιο είναι το κύριο.</p>
<p align="left"><em>Σημείωση: </em>Μπορείτε να έχετε μόνο ένα κύριο λεξικό ανά   μάθημα και μόνο οι διδάσκοντες έχουν την δυνατότητα να το ενημερώσουν.</p>';
$string['glossary:view'] = 'Προβολή λεξικού';
$string['glossary:viewallratings'] = 'Εμφάνιση όλων των πρώτων αξιολογήσεων που δόθηκαν ατομικά';
$string['glossary:viewanyrating'] = 'Εμφάνιση όλων των συνολικών αξιολογήσεων που έλαβε κάποιος';
$string['glossary:viewrating'] = 'Προβολή βαθμολογιών';
$string['glossary:write'] = 'Δημιουργία νέων εγγραφών';
$string['guestnoedit'] = 'Οι επισκέπτες δεν επιτρέπεται να επεξεργάζονται λεξικά';
$string['importcategories'] = 'Εισαγωγή κατηγοριών';
$string['importedcategories'] = 'Εισαγόμενες κατηγορίες';
$string['importedentries'] = 'Εισαγόμενες εγγραφές';
$string['importentries'] = 'Εισαγωγή εγγραφών';
$string['importentriesfromxml'] = 'Εισαγωγή καταχωρλησεων από αρχείο XML';
$string['includegroupbreaks'] = 'Περιλαμβάνονται οι διαχωριστές ομάδων';
$string['isglobal'] = 'Είναι αυτό το λεξικό παγκόσμιο;';
$string['isglobal_help'] = '<p align="center"><b>Ορισμός γενικού λεξιλογίου όρων</b></p>

<p>Οι Γενικοί Διαχειριστές (administrators) μπορούν να ορίσουν ένα λεξιλόγιο όρων ως γενικό.</p>

<p>Τέτοια λεξιλόγια όρων μπορούν να βρίσκονται σε κάθε τμήμα κάθε ενότητας ενός μαθήματος, ιδιαίτερα όμως στην πρώτη σελίδα του μαθήματος.</p>

<p>Τα γενικά λεξιλόγια όρων διαφοροποιούνται από τα επιμέρους λεξιλόγια όρων στο ότι τα λήμματά τους
συνδέονται αυτόματα όχι μόνο εντός του εκάστοτε μαθήματος αλλά σε όλο τον διαδικτυακό τόπο.</p>';
$string['letter'] = 'γράμμα';
$string['linkcategory'] = 'Αυτόματοι σύνδεσμοι για αυτή την κατηγορία';
$string['linkcategory_help'] = '<p align="center"><strong>Αυτόματη σύνδεση κατηγοριών.</strong></p>

<p align="left">Μπορείτε να ορίσετε εάν θέλετε τις κατηγορίες να συνδέονται   μεταξύ τους αυτόματα ή όχι.</p>
<p align="left"><em>Σημείωση:</em> Οι κατηγορίες συνδέονται βασιζόμενες σε   αντιστοιχία ολόκληρης της λέξης και σε αντιστοιχία κεφαλαίων-μικρών.</p>';
$string['linking'] = 'Αυτόματοι σύνδεσμοι';
$string['mainglossary'] = 'Κύριο λεξικό';
$string['maxtimehaspassed'] = 'Συγνώμη, αλλά ο μέγιστος χρόνος για την επεξεργασία αυτού του σχολίου ({$a}) έχει περάσει!';
$string['modulename'] = 'Λεξικό';
$string['modulenameplural'] = 'Λεξικά';
$string['newentries'] = 'Νέες εγγραφές λεξικού';
$string['newglossary'] = 'Νέο λεξικό';
$string['newglossarycreated'] = 'Νέο λεξικό δημιουργήθηκε.';
$string['newglossaryentries'] = 'Νέες εγγραφές λεξικού:';
$string['nocomment'] = 'Δε βρέθηκε σχόλιο';
$string['nocomments'] = '(Δε βρέθηκαν σχόλια για αυτή την εγγραφή)';
$string['noconceptfound'] = 'Δε βρέθηκε έννοια ή ορισμός.';
$string['noentries'] = 'Δε βρέθηκαν εγγραφές σε αυτό το τμήμα';
$string['noentry'] = 'Δε βρέθηκε εγγραφή.';
$string['nopermissiontodelcomment'] = 'Δεν μπορείτε να επεξεργαστείτε τα σχόλια άλλων χρηστών!';
$string['nopermissiontodelinglossary'] = 'Δεν μπορείτε να σχολιάσετε σε αυτό το λεξικό!';
$string['nopermissiontoviewresult'] = 'Μπορείτε μόνο να δείτε τα αποτελέσματα για τις δικές σας καταχωρήσεις';
$string['notcategorised'] = 'Μη κατηγοριοποιημένο';
$string['numberofentries'] = 'Πλήθος εγγραφών';
$string['onebyline'] = '(μια ανα γραμμή)';
$string['pluginname'] = 'Λεξικό';
$string['popupformat'] = 'Μορφή αναδυόμενου';
$string['printerfriendly'] = 'Έκδοση φιλική για τον εκτυπωτή';
$string['printviewnotallowed'] = 'Η προβολή εκτύπωσης δεν επιτρέπεται';
$string['question'] = 'Ερώτηση';
$string['rejectedentries'] = 'Εγγραφές που απορρίφθηκαν';
$string['rejectionrpt'] = 'Αναφορά απορρίψεων';
$string['resetglossaries'] = 'Διαγραφή καταχωρήσεων από';
$string['resetglossariesall'] = 'Διαγραφή καταχωρήσεων από όλα τα λεξικά';
$string['rssarticles_help'] = '<p align="center"><b>Αριθμός των RSS πρόσφατων άρθρων</b></p>

<p>Αυτή η επιλογή σας επιτρέπει να επιλέξετε τον αριθμό των άρθρων που θα περιλαμβάνονται σε μια τροφοδοσία RSS ειδήσεων.</p>

<p>Ένας αριθμός μεταξύ του 5 και 20 θα ήταν λογικός για τα περισσότερα γλωσσάρια Αυξήστε τον αριθμό όταν το γλωσσάρι ανανεώνεται συχνά.</p>';
$string['rsssubscriberss'] = 'Εμφανίστε τη τρόφοδότηση RSS για \'{$a}\' έννοιες';
$string['rsstype_help'] = '<p align="center"><b>RSS Τροφοδοσία για αύτό το γλοσσάρι</b></p>

<p>Αυτή η επιλογή σας επιτρέπει να ενεργοποιείτε την τροφοδοσία  RSS από αυτό το γλωσσάρι.</p>

<p>Μπορείτε να επιλέξετε ανάμεσα σε 2 τύπους τροφοδίας:</p>

<ul>
<li><b>Με συγγραφέα:</b> Η τροφοδοσία του κάθε ένα άρθρου θα περιλαμβάνει και το όνομα του στγγραφέα σε κάθε καταχώρηση.</li>

<li><b>Χωρίς συγγραφέα:</b> Η τροφοδοσία του κάθε ένα άρθρου δε θα περιλαμβάνει και το όνομα του στγγραφέα σε κάθε καταχώρηση.</li>
</ul>';
$string['searchindefinition'] = 'Αναζήτηση πλήρους κειμένου';
$string['secondaryglossary'] = 'Δευτερεύον λεξικό';
$string['showall'] = 'Εμφάνιση συνδέσμου \'ΌΛΑ\'';
$string['showall_help'] = '<p align="center"><b>Επιλογές στην προβολή του Αλφάβητου</b></p>

<p>Μπορείτε να προσαρμόσετε τον τρόοπο που ένας χρήστης μπορεί να χρησιμοποιήσει ένα γλωσσάρι. πλοήγηση και αναζήτηση είναι πάντα διαθέσιμα αλλά μπορείτε να ορίσετε 3 ακόμη επιλογές:</p>

<p><b>SHOW SPECIAL</b> Ενεργοποιήστε η απενεργοποιήστε την πλοήγηση ειδικών χαρακτήρων όπως @, #, etc.</p>

<p><b>SHOW ALPHABET</b> Ενεργοποιήστε η απενεργοποιήστε την πλοήγηση γραμμάτων του αλφάβητου.</p>

<p><b>SHOW ALL</b> Ενεργοποιήστε η απενεργοποιήστε την πλοήγηση όλων των καταχωρήσεων.</p>';
$string['showalphabet'] = 'Εμφάνιση αλφάβητου';
$string['showalphabet_help'] = '<p align="center"><b>Επιλογές στην προβολή του Αλφάβητου</b></p>

<p>Μπορείτε να προσαρμόσετε τον τρόοπο που ένας χρήστης μπορεί να χρησιμοποιήσει ένα γλωσσάρι. πλοήγηση και αναζήτηση είναι πάντα διαθέσιμα αλλά μπορείτε να ορίσετε 3 ακόμη επιλογές:</p>

<p><b>SHOW SPECIAL</b> Ενεργοποιήστε η απενεργοποιήστε την πλοήγηση ειδικών χαρακτήρων όπως @, #, etc.</p>

<p><b>SHOW ALPHABET</b> Ενεργοποιήστε η απενεργοποιήστε την πλοήγηση γραμμάτων του αλφάβητου.</p>

<p><b>SHOW ALL</b> Ενεργοποιήστε η απενεργοποιήστε την πλοήγηση όλων των καταχωρήσεων.</p>';
$string['showspecial'] = 'Εμφάνιση συνδέσμου \'Ειδικά\'';
$string['showspecial_help'] = '<p align="center"><b>Επιλογές στην προβολή του Αλφάβητου</b></p>

<p>Μπορείτε να προσαρμόσετε τον τρόοπο που ένας χρήστης μπορεί να χρησιμοποιήσει ένα γλωσσάρι. πλοήγηση και αναζήτηση είναι πάντα διαθέσιμα αλλά μπορείτε να ορίσετε 3 ακόμη επιλογές:</p>

<p><b>SHOW SPECIAL</b> Ενεργοποιήστε η απενεργοποιήστε την πλοήγηση ειδικών χαρακτήρων όπως @, #, etc.</p>

<p><b>SHOW ALPHABET</b> Ενεργοποιήστε η απενεργοποιήστε την πλοήγηση γραμμάτων του αλφάβητου.</p>

<p><b>SHOW ALL</b> Ενεργοποιήστε η απενεργοποιήστε την πλοήγηση όλων των καταχωρήσεων.</p>';
$string['sortby'] = 'Ταξινόμηση κατά';
$string['sortbycreation'] = 'Κατά ημερομηνία δημιουργίας';
$string['sortbylastupdate'] = 'Κατά τελευταία ενημέρωση';
$string['sortchronogically'] = 'Ταξινόμηση χρονολογικά';
$string['special'] = 'Ειδικά';
$string['standardview'] = 'Προβολή ανά αλφάβητο';
$string['studentcanpost'] = 'Οι φοιτητές μπορούν να προσθέσουν εγγραφές';
$string['totalentries'] = 'Συνολικές εγγραφές';
$string['usedynalink'] = 'Αυτόματη σύνδεση εγγραφών λεξικού';
$string['usedynalink_help'] = 'Αν η αυτόματη σύνδεση εγγραφών λεξικού είναι ενεργοποιημένη από τον διαχειριστή και αυτή η ρύθμιση έιναι ενεργοποιημένη, η φόρμα "Πρόσθεσε μια νέα εγγραφή" περιλαμβάνει την επιλογή να συνδέονται αυτόματα οπουδήποτε εμφανίζονται οι λέξεις και οι φράσεις σε ολόκληρο το μάθημα.';
$string['waitingapproval'] = 'Αναμονή αποδοχής';
$string['warningstudentcapost'] = '(Ισχύει μόνο εάν το λεξικό δεν είναι το κύριο)';
$string['withauthor'] = 'Έννοιες με συγγραφέα';
$string['withoutauthor'] = 'Έννοιες χωρίς συγγραφέα';
$string['writtenby'] = 'από';
$string['youarenottheauthor'] = 'Δεν είσαστε ο συγγραφέας αυτού του σχολίου, άρα δε σας επιτρέπεται η επεξεργασία του.';
