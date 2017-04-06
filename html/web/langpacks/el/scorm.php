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
 * Strings for component 'scorm', language 'el', branch 'MOODLE_31_STABLE'
 *
 * @package   scorm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Ενεργοποίηση';
$string['activityloading'] = 'Θα μεταφερθείτε αυτόματα στη δραστηριότητα σε';
$string['activityoverview'] = 'Υπάρχουν SCORM πακέτα που χρήζουν παρακολούθησης';
$string['activitypleasewait'] = 'Η δραστηριότητα φορτώνει, παρακαλώ περιμένετε...';
$string['adminsettings'] = 'Ρυθμίσεις διαχειριστή';
$string['advanced'] = 'Παράμετροι';
$string['aicchacpkeepsessiondata'] = 'Δεδομένα συνεδρίας AICC HACP';
$string['aicchacpkeepsessiondata_desc'] = 'Χρονικό διάστημα σε ημέρες για τη διατήρηση εξωτερικών δεδομένων συνεδρίας AICC HACP (υψηλή ρύθμιση θα γεμίσει τον πίνακα με παλιά δεδομένα, αλλά μπορεί να είναι χρήσιμο κατά την αποσφαλμάτωση)';
$string['aicchacptimeout'] = 'Τέλος χρόνου AICC HACP';
$string['aicchacptimeout_desc'] = 'Χρονικό διάστημα σε λεπτά όπου μια εξωτερική συνεδρία AICC HACP μπορεί να παραμείνει ανοιχτή';
$string['aiccuserid'] = 'Μεταβίβαση αριθμητικού αναγνωριστικού χρήστη στο AICC';
$string['aiccuserid_desc'] = 'Το πρότυπο AICC για τα ονόματα χρήστη είναι πολύ περιοριστικό σε σχέση με το Moodle, και επιτρέπει μόνο αλφαριθμητικούς χαρακτήρες, παύλα και κάτω παύλα. Τελείες, κενά και το σύμβολο @ δεν επιτρέπονται. Αν ενεργοποιηθεί, μεταβιβάζονται τα αριθμητικά αναγνωριστικά χρήστη στο πακέτο AICC αντί για ονόματα χρήστη.';
$string['aliasonly'] = 'Όταν επιλέγετε ένα αρχείο imsmanifest.xml από ένα αποθετήριο θα πρέπει να χρησιμοποιήσετε ένα ψευδώνυμο / συντόμευση για αυτό το αρχείο.';
$string['allowapidebug'] = 'Ενεργοποίηση API αποσφαλμάτωσης και παρακολούθησης (καθορίστε τη μάσκα καταγραφής με το apidebugmask)';
$string['allowtypeaicchacp'] = 'Ενεργοποίηση εξωτερικού AICC HACP';
$string['allowtypeaicchacp_desc'] = 'Αν ενεργοποιηθεί επιτρέπει την εξωτερική επικοινωνία AICC HACP χωρίς να απαιτείται σύνδεση του χρήστη για την αποστολή αιτημάτων από το εξωτερικό πακέτο AICC';
$string['allowtypeexternal'] = 'Να επιτρέπονται τα πακέτα εξωτερικού τύπου';
$string['allowtypeexternalaicc'] = 'Ενεργοποίηση απευθείας URL AICC';
$string['allowtypeexternalaicc_desc'] = 'Αν ενεργοποιηθεί επιτρέπει τη χρήση απευθείας URL σε ένα απλό πακέτο AICC';
$string['allowtypelocalsync'] = 'Να επιτρέπονται τα κατεβασμένα πακέτα';
$string['apidebugmask'] = 'Μάσκα καταγραφής API αποσφαλμάτωσης (regex στα πεδία &lt;username&gt;:&lt;activityname&gt;)';
$string['areacontent'] = 'Αρχεία περιεχομένου';
$string['areapackage'] = 'Αρχείο πακέτου';
$string['asset'] = 'Στοιχείο';
$string['assetlaunched'] = 'Στοιχείο - Προβλήθηκε';
$string['attempt'] = 'Προσπάθεια';
$string['attempt1'] = '1 προσπάθεια';
$string['attempts'] = 'Προσπάθειες';
$string['attemptsmanagement'] = 'Διαχείριση προσπαθειών';
$string['attemptstatusall'] = 'Η αρχική μου και σελίδα εισόδου';
$string['attemptstatusentry'] = 'Μόνο σελίδα εισόδου';
$string['attemptstatusmy'] = 'Μόνο σελίδα Η αρχική μου';
$string['attemptsx'] = '{$a} προσπάθειες';
$string['attr_error'] = 'Εσφαλμένη τιμή για την ιδιότητα {$a->attr} στην ετικέτα {$a->tag}.';
$string['autocommit'] = 'Αυτόματη δέσμευση';
$string['autocommitdesc'] = 'Αυτόματη αποθήκευση των δεδομένων SCORM αν το πακέτο SCORM δεν τα αποθηκεύει.';
$string['autocommit_help'] = 'Αν ενεργοποιηθεί, τα δεδομένα SCORM θα αποθηκεύονται αυτόματα στη βάση δεδομένων. Χρήσιμο για αντικείμενα SCORM που δεν αποθηκεύουν τα δεδομένα τους σε τακτική βάση.';
$string['autocontinue'] = 'Αυτόματη συνέχιση';
$string['autocontinuedesc'] = 'Η ρύθμιση αυτή χρησιμοποιείται σαν εξ\' ορισμού τιμή για την αυτόματη συνέχιση στη δραστηριότητα';
$string['autocontinue_help'] = '<p><b>Αυτόματη-συνέχεια</b></p>

<p>Εάν ΝΑΙ, όταν ένα Γνωστικό Αντικείμενο καλέσει την μέθοδο &quot;κλειστή επικοινωνία&quot;,το επόμενο διαθέσιμο γνωστικό αντικείμενο ανοίγει.</p>

<p>Εάν ΟΧΙ, οι χρήστες πρέπει να πατήσουν το κουμπί "Συνέχεια".</p>';
$string['averageattempt'] = 'Μέσος όρος προσπαθειών';
$string['badarchive'] = 'Θα πρέπει να δώσετε ένα έγκυρο συμπιεσμένο αρχείο';
$string['badimsmanifestlocation'] = 'Βρέθηκε ένα αρχείο imsmanifest.xml, αλλά δεν ήταν στη ρίζα του συμπιεσμένου αρχείο, παρακαλούμε πακετάρετε ξανά το SCORM';
$string['badmanifest'] = 'Υπήρξαν σφάλματα: δείτε τα αρχεία καταγραφής σφαλμάτων';
$string['browse'] = 'Προεπισκόπιση';
$string['browsed'] = 'Προβλήθηκε';
$string['browsemode'] = 'Φάση Προεπισκόπισης';
$string['browserepository'] = 'Εξέταση αποθήκης';
$string['calculatedweight'] = 'Υπολογιζόμενο βάρος';
$string['cannotaccess'] = 'Δεν είναι δυνατή η κλήση του σεναρίου με αυτό τον τρόπο';
$string['cannotfindsco'] = 'Δεν ήταν δυνατό να βρεθεί το SCO';
$string['chooseapacket'] = 'Επιλογή ή ενημέρωση πακέτου';
$string['closebeforeopen'] = 'Έχετε δηλώσει ημερομηνία λήξη προγενέστερη της ημερομηνίας έναρξης';
$string['collapsetocwinsize'] = 'Σύμπτυξη πίνακα περιεχομένων όταν το μέγεθος του παραθύρου είναι κάτω από';
$string['collapsetocwinsizedesc'] = 'Αυτή η ρύθμιση σας επιτρέπει να καθορίσετε το μέγεθος του παραθύρου κάτω από το οποίο ο πίνακας περιεχομένων θα πρέπει να συμπτυχθεί αυτόματα.';
$string['compatibilitysettings'] = 'Ρυθμίσεις συμβατότητας';
$string['completed'] = 'Ολοκληρωμένο';
$string['completionscorerequired'] = 'Απαιτείται ελάχιστη βαθμολογία';
$string['completionscorerequired_help'] = 'Η ενεργοποίηση αυτής της ρύθμισης απαιτεί ο χρήστης να καλύπτει τουλάχιστον την ελάχιστη βαθμολογία προκειμένου να επισημανθεί ως ολοκληρωμένη η δραστηριότητα SCORM, καθώς και τις όποιες άλλες απαιτήσεις Ολοκλήρωσης Δραστηριότητας.';
$string['completionstatus_completed'] = 'Ολοκληρωμένο';
$string['completionstatus_passed'] = 'Πέρασε';
$string['completionstatusrequired'] = 'Απαιτείται κατάσταση';
$string['completionstatusrequired_help'] = 'Επιλέγοντας μια ή περισσότερες καταστάσεις ο χρήστης θα πρέπει να επιτύχει τουλάχιστον μια από τις επιλεγμένες καταστάσεις, προκειμένου να επισημανθεί ως ολοκληρωμένη η δραστηριότητα SCORM, καθώς και οι όποιες άλλες απαιτήσεις Ολοκλήρωσης Δραστηριότητας.';
$string['confirmloosetracks'] = 'ΠΡΟΣΟΧΗ: Το πακέτο έχει αλλαχθεί ή τροποποιηθεί. Αν η δομή του πακέτου έχει αλλάξει, κάποια στοιχεία χρηστών πιθανώς να χαθούν κατά τη διαδικασία ενημέρωσης.';
$string['contents'] = 'Περιεχόμενα';
$string['coursepacket'] = 'Πακέτο μαθήματος';
$string['coursestruct'] = 'Δομή μαθήματος';
$string['currentwindow'] = 'Τρέχον παράθυρο';
$string['datadir'] = 'Σφάλμα αρχείου συστήματος: Δεν δημιουργήθηκε φάκελος δεδομένων μαθήματος';
$string['defaultdisplaysettings'] = 'Προεπιλεγμένες ρυθμίσεις εμφάνισης';
$string['defaultgradesettings'] = 'Προεπιλεγμένες ρυθμίσεις βαθμολόγησης';
$string['defaultothersettings'] = 'Άλλες προεπιλεγμένες ρυθμίσεις';
$string['deleteallattempts'] = 'Διαγραφή όλων των προσπαθειών';
$string['deleteattemptcheck'] = 'Είστε απολύτως βέβαιοι ότι θέλετε να διαγράψετε εντελώς τις προσπάθειες;';
$string['deleteselected'] = 'Διαγραφή επιλεγμένων προσπαθειών';
$string['deleteuserattemptcheck'] = 'Είστε απολύτως βέβαιοι ότι θέλετε να διαγράψετε εντελώς όλες τις προσπάθειες;';
$string['details'] = 'Παρακολούθηση λεπτομερειών';
$string['directories'] = 'Εμφάνιση των συνδέσμων του φακέλου';
$string['disabled'] = 'Απενεργοποιημένο';
$string['display'] = 'Εμφάνιση πακέτου';
$string['displayactivityname'] = 'Εμφάνιση ονόματος δρστηριότητας';
$string['displayactivityname_help'] = 'Αν θα εμφανίζεται ή όχι το όνομα της δραστηριότητας πάνω από τον αναπαραγωγέα SCORM';
$string['displayattemptstatus'] = 'Εμφάνιση κατάστασης προσπαθειών';
$string['displayattemptstatusdesc'] = 'Η ρύθμιση αυτή χρησιμοποιείται σαν εξ\' ορισμού τιμή για την εμφάνιση κατάστασης προσπαθειών';
$string['displayattemptstatus_help'] = 'Αυτή η προτίμηση επιτρέπει την εμφάνιση μιας περίληψης των προσπαθειών των χρηστών στο μπλοκ επισκόπηση μαθημάτων στη σελίδα Η αρχική μου ή / και στη σελίδα εισόδου στο SCORM.';
$string['displaycoursestructure'] = 'Εμφάνιση δομής μαθήματος';
$string['displaycoursestructuredesc'] = 'Η ρύθμιση αυτή χρησιμοποιείται σαν εξ\' ορισμού τιμή για την προβολή δομής μαθήματος';
$string['displaycoursestructure_help'] = 'Αν ενεργοποιηθεί, ο πίνακας περιεχομένων εμφανίζεται στη σελίδα περιγράμματος του SCORM.';
$string['displaydesc'] = 'Η ρύθμιση αυτή χρησιμοποιείται σαν εξ\' ορισμού τιμή για την προβολή ή όχι του πακέτου για κάποια δραστηριότητα';
$string['displaysettings'] = 'Ρυθμίσεις εμφάνισης';
$string['dnduploadscorm'] = 'Προσθήκη πακέτου SCORM';
$string['domxml'] = 'Εξωτερική βιβλιοθήκη DOMXML';
$string['duedate'] = 'Ημερομηνία εκπνοής';
$string['element'] = 'Στοιχείο';
$string['enter'] = 'Είσοδος';
$string['entercourse'] = 'Εισαγωγή';
$string['errorlogs'] = 'Αρχείο καταγραφής σφαλμάτων';
$string['eventattemptdeleted'] = 'Η προσπάθεια διαγράφηκε';
$string['eventinteractionsviewed'] = 'Προβολή αλληλεπιδράσεων';
$string['eventreportviewed'] = 'Προβολή αναφοράς';
$string['eventscolaunched'] = 'Εκκίνηση sco';
$string['eventscorerawsubmitted'] = 'Υποβλήθηκε ανεπεξέργαστη βαθμολογία SCORM';
$string['eventstatussubmitted'] = 'Υποβλήθηκε κατάσταση SCORM';
$string['eventtracksviewed'] = 'Προβολή παρακολούθησης';
$string['eventuserreportviewed'] = 'Προβολή αναφοράς χρήστη';
$string['everyday'] = 'Κάθε μέρα';
$string['everytime'] = 'Κάθε φορά που χρησιμοποιείται';
$string['exceededmaxattempts'] = 'Έχετε φτάσει το όριο του επιτρεπόμενου αριθμού προσπαθειών.';
$string['exit'] = 'Έξοδος από το μάθημα';
$string['exitactivity'] = 'Έξοδος από τη δραστηριότητα';
$string['expired'] = 'Λυπάμαι, αλλά η δραστηριότητα αυτή έκλεισε στις {$a} και δεν είναι πλέον διαθέσιμη';
$string['external'] = 'Χρόνος ενημέρωσης εξωτερικών πακέτων';
$string['failed'] = 'Απέτυχε';
$string['finishscorm'] = 'Αν ολοκληρώσατε την παρακολούθηση του πόρου, {$a}';
$string['finishscormlinkname'] = 'πατήστε εδώ για επιστροφή στη σελίδα του μαθήματος';
$string['firstaccess'] = 'Πρώτη προσπέλαση';
$string['firstattempt'] = 'Πρώτη προσπάθεια';
$string['floating'] = 'Κινούμενο';
$string['forcecompleted'] = 'Επιβολή ολοκλήρωσης';
$string['forcecompleteddesc'] = 'Η ρύθμιση αυτή χρησιμοποιείται σαν εξ\' ορισμού τιμή για την επιβολή ολοκλήρωσης';
$string['forcecompleted_help'] = 'Αν ενεργοποιηθεί, η κατάσταση της τρέχουσας προσπάθειας θα οριστεί υποχρεωτικά ως "ολοκληρώθηκε". (Ισχύει μόνο για πακέτα SCORM 1.2.)';
$string['forcejavascript'] = 'Υποχρέωση χρηστών να ενεργοποιήσουν την JavaScript';
$string['forcejavascript_desc'] = 'Αν είναι ενεργοποιημένο (προτείνεται), εμποδίζει την πρόσβαση σε αντικείμενα SCORM όταν η JavaScript δεν υποστηρίζεται / είναι ενεργοποιημένη στο πρόγραμμα περιήγησης του χρήστη. Αν είναι απενεργοποιημένο ο χρήστης μπορεί να δει το SCORM αλλά η επικοινωνία API θα αποτύχει και δεν θα αποθηκευτούν πληροφορίες βαθμολόγησης.';
$string['forcejavascriptmessage'] = 'Απαιτείται JavaScript για να δείτε αυτό το αντικείμενο, παρακαλούμε ενεργοποιήσετε την JavaScript στο πρόγραμμα περιήγησης και δοκιμάστε ξανά.';
$string['forcenewattempt'] = 'Επιβολή νέας προσπάθειας';
$string['forcenewattemptdesc'] = 'Η ρύθμιση αυτή χρησιμοποιείται σαν εξ\' ορισμού τιμή για την επιβολή νέας προσπάθειας';
$string['forcenewattempt_help'] = 'Αυτή η ρύθμιση αποκρύπτει το πλαίσιο "Εκκίνηση νέας προσπάθειας" και εμποδίζει την ανασκόπηση.
<br/><br/>Το SCORM επιτρέπει σε ένα μαθητή να επιστρέψουν στην ίδια προσπάθεια οποιαδήποτε στιγμή και μια νέα προσπάθεια δεν είναι δυνατή, εκτός αν η προηγούμενη προσπάθεια έχει οριστεί ως "ολοκληρώθηκε", "πέρασε" ή "απέτυχε". Αν το πακέτο SCORM δεν το κάνει αυτό, ο μαθητής θα εισέρχεται πάντα στην ίδια προσπάθεια.';
$string['found'] = 'Βρέθηκε αρχείο καταγραφής';
$string['frameheight'] = 'Αυτή η επιλογή καθορίζει το προεπιλεγμένο ύψος του πλαισίου ή του παραθύρου';
$string['framewidth'] = 'Αυτή η επιλογή καθορίζει το προεπιλεγμένο πλάτος του πλαισίου ή του παραθύρου';
$string['fromleft'] = 'Από αριστερά';
$string['fromtop'] = 'Από επάνω';
$string['fullscreen'] = 'Γέμισμα όλης της οθόνης';
$string['general'] = 'Γενικά δεδομένα';
$string['gradeaverage'] = 'Μέσος βαθμός';
$string['gradeforattempt'] = 'Βαθμός προσπάθειας';
$string['gradehighest'] = 'Υψηλότερος βαθμός';
$string['grademethod'] = 'Μέθοδος βαθμολόγησης';
$string['grademethoddesc'] = 'Η ρύθμιση αυτή χρησιμοποιείται σαν εξ\' ορισμού τιμή για τη μέθοδο βαθμολόγησης';
$string['grademethod_help'] = '<p><b>Τρόποι Βαθμολόγησης</b></p>

<p>Τα αποτελέσματα μιας δράσης SCORM/AICC βαθμολογούνται με τους παρακάτω τρόπους:
    <ul>
    <li><b>Πλήθος αντικειμένων</b><br />Πρόκειται για αριθμό που δηλώνει σε πόσα αντικείμενα μιας εκπαιδευτικής δράσης έχει εξετασθεί με επιτυχία ο διδασκόμενος. Η μέγιστη τιμή του αριθμού αυτού είναι ο συνολικός αριθμός των διδαχθέντων αντικειμένων στα πλαίσια της δράσης.</li>
    <li><b>Υψηλότερη βαθμολογία</b><br />Εμφανίζεται η υψηλότερη βαθμολογία των διδασκομένων σε όλα τα εξετασθέντα διδακτικά αντικείμενα.</li>
    <li><b>Μέσος όρος</b><br /> Η επιλογή αυτού του τρόπου βαθμολόγησης υπολογίζει το μέσο όρο όλων των επιδόσεων.</li>
    <li><b>Συνολική βαθμολογία</b><br />’θροισμα όλων των επιμέρους επιδόσεων.</li>
</p>';
$string['gradereported'] = 'Βαθμολογία';
$string['gradescoes'] = 'Μαθησιακά αντικείμενα';
$string['gradesettings'] = 'Ρυθμίσεις βαθμολόγησης';
$string['gradesum'] = 'Άθροισμα βαθμού';
$string['height'] = 'Ύψος';
$string['hidden'] = 'Κρυμμένο';
$string['hidebrowse'] = 'Απενεργοποίηση προεπισκόπισης';
$string['hidebrowsedesc'] = 'Η ρύθμιση αυτή χρησιμοποιείται σαν εξ\' ορισμού τιμή για την απενεργοποίηση προεπισκόπισης';
$string['hidebrowse_help'] = 'Η προεπισκόπηση επιτρέπει στο μαθητή να πλοηγηθεί σε μια δραστηριότητα πρότου κάνει προσπάθεια. Αν η προεπισκόπηση είναι απενεργοποιημένη, το κουμπί προεπισκόπηση είναι κρυμμένο.';
$string['hideexit'] = 'Απόκρυψη συνδέσμου εξόδου';
$string['hidereview'] = 'Απόκρυψη κουμπιού αναθεώρησης';
$string['hidetoc'] = 'Εμφάνιση πίνακα περιεχομένων';
$string['hidetocdesc'] = 'Η ρύθμιση αυτή χρησιμοποιείται σαν εξ\' ορισμού τιμή για την εμφάνιση πίνακα περιεχομένων';
$string['hidetoc_help'] = 'Ο τρόπος εμφάνισης του πίνακα περιεχομένων στον αναπαραγωγέα SCORM';
$string['highestattempt'] = 'Υψηλότερη βαθμολογία';
$string['identifier'] = 'Αναγνωριστικό Ερώτησης';
$string['incomplete'] = 'Μη ολοκληρωμένο';
$string['info'] = 'Πληροφορίες';
$string['interactions'] = 'Διαδράσεις';
$string['invalidactivity'] = 'Η δραστηριότητα SCORM είναι εσφαλμένη';
$string['invalidhacpsession'] = 'Μη έγκυρη συνεδρία HACP';
$string['invalidmanifestname'] = 'Μπορεί να γίνει επιλογή μόνο imsmanifest.xml ή .zip αρχείων';
$string['invalidmanifestresource'] = 'ΠΡΟΣΟΧΗ: Οι παρακάτω πόροι αναφέρονται στο manifest, αλλά δεν είναι εφικτή η εύρεση τους:';
$string['invalidurl'] = 'Μη έγκυρο URL';
$string['invalidurlhttpcheck'] = 'Μη έγκυρο URL. Μήνυμα αποσφαλμάτωσης:<pre>{$a->cmsg}</pre>';
$string['last'] = 'Τελευταία πρόσβαση στις';
$string['lastaccess'] = 'Τελευταία πρόσβαση';
$string['lastattempt'] = 'Τελευταία προσπάθεια';
$string['lastattemptlock'] = 'Κλείδωμα μετά την τελευταία προσπάθεια';
$string['lastattemptlockdesc'] = 'Η ρύθμιση αυτή χρησιμοποιείται σαν εξ\' ορισμού τιμή για το κλείδωμα μετά την τελευταία προσπάθεια';
$string['location'] = 'Εμφάνιση της γραμμής διευθύνσεως';
$string['max'] = 'Μέγιστος βαθμός';
$string['maximumattempts'] = 'Μέγιστος αριθμός προσπαθειών';
$string['maximumattemptsdesc'] = 'Η ρύθμιση αυτή χρησιμοποιείται σαν εξ\' ορισμού τιμή για τον μέγιστο αριθμό προσπαθειών';
$string['maximumattempts_help'] = 'Αυτή η ρύθμιση δίνει την δυνατότητα να περιοριστεί ο αριθμός των προσπαθειών. Εφαρμόζεται μόνο για πακέτα SCORM 1.2  και AICC.';
$string['maximumgradedesc'] = 'Η ρύθμιση αυτή χρησιμοποιείται σαν εξ\' ορισμού τιμή για τον μέγιστο βαθμό';
$string['menubar'] = 'Εμφάνιση της γραμμής μενού';
$string['min'] = 'Ελάχιστος βαθμός';
$string['missing_attribute'] = 'Απούσα ιδιότητα {$a->attr} στην ετικέτα {$a->tag}';
$string['missingparam'] = 'A required is missing or wrong';
$string['missing_tag'] = 'Απούσα ετικέτα  {$a->tag}';
$string['mode'] = 'Φάση';
$string['modulename'] = 'SCORM/AICC';
$string['modulename_help'] = 'Ένα πακέτο SCORM είναι μια συλλογή αρχείων που είναι συσκευασμένα σύμφωνα με ένα συμφωνημένο πρότυπο για την μαθησιακά αντικείμενα. Η δραστηριότητα SCORM επιτρέπει SCORM ή AICC πακέτα να ανεβαίνουν ως αρχείο zip και να προστίθενται σε ένα μάθημα.

Το περιεχόμενο συνήθως εμφανίζεται σε διάφορες σελίδες, με πλοήγηση μεταξύ των σελίδων. Υπάρχουν διάφορες επιλογές για την εμφάνιση περιεχομένου σε ένα αναδυόμενο pop-up παράθυρο, με έναν πίνακα περιεχομένων, με πλήκτρα πλοήγησης κλπ. δραστηριότητες SCORM περιλαμβάνουν γενικά περιλαμβάνουν ερωτήσεις, με τους βαθμούς να καταγράφονται στο βαθμολόγιο.

Οι δραστηριότητες SCORM μπορεί να χρησιμοποιηθούν

* Για την παρουσίαση πολυμεσικού περιεχομένου και κινουμένων σχεδίων
* Ως εργαλείο αξιολόγησης';
$string['modulenameplural'] = 'SCORMs/AICCs';
$string['nav'] = 'Εμφάνιση Πλοήγησης';
$string['navdesc'] = 'Αυτή η ρύθμιση καθορίζει αν θα εμφανίζονται ή θα γίνονται απόκρυψη τα πλήκτρα πλοήγησης και η θέση τους.';
$string['navigation'] = 'Πλοήγηση';
$string['navpositionleft'] = 'Θέση πλήκτρων πλοήγησης από αριστερα σε pixels.';
$string['navpositiontop'] = 'Θέση πλήκτρων πλοήγησης από επάνω σε pixels.';
$string['networkdropped'] = 'Ο αναπαραγωγέας SCORM έχει διαπιστώσει ότι η σύνδεσή σας στο Διαδίκτυο είναι αναξιόπιστη ή έχει διακοπεί. Αν συνεχίσετε σε αυτή την δραστηριότητα SCORM, η πρόοδος σας μπορεί να μην σωθεί. <br />
Θα πρέπει να βγείτε από τη δραστηριότητα τώρα, και να επιστρέψει όταν θα έχετε μια αξιόπιστη σύνδεση στο Διαδίκτυο.';
$string['newattempt'] = 'Έναρξη νέας προσπάθειας';
$string['next'] = 'Συνέχεια';
$string['noactivity'] = 'Τίποτα προς αναφορά';
$string['noattemptsallowed'] = 'Επιτρεπόμενος αριθμός προσπαθειών';
$string['noattemptsmade'] = 'Αριθμός προσπαθειών που κάνατε';
$string['no_attributes'] = 'Η ετικέτα {$a->tag} πρέπει να έχει ιδιότητες';
$string['no_children'] = 'Η ετικέτα {$a->tag} πρέπει να έχει παιδιά';
$string['nolimit'] = 'Απεριόριστες προσπάθειες';
$string['nomanifest'] = 'Δεν βρέθηκαν αρχεία καταγραφής';
$string['noprerequisites'] = 'Συγγνώμη, δεν έχετε τις απαιτούμενες προϋποθέσεις για να προσπελάσετε αυτό το μαθησιακό αντικείμενο';
$string['noreports'] = 'Καμία αναφορά για προβολή';
$string['normal'] = 'Κανονικό';
$string['noscriptnoscorm'] = 'Το πρόγραμμα πλοήγησής σας δεν υποστηρίζει τη Javascript ή την έχει απενεργοποιημένη.';
$string['notattempted'] = 'Δεν δοκιμάστηκε';
$string['not_corr_type'] = 'Αναντιστοιχία τύπου για την ετικέτα {$a->tag}';
$string['notopenyet'] = 'Λυπάμαι, η δραστηριότητα αυτή δεν είναι διαθέσιμη πριν τις {$a}';
$string['objectives'] = 'Στόχοι';
$string['optallstudents'] = 'όλοι οι χρήστες';
$string['optattemptsonly'] = 'χρήστες με προσπάθειες μόνο';
$string['options'] = 'Επιλογές';
$string['optionsadv'] = 'Επιλογές (Προχωρημένες)';
$string['optionsadv_desc'] = 'Αν είναι επιλεγμένο το ύψος και το πλάτος θα εμφανίζονται ως προχωρημένες  επιλογές.';
$string['optnoattemptsonly'] = 'χρήστες χωρίς προσπάθειες μόνο';
$string['organization'] = 'Οργανισμός';
$string['organizations'] = 'Οργανισμοί';
$string['othersettings'] = 'Επιπλέον ρυθμίσεις';
$string['package'] = 'Περιεχόμενο πακέτου';
$string['packagedir'] = 'Σφάλμα αρχείων συστήματος: Δεν δημιουργήθηκε φάκελος πακέτου';
$string['packagefile'] = 'Δεν καθορίστηκε αρχείο πακέτου';
$string['packagehdr'] = 'Πακέτο';
$string['package_help'] = '<p><b>Αρχείο πακέτων</b></p>

<p>Ένα πακέτο αρχείων είναι ένα ειδικό αρχείο με προέκταση <b>zip</b> (ή pif), το οποίο περιέχει ενεργά
αρχεία ορισμού μαθήματος τύπου AICC ή SCORM (έγκυρα αρχεία προσδιορισμού μαθήματος AICC ή SCORM).</p>

<p>Ένα πακέτο τύπου <b>SCORM</b> πρέπει να εμπεριέχει αρχείο με το όνομα <b>imsmanifest.xml</b>. Το αρχείο αυτό
ορίζει τη δομή του μαθήματος τύπου SCORM, την τοποθεσία των πηγών δεδομένων και άλλα πράγματα.</p>

<p>Ένα πακέτο τύπου <b>AICC</b> ορίζεται από μερικά αρχεία (από 4 ως 7 αρχεία) με συγκεκριμένες προεκτάσεις,
που σημαίνουν:</p>
   <ul>
    <li>CRS - Course Description file (υποχρεωτικό) - αρχείο περιγραφής μαθήματος</li>
    <li>AU  - Assignable Unit file (υποχρεωτικό) - αρχείο εκχωρητέας ενότητας</li>
    <li>DES - Descriptor file (υποχρεωτικό) - αρχείο περιγραφέας </li>
    <li>CST - Course Structure file (υποχρεωτικό) - αρχεία δομής μαθήματος</li>
    <li>ORE - Objective Relationship file (προαιρετικό) - αρχείο αντικειμενικής σχέσης</li>
    <li>PRE - Prerequisites file (προαιρετικό) - αρχείο με τις αναγκαίες προϋποθέσεις</li>
    <li>CMP - Completition Requirements file (προαιρετικό) - αρχείο απαιτήσεων ολοκλήρωσης</li>
   </ul>';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Αυτή η ρύθμιση επιτρέπει να οριστεί ένα URL για το πακέτο SCORM, αντί να γίνει επιλογή ενός αρχείου μέσω του επιλογέα αρχείων.';
$string['page-mod-scorm-x'] = 'Οποιαδήποτε σελίδα του SCORM';
$string['pagesize'] = 'Μέγεθος σελίδας';
$string['passed'] = 'Πέρασε';
$string['php5'] = 'PHP 5 (βιβλιοθήκη DOMXML)';
$string['pluginadministration'] = 'Διαχείριση πακέτου SCORM';
$string['pluginname'] = 'πακέτο SCORM';
$string['popup'] = 'Νέο παράθυρο';
$string['popuplaunched'] = 'Αυτό το πακέτο SCORM έχει ανοίξει σε αναδυόμενο παράθυρο. Αν έχετε τελειώσει με την παρακολούθηση του πόρου, πατήστε εδώ για να επιστρέψετε στη σελίδα του μαθήματος';
$string['popupmenu'] = 'Σε αναδυόμενο μενού';
$string['popupopen'] = 'Άνοιξε το πακέτο σε νέο παράθυρο';
$string['popupsblocked'] = 'Φαίνεται ότι τα αναδυόμενα παράθυρα αποκλείονται, εμποδίζοντας την αναπαραγωγή του πακέτου SCORM. Παρακαλώ ελέγξτε τις ρυθμίσεις του προγράμματος περιήγησης και δοκιμάστε ξανά.';
$string['position_error'] = 'Η ετικέτα {$a->tag}  δεν μπορεί να είναι παιδί της ετικέτας {$a->parent}';
$string['preferencespage'] = 'Προτιμήσεις μόνο για αυτή τη σελίδα';
$string['preferencesuser'] = 'Προτιμήσεις για αυτή την αναφορά';
$string['prev'] = 'Προηγούμενο';
$string['protectpackagedownloads'] = 'Προστασία κατεβάσματος πακέτου';
$string['protectpackagedownloads_desc'] = 'Αν ενεργοποιηθεί, τα πακέτα SCORM μπορούν να κατέβουν μόνο αν ο χρήστης έχει τη δυνατότητα course:manageactivities. Αν απενεργοποιηθεί, τα πακέτα SCORM μπορούν να κατέβουν χωρίς περιορισμό (από κινητό ή άλλα μέσα).';
$string['raw'] = 'Ωμός βαθμός';
$string['regular'] = 'Κανονικά αρχεία καταγραφής';
$string['report'] = 'Αναφορά';
$string['reportcountallattempts'] = '{$a->nbattempts} προσπάθειες από {$a->nbusers} χρήστες, από {$a->nbresults} αποτελέσματα';
$string['reportcountattempts'] = '{$a->nbresults} αποτελέσματα ({$a->nbusers} χρήστες)';
$string['reports'] = 'Αναφορές';
$string['repositorynotsupported'] = 'Αυτό το αποθετήριο δεν υποστηρίζει σύνδεση απευθείας σε ένα αρχείο imsmanifest.xml.';
$string['response'] = 'Απάντηση';
$string['result'] = 'Αποτέλεσμα';
$string['results'] = 'Αποτελέσματα';
$string['review'] = 'Ανασκόπηση';
$string['reviewmode'] = 'Φάση ανασκόπησης';
$string['rightanswer'] = 'Σωστή απάντηση';
$string['scoes'] = 'Μαθησιακά Αντικείμενα';
$string['score'] = 'Βαθμός';
$string['scorm12standard'] = 'Ενεργοποίηση τυπικής λειτουργίας SCORM 1.2';
$string['scorm12standarddesc'] = 'Η απενεργοποίηση αυτής της ρύθμισης επιτρέπει στο Moodle να αποθηκεύει περισσότερα δεδομένα από ό,τι επιτρέπει η προδιαγραφή SCORM 1.2.<br/>
Αν τα πακέτα SCORM επιτρέπουν στους χρήστες να εισάγουν μεγάλα κείμενα ή αν το πακέτο προσπαθεί να αποθηκεύσει μεγάλο αριθμό δεδομένων στο πεδίο suspend_data απενεργοποιήστε.';
$string['scorm:addinstance'] = 'Προσθήκη νέου SCORM πακέτου';
$string['scormclose'] = 'Μέχρι';
$string['scormcourse'] = 'Εκπαιδευτική Διαδικασία';
$string['scorm:deleteownresponses'] = 'Διαγραφή των προσπαθειών σας';
$string['scorm:deleteresponses'] = 'Διαγραφή προσπαθειών';
$string['scormloggingoff'] = 'Η καταγραφή του API είναι απενεργοποιημένη';
$string['scormloggingon'] = 'Η καταγραφή του API είναι ενεργοποιημένη';
$string['scormopen'] = 'Ανοιχτό';
$string['scormresponsedeleted'] = 'Οι προσπάθειες των χρηστών διαγράφηκαν';
$string['scorm:savetrack'] = 'Αποθήκευση tracks';
$string['scorm:skipview'] = 'Προσπεράστε την σύνοψη';
$string['scormtype'] = 'Τύπος';
$string['scorm:viewreport'] = 'Προβολή αναφορών';
$string['scorm:viewscores'] = 'Προβολή των βαθμολογιών';
$string['scrollbars'] = 'Εμφάνιση γραμμών κύλισης';
$string['search:activity'] = 'πακέτο SCORM - πληροφορίες δραστηριότητας';
$string['selectall'] = 'Επιλογή όλων';
$string['selectnone'] = 'Αποεπιλογή όλων';
$string['show'] = 'Εμφάνιση';
$string['sided'] = 'Στην αριστερή μεριά';
$string['skipview'] = 'Μη προβολή σελίδας δομής περιεχομένου';
$string['skipviewdesc'] = 'Η ρύθμιση αυτή χρησιμοποιείται σαν εξ\' ορισμού τιμή για τη μη προβολή σελίδας δομής περιεχομένου';
$string['slashargs'] = 'ΠΡΟΣΟΧΗ: Η επιλογή slash arguments είναι απενεργοποιημένη στο Moodle και μπορεί το SCORM να μη λειτουργεί σωστά!';
$string['stagesize'] = 'Μέγεθος σκηνής';
$string['started'] = 'Ξεκίνησε στις';
$string['status'] = 'Κατάσταση';
$string['statusbar'] = 'Εμφάνιση της γραμμής κατάστασης';
$string['student_response'] = 'Απόκριση';
$string['subplugintype_scormreport'] = 'Αναφορά';
$string['subplugintype_scormreport_plural'] = 'Αναφορές';
$string['suspended'] = 'Αναστέλλεται';
$string['syntax'] = 'Συντακτικό λάθος';
$string['tag_error'] = 'Άγνωστη ετικέτα ({$a->tag}) με αυτό το περιεχόμενο: {$a->value}';
$string['time'] = 'Χρόνος';
$string['title'] = 'Τίτλος';
$string['toc'] = 'Πίνακας περιεχομένων';
$string['toolbar'] = 'Δείξε την εργαλειοθήκη';
$string['too_many_attributes'] = 'Η ετικέτα ({$a->tag}) έχει υπερβολικά πολλές ιδιότητες';
$string['too_many_children'] = 'Η ετικέτα ({$a->tag}) έχει υπερβολικά πολλά παιδιά';
$string['totaltime'] = 'Συνολικός Χρόνος';
$string['trackcorrectcount'] = 'Καταμέτρηση σωστών απαντήσεων';
$string['trackcorrectcount_help'] = 'Αριθμός σωστών απαντήσεων για την ερώτηση';
$string['trackid'] = 'Αναγνωριστικό';
$string['trackid_help'] = 'Αυτό είναι το αναγνωριστικό που ορίζεται από το πακέτο SCORM για την ερώτηση, η προδιαγραφή SCORM δεν επιτρέπει την εμφάνιση του πλήρους κειμένου της ερώτησης.';
$string['trackingloose'] = 'ΠΡΟΣΟΧΗ: Τα tracking δεδομένα αυτού του πακέτου θα χαθούν!';
$string['tracklatency'] = 'Χρόνος αναμονής';
$string['tracklatency_help'] = 'Το χρονικό διάστημα που μεσολάβησε μεταξύ του χρόνου διάθεσης της ερώτησης στο μαθητή για απάντηση και ο χρόνος της πρώτης απάντησης.';
$string['trackpattern'] = 'Πρότυπο';
$string['trackpattern_help'] = 'Ποια θα ήταν μια σωστή απάντηση σε αυτή την ερώτηση, δεν εμφανίζει την απάντηση των μαθητών.';
$string['trackresponse'] = 'Απάντηση';
$string['trackresponse_help'] = 'Αυτή είναι η απάντηση που έδωσε ο μαθητής στην ερώτηση';
$string['trackresult'] = 'Αποτέλεσμα';
$string['trackresult_help'] = 'Εμφανίζει αν ο μαθητής έδωσε τη σωστή απάντηση';
$string['trackscoremax'] = 'Μέγιστη βαθμολογία';
$string['trackscoremax_help'] = 'Η μέγιστη τιμή που μπορεί να δοθεί για την ανεπεξέργαστη βαθμολογία';
$string['trackscoremin'] = 'Ελάχιστη βαθμολογία';
$string['trackscoremin_help'] = 'Η ελάχιστη τιμή που μπορεί να δοθεί για την ανεπεξέργαστη βαθμολογία';
$string['trackscoreraw'] = 'Ανεπεξεργαστή βαθμολογία';
$string['trackscoreraw_help'] = 'Ο αριθμός που αντικατοπτρίζει την απόδοση του μαθητή σε σχέση με το εύρος που ορίζεται από τις τιμές της ελάχιστης και μέγιστης βαθμολογίας';
$string['tracksuspenddata'] = 'Αναστολή δεδομένων';
$string['tracksuspenddata_help'] = 'Παρέχει χώρο για την αποθήκευση και ανάκτηση δεδομένων μεταξύ των συνεδριών του μαθητή';
$string['tracktime'] = 'Χρόνος';
$string['tracktime_help'] = 'Η ώρα που ξεκίνησε η προσπάθεια';
$string['tracktype'] = 'Τύπος';
$string['tracktype_help'] = 'Ο τύπος της ερώτησης, για παράδειγμα "επιλογής" ή "σύντομης απάντησης"';
$string['trackweight'] = 'Βαρύτητα';
$string['trackweight_help'] = 'Η βαρύτητα που έχει ανατεθεί στην ερώτηση κατα τον υπολογισμό της βαθμολογίας.';
$string['type'] = 'Τύπος';
$string['typeaiccurl'] = 'URL Εξωτερικού AICC';
$string['typeexternal'] = 'Εξωτερικό πακέτο SCORM';
$string['typelocal'] = 'Μεταφορτωμένο πακέτο';
$string['typelocalsync'] = 'Κατεβασμένο πακέτο';
$string['undercontent'] = 'Κάτω από το περιεχομένο';
$string['unziperror'] = 'Εμφανίστηκε σφάλμα κατά την αποσυμπίεση του πακέτου';
$string['updatefreq'] = 'Συχνότητα αυτόμετων ενημερώσεων';
$string['updatefreqdesc'] = 'Η ρύθμιση αυτή καθορίζει τη συχνότητα αυτόμετων ενημερώσεων της δραστηριότητας';
$string['updatefreq_error'] = 'Η συχνότητα αυτόματης ενημέρωσης μπορεί να οριστεί μόνο όταν το αρχείο του πακέτου φιλοξενείται εξωτερικά';
$string['updatefreq_help'] = 'Επιτρέπει το εξωτερικό πακέτο να κατεβαίνει  και να ενημερώνεται αυτόματα';
$string['validateascorm'] = 'Επικύρωση πακέτου';
$string['validation'] = 'Αποτελέσμα επικύρωσης';
$string['validationtype'] = 'Αυτή η ρύθμιση ορίζει τη βιβλιοθήκη DOMXML που χρησιμοποιείται για την επικύρωση των αρχείων καταγραφής SCORM. Αν δε γνωρίζετε αφήστε την επιλεγμένη ρύθμιση.';
$string['value'] = 'Τιμή';
$string['versionwarning'] = 'Η έκδοση των αρχείων καταγραφής είναι παλαιότερη της 1.3, προσοχή στην ετικέτα {$a->tag}';
$string['viewallreports'] = 'Εμφάνιση αναφορών για {$a} προσπάθειες';
$string['viewalluserreports'] = 'Εμφάνιση αναφορών για {$a} χρήστες';
$string['whatgrade'] = 'Βαθμολόγηση προσπαθειών';
$string['whatgradedesc'] = 'Η ρύθμιση αυτή χρησιμοποιείται σαν εξ\' ορισμού τιμή για τη βαθμολόγηση προσπαθειών';
$string['whatgrade_help'] = 'Αν επιτρέπονται πολλαπλές προσπάθειες, αυτή η ρύθμιση καθορίζει αν η υψηλότερη, ο μέσος όρος, η πρώτη ή η τελευταία ολοκληρωμένη προσπάθεια καταγράφεται στο βαθμολόγιο. Η επιλογή της τελευταίας ολοκληρωμένης προσπάθειας δεν περιλαμβάνει απόπειρες σε κατάσταση \'απέτυχε\'.<br/><br/>
Σημειώνεται σχετικά με το χειρισμό των πολλαπλών προσπαθειών:
<br/><br/>
* Η επιλογή για να ξεκινήσει μια νέα προσπάθεια παρέχεται από ένα πλαίσιο ελέγχου πάνω από το πλήκτρο Enter στη σελίδα δομή του περιεχομένου, οπότε επιβεβαιώστε ότι υπάρχει πρόσβαση σε αυτή τη σελίδα, αν θέλετε να επιτρέψετε περισσότερες από μία προσπάθειες.<br/>
* Μερικά πακέτα SCORM είναι έξυπνα σχετικά με τις νέες προσπάθειες ενώ άλλα δεν είναι. Αυτό σημαίνει ότι αν ο μαθητής εισέλθει εκ νέου σε μια υπάρχουσα προσπάθεια, αν το περιεχόμενο SCORM δεν έχει εσωτερική λογική για την αποφυγή αντικατάστασης προηγούμενων προσπαθειών μπορούν να αντικατασταθούν, ακόμα και αν η προσπάθεια ήταν \'ολοκληρώθηκε\' ή \'πέρασε\'.<br/>
* Οι ρυθμίσεις "Επιβολή ολοκλήρωσης", "Επιβολή νέας προσπάθειας" και "Κλείδωμα μετά την τελική προσπάθεια" μπορούν επίσης να παρέχουν περαιτέρω διαχείριση των πολλαπλών προσπαθειών.';
$string['width'] = 'Πλάτος';
$string['window'] = 'Παράθυρο';
