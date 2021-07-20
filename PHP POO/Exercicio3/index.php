<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        require_once 'Garrafa.php';
        $g1 = new Garrafa("azul","Tupperware","1l");
        print_r($g1);
        echo "<br>";
        echo "modelo: " .$g1->getModelo()."<br>"."cor: ".$g1->getCor()."<br>"."capacidade: ".$g1->getCapacidade();
        ?>
    </pre>
</body>
</html>