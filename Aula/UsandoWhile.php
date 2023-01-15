<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estrutura DO-WHILE - caso de uso - PHP - eXcript</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>

    <body>

    <?php
        if(isset($_POST["dependentes"])){
            $dependentes = $_POST["dependentes"]; //captura o valor digitado pelo usuário no campo de nome "dependentes" no formulário
            /*esse if verifica se algo foi digitado no campo. Se o usuário apenas apertar o botão sem digitar nada, a variável $dependentes receberia uma string
            nula. Para tratar isso, colocamos o numero 1 nela para substituir o null.*/
            if(! is_numeric($dependentes)){
                $dependentes = 1;
                echo "formulário foi enviado vazio";
            }
            /*Olhando o código abaixo, o echo está "imprimindo" um código html. Na verdade ele está enviando esse código para a saída padrão e então é enviado para
            o navegador do usuário que irá compilar o código HTMl.*/

            //o cabeçalho é impresso só uma vez
            echo "<table>
            <tr>
                <th></th>
                <th>Nome</th>
                <th>Nasc</th>
            </tr> ";
            
            $aux = 0;
            do{
                $aux++;
                //as demais linhas da tabela serão impressas n vezes conforme o número de dependentes
                echo "
                <tr>
                    <td>Dependente $aux</td>
                    <td><input type = 'text' name = 'nome'></td>
                    <td><input type = 'text' name = 'nasc'></td>
                </tr>";
            }while($aux < $dependentes);
    
            echo "</table>";

        }
    ?>

    <!-- CÓDIGO DA TABELA QUE FOI IMPLEMENTADO NO LAÇO DE REPETIÇÃO USANDO ECHO
        <table>
            <tr>
                <th></th>
                <th>Nome</th>
                <th>Nasc</th>
            </tr>
            <tr>
                <td>Dependente</td>
                <td><input type = 'text' name = 'nome'></td>
                <td><input type = 'text' name = 'nasc'></td>
            </tr>
        </table>
        -->

        <form method="POST">
            <input type="text" name="dependentes"/>
            <input type="submit"/>
        </form>


    </body>

</html>