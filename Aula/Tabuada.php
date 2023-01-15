<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Tabuada com PHP - eXcript</title>
    </head>

    <body>

    <?php

        $tab = 0;
        if(isset($_POST["TABUADA"])){
            $tab = $_POST["TABUADA"]; //recebe o valor digitado pelo usuário
            if(!is_numeric($tab)){ //verifica se o usuário digitou um número, no caso verifica primeiro se não é um número (is_numeric retorna true se for um número e falso se não for número)
                echo "<br>O valor informado não é um número.<br>";
            }else{
                for($num = 0; $num <= 10; $num++){
                    echo $tab." x ".$num." = ".$tab*$num."<br>";
                }
            }
        }
    ?>

        <form method="POST">
            <input type="text" name="TABUADA"/> <!--usuário informa o número correspondente à tabuada que ele deseja-->
            <input type="submit"/>

        </form>
    </body>

</html>
