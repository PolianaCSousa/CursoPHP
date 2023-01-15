<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Ambiente para Estudo PHP - eXcript</title>
    </head>

    <body>

        <?php

        /*A instrução elseif é utilizada quando deseja-se verificar mais de 2 condicoes. Usa-se if para a primeira condição e para as
        condições seguintes/intermediárias  (com excessão da última condição) usa-se o elseif. Para finalizar o bloco, ou seja, caso
        nenhuma das condições anteriores tenha sido atendida, termina-se com o else para a última condição.*/

            if(isset($_POST['idade'])){
                $idade = $_POST['idade'];

                if($idade < 18){
                    echo "A idade é de uma pessoa com menos de 18 anos.";
                }elseif ($idade >= 18 and $idade <= 59){
                    echo "A idade é de um adulto.";
                }else{
                    echo "A idade é de um idoso.";
                }
            }


        ?>


        <form method="POST">
            <input type="text" name="idade"/>
            <input type="submit"/>

        </form>
</body>

</html>