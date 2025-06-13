<?php
 Class livro{
    private $Titulo;
    private $Autor;
    private $disponivel;

    public function __construct($titulo,$autor,$disponivel){
        $this->Titulo = $titulo;
        $this->Autor = $autor;
        $this->Disponivel = $disponivel;
    }

    public function getTitulo(){
        return $this->Titulo;
    }

    public function getDisponivel(){
        return $this->Disponivel = false;
    }

    public function Emprestar(){
        if ($this->getDisponivel() == true){
            $this->Disponivel = false;
        }else{
            echo "O livro solicitado não está disponivel no momento";
        }
        
    }

    public function Devolver(){
        $this->Disponivel = true;
        echo "Obrigada! Livro devolvido!";
    }

    public function ExibirStatus(){
        $titulo_livro = $this->getTitulo();
        if($this->getDisponivel() == true){
            $status_livro = "Disponivel";
        }else{
            $status_livro = "Emprestado";
        }

        $resposta = "O livro".$titulo_livro." está ".$status_livro;

        return $resposta;
        //com o titulo e o status ('Disponivel' ou 'Emprestado')


        }
    }
 