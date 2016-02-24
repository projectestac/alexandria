<?php
//XTEC ************ FITXER AFEGIT - Mira si funciona l'espai web
//2010.09.01

require_once('config.php');
$dirToCheck = $CFG->dataroot . '/';

$con = mysqli_connect($CFG->dbhost, $CFG->dbuser, $CFG->dbpass);
if ($con) {
    mysqli_close($con);
    echo 'Aplicacio:OK';
} else {
    echo "No s'ha pogut connectar al servidor de bases de dades $CFG->dbhost<br />";
}

// Check moodledata
if (!is_writable($dirToCheck)) {
    $state = ($state == 'Aplicacio:OK') ? '' : $state;
    $state .= "El directori de dades del <strong>Moodle</strong> ($dirToCheck), o bé no està muntat o bé no té permís d'escriptura.<br>";
}
