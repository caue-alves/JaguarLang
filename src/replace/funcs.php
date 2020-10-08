<?php

function funcs($str_compilada) {
	$keywords_and_substitutes = [
    "/writeLine/" => "echo",
    "/echo_var/" => "var_dump"
 ];

 	$str_compilada = main_func($keywords_and_substitutes, $str_compilada);
    return $str_compilada;
}