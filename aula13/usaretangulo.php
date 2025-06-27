<?php
include_once 'Retangulo.class.php';

$retangulo = new Retangulo();
$retangulo->setLargura(8);
$retangulo->setAltura(6);

echo "ÁREA: " . $retangulo->calcularArea();
echo "<br>PERÍMETRO: " . $retangulo->calcularPerimetro();
?>