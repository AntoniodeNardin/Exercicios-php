<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;

function __construct()
{
    $this ->volume = 50;
    $this ->ligado = false;
    $this ->tocando = false;
}
private function getVolume(){
    return $this->volume;
}
private function getligado(){
    return $this->ligado;
}
private function getTocando(){
    return $this->tocando;
}
private function setVolume($volume){
    $this->volume = $volume;
}
private function setligado($ligado){
    $this->ligado = $ligado;
}
private function setTocando($tocando){
    $this->tocando = $tocando;
}
    public function ligar(){
        $this->setligado(true);
}
    public function desligar(){
        $this->setligado(false);
    }
    public function abrirMenu(){
        echo "<br> Está ligado?: ". ($this->getLigado()?"SIM":"NÃO");
        echo "<br> Está tocando?: ". ($this->getTocando()?"SIM":"NÃO");
        echo "<br> Volume: ". $this->getVolume();
        for ($i=0; $i < $this->getVolume(); $i +=10) { 
            echo "|";
        }
        echo "<br>";
    }
    public function fecharMenu(){
        echo "<br> fechando menu...";

    }
    public function maisVolume(){
        if ($this->getligado()) {
            $this->setVolume($this->getVolume()+5);
        }
    }
    public function menosVolume(){
        if ($this->getligado()) {
            $this->setVolume($this->getVolume()-5);
        }
    }
    public function ligarMudo(){
        if ($this->getligado() && $this->getVolume()>0) {
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if ($this->getligado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }

    }
    public function play(){
        if ($this->getligado() && !$this->getTocando()) {
            $this->setTocando(true);
        }

    }
    public function pause(){
        if ($this->getligado() && $this->getTocando()) {
            $this->setTocando(false);
        }

    }
}