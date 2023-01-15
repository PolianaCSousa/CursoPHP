<?php

/*Vavriável Variável é uma variável que é definida com o valor contido em uma outra variável, ou seja, o valor contido na variável X
será o nome da variável Y. É importante saber que é preciso estar atento ao tipo de valor da variável, se a variável for um array
por exemplo, não é possível fazer uma variável variável dela.*/

$varvar = "Teste";
//a linha de baixo é o mesmo que fazer $Teste = 10;
$$varvar = 10; //a variável variável possui o nome de Teste, ou seja, podemos usar $$varvar ou $Teste para se referir a essa variável



echo $varvar . " " . $$varvar;
echo "\n".$Teste

?>