<!DOCTYPE html>
<html lang="pt-brr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        text-align: center;
        font-size: 1.5em;
    }
</style>
<body>
    <pre>
        <?php
        require_once 'Lutadores.php';
        require_once 'luta.php';
        $l[0] = new Lutador("Fred","Alemão",25,1.90,60,5,4,2);
        $l[1] = new Lutador("Doug","Francês",35,1.98, 60,5,4,2);
        $l[2] = new Lutador("Spencer","Italiano",27,1.75,70,5,4,2);
        $l[3] = new Lutador("Carl","Belga",29,1.50,60,5,4,2);
        $l[4] = new Lutador("Arnold","Polonês",30,1.70,65,5,4,2);
        $l[5] = new Lutador("Paul","Austriaco",45,1.80,70,5,4,2);

        $UEC01 = new Luta();
        $UEC01->marcarLuta($l[2], $l[1]);
        $UEC01->lutar();

        ?>
    </pre>

</body>
</html>