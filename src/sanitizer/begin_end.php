<?php

function begin() {
	$arqpath = '../cash/compiled_file.php';

	$arq = fopen($arqpath, 'w');

	fwrite($arq, '<?php' . PHP_EOL . "require_once('../src/var.php');" . PHP_EOL . "require_once('exceptions/Exception.php');" . "require_once('exceptions/DivisaoPorZero.php');" . PHP_EOL . "try {");
}