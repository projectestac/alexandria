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
 * Strings for component 'chat', language 'el', version '3.11'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Έχετε επερχόμενες συνόδους συνομιλίας';
$string['ajax'] = 'Έκδοση με χρήση AJAX';
$string['autoscroll'] = 'Αυτόματη Κύλιση';
$string['beep'] = 'Ηχητικό σήμα';
$string['bubble'] = 'Φυσαλίδες';
$string['cantlogin'] = 'Αδυναμία σύνδεσης στο δωμάτιο συνομιλίας!!';
$string['chat:addinstance'] = 'Προσθέστε μία νέα συνομιλία';
$string['chat:chat'] = 'Συμμετοχή στη συνομιλία';
$string['chat:deletelog'] = 'Διαγραφή καταγραφών συνομιλίας';
$string['chat:exportparticipatedsession'] = 'Εξαγωγή συνόδου συνομιλίας στην οποία συμμετείχατε';
$string['chat:exportsession'] = 'Εξαγωγή οποιασδήποτε συνόδου συνομιλίας';
$string['chat:readlog'] = 'Εμφάνιση καταγραφών συνομιλίας';
$string['chat:talk'] = 'Συμμετοχή σε συνομιλία';
$string['chat:view'] = 'Εμφάνιση δραστηριότητας συνομιλίας';
$string['chatintro'] = 'Περιγραφή - Κείμενο εισαγωγής';
$string['chatname'] = 'Όνομα αυτού του δωματίου συνομιλίας';
$string['chatreport'] = 'Σύνοδοι συνομιλιών';
$string['chattime'] = 'Ώρα επόμενης συνομιλίας';
$string['compact'] = 'Συμπαγής';
$string['composemessage'] = 'Συνθέστε ένα μήνυμα';
$string['configmethod'] = 'Η «Κανονική μέθοδος συνομιλίας μέσω AJAX » παρέχει μια διεπαφή συνομιλίας (chat) βασισμένη στο AJAX . Η κανονική μέθοδος συνομιλίας περιλαμβάνει τη συχνή/τακτική επικοινωνία των πελατών (εξυπηρετούμενων, συνήθως δηλ. των προγραμμάτων περιήγησης) με τον εξυπηρετητή (Moodle). Δεν απαιτεί ρυθμίσεις και λειτουργεί παντού αλλά μπορεί να επιφέρει μεγάλο φόρτο στον εξυπηρετητή όταν οι συνομιλητές είναι πολλοί. Η χρήση αυτόνομης υπηρεσίας (daemon, δαίμονας) απαιτεί πρόσβαση σε γραμμή εντολών (Unix shell) αλλά έχει ως αποτέλεσμα ένα κλιμακώσιμο (ακόμα και με πολλούς χρήστες) γρήγορο περιβάλλον συνομιλίας.';
$string['confignormalupdatemode'] = 'Οι ενημερώσεις των δωματίων συνομιλιών κανονικά γίνονται αποδοτικά χρησιμοποιώντας την λειτουργία <em>Keep-Alive</em> του (πρωτοκόλλου) HTTP 1.1 αλλά αυτό είναι ήδη αρκετά επιβαρυντικό για τον εξυπηρετητή. Μια πιο εξελιγμένη μέθοδος είναι η χρήση στρατηγικής <em>Stream (συνεχής ροή πολυμέσου)</em> για την προώθηση ενημερώσεων προς τους χρήστες. Με τη χρήση της <em>ροής πολυμέσου</em> η κλιμάκωση είναι καλύτερη (παρόμοια με την μέθοδο αυτόνομης υπηρεσίας συνομιλίας).';
$string['configoldping'] = 'Ποιό είναι το μέγιστο χρονικό διάστημα που μπορεί να περάσει πριν θεωρήσουμε πως ο χρήστης έχει αποσυνδεθεί (σε δευτερόλεπτα); Αυτό είναι απλά ένα άνω όριο, καθώς συνήθως οι αποσυνδέσεις ανιχνεύονται πολύ γρήγορα. Οι χαμηλότερες τιμές θα είναι πιο απαιτητικές προς τον εξυπηρετητή σας. Αν χρησιμοποιείτε την «Κανονική μέθοδο συνομιλίας μέσω ajax», <strong>ποτέ</strong> μην το ορίσετε κάτω από 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Πόσο συχνά πρέπει να ανανεώνεται το ίδιο το δωμάτιο συνομιλίας (σε δευτερόλεπτα); Ορίζοντας λίγα δευτερόλεπτα το δωμάτιο συνομιλίας θα φαίνεται γρηγορότερο αλλά μπορεί να επιβαρύνει πολύ τον εξυπηρετητή σας όταν συνομιλούν πολλά άτομα. Αν χρησιμοποιείτε ενημερώσεις <em>Συνεχούς Ροής</em>, μπορείτε να επιλέξετε υψηλότερες συχνότητες ανανέωσης -- δοκιμάστε 2.';
$string['configrefreshuserlist'] = 'Πόσο συχνά πρέπει να ανανεώνεται η λίστα των χρηστών (σε δευτερόλεπτα);';
$string['configserverhost'] = 'Το όνομα του Η/Υ (hostname) που εκτελεί την υπηρεσία/διεργασία του εξυπηρετητή';
$string['configserverip'] = 'Η διεύθυνση IP που αντιστοιχεί στο παραπάνω όνομα Η/Υ (hostname)';
$string['configservermax'] = 'Μέγιστος αριθμός επιτρεπόμενων πελατών (clients)';
$string['configserverport'] = 'Η θύρα (port) που θα χρησιμοποιεί η αυτόνομη υπηρεσία εξυπηρετητή';
$string['coursetheme'] = 'Αισθητικό θέμα μαθήματος';
$string['crontask'] = 'Επεξεργασία παρασκηνίου για το άρθρωμα συνομιλίας';
$string['currentchats'] = 'Ενεργές σύνοδοι συνομιλίας';
$string['currentusers'] = 'Τρέχοντες χρήστες';
$string['deletesession'] = 'Διαγραφή αυτής της συνόδου';
$string['deletesessionsure'] = 'Σίγουρα θέλετε να διαγράψετε αυτήν τη σύνοδο;';
$string['donotusechattime'] = 'Μη δημοσιοποίηση ωρών συνομιλίας';
$string['enterchat'] = 'Κάντε κλικ εδώ για να μπείτε στο δωμάτιο συνομιλίας τώρα';
$string['entermessage'] = 'Δώστε το μήνυμά σας';
$string['errornousers'] = 'Δεν ήταν δυνατή η εύρεση χρηστών!';
$string['eventmessagesent'] = 'Το μήνυμα στάλθηκε';
$string['eventsessionsviewed'] = 'Αναγνωσμένες σύνοδοι';
$string['explaingeneralconfig'] = 'Αυτές οι ρυθμίσεις ισχύουν <strong>πάντα</strong>';
$string['explainmethoddaemon'] = 'Αυτές οι ρυθμίσεις έχουν αποτέλεσμα μόνο εάν έχει επιλεγεί η «Αυτόνομη υπηρεσία συνομιλίας» ως μέθοδος συνομιλίας.';
$string['explainmethodnormal'] = 'Αυτές οι ρυθμίσεις έχουν αποτέλεσμα μόνο εάν έχει επιλεγεί η «Κανονική μέθοδος συνομιλίας μέσω ajax» ως μέθοδος συνομιλίας.';
$string['generalconfig'] = 'Γενικές ρυθμίσεις';
$string['idle'] = 'Αδρανής';
$string['indicator:cognitivedepth'] = 'Βάθος κατανόησης Συνομιλίας';
$string['indicator:cognitivedepth_help'] = 'Αυτός ο δείκτης βασίζεται στο βάθος κατανόησης που επιτεύχθηκε από τον μαθητή σε μια δραστηριότητα Συνομιλίας.';
$string['indicator:cognitivedepthdef'] = 'Βάθος κατανόησης Συνομιλίας';
$string['indicator:cognitivedepthdef_help'] = 'Ο συμμετέχων έχει φτάσει αυτό το ποσοστό αφοσίωσης στο βάθος κατανόησης που προσφέρεται από τις δραστηριότητες συνομιλίας κατά τη διάρκεια αυτού του διαστήματος ανάλυσης (Επίπεδα = Καμία εμφάνιση, Εμφάνιση, Υποβολή, Εμφάνιση ανατροφοδότησης, Σχόλιο στην ανατροφοδότηση)';
$string['indicator:cognitivedepthdef_link'] = 'Δείκτες_μαθησιακής_αναλυτικής#Βάθος_κατανόησης';
$string['indicator:socialbreadth'] = 'Κοινωνικό εύρος συνομιλίας';
$string['indicator:socialbreadth_help'] = 'Αυτός ο δείκτης βασίζεται στο κοινωνικό εύρος που επιτεύχθηκε από τον μαθητή σε μια δραστηριότητα συνομιλίας.';
$string['indicator:socialbreadthdef'] = 'Κοινωνικό εύρος συνομιλίας';
$string['indicator:socialbreadthdef_help'] = 'Ο συμμετέχων έχει φτάσει αυτό το ποσοστό αφοσίωσης στο κοινωνικό εύρος που προσφέρεται από τις δραστηριότητες συνομιλίας κατά τη διάρκεια αυτού του διαστήματος ανάλυσης (Επίπεδα = Καμία αφοσίωση, Συμμετέχων μόνος, Συμμετέχων με άλλους)';
$string['indicator:socialbreadthdef_link'] = 'Δείκτες_μαθησιακής_αναλυτικής#Κοινωνικό_εύρος';
$string['inputarea'] = 'Περιοχή εισαγωγής (κειμένου)';
$string['invalidid'] = 'Αδυναμία εύρεσης αυτού του δωματίου συνομιλίας!';
$string['list_all_sessions'] = 'Λίστα όλων των συνόδων.';
$string['list_complete_sessions'] = 'Λίστα μόνο των ολοκληρωμένων συνόδων.';
$string['listing_all_sessions'] = 'Εμφάνιση λίστας όλων των συνόδων.';
$string['messagebeepseveryone'] = 'Ο/Η {$a} στέλνει ηχητικό σήμα σε όλους!';
$string['messagebeepsyou'] = 'Ο/Η {$a} μόλις σας έστειλε ηχητικό σήμα!';
$string['messageenter'] = 'Ο/Η {$a} μόλις έχει μπει σε αυτή τη συνομιλία';
$string['messageexit'] = 'Ο/Η {$a} έχει φύγει από αυτή τη συνομιλία';
$string['messages'] = 'Μηνύματα';
$string['messageyoubeep'] = 'Στείλατε ηχητικό σήμα στον/στην {$a}';
$string['method'] = 'Μέθοδος συνομιλίας (chat)';
$string['methodajax'] = 'AJAX';
$string['methoddaemon'] = 'Αυτόνομη υπηρεσία συνομιλίας';
$string['methodnormal'] = 'Κανονική μέθοδος συνομιλίας μέσω AJAX';
$string['modulename'] = 'Συνομιλία';
$string['modulename_help'] = 'Το άρθρωμα δραστηριότητας (ηλεκτρονικής) συνομιλίας (chat) επιτρέπει στους συμμετέχοντες να έχουν μέσω γραπτού κειμένου, σύγχρονες συζητήσεις, σε πραγματικό χρόνο. Η συνομιλία μπορεί να είναι μια δραστηριότητα για μια μόνο φορά ή μπορεί να επαναλαμβάνεται την ίδια ώρα κάθε μέρα ή κάθε εβδομάδα. Οι σύνοδοι (ή περίοδοι ή συνεδρίες) συνομιλίας αποθηκεύονται και μπορούν να γίνουν διαθέσιμες για να τις βλέπουν όλοι ή να περιορίζονται σε χρήστες με δυνατότητα προβολής καταγραφών συνομιλίας. Οι συνομιλίες είναι ιδιαίτερα χρήσιμες όταν η ομάδα που συνομιλεί δεν είναι σε θέση να συναντάται πρόσωπο με πρόσωπο, όπως:

* Τακτικές συναντήσεις μαθητών που συμμετέχουν σε μαθήματα εντός σύνδεσης, για να τους επιτρέψουν να μοιραστούν εμπειρίες με άλλους στο ίδιο μάθημα αλλά σε διαφορετική τοποθεσία,
* Ένας μαθητής που προσωρινά δεν μπορεί να παρευρεθεί προσωπικά, για να συνομιλεί με τον δάσκαλό του για να προλάβει μια εργασία,
* Οι μαθητές υπό πρακτική εξάσκηση για να συγκεντρωθούν και να συζητήσουν τις εμπειρίες τους μεταξύ τους και με τον δάσκαλό τους,
* Τα μικρότερα παιδιά που χρησιμοποιούν (ηλεκτρονική) συνομιλία στο σπίτι τα βράδια ως ελεγχόμενη (παρακολουθούμενη) εισαγωγή στον κόσμο της κοινωνικής δικτύωσης,
* Μια σύνοδος ερωτήσεων και απαντήσεων με έναν προσκεκλημένο ομιλητή σε διαφορετική τοποθεσία,
* Σύνοδοι για να βοηθήσουν τους μαθητές να προετοιμαστούν για εξετάσεις όπου ο διδάσκων, ή άλλοι μαθητές, θα θέτουν παραδείγματα ερωτήσεων.';
$string['modulename_link'] = 'άρθρωμα/συνομιλία/εμφάνιση';
$string['modulenameplural'] = 'Συνομιλίες';
$string['neverdeletemessages'] = 'Να μη γίνεται ποτέ διαγραφή μηνυμάτων';
$string['nextchattime'] = 'Ώρα επόμενης συνομιλίας:';
$string['nextsession'] = 'Επόμενη προγραμματισμένη σύνοδος';
$string['no_complete_sessions_found'] = 'Δεν βρέθηκαν ολοκληρωμένες σύνοδοι.';
$string['nochat'] = 'Η συνομιλία δε βρέθηκε';
$string['noguests'] = 'Η συνομιλία δεν είναι ανοιχτή σε επισκέπτες';
$string['nomessages'] = 'Καθόλου μηνύματα ακόμη';
$string['nopermissiontoseethechatlog'] = 'Δεν έχετε το δικαίωμα να δείτε τις καταγραφές της συνομιλίας.';
$string['normalkeepalive'] = 'Κρατήστε σε λειτουργία';
$string['normalstream'] = 'Συνεχής Ροή πολυμέσου';
$string['noscheduledsession'] = 'Καμία προγραμματισμένη σύνοδος';
$string['notallowenter'] = 'Δεν σας επιτρέπεται η σύνδεση στο δωμάτιο συνομιλίας.';
$string['notlogged'] = 'Δεν έχετε συνδεθεί!';
$string['oldping'] = 'Χρόνος διάγνωσης αποσύνδεσης';
$string['page-mod-chat-x'] = 'Σελίδα αρθρώματος οποιασδήποτε συνομιλίας';
$string['pastchats'] = 'Περασμένες σύνοδοι συνομιλίας';
$string['pluginadministration'] = 'Διαχείριση συνομιλίας';
$string['pluginname'] = 'Συνομιλία';
$string['privacy:metadata:chat_messages_current'] = 'Τρέχουσα σύνοδος συνομιλίας. Αυτά τα δεδομένα είναι προσωρινά και διαγράφονται αφού διαγραφεί η σύνοδος συνομιλίας';
$string['privacy:metadata:chat_users'] = 'Παρακολουθεί ποιοί χρήστες βρίσκονται σε ποιά δωμάτια συνομιλίας';
$string['privacy:metadata:chat_users:firstping'] = 'Ώρα της πρώτης πρόσβασης στο δωμάτιο συνομιλίας';
$string['privacy:metadata:chat_users:ip'] = 'Διεύθυνση IP χρήστη';
$string['privacy:metadata:chat_users:lang'] = 'Γλώσσα χρήστη';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Ώρα του τελευταίου μηνύματος σε αυτό το δωμάτιο συνομιλίας';
$string['privacy:metadata:chat_users:lastping'] = 'Ώρα της τελευταίας πρόσβασης στο δωμάτιο συνομιλίας';
$string['privacy:metadata:chat_users:userid'] = 'Το αναγνωριστικό χρήστη';
$string['privacy:metadata:chat_users:version'] = 'Πώς αποκτά ο χρήστης πρόσβαση στην συνομιλία (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'Αρχείο μηνυμάτων που αποστέλλονται κατά τη διάρκεια μιας συνόδου συνομιλίας';
$string['privacy:metadata:messages:issystem'] = 'Αν το μήνυμα είναι ένα μήνυμα που δημιουργείται από το σύστημα';
$string['privacy:metadata:messages:message'] = 'Το μήνυμα';
$string['privacy:metadata:messages:timestamp'] = 'Πότε έγινε η αποστολή του μηνύματος.';
$string['privacy:metadata:messages:userid'] = 'Το αναγνωριστικό χρήστη του συγγραφέα του μηνύματος';
$string['refreshroom'] = 'Ανανέωση δωματίου';
$string['refreshuserlist'] = 'Ανανέωση λίστας χρηστών';
$string['removemessages'] = 'Διαγραφή όλων των μηνυμάτων';
$string['repeatdaily'] = 'Την ίδια ώρα κάθε μέρα';
$string['repeatnone'] = 'Χωρίς επαναλήψεις - δημοσίευση μόνο της καθορισμένης ώρας';
$string['repeattimes'] = 'Ώρες επανάληψης/δημοσίευσης συνόδου';
$string['repeatweekly'] = 'Την ίδια ώρα κάθε εβδομάδα';
$string['saidto'] = 'είπε στον/στην';
$string['savemessages'] = 'Αποθήκευση περασμένων συνόδων';
$string['search:activity'] = 'Συνομιλία - πληροφορίες δραστηριότητας';
$string['seesession'] = 'Εμφάνιση αυτής της συνόδου';
$string['send'] = 'Αποστολή';
$string['sending'] = 'Αποστέλλεται';
$string['serverhost'] = 'Όνομα εξυπηρετητή';
$string['serverip'] = 'Διεύθυνση IP εξυπηρετητή';
$string['servermax'] = 'Μέγιστος αριθμός χρηστών';
$string['serverport'] = 'Θύρα (port) εξυπηρετητή';
$string['sessions'] = 'Σύνοδοι συνομιλίας';
$string['sessionstart'] = 'Η επόμενη σύνοδος συνομιλίας θα αρχίσει στις {$a->date}, ({$a->fromnow} από τώρα)';
$string['sessionstartsin'] = 'Η επόμενη σύνοδος συνομιλίας θα ξεκινήσει {$a} από τώρα.';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Όλοι μπορούν να δουν τις περασμένες συνόδους';
$string['studentseereports_help'] = 'Αν οριστεί σε Όχι, μόνο χρήστες που έχουν δυνατότητα mod/chat:readlog μπορούν να δουν τις καταγραφές της συνομιλίας';
$string['talk'] = 'Μιλήστε';
$string['updatemethod'] = 'Μέθοδος ενημέρωσης';
$string['updaterate'] = 'Ρυθμός ενημέρωσης:';
$string['userlist'] = 'Λίστα χρηστών';
$string['usingchat'] = 'Χρήση συνομιλίας';
$string['usingchat_help'] = 'Το άρθρωμα συνομιλίας (chat) περιέχει μερικές λειτουργίες για να κάνει τις συνομιλίες λίγο πιο ευχάριστες.

* Φατσούλες - Οποιαδήποτε εικονίδια διάθεσης (emoticons, smileys, φατσούλες, χαμογελαστά πρόσωπα) που μπορείτε να πληκτρολογήσετε αλλού στο Moodle μπορείτε επίσης να τα πληκτρολογήσετε κι εδώ. Για παράδειγμα :-)
* Σύνδεσμοι - Διευθύνσεις ιστοτόπων θα μετατρέπονται σε συνδέσμους αυτόματα.
* Emoting (περιγραφή εαυτού) - Μπορείτε να ξεκινήσετε μια γραμμή με «/me» ή «:» για να κάνετε περιγραφή (σαν κάποιου άλλου). Για παράδειγμα αν το όνομά σας είναι Κιμ και γράψετε «:laughs!» ή «/me laughs!» τότε όλοι θα δουν «Kim laughs!»
* Beeps (ηχητικά σήματα) - Μπορείτε να στείλετε έναν ήχο σε άλλους συμμετέχοντες κάνοντας κλικ στο σύνδεσμο «beep» δίπλα από το όνομά τους. Μια χρήσιμη συντόμευση για να στείλετε ήχο (μπιπ) σε όλα τα άτομα στη συνομιλία συγχρόνως είναι να γράψετε «beep all».
* HTML - Αν γνωρίζετε κάποιους κώδικες HTML, μπορείτε να τους χρησιμοποιήσετε στο κείμενό σας για να κάνετε πράγματα όπως εισαγωγή εικόνας, αναπαραγωγή ήχων ή δημιουργία κειμένου με διαφορετικά χρώματα.';
$string['viewreport'] = 'Δείτε περασμένες συνόδους';
