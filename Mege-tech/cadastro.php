<?php

$account = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'senioridade' => $_POST['senioridade'],
    'desenvolvimento' => $_POST['desenvolvimento'],
    'texto' => $_POST['texto'],
    'tec1' => $_POST['tecnologia1'],
    'tec2' => $_POST['tecnologia2'],
    'tec3' => $_POST['tecnologia3'],
    'tec4' => $_POST['tecnologia4']



];

try {
    $con = new PDO('mysql:host=localhost;dbname=mege-tech', 'root', '') or print(mysqli_error());
    $query = $con->prepare("insert into trainees(name, email, senioridade, desenvolvimento, texto,tec1,tec2,tec3,tec4) values (:name , :email ,:senioridade, :desenvolvimento, :texto, :tec1, :tec2,:tec3,:tec4)")->execute($account);
    echo 'Salvo com sucesso';
    header('location: index.php');
}catch (PDOException $exception){
    echo $exception->getMessage();
}
header('location: index.html');
?>