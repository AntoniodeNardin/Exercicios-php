<?php
            $email  = $_POST["email"];
            $senha  = $_POST["senha"];
            try {
                $con = new PDO('mysql:host=localhost;dbname=site', 'root', '') or print(mysqli_error());
                $query = $con->prepare("select email, senha from usuarios");
                $query->execute();
                if ($query->rowCount() > 0) {
                    while ($row = $query->fetch(PDO::FETCH_OBJ)){
                        if ($row->email == $email && $row->senha == $senha){
                            echo "logado com sucesso<br>";
                            header("location: index.html");
                        } else{
                            echo "falha no login";
                        }
                    }
                }
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }

            ?>