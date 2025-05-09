<?php


class Lampada{
    public $Fabricante;
    public $Tensao;
    public $Potenciaç;
    public $Cor;
    public $Status;

    public function Ligar(){
        $this->Status = True;

    }
    public function Desligar(){
        $this->Status = False;

    }
    public function MostrarDados(){
        echo "O fabricante é: ". $this->Fabricante . "<br>";
        echo "A tensão é: ". $this->Tensao . "<br>";
        echo "A potencia é: ". $this->Potencia . "<br>";
        echo "A cor é: ". $this->Cor . "<br>";
        if ($this->Status == 1){
            echo "O Status é: LIGADA! <br>";
        }else{
            echo "O Status é: DELIGADA! <br>";
        }
        echo "O Status é: ". $this->Status . "<br>";
        
    }
}
?>