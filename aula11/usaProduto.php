<?php

include_once('Produto.class.php');

$produto1 = new Produto("Camiseta", 59.90, 10);

$produto1->mostrarDetalhes();

echo "<hr>";

$produto1->adicionarEstoque(5);

$produto1->removerEstoque(3);

$produto1->mostrarDetalhes();

?>
