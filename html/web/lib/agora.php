<?php
//XTEC ************ FITXER AFEGIT - Agora global functions
//2010.06.30 @pferre22

function is_agora(){
	global $CFG;
	return isset($CFG->isagora) && $CFG->isagora;
}

function is_xtecadmin(){
	global $USER;
	return isset($USER) 
		   && array_key_exists('username', $USER)
		   && $USER->username=='xtecadmin';
}

function get_protected_agora(){
	global $CFG;
	global $USER;
	return (!is_agora() || (isset($CFG->isagora) && $CFG->isagora) &&
		   (isset($USER) && 
		    array_key_exists('username', $USER) &&
		    $USER->username=='xtecadmin'));
	//return !is_agora() || is_xtecadmin();
}

function is_rush_hour(){
	global $CFG;
	if(!$CFG->enable_hour_restrictions)
		return false;
	
	$weekday = idate('w');
	if($weekday == 0 || $weekday == 6)
		return false;
	$hour = idate('H');
	if($hour < 9)
		return false;
	if($hour == 14)
		return false;
	if($hour >= 17)
		return false;
	return true;
}

?>
