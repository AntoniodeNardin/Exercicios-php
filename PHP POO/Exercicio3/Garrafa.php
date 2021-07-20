<?php
class Garrafa{
    private $cor;
    private $modelo;
    private $capacidade;
    
    public function __construct($c,$m,$cap)
    {
        $this ->setCor($c);
        $this ->setModelo($m);
        $this ->setCapacidade($cap);
    }

    public function getCor(){
        return $this ->cor;
    }
    public function setCor($c){
        $this ->cor = $c;

    }
    public function getModelo(){
        return $this ->modelo;
        
    }
    public function setModelo($m){
        $this ->modelo = $m;
        
    }
    public function getCapacidade(){
        return $this ->capacidade;
        
    }
    public function setCapacidade($cap){
        $this ->capacidade = $cap;
    }
}
?>