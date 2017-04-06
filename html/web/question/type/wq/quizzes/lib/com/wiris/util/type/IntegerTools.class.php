<?php

class com_wiris_util_type_IntegerTools {
	public function __construct(){}
	static function max($x, $y) {
		return (($x > $y) ? $x : $y);
	}
	static function min($x, $y) {
		return (($x < $y) ? $x : $y);
	}
	static function clamp($x, $a, $b) {
		return com_wiris_util_type_IntegerTools::min(com_wiris_util_type_IntegerTools::max($a, $x), $b);
	}
	function __toString() { return 'com.wiris.util.type.IntegerTools'; }
}
