<?php
//XTEC ************ FITXER AFEGIT - Mira si funciona l'espai web
//2010.09.01

	require_once('config.php');
	$con = mysql_connect($CFG->dbhost, $CFG->dbuser, $CFG->dbpass);
	if ($con){
		mysql_close($con);
		echo 'Aplicacio:OK';
	}else{
		echo 'DB ERROR';
	}
?>
