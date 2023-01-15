<?php
/*As constantes em PHP são declaradas em letras maiúsculas e sem o $*/

//primeira forma de declarar constante em PHP:
define("TESTE", 10); //com a função define é possível declarar constantes em tempo de execução
echo TESTE;

//segunda forma de declarar constante em PHP:
const VALOR = 1000; //com a função const não é possível declarar constantes durante a execução
echo "\n". VALOR;

//Exemplificando a diferença entre as duas funções:
//DEFINE
for($x = 0; $x < 5; $x++){
    define("CONSTANTE".$x, $x);
}

echo "\n". CONSTANTE0;
echo "\n". CONSTANTE2;
echo "\n". CONSTANTE3;

?>