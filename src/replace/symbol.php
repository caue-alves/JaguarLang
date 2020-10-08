<?php

require_once "replace_main.php";

function replace_sym($str_compilada) {
	$keywords_and_substitutes = [

	'/--/' => "->",
    "/@false/" => "false",
    "/@true/" => "true",
    "/@pi/" => "3.14",
    "/@null/" => "null",
    "/@</" => "$",
    "/:/" => "=>",     
    "/!</" => "/*",
    "/>!/" => "*/",
    "/@>/" => "const",
	];

	$str_compilada = main_func($keywords_and_substitutes, $str_compilada);
    return $str_compilada;
}