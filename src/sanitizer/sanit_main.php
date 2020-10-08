<?php
require_once "spaces.php";
require_once "begin_end.php";

function sanitize_one(){
	begin();
}

function sanitize_two($path) {
	$final = spaces($path);
	return $final;
}