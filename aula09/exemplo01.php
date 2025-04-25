<?php
    include_once 'pessoa.class.php';

    //Instancia de um objeto (uma pessoa)
    $pessoa1 = new pessoa;
    $pessoa2 = new pessoa;
    $pessoa3 = new pessoa;

    //var_dump($pessoa);

    //Atribuição de valores para o objeto
    $pessoa1->Nome = 'Ana Fortes';
    $pessoa1->Altura = '1.64';
    $pessoa1->Peso =  '55';

    $pessoa2->Nome = 'Maria';
    $pessoa2->Altura = '1.54';
    $pessoa2->Peso =  '75';

    $pessoa3->Nome = 'João';
    $pessoa3->Altura = '1.84';
    $pessoa3->Pesi = '69';

    //Chamando um método da classe
    $pessoa1->MostrarDados();
    $pessoa2->MostrarDados();
    $pessoa3->MostrarDados();






?>