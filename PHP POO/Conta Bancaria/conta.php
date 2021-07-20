<?php

class conta{
    public $NumConta;
    private $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct()
    {
        $this->status = false;
        $this ->setSaldo(0); 
    }
    public function getNumero(){
        return $this->NumConta;
    }
    public function setNumero($n){
        $this->NumConta= $n;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getDono(){
        return $this->dono;
    }
    public function setDono($d){
        $this->dono = $d;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($S){
        $this->saldo = $S;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($s){
         $this->status = $s;
    }
    public function abrirConta($t){
        if ($this->status = false) {
            $this->status = true;
        }
        $this ->setTipo($t);
        if ($t = "CC") {
            $this -> setSaldo(50);
        }
        if ($t = "CP") {
            $this -> setSaldo(150);
        }
    }
    public function fecharConta(){
        if ($this->status == true && $this->saldo == 0){
            $this->status = false;
            echo "<p>Conta fechada com sucesso</p>";
        } else{
            echo "<p>impossivel fechar conta</p>";
        }
    }
    public function depositarConta($d){
        if ($this->status = true) {
            $this->saldo += $d;
            echo "<p> deposito de $d realizado com sucesso.</p>";
        } else{
            echo "<p>você não possui uma conta</p>";
        }
    }
    public function sacarConta($s){
        if ($this->status = true && $this->saldo >= $s) {
            $this->saldo -= $s;
            echo "<p> saque de $s realizado com sucesso.</p>";
        }else{
            echo "<p>você não possui dinheiro suficiente</p>";
        }
    }
    public function PagarMensalidade($t){
        $m = 0;
        if ($this->status = true && $t == "CC") {
            $m = 12;
            if ($this->saldo > $m) {
                $this->saldo -= $m;
                echo "<p> Mensalidade da conta $t paga com sucesso.</p>";
            }
            else{
                echo "<p> Mensalidade da conta $t não paga</p>";
                
            }
        }
        if ($this->status = true && $t == "CP") {
            $m = 24;
            if ($this->saldo > $m) {
                $this->saldo -= $m;
                echo "<p> Mensalidade da conta $t paga com sucesso.</p>";
            } else{
                echo "<p> Mensalidade da conta $t não paga</p>";
                
            }
    }
}
}
?>