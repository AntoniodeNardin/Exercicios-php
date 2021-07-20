<?php 
class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    function apresentar(){
        echo "<br>Lutador:".$this->getNome();
        echo "<br>Origem:".$this->getNacionalidade();
        echo "<br>".$this->getIdade()."anos";
        echo "<br>".$this->getAltura()."m de altura";
        echo "<br>Pesando: ".$this->getPeso()." kg";
        echo "<br>Ganhou: ". $this->getVitorias();
        echo "<br>Perdeu: ".$this->getDerrotas();
        echo "<br>Empatou: ".$this->getEmpates()."<hr>";
    }
    function status(){
        echo $this->getNome();
        echo "<br>é um peso ".$this->getCategoria();
        echo "<br>Ganhou: ". $this->getVitorias();
        echo "<br>Perdeu: ".$this->getDerrotas();
        echo "<br>Empatou: ".$this->getEmpates()."<hr>";
        
    }
    function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
        
    }
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
        
    }
    function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
        
    }
    function __construct($no, $na, $id, $al, $pe, $vi, $de, $emp)
    {
        $this ->setNome($no);
        $this ->setNacionalidade($na);
        $this ->setIdade($id);
        $this ->setAltura($al);
        $this ->setPeso($pe);
        $this ->setVitorias($vi);
        $this ->setDerrotas($de);
        $this ->setEmpates($emp);
        
    }
    function getNome(){
        return $this->nome;
    }
    function getNacionalidade(){
        return $this->nacionalidade;
    }
    function getIdade(){
        return $this->idade;
    }
    function getAltura(){
        return $this->altura;
    }
    function getPeso(){
        return $this->peso;
    }
    function getCategoria(){
        return $this->categoria;

    }
    function getVitorias(){
        return $this->vitorias;
    }
    function getDerrotas(){
        return $this->derrotas;
    }
    function getEmpates(){
        return $this->empates;
    }
    function setNome($n){
        $this->nome = $n;
    }
    function setNacionalidade($na){
        $this->nacionalidade = $na;
    }
    function setIdade($i){
        $this->idade = $i;
    }
    function setAltura($a){
        $this->altura = $a;
    }
    function setPeso($p){
        $this->peso = $p;
        $this->setCategoria($p);
    }
    function setCategoria($p){
        if ($p < 52.2) {
            $this->categoria = "Invalido";
        }else if ($p <= 70.3) {
            $this->categoria = "Leve";
        }else if ($p <= 83.9) {
            $this->categoria = "Medio";
        }else if ($p <= 120.2) {
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Invalido";
        }

    }
    function setVitorias($v){
        $this->vitorias = $v;
    }
    function setDerrotas($d){
        $this->derrotas = $d;
    }
    function setEmpates($e){
        $this->empates = $e;
    }
}