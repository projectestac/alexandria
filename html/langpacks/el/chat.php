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
 * Strings for component 'chat', language 'el', version '4.1'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Έχετε επερχόμενες συνόδους γραπτής συνομιλίας';
$string['ajax'] = 'Έκδοση με χρήση AJAX';
$string['autoscroll'] = 'Αυτόματη Κύλιση';
$string['beep'] = 'Ηχητικό σήμα';
$string['bubble'] = 'Φυσαλίδες';
$string['cantlogin'] = 'Αδυναμία σύνδεσης στην αίθουσα γραπτής συνομιλίας!!';
$string['chat:addinstance'] = 'Προσθέστε μία νέα γραπτή συνομιλία';
$string['chat:chat'] = 'Πρόσβαση σε μια αίθουσα γραπτής συνομιλίας';
$string['chat:deletelog'] = 'Διαγραφή καταγραφών γραπτής συνομιλίας';
$string['chat:exportparticipatedsession'] = 'Εξαγωγή συνόδου γραπτής συνομιλίας στην οποία συμμετείχατε';
$string['chat:exportsession'] = 'Εξαγωγή οποιασδήποτε συνόδου γραπτής συνομιλίας';
$string['chat:readlog'] = 'Εμφάνιση καταγραφών γραπτής συνομιλίας';
$string['chat:talk'] = 'Συμμετοχή σε γραπτή συνομιλία';
$string['chat:view'] = 'Εμφάνιση δραστηριότητας γραπτής συνομιλίας';
$string['chatintro'] = 'Περιγραφή - Κείμενο εισαγωγής';
$string['chatname'] = 'Όνομα αυτής της αίθουσας γραπτής συνομιλίας';
$string['chatreport'] = 'Σύνοδοι γραπτών συνομιλιών';
$string['chattime'] = 'Ώρα επόμενης γραπτής συνομιλίας';
$string['compact'] = 'Συμπαγής';
$string['composemessage'] = 'Συνθέστε ένα μήνυμα';
$string['configmethod'] = 'Η «Κανονική μέθοδος γραπτής συνομιλίας μέσω AJAX » παρέχει μια διεπαφή γραπτής συνομιλίας (chat) βασισμένη στο AJAX . Η κανονική μέθοδος γραπτής συνομιλίας περιλαμβάνει τη συχνή/τακτική επικοινωνία των πελατών (εξυπηρετούμενων, συνήθως δηλ. των προγραμμάτων περιήγησης) με τον εξυπηρετητή (Moodle). Δεν απαιτεί ρυθμίσεις και λειτουργεί παντού αλλά μπορεί να επιφέρει μεγάλο φόρτο στον εξυπηρετητή όταν οι συνομιλητές είναι πολλοί. Η χρήση αυτόνομης υπηρεσίας (daemon, δαίμονας) απαιτεί πρόσβαση σε γραμμή εντολών (Unix shell) αλλά έχει ως αποτέλεσμα ένα κλιμακώσιμο (ακόμα και με πολλούς χρήστες) γρήγορο περιβάλλον γραπτής συνομιλίας.';
$string['confignormalupdatemode'] = 'Οι ενημερώσεις των αιθουσών γραπτών συνομιλιών κανονικά γίνονται αποδοτικά χρησιμοποιώντας την λειτουργία <em>Keep-Alive</em> του (πρωτοκόλλου) HTTP 1.1 αλλά αυτό είναι ήδη αρκετά επιβαρυντικό για τον εξυπηρετητή. Μια πιο εξελιγμένη μέθοδος είναι η χρήση στρατηγικής <em>Stream (συνεχής ροή πολυμέσου)</em> για την προώθηση ενημερώσεων προς τους χρήστες. Με τη χρήση της <em>ροής πολυμέσου</em> η κλιμάκωση είναι καλύτερη (παρόμοια με την μέθοδο αυτόνομης υπηρεσίας γραπτής συνομιλίας).';
$string['configoldping'] = 'Ποιό είναι το μέγιστο χρονικό διάστημα που μπορεί να περάσει πριν θεωρήσουμε πως ο χρήστης έχει αποσυνδεθεί (σε δευτερόλεπτα); Αυτό είναι απλά ένα άνω όριο, καθώς συνήθως οι αποσυνδέσεις ανιχνεύονται πολύ γρήγορα. Οι χαμηλότερες τιμές θα είναι πιο απαιτητικές προς τον εξυπηρετητή σας. Αν χρησιμοποιείτε την «Κανονική μέθοδο γραπτής συνομιλίας μέσω ajax», <strong>ποτέ</strong> μην το ορίσετε κάτω από 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Πόσο συχνά πρέπει να ανανεώνεται η ίδια η αίθουσα γραπτής συνομιλίας (σε δευτερόλεπτα); Ορίζοντας λίγα δευτερόλεπτα η αίθουσα γραπτής συνομιλίας θα φαίνεται γρηγορότερη αλλά μπορεί να επιβαρύνει πολύ τον εξυπηρετητή σας όταν συνομιλούν πολλά άτομα. Αν χρησιμοποιείτε ενημερώσεις <em>Συνεχούς Ροής</em>, μπορείτε να επιλέξετε υψηλότερες συχνότητες ανανέωσης -- δοκιμάστε 2.';
$string['configrefreshuserlist'] = 'Πόσο συχνά πρέπει να ανανεώνεται η λίστα των χρηστών (σε δευτερόλεπτα);';
$string['configserverhost'] = 'Το όνομα του Η/Υ (hostname) που εκτελεί την υπηρεσία/διεργασία του εξυπηρετητή';
$string['configserverip'] = 'Η διεύθυνση IP που αντιστοιχεί στο παραπάνω όνομα Η/Υ (hostname)';
$string['configservermax'] = 'Μέγιστος αριθμός επιτρεπόμενων πελατών (clients)';
$string['configserverport'] = 'Η θύρα (port) που θα χρησιμοποιεί η αυτόνομη υπηρεσία εξυπηρετητή';
$string['coursetheme'] = 'Αισθητικό θέμα μαθήματος';
$string['crontask'] = 'Επεξεργασία παρασκηνίου για το άρθρωμα γραπτής συνομιλίας';
$string['currentchats'] = 'Ενεργές σύνοδοι γραπτής συνομιλίας';
$string['currentusers'] = 'Τρέχοντες χρήστες';
$string['deletesession'] = 'Διαγραφή αυτής της συνόδου';
$string['deletesessionsure'] = 'Σίγουρα θέλετε να διαγράψετε αυτήν τη σύνοδο;';
$string['donotusechattime'] = 'Μη δημοσιοποίηση ωρών γραπτής συνομιλίας';
$string['enterchat'] = 'Κάντε κλικ εδώ για να μπείτε στην αίθουσα γραπτής συνομιλίας τώρα';
$string['entermessage'] = 'Δώστε το μήνυμά σας';
$string['errornousers'] = 'Δεν ήταν δυνατή η εύρεση χρηστών!';
$string['eventmessagesent'] = 'Το μήνυμα στάλθηκε';
$string['eventsessionsviewed'] = 'Αναγνωσμένες σύνοδοι';
$string['explaingeneralconfig'] = 'Αυτές οι ρυθμίσεις ισχύουν <strong>πάντα</strong>';
$string['explainmethoddaemon'] = 'Αυτές οι ρυθμίσεις έχουν αποτέλεσμα μόνο εάν έχει επιλεγεί η «Αυτόνομη υπηρεσία γραπτής συνομιλίας» ως μέθοδος γραπτής συνομιλίας.';
$string['explainmethodnormal'] = 'Αυτές οι ρυθμίσεις έχουν αποτέλεσμα μόνο εάν έχει επιλεγεί η «Κανονική μέθοδος γραπτής συνομιλίας μέσω ajax» ως μέθοδος γραπτής συνομιλίας.';
$string['generalconfig'] = 'Γενικές ρυθμίσεις';
$string['idle'] = 'Αδρανής';
$string['indicator:cognitivedepth'] = 'Βάθος κατανόησης Γραπτής συνομιλίας';
$string['indicator:cognitivedepth_help'] = 'Αυτός ο δείκτης βασίζεται στο βάθος κατανόησης που επιτεύχθηκε από τον μαθητή σε μια δραστηριότητα Γραπτής συνομιλίας.';
$string['indicator:cognitivedepthdef'] = 'Βάθος κατανόησης Γραπτής συνομιλίας';
$string['indicator:cognitivedepthdef_help'] = 'Ο συμμετέχων έχει φτάσει αυτό το ποσοστό αφοσίωσης στο βάθος κατανόησης που προσφέρεται από τις δραστηριότητες γραπτής συνομιλίας κατά τη διάρκεια αυτού του διαστήματος ανάλυσης (Επίπεδα = Καμία εμφάνιση, Εμφάνιση, Υποβολή, Εμφάνιση ανατροφοδότησης, Σχόλιο στην ανατροφοδότηση)';
$string['indicator:cognitivedepthdef_link'] = 'Δείκτες_μαθησιακής_αναλυτικής#Βάθος_κατανόησης';
$string['indicator:socialbreadth'] = 'Κοινωνικό εύρος γραπτής συνομιλίας';
$string['indicator:socialbreadth_help'] = 'Αυτός ο δείκτης βασίζεται στο κοινωνικό εύρος που επιτεύχθηκε από τον μαθητή σε μια δραστηριότητα γραπτής συνομιλίας.';
$string['indicator:socialbreadthdef'] = 'Κοινωνικό εύρος γραπτής συνομιλίας';
$string['indicator:socialbreadthdef_help'] = 'Ο συμμετέχων έχει φτάσει αυτό το ποσοστό αφοσίωσης στο κοινωνικό εύρος που προσφέρεται από τις δραστηριότητες γραπτής συνομιλίας κατά τη διάρκεια αυτού του διαστήματος ανάλυσης (Επίπεδα = Καμία αφοσίωση, Συμμετέχων μόνος, Συμμετέχων με άλλους)';
$string['indicator:socialbreadthdef_link'] = 'Δείκτες_μαθησιακής_αναλυτικής#Κοινωνικό_εύρος';
$string['inputarea'] = 'Περιοχή εισαγωγής (κειμένου)';
$string['invalidid'] = 'Αδυναμία εύρεσης αυτής της αίθουσας γραπτής συνομιλίας!';
$string['list_all_sessions'] = 'Λίστα όλων των συνόδων.';
$string['list_complete_sessions'] = 'Λίστα μόνο των ολοκληρωμένων συνόδων.';
$string['listing_all_sessions'] = 'Εμφάνιση λίστας όλων των συνόδων.';
$string['messagebeepseveryone'] = 'Ο/Η {$a} στέλνει ηχητικό σήμα σε όλους!';
$string['messagebeepsyou'] = 'Ο/Η {$a} μόλις σας έστειλε ηχητικό σήμα!';
$string['messageenter'] = 'Ο/Η {$a} μόλις έχει μπει σε αυτή τη συνομιλία';
$string['messageexit'] = 'Ο/Η {$a} έχει φύγει από αυτή τη συνομιλία';
$string['messages'] = 'Μηνύματα';
$string['messageyoubeep'] = 'Στείλατε ηχητικό σήμα στον/στην {$a}';
$string['method'] = 'Μέθοδος γραπτής συνομιλίας (chat)';
$string['methodajax'] = 'AJAX';
$string['methoddaemon'] = 'Αυτόνομη υπηρεσία γραπτής συνομιλίας';
$string['methodnormal'] = 'Κανονική μέθοδος γραπτής συνομιλίας μέσω AJAX';
$string['modulename'] = 'Συνομιλία';
$string['modulename_help'] = 'Το άρθρωμα δραστηριότητας (ηλεκτρονικής) γραπτής συνομιλίας (chat) επιτρέπει στους συμμετέχοντες να έχουν μέσω γραπτού κειμένου, σύγχρονες συζητήσεις, σε πραγματικό χρόνο. Η συνομιλία μπορεί να είναι μια δραστηριότητα για μια μόνο φορά ή μπορεί να επαναλαμβάνεται την ίδια ώρα κάθε μέρα ή κάθε εβδομάδα. Οι σύνοδοι (ή περίοδοι ή συνεδρίες) γραπτής συνομιλίας αποθηκεύονται και μπορούν να γίνουν διαθέσιμες για να τις βλέπουν όλοι ή να περιορίζονται σε χρήστες με δυνατότητα προβολής καταγραφών γραπτής συνομιλίας. Οι συνομιλίες είναι ιδιαίτερα χρήσιμες όταν η ομάδα που συνομιλεί δεν είναι σε θέση να συναντάται πρόσωπο με πρόσωπο, όπως:

* Τακτικές συναντήσεις μαθητών που συμμετέχουν σε μαθήματα εντός σύνδεσης, για να τους επιτρέψουν να μοιραστούν εμπειρίες με άλλους στο ίδιο μάθημα αλλά σε διαφορετική τοποθεσία,
* Ένας μαθητής που προσωρινά δεν μπορεί να παρευρεθεί προσωπικά, για να συνομιλεί με τον δάσκαλό του για να προλάβει μια εργασία,
* Οι μαθητές υπό πρακτική εξάσκηση για να συγκεντρωθούν και να συζητήσουν τις εμπειρίες τους μεταξύ τους και με τον δάσκαλό τους,
* Τα μικρότερα παιδιά που χρησιμοποιούν (ηλεκτρονική) συνομιλία στο σπίτι τα βράδια ως ελεγχόμενη (παρακολουθούμενη) εισαγωγή στον κόσμο της κοινωνικής δικτύωσης,
* Μια σύνοδος ερωτήσεων και απαντήσεων με έναν προσκεκλημένο ομιλητή σε διαφορετική τοποθεσία,
* Σύνοδοι για να βοηθήσουν τους μαθητές να προετοιμαστούν για εξετάσεις όπου ο διδάσκων, ή άλλοι μαθητές, θα θέτουν παραδείγματα ερωτήσεων.';
$string['modulename_link'] = '';
$string['modulenameplural'] = 'Συνομιλίες';
$string['neverdeletemessages'] = 'Να μη γίνεται ποτέ διαγραφή μηνυμάτων';
$string['nextchattime'] = 'Ώρα επόμενης γραπτής συνομιλίας:';
$string['nextsession'] = 'Επόμενη χρονοπρογραμματισμένη σύνοδος';
$string['no_complete_sessions_found'] = 'Δεν βρέθηκαν ολοκληρωμένες σύνοδοι.';
$string['nochat'] = 'Η συνομιλία δε βρέθηκε';
$string['noguests'] = 'Η συνομιλία δεν είναι ανοιχτή σε επισκέπτες';
$string['nomessages'] = 'Καθόλου μηνύματα ακόμη';
$string['nopermissiontoseethechatlog'] = 'Δεν έχετε το δικαίωμα να δείτε τις καταγραφές της γραπτής συνομιλίας.';
$string['normalkeepalive'] = 'Κρατήστε σε λειτουργία';
$string['normalstream'] = 'Συνεχής Ροή πολυμέσου';
$string['noscheduledsession'] = 'Καμία χρονοπρογραμματισμένη σύνοδος';
$string['notallowenter'] = 'Δεν σας επιτρέπεται η σύνδεση στην αίθουσα γραπτής συνομιλίας.';
$string['notlogged'] = 'Δεν έχετε συνδεθεί!';
$string['oldping'] = 'Χρόνος διάγνωσης αποσύνδεσης';
$string['page-mod-chat-x'] = 'Σελίδα αρθρώματος οποιασδήποτε γραπτής συνομιλίας';
$string['pastchats'] = 'Περασμένες σύνοδοι γραπτής συνομιλίας';
$string['pastsessions'] = 'Προηγούμενες σύνοδοι';
$string['pluginadministration'] = 'Διαχείριση γραπτής συνομιλίας';
$string['pluginname'] = 'Συνομιλία';
$string['privacy:metadata:chat_messages_current'] = 'Τρέχουσα σύνοδος γραπτής συνομιλίας. Αυτά τα δεδομένα είναι προσωρινά και διαγράφονται αφού διαγραφεί η σύνοδος γραπτής συνομιλίας';
$string['privacy:metadata:chat_users'] = 'Παρακολουθεί ποιοί χρήστες βρίσκονται σε ποιές αίθουσες γραπτής συνομιλίας';
$string['privacy:metadata:chat_users:firstping'] = 'Ώρα της πρώτης πρόσβασης στην αίθουσα γραπτής συνομιλίας';
$string['privacy:metadata:chat_users:ip'] = 'Διεύθυνση IP χρήστη';
$string['privacy:metadata:chat_users:lang'] = 'Γλώσσα χρήστη';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Ώρα του τελευταίου μηνύματος σε αυτή την αίθουσα γραπτής συνομιλίας';
$string['privacy:metadata:chat_users:lastping'] = 'Ώρα της τελευταίας πρόσβασης στην αίθουσα γραπτής συνομιλίας';
$string['privacy:metadata:chat_users:userid'] = 'Το αναγνωριστικό χρήστη';
$string['privacy:metadata:chat_users:version'] = 'Πώς αποκτά ο χρήστης πρόσβαση στην γραπτή συνομιλία (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'Αρχείο μηνυμάτων που αποστέλλονται κατά τη διάρκεια μιας συνόδου γραπτής συνομιλίας';
$string['privacy:metadata:messages:issystem'] = 'Αν το μήνυμα είναι ένα μήνυμα που δημιουργείται από το σύστημα';
$string['privacy:metadata:messages:message'] = 'Το μήνυμα';
$string['privacy:metadata:messages:timestamp'] = 'Πότε έγινε η αποστολή του μηνύματος.';
$string['privacy:metadata:messages:userid'] = 'Το αναγνωριστικό χρήστη του συγγραφέα του μηνύματος';
$string['refreshroom'] = 'Ανανέωση αίθουσας';
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
$string['sessions'] = 'Σύνοδοι γραπτής συνομιλίας';
$string['sessionstart'] = 'Η επόμενη σύνοδος γραπτής συνομιλίας θα αρχίσει στις {$a->date}, ({$a->fromnow} από τώρα)';
$string['sessionstartsin'] = 'Η επόμενη σύνοδος γραπτής συνομιλίας θα ξεκινήσει {$a} από τώρα.';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Όλοι μπορούν να δουν τις περασμένες συνόδους';
$string['studentseereports_help'] = 'Αν οριστεί σε Όχι, μόνο χρήστες που έχουν δυνατότητα mod/chat:readlog μπορούν να δουν τις καταγραφές της γραπτής συνομιλίας';
$string['talk'] = 'Μιλήστε';
$string['updatemethod'] = 'Μέθοδος ενημέρωσης';
$string['updaterate'] = 'Ρυθμός ενημέρωσης:';
$string['userlist'] = 'Λίστα χρηστών';
$string['usingchat'] = 'Χρήση γραπτής συνομιλίας';
$string['usingchat_help'] = 'Το άρθρωμα γραπτής συνομιλίας (chat) περιέχει μερικές λειτουργίες για να κάνει τις συνομιλίες λίγο πιο ευχάριστες.

* Φατσούλες - Οποιαδήποτε εικονίδια διάθεσης (emoticons, smileys, φατσούλες, χαμογελαστά πρόσωπα) που μπορείτε να πληκτρολογήσετε αλλού στο Moodle μπορείτε επίσης να τα πληκτρολογήσετε κι εδώ. Για παράδειγμα :-)
* Σύνδεσμοι - Διευθύνσεις ιστοτόπων θα μετατρέπονται σε συνδέσμους αυτόματα.
* Emoting (περιγραφή εαυτού) - Μπορείτε να ξεκινήσετε μια γραμμή με «/me» ή «:» για να κάνετε περιγραφή (σαν κάποιου άλλου). Για παράδειγμα αν το όνομά σας είναι Βασίλης και γράψετε «:laughs!» ή «/me laughs!» τότε όλοι θα δουν «Βασίλης laughs!»
* Beeps (ηχητικά σήματα) - Μπορείτε να στείλετε έναν ήχο σε άλλους συμμετέχοντες κάνοντας κλικ στο σύνδεσμο «beep» δίπλα από το όνομά τους. Μια χρήσιμη συντόμευση για να στείλετε ήχο (μπιπ) σε όλα τα άτομα στη συνομιλία συγχρόνως είναι να γράψετε «beep all».
* HTML - Αν γνωρίζετε κάποιους κώδικες HTML, μπορείτε να τους χρησιμοποιήσετε στο κείμενό σας για να κάνετε πράγματα όπως εισαγωγή εικόνας, αναπαραγωγή ήχων ή δημιουργία κειμένου με διαφορετικά χρώματα.';
$string['viewreport'] = 'Δείτε περασμένες συνόδους γραπτής συνομιλίας';
