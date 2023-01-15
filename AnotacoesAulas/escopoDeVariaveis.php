<?php

#Para acessar uma variável global é preciso colocar a expressão GLOBAL antes do nome da variável

#A outra forma para acessar as variáveis globais do programa é por meio da constante GLOBALS, que é uma lista (mais precisamente um
#dicionário) que contém todas as variáveis globais declaradas no programa e seu valor. O nome das variáveis (sem $) são as chaves do
#dicionário e o valor atribuído às variáveis são os valores/itens do dicionário.

$a = 10;
$b = 5;

function estudoEscopo(){
    global $a;
    echo "$a\n";
    echo $GLOBALS["b"];
}

estudoEscopo();
?>