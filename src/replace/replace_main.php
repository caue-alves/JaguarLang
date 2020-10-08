<?php

function main_func($keywords_and_substitutes, $str_compilada){
	foreach($keywords_and_substitutes as $key => $subs) {
  	try{
 		if (preg_match($key, $str_compilada) == 1 or preg_match("/;" . substr($key, 1), $str_compilada)) {
 			$str_compilada = str_ireplace(substr($key, 1, strlen($key) - 2), $subs, $str_compilada);
 		} 
 	} catch(Exception $e) {
 		echo $e->getMessage();
  }
 }
 return $str_compilada;
}