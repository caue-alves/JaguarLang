<?php
$arqpath = 'test.php';

$arq = fopen($arqpath, 'w');
$string = file('teste.dev'); 

fwrite($arq, "<?php" . PHP_EOL);
$lista_final = [];

foreach($string as $str) {
   $lista_final[] = trim($str);
 }

 $str_compilada = implode("", $lista_final);

 $keywords_and_substitutes = [
    "/-se-/" => "if",
    "/-senao-/" => "else",
    "/-sesenao-/" => "elseif",
    "/escreva/" => "echo",
    '/-/' => "->",
    "/classe/" => "class",
    "/extende/" => "extends",
    "/implementa/" => "implements",
    "/funcao/" => "function",
    "/verdadeiro/" => "true",
    "/falso/" => "false",
    "/publica/" => "public",
    "/estatica/" => "static",
    "/novo/" => "new",
    "/var /" => "$",
    "/retorne/" => "return",
    "/DEV_EOL/" => "PHP_EOL",
    "/constante/" => "const",
    "/nulo/" => "null"
 ];

 foreach($keywords_and_substitutes as $key => $subs) {
 	try{
 		if (preg_match($key, $str_compilada) == 1 or preg_match("/;" . substr($key, 1), $str_compilada)) {
 			$str_compilada = str_ireplace(substr($key, 1, strlen($key) - 2), $subs, $str_compilada);
 		} 
 	} catch(Exception $e) {
 		echo "erro de compilação";
  }
 }

fwrite($arq, $str_compilada);
require_once "test.php";