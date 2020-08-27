<?php
require_once "exceptions/Exception.php";

$arqpath = '../cash/compiled_file.php';

$arq = fopen($arqpath, 'w');
$string = file('../samples/main.jagr'); 

fwrite($arq, '<?php' . PHP_EOL . "require_once('../src/var.php');" . PHP_EOL . "require_once('exceptions/Exception.php');" . "require_once('exceptions/DivisaoPorZero.php');" . PHP_EOL . "try {");
$lista_final = [];

foreach($string as $str) {
   $lista_final[] = trim($str);
 }

$str_compilada = implode("", $lista_final);
$varex = rand(0, 26);

$alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$varex = $alphabet[$varex];
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
    "/var /" => "$" . "",
    "/retorne/" => "return",
    "/JAGR_EOL/" => "PHP_EOL",
    "/constante/" => "const",
    "/nulo/" => "null",
    "/!</" => "/*",
    "/>!/" => "*/",
    "/_init/" => "__construct",
    "/o_mesmo/" => "this"
 ];

 foreach($keywords_and_substitutes as $key => $subs) {
  	try{
 		if (preg_match($key, $str_compilada) == 1 or preg_match("/;" . substr($key, 1), $str_compilada)) {
 			$str_compilada = str_ireplace(substr($key, 1, strlen($key) - 2), $subs, $str_compilada);
 		} 
 	} catch(CompileException $e) {
 		echo $e->getMessage();
  }
 }

fwrite($arq, $str_compilada);
fwrite($arq,'
    } catch (Exception $e) {
        echo "erro na compilação, caso dúvidas, contate o email " . CompileException::AdminMail();
    } catch (DivisaoPorZero $e) {
        echo "Erro de divisão por zero, caso dúvidas, contate o email" . CompileException::AdminMail();
    }
    ');
require_once $arqpath;