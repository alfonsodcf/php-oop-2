<?php
require_once __DIR__ . '/User.php';

class UserPremium extends User
{
    protected $sconto;

    public function setSconto()
    {
        $this->sconto = 20;
    }

    public function getConto(){
        $conto = $conto * $this->sconto / 100;
        return $this->conto;
    }
}
?>