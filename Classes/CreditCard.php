<?php 

class CreditCard{
    protected $numero;
    protected $cvv;
    protected $scadenza;

    function __construct($_numero, $_cvv, $_scadenza)
    {
        $this->numero = $_numero;
        $this->cvv = $_cvv;
        $this->scadenza = $_scadenza;
    }

    //Numero
    public function setNumero($_numero){
        $this->numero = $_numero;
    }
    public function getNumero(){
        return $this->numero;
    }

   //Cvv
    public function setCvv($_cvv){
        $this->cvv = $_cvv;
    }
    public function getCvv(){
        return $this->cvv;
    }

    //Scadenza
    public function setScadenza($_scadenza){
        $this->scadenza = $_scadenza;
    }
    public function getScadenza(){
        return $this->scadenza;
    }
}
?>