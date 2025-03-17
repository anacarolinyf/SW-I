<?php

    $nome = $_GET['cxnome'];
    $nota01 = $_GET['nota01'];
    $nota02 = $_GET['nota02'];
    $nota03 = $_GET['nota03'];

    $media = ($nota01 + $nota02 + $nota03 );
    $media2= $media/3;

    echo "Sua média é : $media2";
  
?>