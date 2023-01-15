<?php

/*Esse operador permite faze três verificações ao mesmo tempo: verificia se o operador da esquerda é menor, igual ou maior que o
operador da direita.
Ele retorna um inteiro onde:
 -> -1 se for menor
 -> 0 se for igual
 -> 1 se for maior

Esse operador pode ser usado para comparar arrays. Alguns exemplos:
[] <=> []            retorna 0
[1,2,3] <=> [1,2,3]  retorna 0
[1,2,3] <=> []       retorna 1
[1,2,3] <=> [1,2,0]  retorna 1
[1,2,3] <=> [1,4,4]  retorna -1
*/

foreach(range(0,9) as $v){

    $x = rand(0,9);
    $resultadoOperador = $v<=> $x;
    echo "$v <=> $x é $resultadoOperador\n";

}






?>