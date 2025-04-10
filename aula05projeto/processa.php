<?php
    $email= $_POST['email'];
    $senha= $_POST['senha'];

    if($email == 'ana@email.com' && $senha == '1234'){
//pagina privada
   $nome = "Ana";
   header('Location: privada.php?nome='.$nome);
}else{
    //pagina de erro
    header('Location: erro.php');
  }
?>