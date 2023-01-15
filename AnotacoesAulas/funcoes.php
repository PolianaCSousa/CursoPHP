<?php

declare(strict_types = 1);

#OBS: diferença entre FUNÇÃO e MÉTODO: a função retorna valor, o método não retorna valor.
#OBS: diferença de argumentos e parâmetros: parâmetros são as variáveis declaradas no cabeçalho da função, e argumentos são os valores passados quando chama-se a função
/*SINTAXE DE FUNÇÕES EM PHP:  function nomeDaFunção() {

                                  código aqui

                              }*/
#---FUNÇÃO BÁSICA---------------------------------------------------------------------------------------------------------------------------------------------------
function Hello(){
    echo "Hello World!\n\n";
}

Hello();

#---FUNÇÃO COM PARÂMETROS--------------------------------------------------------------------------------------------------------------------------------------------
function soma($num1, $num2){

    $total = $num1 + $num2;

    echo "Total: " . $total . "\n";
}

soma(10, 20);

#---funções com parâmetros default - é possível determinar um valor padrão para o parâmetro caso nenhum valor seja passado pelo usuário
function login($user = "root", $senha = "123"){

    echo "User: " . $user . "\n" . "Senha: " . $senha . "\n";
}

login(); //se não passar nada como argumento, ele imprimirá os valores padrão
login('Poli', 654321); //se forem passados argumentos, então eles serão atribuídos às variáveis do parâmetro da função e sobrescreverão os valores default


#---LISTA DE PARÂMETROS-----------------------------------------------------------------------------------------------------------------------------------------------
/*Na maioria das vezes, a quantidade de parâmetros é fixo, no entanto, haverão casos em que, uma função deverá ser flexível e receber uma quantidade diferente de
parâmetros. Funções que recebem uma lista de parâmetros são chamadas de funções variádicas.

FORMA ANTIGA DE IMPLEMENTAR FUNÇÕES VARIÁDICAS:
O PHP possui três funções para trabalharmos com lista de parâmetros
- func_get_arg(<indice>) : ela é usada em casos em que sabemos a posição que cada parâmetro está. Ela nos permite acessar o parâmetro por meio do índice dele na
lista de parâmetros que foi passada.
- func_get_args() : retorna o array de parâmetros que foram passados.
- func_num_args() : retorna a quantidade de parâmetros que foram passados.
*/

echo "\n\nSomando valores com lista de parâmetros: ";
function somaComLista() {

    $total = func_get_arg(0) + func_get_arg(1) + func_get_arg(2);
    echo $total;

}
somaComLista(10, 8, 2);

function somaTudo(){

        $listaNumeros = func_get_args();
        $total = 0;
        foreach($listaNumeros as $num){

            $total += $num;
        }

        echo "\nA soma de todos os parâmetros é: " . $total;

}
somaTudo(1, 2, 3, 4, 5, 6);

#- FORMA ATUAL PARA IMPLEMENTAR FUNÇÕES VARIÁDICAS:
#A outra maneira para implementar esse tipo de função, não utiliza as funções func_get_arg e etc. Para dizer que um função receberá uma lista de parâmetros, basta
#preceder a variável do parâmetro com ... (três pontos). Ao fazer isso, a variável vira um array (lista) que receberá quantos parâmetros forem necessários.

#OBS: também é posssível receber valores antes da lista de parâmetros: media($a, $b, ...$valores). Nesse caso a lista de parâmetro deve ser o último parâmetro da
#função, ou seja media(...$valores, $a, $b) ESTÁ ERRADO!
function media(...$valores){

    $resultado = array_sum($valores) / count($valores);
    echo "\n\nMédia: " . "$resultado\n";

}
media(1,2,3);

#---RETORNO DE VALORES ---------------------------------------------------------------------------------------------------------------------------------------------------
echo "\nFunção com retorno que calcula o cubo de um número: ";
function cubo($num){

    $x = $num * $num * $num;

    return $x;

}

echo cubo(3);

#---PARÂMETROS POR REFERÊNCIA---------------------------------------------------------------------------------------------------------------------------------------------------
//É feito igual em C: usa o & para passar o endereço da variável
echo "\n\nPassagem por referência:\n";
$a = [1,2,3];
 function funcao(&$arg){
     print_r($arg);
     $arg[2] = 0;
 }

 funcao($a);
 print_r($a);

 #para retornar a referência de uma variável, basta colocar o & antes do nome da função, tanto na hora de declarar a função quanto na hora de chamar a função
echo "\n\nRetorno por referência:\n";
function &func(){
    $a = [1,2,3];
    print_r($a);
    return $a;
}

$retorno = &func();
print_r($retorno);


#---PARÂMETROS TIPADOS----------------------------------------------------------------------------------------------------------------------------------------------
#é possível determinar o tipo do parâmetro que deve ser passado.
#Caso eu declare os tipos dos parâmetros da minha função como inteiros, mas eu passe um string no lugar, o PHP converte pra mim. Portanto, caso eu queira que os
#tipos sejam respeitados, deve declarar no escopo global a seguinte função: declare(strict_types = 1)
echo "\n\nCalcula a área do quadrado: \n";

function calcArea(int $l1, int $l2){
    return $l1 * $l2;
}

$area = calcArea(10,8);
echo "Área do quadrado: $area";

echo "\n\nSoma todos os valores passados: \n";
//a função recebe uma lista de parâmetros do tipo inteiro apenas
function getSum(int ...$valores){
    return array_sum($valores);
}

$soma = getSum(1,2,3,4,5,6,7,8,9,10);
echo "Soma dos valores passados: $soma";

#---VALORES DE RETORNO TIPADOS--------------------------------------------------------------------------------------------------------------------------------------
#para definir o tipo de dado que será retornado pela função basta colocar:   : tipodovalor na frente do nome da função
echo "\n\nValores de retorno tipados:\n";
function calculaCubo(float $num) : float
{
    return $num * $num * $num;
}

echo "Cubo: " . calculaCubo(10) . "\n"; #um float pode receber um inteiro, mas um inteiro não pode receber um float

function teste() : array
{
    return [10, "eXcript", 5];
}

$array = teste();
print_r($array);

//a função var_dump retorna o valor retornado pela função teste() e o tipo desse valor retornado
var_dump(teste());


?>