<?php

#O operador Null Coalesce verifica se determinada referência existe, ou se determinado elemento existe no array
#Sintaxe do operador NullCoalesce: echo $x ?? ""; Caso a referência o valor de $x exista, imprime o valor dela, caso contrário imprime
#"".
#O operador Null Coalesce está usando implicitamente a função isset

$ddd = $_GET['ddd'] ?? "00";
$tel = $_GET['tel'] ?? "0000-0000";
#tambem podemos usar varios operadores concatenados
#$tel = $_GET['tel'] ?? $_GET['celular'] ?? "0000-0000";

echo "Tel: ($ddd) $tel";



?>


