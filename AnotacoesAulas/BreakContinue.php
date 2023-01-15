<?php

//O break encerra ttodo o laço de execução assim como em C

//O continue também funciona como em C: ele encerra apenas um laço do looping
//EXEMPLO: duas maneiras de imprimir os números pares
for($i=0; $i<100; $i++){
    if($i % 2 == 0){
        echo $i."\t";
    }
}

echo "\n\nUsando CONTINUE:\n";
for($i=0; $i<100; $i++){
    if($i % 2 != 0){ //quando o número não for par, o continue vai encerrar a execução da iteração em questão e o programa prossegue fazendo a iteração seguinte
        continue;
    }

    echo $i."\t";
}

?>