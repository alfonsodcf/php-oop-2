<?php
class User{
    protected $nome;
    protected $creditCard;
    protected $conto;

    function __construct($_nome)
    {
        $this->nome = $_nome;
        
    }

    //Nome
    public function setNome($_nome){
        $this->nome = $_nome;
    }
    public function getNome(){
        return $this->nome;
    }
    
    //CreditCard
    public function setCreditCard($_creditCard){
        $this->creditCard = $_creditCard;
    }
    public function getCreditCard(){
        return $this->creditCard;
    }


    //conto
    public function setConto($_prezzo){
        if((date('m-Y')) < strtotime($this->creditCard->getScadenza())){
            throw new Exception('carta scaduta');
        }
        $this->conto = $_prezzo;
    }
    public function getConto(){
        return $this->conto;
    }
}
?>