<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<main>
    <h1>Petshop</h1>
        <div id="cadastro">
            <h2 class="titulos">Cadastro</h2>
                <form action="cadastro.php" method="post">
                    <div>
                        <p><span><strong><label for="">Nome</label></strong></span></p>
                        <input type="text" name="name" required placeholder="nome">
                    </div>
                    <div>
                        <span>
                            <p><strong><label for="">Nome pet</label></strong></p>
                        </span>
                        <input type="text" name="namepet" required placeholder="nome do pet">
                    </div>
                    <div>
                    <strong>
                        <p><label for="">Data</label></p>
                    </strong>
                    <input type="date" name="date" id="" required >
                    </div>
                   <p id="servicos">
                       <label>
                        <span><input type="radio" class="opcao" name="servico" value="tosa" >Tosa</span>
                        </label>
                         <label>
                        <input type="radio" class="opcao"name="servico" value="banho">Banho
                        </label>
                         <label>
                         <input type="radio" class="opcao" name="servico" value="unhas ">Unhas
                   </p>
                     <button type="submit">Enviar</button>
                </form>
        </div>

    <div id="listadeclientes">
    <h2 class="titulos">Lista de clientes</h2>
        <ul>
            <?php
            try {
                $con = new PDO('mysql:host=localhost;dbname=petshop', 'root', '') or print(mysqli_error());
                $query = $con->prepare("select name, namepet, date, servico from clientes");
                $query->execute();
                if ($query->rowCount() > 0) {
                    while ($row = $query->fetch(PDO::FETCH_OBJ)){
                        echo '<li>'.'Nome: '. $row->name .'<li>'. '<li>'. 'Nome do pet: '. $row->namepet. '<li>'.'Data: '.$row ->date.'<li>'.'Serviço: '.$row ->servico.'<li>'.'<hr>';
                    }
                }
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }

            ?>
        </ul>
    </div>
   
</main>
</body>
</html>