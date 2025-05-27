<?php
    include_once 'Conta.class.php';

    $conta1 = new Conta();

    $conta1->Nome = "Ana";
    $conta1->Cpf = "534.923.383-34";
    //$conta1->Saldo = 500;

    $conta1->ConsultarDados();
    echo "<hr>";
    echo $conta1->Depositar(250);
    echo "<hr>";
    $conta1->ConsultarDados();
    echo "<hr>";
    echo $conta1->Sacar(800);
    echo "<hr>"
    $conta1->ConsultarSaldos();





?>