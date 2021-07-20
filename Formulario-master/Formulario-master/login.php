
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body,html{
        margin: 0;
        padding:0 ;
        background-color: #001;
    }
    section{
        text-align: center;
        font-family: sans-serif;
        font-size: 30px;
        background-color: #123;
        color: #fff;
        padding: 50px;
        margin: 75px 150px 0px 150px;
        border-radius: 25px;
        line-height:2;
    }
    strong{
    text-shadow: 2px 2px 2px #001;
}
    </style>
</head>
<body>

<section>
    <?php
    $HTML = 0;
    $CSS = 0;
    $JavaScript = 0;
    $PHP = 0;
    $CSHARP = 0;
    $Python = 0;
    $Java = 0;
    $HTML = 0;
    $nome = 0;
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email= $_POST["email"];
    $devweb = $_POST["devweb"];
    $senioridade = $_POST["senioridade"];
    $HTML = $_POST["tecnologia1"];
    $CSS = $_POST["tecnologia2"];
    $JavaScript = $_POST["tecnologia3"];
    $PHP = $_POST["tecnologia4"];
    $CSHARP = $_POST["tecnologia5"];
    $Python = $_POST["tecnologia6"];
    $Java = $_POST["tecnologia7"];
    $texto = $_POST["texto"];
    
    echo "<strong>Nome: </strong>".$nome;
    echo "<br>";
    echo "<strong>Sobrenome:</strong> ".$sobrenome;
    echo "<br>";
    echo "<strong>E-mail:</strong> ".$email;
    echo "<br>";
    echo "<strong>Devweb:</strong> ".$devweb;
    echo "<br>";
    echo "<strong>Senioridade:</strong> ".$senioridade;
    echo "<br>";
    echo "<strong>Tecnologias: </strong>".$HTML." ".$CSS." " .$JavaScript." ". $PHP. " ". $CSHARP." " .$Python. " ".$Java;
    echo "<br>";
    echo "<strong>Texto</strong>: $texto";
    ?>
    </section>
    </body>
    </html>
