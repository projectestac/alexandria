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
 * Strings for component 'tool_uploaduser', language 'el', branch 'MOODLE_26_STABLE'
 *
 * @package   tool_uploaduser
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Να επιτρέπονται διαγραφές (deletes)';
$string['allowrenames'] = 'Να επιτρέπονται οι μετονομασίες';
$string['csvdelimiter'] = 'Διαχωριστικό CSV';
$string['defaultvalues'] = 'Προεπιλεγμένες τιμές';
$string['deleteerrors'] = 'Προεπιλεγμένα σφάλματα';
$string['encoding'] = 'Κωδικοποίηση';
$string['errors'] = 'Σφάλματα';
$string['nochanges'] = 'Καμία αλλαγή';
$string['renameerrors'] = 'Σφάλματα στις μετονομασίες';
$string['requiredtemplate'] = 'Απαιτείται. Μπορείτε να χρησιμοποιήσετε συντακτικό πρότυπο εδώ (%l = επίθετο, %f = όνομα, %u = όνομα χρήστη). Δείτε τη βοήθεια για λεπτομέρειες και παραδείγματα.';
$string['rowpreviewnum'] = 'Προεπισκόπηση γραμμών';
$string['uploadpicture_baduserfield'] = 'Το συγκεκριμένο χαρακτηριστικό χρήστη δεν είναι έγκυρο. Παρακαλώ ξαναπροσπαθήστε.';
$string['uploadpicture_cannotmovezip'] = 'Αδυναμία μεταφοράς του αρχείου zip στον προσωρινό φάκελο.';
$string['uploadpicture_cannotprocessdir'] = 'Αδυναμία επεξεργασίας αποσυμπιεσμένων αρχείων.';
$string['uploadpicture_cannotsave'] = 'Αδυναμία αποθήκευσης εικόνας για το χρήστη {$a}. Ελέγξτε το αρχικό αρχείο.';
$string['uploadpicture_cannotunzip'] = 'Αδυναμία αποσυμπίεσης αρχείου εικόνας.';
$string['uploadpicture_invalidfilename'] = 'Το αρχείο εικόνας {$a} περιέχει μη έγκυρους χαρακτήρες στο όνομά του. Παράλειψη αρχείου.';
$string['uploadpicture_overwrite'] = 'Αντικατάσταση υπάρχοντων εικόνων χρηστών;';
$string['uploadpictures'] = 'Μεταφόρτωση εικόνων χρηστών';
$string['uploadpictures_help'] = '<p>Εικόνες χρηστών μπορούν να μεταφορτωθούν ως συμπιεσμένο αρχείο zip ή ως αρχεία εικόνων. Τα αρχεία εικόνων θα πρέπει να είναι ονομασμένα <i>επιλεγμένος-χρήστης-ιδιότητα.επέκταση</i>. Για παράδειγμα, εάν η επιλεχθείσα ιδιότητα του χρήστη που χρησιμεύει για το ταίριασμα των εικόνων είναι το όνομα χρήστη και το όνομα χρήστη είναι user1234, τότε το αρχείο θα πρέπει να είναι user1234.jpg.</p>
<p>Τύποι εικόνων που υποστηρίζονται είναι, μεταξύ άλλων, gif, jpg, and png.</p>
<p>Τα ονόματα αρχείων εικόνων δεν διαχωρίζουν μεταξύ κεφαλαίων και μικρών.</p>';
$string['uploadpicture_userfield'] = 'Ιδιότητα χρήστη για ταίριασμα εικόνων:';
$string['uploadpicture_usernotfound'] = 'Ο χρήστης με \'{$a->userfield}\' τιμή του \'{$a->uservalue}\' δεν υπάρχει. Παράλειψη χρήστη.';
$string['uploadpicture_userskipped'] = 'Παράλειψη χρήστη {$a} (ο χρήστης έχει ειόνα ήδη).';
$string['uploadpicture_userupdated'] = 'Ανανέωση εικόνας για το χρήστη {$a}.';
$string['uploadusers'] = 'Εισαγωγή χρηστών';
$string['uploadusers_help'] = '<p>Κατά πρώτο λόγο, σημειώστε ότι <strong>δεν είναι συνήθως απαραίτητο να εισάγονται χρήστες σε μεγάλη
ποσότητα</strong> - Για να μειώσετε τις εργασίες συντήρησης, πρέπει πρώτα να
ερευνήσετε μορφές επικύρωσης που δεν απαιτούν χειροκίνητη συντήρηση, όπως η
σύνδεση με τις υπάρχουσες εξωτερικές βάσεις δεδομένων ή να αφήσετε τους χρήστες
να δημιουργήσουν τους δικούς τους λογαριασμούς. Δείτε το τμήμα Επικύρωσης στις
επιλογές Διαχείρισης.</p>
<p>Εάν είστε βέβαιοι πως θέλετε να εισαγάγετε τους
πολλούς λογαριασμούς χρηστών από ένα αρχείο κειμένου, τότε πρέπει να
μορφοποιήσετε το αρχείο κειμένου σας ως εξής:</p>

<ul>
  <li>Κάθε γραμμή του αρχείου περιέχει μια σειρά δεδομένων</li>
  <li>Κάθε σειρά δεδομένων είναι μια σειρά από δεδομένα που χωρίζονται με κόμματα</li>
  <li>Η πρώτη σειρά του αρχείου έχει ιδιαίτερο χαρακτήρα: περιέχει τα ονόματα των πεδίων δεδομένων. Η σειρά αυτή καθορίζει τη δομή του υπολοίπου αρχείου.
    <blockquote>
      <p><strong>Απαιτούμενα ονόματα πεδίων:</strong> τα πεδία αυτά πρέπει να συμπεριλαμβάνονται στην πρώτη εγγραφή και να είναι ορισμένα για κάθε χρήστη</p>
      <p><code>όνομα, επίθετο</code> κατά την εισαγωγή <code>όνομα_χρήστη</code> κατά την επεξεργασία</p>
      <p><strong>Προεραιτικά ονόματα πεδίων:</strong> όλα αυτά είναι εντελώς προαιρετικά. Εάν μια τιμή είναι παρούσα για το πεδίο στο αρχείο, τότε η τιμή αυτή χρησιμοποιείται. Αλλιώς, η προεπιλεγμένη τιμή για αυτό το πεδίο χρησιμοποιείται.</p>
      <p><code>ίδρυμα, τμήμα, πόλη, χώρα, γλώσσα, αυθεντικοποίηση, ajax, ζώνη ώρας, idnumber, icq, τηλέφωνο1, τηλέφωνο2, διεύθυνση, url, περιγραφή, mailformat, maildisplay, htmleditor, αυτόματη εγγραφή, emailstop</code></p>
      <p><strong>Ειδικά ονόματα πεδίων προφίλ:</strong> προαιρετικά, το xxxxx είναι το αληθινό όνομα προφίλ ειδικού χρήστη (π.χ. το μοναδικό σύντομο όνομα)</p>
      <p><code>πεδίο_προφίλ_xxxxx</code></p>
      <p><strong>Ειδικά ονόματα πεδίων:</strong> χρησιμοποιούνται για να αλλάζουν ονόματα χρηστών και για τη διαγραφή χρηστών - βλέπε παρακάτω</p>
      <p><code>deleted, oldusername</code></p>
      <p><strong>Ονόματα πεδίων εγγραφής (προαιρετικά):</strong> Τα ονόματα μαθημάτων είναι τα &quot;σύντομα_ονόματα&quot; των μαθημάτων - εάν υπάρχουν
         τότε οι χρήστες θα εγγραφούν σε αυτά τα μαθήματα. &quot;Τύπος&quot; σημαίνει είδος του ρόλου που πρέπει να χρησιμοποιηθεί για τη σχετική εγγραφή στο μάθημα.
         Η τιμή 1 είναι ο προκαθορισμένος ρόλος μαθήματος, 2 είναι ο κληροδοτημένος ρόλος Διδάσκοντα και 3 είναι το ίδιο ακριβώς αλλά χωρίς δικαιώματα επεξεργασίας. Αντ\'αυτού μπορείτε να χρησιμοποιήσετε το πεδίο ρόλου
         για να καθορίσετε ρόλους απευθείας - χρησιμοποιήστε είτε το σύντομο όνομα ρόλου είτε το id (αριθμητικά ονόματα ρόλων δεν υποστηρίζονται). Οι χρήστες μπορούν επίσης
         να ανατεθούν σε ομάδες στο μάθημα (ομάδα1 στο μάθημα1, ομάδα2 στο μάθημα2, κτλ).</p>
      <p><code>μάθημα1, τύπος1, ρόλος1, ομάδα1, μάθημα2, τύπος2, ρόλος2, ομάδα2, κτλ.</code></p>
    </blockquote>
    </li>
  <li>Κόμματα μέσα στα δεδομένα πρέπει να κωδικοποιούνται ως &amp;#44 - το script αυτόματα θα αποκωδικοποιήσει κάτι τέτοιο σε κόμματα και πάλι.</li>
  <li>Για boolean πεδία, χρησιμοποιήστε το 0 για ψευδές και 1 για αληθές. </li>
</ul>
<p>Ορίστε ένα παράδειγμα ενός έγκυρου αρχείου προς εισαγωγή:</p>
<p><code>username, password, firstname, lastname, email, lang, idnumber, maildisplay, course1, group1, type1, enrolperiod1<br />
jonest, verysecret, Tom, Jones, jonest@someplace.edu, en, 3663737, 1, Intro101, Section 1, 1, 30<br />
reznort, somesecret, Trent, Reznor, reznort@someplace.edu, en_us, 6736733, 0, Advanced202, Section 3, 3, 90
</code></p>

<h2>Πρότυπα</h2>
<p>Οι προκαθορισμένες τιμές αντιμετωπίζονται ως πρότυπα στα οποία επιτρέπονται οι παρακάτω κωδικοί:</p>
<ul>
<li><code>%l</code> - θα αντικατασταθεί από το επίθετο</li>
<li><code>%f</code> - θα αντικατασταθεί από το όνομα</li>
<li><code>%u</code> - θα αντικατασταθεί από το όνομα_χρήστη</li>
<li><code>%%</code> - θα αντικατασταθεί από το %</li>
</ul>
<p>Μεταξύ του συμβόλου (%) και οποιουδήποτε κωδικού γράμματος (l, f ή u) επιτρέπονται οι παρακάτω μετατροπείς:</p>
<ul>
<li>(-) σύμβολο μείον - η πληροφορία που καθορίζεται από το κωδικοράμμα θα μετατραπεί σε πεζά</li>
<li>(+) σύμβολο συν - η πληροφορία που καθορίζεται από το κωδικογράμμα θα μετατραπεί σε ΚΕΦΑΛΑΙΑ</li>
<li>(~) περισπωμένη - η πληροφορία που καθορίζεται από το κωδικογράμμα θα μετατραπεί σε Γραφή Τίτλου</li>
<li>ένας δεκαδικός αριθμός - η πληροφορία που καθορίζεται από το κωδικογράμμα θα κοπεί σε τόσους χαρακτήρες</li>
</ul>

<p>Για παράδειγμα, εάν το όνομα είναι John και το επίθετο είναι Doe, οι παρακάτω τιμές θα βρεθούν στα προσδιορισμένα πρότυπα:</p>
<ul>
<li>%l%f = DoeJohn</li>
<li>%l%1f = DoeJ</li>
<li>%-l%+f = doeJOHN</li>
<li>%-f_%-l = john_doe</li>
<li>http://www.example.com/~%u/ = http://www.example.com/~jdoe/ (εάν το όνομα_χρήστη είναι jdoe or %-1f%-l)</li>
</ul>
<p>Η επεξεργασία προτύπων γίνεται μόνον σε προκαθορισμένες τιμές και όχι στις τιμές που ανακτώνται από το αρχείο CSV.</p>
<p>Για να δημιουργήσετε σωστά ονόματα_χρήστη του Moodle, το όνομα_χρήστη πάντοτε μετατρέπεται σε πεζά. Επιπλέον, εάν η επιλογή &quot;Επιτρέπονται extended χαρακτήρες σε ονόματα χρηστών&quot; στη σελίδα Πολιτικής Ιστοχώρου είναι απενεργοποιημένη, χαρακτήρες διαφορετικοί από γράμματα, ψηφία, παύλες (-) και τελείες (.) απομακρύνονται.
Για παράδειγμα, εάν το όνομα είναι John Jr. και το επίθετο είναι Doe, το όνομα χρήστη %-f_%-l θα παραγάγει john jr._doe όταν η επιλογή Επιτρέπονται extended χαρακτήρες σε ονόματα χρηστών είναι ενεργοποιημένη και johnjr.doe εάν όχι.</p>
<p>Όταν η ρύθμιση &quot;Χειρισμός διπλότυπων νέων ονομάτων χρηστών &quot; είναι ρυθμισμένη στο Προσθήκη Μετρητή, ένας μετρητής αυτόματης αρίθμησης θα προστεθεί στο διπλότυπο όνομα που θα παραχθεί από το πρότυπο.
Για παράδειγμα, εάν το αρχείο CSV περιέχει τους χρήστες John Doe, Jane Doe και Jenny Doe χωρίς ρητά ονόματα χρηστών, το προκαθορισμένο όνομα χρήστη είναι %-1f%-l και η ρύθμιση Χειρισμός διπλότυπων νέων ονομάτων χρηστών έχει τεθεί σε Προσθήκη Μετρητή, τότε τα παραγόμενα ονόματα χρηστών θα είναι jdoe, jdoe2 και jdoe3.
</p>

<h2>Ενημέρωση υπάρχοντων λογαριασμών</h2>

<p>Εξορισμού, το Moodle υποθέτει ότι θα δημιουργείτε οι ίδιοι τους λογαριασμούς χρηστών και προσπερνάει τις εγγραφές όπου το όνομα χρήστη ταιριάζει σε έναν υπάρχοντα λογαριασμό. Ωστόσο, εάν επιτρέπετε τις ενημερώσεις, ο υπάρχων λογαριασμός χρήστη θα ενημερωθεί. </p>

<p>Κατά την ενημέρωση υπάρχοντων λογαριασμών μπορείτε επίσης να αλλάζετε επίσης ονόματα χρηστών. Ορίστε την επιλογή "Επιτρέπονται μετονομασίες" σε <b>Ναι</b> και συμπεριλάβετε στο αρχείο σας ένα πεδίο που θα λέγεται <code>oldusername</code>.</p>

<p><b>Προειδοποίηση:</b> οποιαδήποτε λάθη κατά την ενημέρωση υπάρχοντων λογαριασμών μπορούν να επηρεάσουν τους χρήστες σας με πολύ άσχημο τρόπο. Να είστε προσεκτικοί όταν όταν χρησιμοποιήτε τις επιλογές ενημέρωσης.</p>

<h2>Διαγραφή λογαριασμών</h2>
<p>Εάν το πεδίο <code>deleted</code> είναι παρόν, τότε χρήστες με τιμή 1 θα διαγραφούν. Στην περίπτωση αυτή, όλα τα πεδία μπορεί να παραλειφθούν εκτός από το πεδίο <code>username</code>.</p>
<p>Η διαγραφή και η μεταφόρτωση λογαριασμών μπορεί να γίνει με ένα και μόνο αρχείο CSV. Για παράδειγμα, το παρακάτω αρχείο θα προσθέσει το χρήστη Tom Jones και θα διαγράψει το χρήστη reznort:</p>
<p><code>username, firstname, lastname, deleted<br />
jonest, Tom, Jones, 0<br />
reznort, , , 1
</code></p>';
$string['uploaduserspreview'] = 'Προεπισκόπηση μεταφόρτωσης χρηστών';
$string['uploadusersresult'] = 'Μεταφόρτωση αποτελεσμάτων χρηστών';
$string['useraccountupdated'] = 'Ο χρήστης ανανεώθηκε';
$string['userdeleted'] = 'Ο χρήστης διαγράφηκε';
$string['userrenamed'] = 'Ο χρήστης μετονομάστηκε';
$string['userscreated'] = 'Δημιουργήθηκαν οι χρήστες';
$string['usersdeleted'] = 'Οι χρήστες διαγράφηκαν';
$string['usersrenamed'] = 'Μετονομάστηκαν οι χρήστες';
$string['usersskipped'] = 'Χρήστες που παραλείφθηκαν';
$string['usersupdated'] = 'Οι χρήστες ανανεώθηκαν';
$string['usersweakpassword'] = 'Οι χρήστες έχουν αδύναμο κωδικό ασφαλείας';
$string['uubulk'] = 'Επιλογή για χοντρικές λειτουργίες';
$string['uubulkall'] = 'Όλοι οι χρητες';
$string['uubulknew'] = 'Νέοι χρήστες';
$string['uubulkupdated'] = 'Ανανεωμένοι χρήστες';
$string['uucsvline'] = 'Γραμμή CSV';
$string['uulegacy1role'] = '(Αρχικός Φοιτητής) typeN=1';
$string['uulegacy2role'] = '(Αρχικός Καθηγητής) typeN=2';
$string['uulegacy3role'] = '(Αρχικός καθηγητής χωρίς δικαιώματα επεξεργασίας) typeN=3';
$string['uunoemailduplicates'] = 'Μη αποδοχή διπλότυπων διευθύνσεων ηλεκτρονικού ταχυδρομείου';
$string['uuoptype'] = 'Μεταφόρτωση τύπου';
$string['uuoptype_addinc'] = 'Προσθήκη όλων, προσάρτηση μετρητή στα ονόματα χρηστών εάν χρειάζεται';
$string['uuoptype_addnew'] = 'Μόνο προσθήκη νέων, παράλειψη υπάρχοντων χρηστών';
$string['uuoptype_addupdate'] = 'Προσθήκη νέων και ανανέωση υπάρχοντων χρηστών';
$string['uuoptype_update'] = 'Μόνο ανανέωση υπάρχοντων χρηστών';
$string['uupasswordnew'] = 'Νέο συνθηματικό χρήστη';
$string['uupasswordold'] = 'Υπάρχον συνθηματικό χρήστη';
$string['uuupdateall'] = 'Υπερίσχυση με αρχείο και προεπιλογές';
$string['uuupdatefromfile'] = 'Υπερίσχυση με αρχείο';
$string['uuupdatemissing'] = 'Συμπλήρωση κενών από αρχείο και προεπιλογές';
$string['uuupdatetype'] = 'Υπάρχουσες λεπτομέρειες χρήστη';