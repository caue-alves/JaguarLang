<?php

function spaces($path) {
	$to_s = file($path);
	$returning = [];
	foreach($to_s as $s){
		$returning[] = trim($s);
	}

	$final = implode("", $returning);

	return $final;
}