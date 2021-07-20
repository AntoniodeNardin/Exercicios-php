<?php
$account = [
    'email' => $_POST['email'],
    'senha' => $_POST['senha'],
];

try {
    $con = new PDO('mysql:host=localhost;dbname=site', 'root', '') or print(mysqli_error());
    $query = $con->prepare("insert into usuarios(email, senha) values (:email, :senha)")->execute($account);
    echo 'Salvo com sucesso';
    header('location: index.php');
}catch (PDOException $exception){
    echo $exception->getMessage();
}