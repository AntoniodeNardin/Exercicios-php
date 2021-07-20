<?php
    require_once 'Lutadores.php';
class Luta{
    private $desafiante;
    public $desafiado;
    private $rounds;
    private $aprovada;

    public function marcarLuta($l1, $l2){
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }

    }
    public function lutar(){
        if ($this->aprovada) {
            $vencedor = rand(0,2);
            switch ($vencedor) {
                case 0:
                    echo "<p>empate</p><hr>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                
                case 1:
                    echo"<p>" . $this->desafiado->getNome()." Ganhou</p>";
                    echo "<p>" .$this->desafiante->getNome()." Perdeu</p><hr>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();

                    break;
                
                case 2:
                echo"<p>" . $this->desafiante->getNome()." Ganhou</p>";
                echo "<p>" .$this->desafiado->getNome()." Perdeu</p><hr>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();

        }
        else{
            echo "<p> Luta não pode acontecer </p>";

        }
    }
    public function getDesafiante(){
        return $this->desafiante;
    }
    public function getDesafiado(){
        return $this->desafiado;
    }
    public function getRounds(){
        return $this->rounds;
    }
    public function getAprovado(){
        return $this->aprovada;
    }
    public function setDesafiante($d){
        $this->desadiante = $d;
    }
    public function setDesafiado($dd){
        $this->desafiado = $dd;
    }
    public function setRounds($r){
        $this->rounds = $r;
    }
    public function setAprovada($a){
        $this->aprovada = $a;
}
}
?>