<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    body{
        font-size: 2em;
        text-align: center;
    }
</style>
    <pre>
        <?php
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $deposito = $_POST['deposito'];
        $saque = $_POST['saque'];
        $Nconta = $_POST['Nconta'];
        require_once 'conta.php';
        $cb = new conta;
        $cb ->abrirConta($tipo);
        $cb ->setNumero($Nconta);
        $cb ->setTipo($tipo);
        $cb ->setDono($nome);
        $cb ->depositarConta($deposito);
        $cb ->sacarConta($cb->getSaldo());
        $cb ->fecharConta();
        print_r($cb)
        ?>
    </pre>
</body>
</html>