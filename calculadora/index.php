<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora</title>
</head>
<body>
    <header>
        <h1>CALCULADORA</h1>
    </header>
   <section>
       <div id="campos">
           <form method="post" >
           <label for="n1">  <h2>Primeiro Número:</h2></label>
             <input name="num1" type="text"><br>
             <label for="n1">  <h2>Segundo Número:</h2></label>
              <input name="num2" type="text"><br>
           
       </div>
       <br>
       <input type="radio" name="operação" id="" value="+">
       <label for="operação">Soma</label>
       <input type="radio" name="operação" id=""value="-">
       <label for="operação">Subtração</label>
       <input type="radio" name="operação" id=""value="*">
       <label for="operação">Divisão</label>
       <input type="radio" name="operação" id=""value="/">
       <label for="operação">Multiplicação</label>
       <p><input type="submit" value="enviar"></p>
       </form>
       <?php
   $a = 0;
   $b = 0;
   $op = 0;

   $a = $_POST["num1"];
   $b = $_POST["num2"];
   $op= $_POST["operação"];
   switch ($op) {
      case '+':
         echo 'a soma dos valores é:'.$a+$b;
         break;
         case '-';
         echo 'a subtração dos valores é: '.$a-$b;
            break;
            case '*':
               echo 'a multiplicação dos valores é: '.$a*$b;
               break;
               case '/':
                  echo 'a divisão dos valores é: '.$a/$b;
                  break;
   }
   
?>       
   </section>

</body>
</html>