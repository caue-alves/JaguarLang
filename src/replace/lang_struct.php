<?php

require_once "replace_main.php";

function structs($str_compilada) {

	$keywords_and_substitutes = [
    "/-if-/" => "if",
    "/-else-/" => "else",
    "/-elseif-/" => "elseif",
     "/class/" => "class",
    "/extends/" => "extends",
    "/implements/" => "implements",
    "/func/" => "function",
    "/public/" => "public",
    "/static/" => "static",
    "/new/" => "new",
    "/return/" => "return",
    "/JAGR_EOL/" => "PHP_EOL",
    "/_init/" => "__construct",
    "/self/" => '$this',
    "/_destroy/" => "__destruct",
    "/try/" => "try",
    "/execpt/" => "catch",
    "/for_each/" => "foreach",
    "/for/" => "for",
    "/while/" => "while",
    "/raise/" => "throw",
	];
	
	$str_compilada = main_func($keywords_and_substitutes, $str_compilada);
    return $str_compilada;
}