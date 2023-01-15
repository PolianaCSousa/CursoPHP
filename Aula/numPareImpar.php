<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Números Pares e Ímpares - Curso PHP - eXcript</title>
    </head>

    <body>

    <?php
        if(isset($_POST["num"])){
           echo $_POST["num"]; //mostra na tela o valor inserido
           $num = $_POST["num"]; //copia o valor digitado para a variável $num

           if($num % 2 == 0){
               echo "<br>O número " . $num . " é par.";
           } else{
               echo "<br>O número " . $num . " é ímpar.";
           }
        }
    ?>
        <form method="POST">
            <input type="text" name="num"/>
            <input type="submit"/>

        </form>
    </body>

</html>
