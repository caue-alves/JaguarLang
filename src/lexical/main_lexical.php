<?php

require_once "../sanitizer/spaces.php";
require_once "../helper/between.php";

function lexical_analisys($path){
	$arq = file($path);
	$str = spaces($path);

	if(preg_match("/if/", $str) == 1){
		$position = strpos($str, "if");
		if(between("if", $str, '"')){
			echo "asdhashj";
		} else{
			str_replace("if", "*if*", $str);
		}
	}
	$arq = fopen($path, "w");
	fwrite($arq, $str);
}

lexical_analisys('test.txt');