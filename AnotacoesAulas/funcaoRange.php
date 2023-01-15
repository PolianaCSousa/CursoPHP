<?php
#a função range gera números dentro de um intervalo passado como parâmetro e retorna um array contendo os valores gerados.
#Sintaxe: range(primeiro numero da sequencia, ultimo numero da sequencia, de quanto em quanto deve saltar)
#OBS: se o último (terceiro) parâmetro não for passado, a funcão retorna de um em um

$X = range(0, 5);
print_r($X);
$X = range(0, 5, 2); #salta de dois em dois
print_r($X);

$alfabeto = range("a", "z");
print_r($alfabeto);


?>