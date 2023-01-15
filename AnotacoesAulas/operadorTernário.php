<?php
/*operação Ternária é uma estrutura condicional simplificada
SINTAXE: <variável> = (condição) ? <valor1> : <valor2>;*/




//Até o momento, os valores eram enviados para o servidor por meio de formulários. Nessa aula, usou-se a constante GET, que contém todas as chaves enviadas pela URL

$txt = isset($_GET["texto"]) ? $_GET["texto"] : "A chave não existe.";

echo $txt;

?>