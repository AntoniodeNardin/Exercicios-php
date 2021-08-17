<?php
            $email  = $_POST["email"];
            $senha  = $_POST["senha"];
            $id = 1;
            try {
                $con = new PDO('mysql:host=localhost;dbname=site', 'root', '') or print(mysqli_error());
                $query = $con->prepare("select email, senha, id from usuarios");
                $query->execute();
                if ($query->rowCount() > 0) {
                    while ($row = $query->fetch(PDO::FETCH_OBJ)){
                        if ($row->email == $email && $row->senha == $senha){
                            echo "logado com sucesso usuario $id<br>";
                            header('location:index.html');
                        } else{
                            echo "falha no login do usuario $id<br>";
                            $id++;
                        }
                    }
                }
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }

            ?>