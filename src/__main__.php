<?php
require_once "exceptions/Exception.php";
require_once "sanitizer/sanit_main.php";
require_once "replace/symbol.php";
require_once "replace/lang_struct.php";
require_once "replace/funcs.php";

$arqpath = '../cash/compiled_file.php';
$arq = fopen($arqpath, 'w');

sanitize_one();
$str_compilada = sanitize_two("../samples/main.jagr");
$str_compilada = replace_sym($str_compilada);
$str_compilada = structs($str_compilada);
$str_compilada = funcs($str_compilada);

fwrite($arq, $str_compilada);
fwrite($arq,'
    } catch (Exception $e) {
        echo "erro na compilação, caso dúvidas, contate o email " . CompileException::AdminMail();
    } catch (DivisaoPorZero $e) {
        echo "Erro de divisão por zero, caso dúvidas, contate o email" . CompileException::AdminMail();
    }
    ');
require_once $arqpath;