<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        font-size: 2em;
        text-align: center;
    }
</style>
<body>
    <pre>
        <?php
        require_once 'ControleRemoto.php';
        $c = new ControleRemoto();
        $c->ligar();
        $c-> maisVolume();
        $c-> maisVolume();
        $c-> menosVolume();
        $c-> ligarMudo();
        $c-> desligarMudo();
        $c-> abrirMenu();
        ?>
    </pre>
</body>
</html>