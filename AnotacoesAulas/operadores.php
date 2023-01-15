<?php
//OPERADORES ARITMÉTICOS
    $num1 = 5;
    $num2 = 10;
    $soma = $num1 + $num2;
    echo "\n . A soma entre num1 e num2 é: " . $soma;
    $multi = $num1 * $num2;
    echo "\n . A multiplicação entre num1 e num2 é: " . $multi;
    $divi = $num1 / $num2;
    echo "\n . A divisão entre num1 e num2 é: " . $divi; //o <br> so funciona no navegador

//OPERADORES RELACIONAIS
/*Operadores relacionais: ==, !=, >, <, >=, <=, <>(outro operador usado para diferença), === (operador que verifica se 2 operandos são idênticos - se são iguais e do mesmo tipo)
  Lembre que a operação relacional entre dois operadores sempre da retorno, e o retorno é do tipo boleano. Quando eu uso uma expressão
  dessa no if, ela retorna true ou false. Ex: if(10 == 10) me retorna true.*/

    echo "\n"; //o \n so funciona aqui no terminal
    //a função var_dump retorna o valor da expressão e o tipo desse valor retornado
    var_dump(10 == 10);
    var_dump(10 == "10"); //no php a string é convertida para inteiro, portanto 10 == "10" será verdadeiro
    var_dump(10 === "10"); //nesse caso apesar de "iguais" os operando sao de tipos diferentes, então será retornado false

//OPERADORES LÓGICOS
/*Operadores lógicos: conjunção/e: && ou and
                      disjunção/ou: || ou or
                      negação/not: !
*/

//OPERADORES DE ATRIBUIÇÃO COMPOSTOS
//Operadores de atribuição compostos, são aqueles que fazem alguma operação antes de atribuir
$x = 9;
$y = 3;
$x+=$y; //x = x + y
$x-=$y; //x = x - y
$x*=$y; //x = x * y
$x/=$y; //x = x / y
$x%=$y; //x = x % y

//OPERADORES DE INCREMENTO DE DECREMENTO
$x = 2;
$x++; //incrementa em uma unidade
$x--; //decrementa em uma unidade
echo $x . "\n";
echo ++$x . "\n"; //incrementa primeiro e depois imprime (pré incremento: incrementa a variável antes do ;)
echo --$x . "\n"; //decrementa primeiro e depois imprime
echo $x++ . "\n"; //imprime primeiro e depois incrementa, portanto o resultado só será dado na proxíma linha, quando imprimir de novo (pós incremento: incrementa a variável depois do ;)

?>
