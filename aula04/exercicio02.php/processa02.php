<?php

    
    $numb01 = $_GET['numb01'];
    $numb02 = $_GET['numb02'];
    $numb03 = $_GET['numb03'];

  
    if($numb01 > $numb02 && $numb01 >$numb03){
        echo "O seu número 1 é o maior ($numb01)";
    }

    if($numb02 > $numb01 && $numb02 >$numb03){
        echo "O seu número 2 é o maior ($numb02)";
    }

    if($numb03 > $numb02 && $numb03 >$numb01){
        echo "O seu número 3 é o maior ($numb03)";
    }
       
  
?>