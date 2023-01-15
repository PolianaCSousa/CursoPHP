<?php

#ITERANDO COM O FOR NORMAL
$semana = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];
$qtd = count($semana); //a função count retorna a quantidade de elementos de um array

for($i = 0; $i < $qtd; $i++){
    echo $i . ": " . $semana[$i] . "\n";
}

#ITERANDO COM FOREACH
#O foreach é uma estrutura de repetição especializada para iterar arrays
#Sintaxe: foreach ( <array> as <valor> ) onde, array recebe o nome do array e valor recebe a variável que receberá os valores contidos
#no array, a cada iteração.

#FOREACH QUE RETORNA O ELEMENTO (ITEM)
#o laço é iterado para cada elemento do array, e a cada iteração, o elemento é atribuído à variável dia
echo "\nIterando com foreach\n";
foreach ($semana as $dia){
    echo "$dia\n";
}

#FOREACH QUE RETORNA A CHAVE ASSOCIADA A CADA ELEMENTO E O ELEMENTO
#o laço é iterado para cada elemento do array, e a cada iteração, a chave é atribuída à variável chave e o elemento é atribuído à variável
#dia
foreach($semana as $chave => $dia){
    echo "$chave: $dia\n";
}


#ALTERANDO VALORES COM O LAÇO FOREACH
#os valores retornados pelo foreach e que são atribuídos às variáveis são cópias dos valores contidos no array. Para passar o endereço
# de memória dos valores contidos no array (passagem por referência) basta usar o &

/*echo "\nAlterando valores por referência\n";
foreach($num as $chave => &$valor){
    $valor *= 10;
}
*/
//outra forma de alterar os valores do array, mas sem passagem por referência
$num = range(0,10);
foreach($num as $chave => $valor){
    $num[$chave] = ($valor *= 10);
}
print_r($num);


?>