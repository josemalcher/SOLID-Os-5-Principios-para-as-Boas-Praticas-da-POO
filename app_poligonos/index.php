<?php
require __DIR__ . "/vendor/autoload.php";

use src\Poligono;
use src\poligonos\{Quadrado, Retangulo};


//$retangulo = new Retangulo();
//$retangulo->setAltura(5);
//$retangulo->setLargura(10);
//echo '<h3>Área do Retangulo: '. $retangulo->getArea().'</h3>';
//
//
//$quadrado = new Quadrado();
//$quadrado->setAltura(5);
//echo '<h3>Área do Quadrado: '. $quadrado->getArea().'</h3>';

$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);

echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<h3>Área do Poligono - RETANGULO: '. $poligono->getArea().'</h3>';

$poligonoq = new Poligono();
$poligonoq->setForma(new Quadrado());
$poligonoq->getForma()->setLargura(10);

echo '<pre>';
print_r($poligonoq);
echo '</pre>';
echo '<h3>Área do Poligono - QUADRADO: '. $poligonoq->getArea().'</h3>';