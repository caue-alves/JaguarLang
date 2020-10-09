<?php
require_once "spaces.php";

function sanitize($path) {
	$final = spaces($path);
	return $final;
}