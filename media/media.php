<?php
$soma = 0;
$notas = [];
$notas[0] = $_POST["n0"];
$soma += $notas[0];
$notas[1] = $_POST["n1"];
$soma += $notas[1];
$notas[2] = $_POST["n2"];
$soma += $notas[2];
if ($soma/3 >= 7) {
    echo "<h1> APROVADO <h1>";
    echo 'media = '.$soma/3;
}else{
    echo "<h1> REPROVADO <h1>";
    echo 'media = '.$soma/3 ;
}
?>