<?php

#ALGUMA FUNÇÕES PARA MANIPULAR ARRAYS
//FUNÇÃO is_array(): verifica se a estrutura passada é array, e retorna 1 caso seja um array e nada se não for array
echo "FUNÇÃO: is_array()\n[] é array? " . is_array([]) . "\n";
echo  "array() é array? " . is_array(array()) ."\n";
echo  "[1, 2, 3] é array? " . is_array([1, 2, 3]) . "\n";
echo  "10 é array? " . is_array(10) . "\n";


//FUNÇÃO count(): retorna a quantidade de elementos do array. Retorna 1 se o valor estiver no array e nada se o valor não estiver
echo "\nFUNÇÃO: count()\n[1,2,3,4] - possui " . count([1, 2, 3, 4]) . " elementos\n";
echo "range(0, 1000) - possui " . count(range(0, 1000)) . " elementos\n";

//FUNÇÃO in_array(): verifica se um valor está contido no array
echo "\nFUNÇÃO in_array():\nin_array(2, [0, 2, 4, 6]) : " . in_array(2, [0, 2, 4, 6]);
echo "\nin_array(3, [0, 2, 4, 6]) : " . in_array(3, [0, 2, 4, 6]);

//FUNÇÃO sort(): ordena os elementos do array em ordem crescente
echo "\nFUNÇÃO sort():";
$vetor = ["c", "a", "b", "f"];
sort($vetor);
print_r($vetor);

//FUNÇÃO array_reverse: a função inverte a ordem dos elementos do array
$vetor = [4, 6, 2, 3];
$vetor = array_reverse($vetor);
print_r($vetor);

//FUNÇÃO array_sum(): soma todos os elementos de um array
echo "\nFUNÇÃO array_sum: ";
$vetor = [1, 2, 3, 4];
$soma = array_sum($vetor);
echo $soma;

//FUNÇÃO array_merge():  a função junta dois arrays em um só
echo "\nFUNÇÃO array_merge: \n";
$v1 = [1, 2];
$v2 = ["a", "b"];
$v3 = array_merge($v2, $v1);
print_r($v3);

?>