<?php

use src\Leitor;

require __DIR__ . "/vendor/autoload.php";

echo '<h3>OK</h3>';

// ----- TXT
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__.'/arquivos');
$leitorTXT->setArquivo('dados.txt');
$arr_txt = $leitorTXT->lerArquivo();

// ----- CSV
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__.'/arquivos');
$leitorCSV->setArquivo('dados.csv');
$arr_csv = $leitorTXT->lerArquivo();

echo "<pre>";
print_r(array_merge($arr_csv, $arr_csv));
echo "</pre>";
