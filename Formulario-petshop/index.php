<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="cadastro.php" method="post">
<p>
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="">
</p>
<p>
    <label for="nome-pet">Nome pet:</label>
    <input type="text" name="nome-pet" id="">
</p> 
<label for="data">Data: </label>
<input type="date" name="data" id="">

<input type="radio" name="servico" value="tosa" checked>Tosa
</label>
<label>
<input type="radio" name="devweb" value="banho">Banho
</label>
<label>
<input type="radio" name="devweb" value="unhas">Unhas
<input type="submit" value="enviar">
</form>
</body>
</html>