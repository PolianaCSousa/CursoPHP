<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Ambiente para Estudo PHP - eXcript</title>
    </head>

    <body>
    <?php
    /*Quando o código é executado pela primeira vez, não ha nada para ser lido pela variável $_POST, portanto é necessário uma verificação pra saber se já existe
     algum valor para ser lido*/
        if(isset($_POST["valor1"])){ //a função isset() verifica se uma determinada informação existe
            echo $_POST["valor1"]; //o valor inserido no campo de nome "valor1" no código html é copiado dentro da variável $_POST
        }
    ?>

        <form method="POST">
            <input type="text" name="valor1"/>
            <input type="submit"/>
        </form>
    </body>

</html>