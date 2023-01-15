<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Ambiente para Estudo PHP - eXcript</title>
    </head>

    <body>

    <?php

        $login = "eXcript";
        $senha = "12345";

        if(isset($_POST["login"])){
            //echo $_POST["login"]. "<br>";
            //echo $_POST["senha"];

            if($login == $_POST["login"] and $senha == $_POST["senha"]) {
                echo "Login efetuado com sucesso!" . "<br>";
           }else{
                echo "Login ou senha inválidos. Tente novamente." . "<br>";
            }

        }
    ?>

        <form method="POST">
            <input type="text" name="login"/><br>
            <input type="password" name="senha"/>
            <input type="submit"/>
        </form>
    </body>

</html>
