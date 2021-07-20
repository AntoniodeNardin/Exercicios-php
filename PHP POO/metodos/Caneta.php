<?php
class Caneta{
    public $modelo;
    private $cor;

    public function __construct($m, $c,$p)
    {
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->modelo = $p;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($c){
        $this->cor = $c;
    }
}
?>