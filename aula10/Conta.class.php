<?php
class Conta{
    public $Nome;
    public $Cpf;
    private $Saldo;

    public function Sacar($Valor){
        if($valor>$this->Saldo){
            return "SALDO INSUFICIENTE";
        }else{$this->Saldo = $this->Saldo - $Valor;
            $resultado = "Seu saldo atual é de R$" .$this->Saldo;
            return $resultado;
            
        }
    }
    public function Despositar($Valor){
         $this->Saldo = $this->Saldo + $Valor;
         $resultado = "Seu saldo atual é de R$" .$this->Saldo;
        return $resultado;

    }

    public function ConsultarDados(){
        echo "Nome: " . $this->Nome . "<br>";
        echo "Cpf: " . $this->Cpf . "<br>";
        echo "Saldo: " . $this->Saldo . "<br>"; 
    }
}