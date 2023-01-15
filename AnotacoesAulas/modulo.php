<?php

    $num1 = 9;
    $num2 = 2;
    $res = $num1 / $num2;
    $modulo = $num1 % $num2;
    echo $num1 . " dividido por " . $num2 . " = " . $res;
    echo "<br>O resto da divisão é: " . $modulo;

    /*os dois operandos dever ser do tipo inteiro. Se um dos dois for do tipo float, o php pega apenas a parte inteira do número e calcula
    o módulo. Para obter o modulo da divisão entre um número inteiro e um decimal (ou entre 2 decimais) devemos usar a função fmod.*/

    echo "<br>Resto da divisão entre 7 e 3.3 = " . fmod(7, 3.3);

?>