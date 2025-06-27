<?php
  include_once 'Aluno.class.php';



  $AnaFortes = new Aluno ("AnaFortes",9, 10);

  $Nota1 = $AnaFortes ->getNota1();
  $Nota2 = $AnaFortes ->getNota2();
    //echo $Nota1;
echo "NOME:".$AnaFortes->getNome();
echo "<br>";
echo "MÉDIA:".$AnaFortes->CalcularaMedia($Nota1,$Nota2);
echo "<br>";
echo  "SITUAÇÃO:".  $VerificarSituacao = $AnaFortes->VerificarSituacao($Nota1,$Nota2);
echo "<br>";
?>