<?php
class Products{
    protected $nome;
    protected $prezzo;
    protected $tipo;
    protected $speci;

    function __construct($_nome, $_prezzo, $_tipo, $_speci)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->tipo = $_tipo;
        $this->speci = $_speci;
    }

    //Nome
    public function setNome($_nome){
        $this->nome = $_nome;
    }
    public function getNome(){
        return $this->nome;
    }

    //Prezzo
    public function setPrezzo($_prezzo){
        $this->prezzo = $_prezzo;
    }
    public function getPrezzo(){
        return $this->prezzo;
    }

    //Tipo
    public function setTipo($_tipo){
        $this->tipo = $_tipo;
    }
    public function getTipo(){
        return $this->tipo;
    }

    //Speci
    public function setSpeci($_speci){
        $this->speci = $_speci;
    }
    public function getSpeci(){
        return $this->speci;
    }

}
?>