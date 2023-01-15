<?php

/*Em PHP: array (vetor) é um conjunto de elementos contidos numa estrutura onde cada elemento possui uma chave que o identifica, ou seja,
cada elemento do array possui uma chave que o diferencia dos demais.
-> Em PHP, não é preciso definir o tipo de dados que o array guardará, pois ele guarda qualquer tipo de dado.
-> Existem operações para adicionar, alterar e remover elementos do array. Logo, array em PHP é uma estrutura de lista.
-> Existem três formas para trabalhar com os arrays:
   - INDEXADOS: os elementos possuem índice numérico e o primeiro elemento possui índice 0
   - ASSOCIATIVOS: estrutura onde cada elemento está vinculado a uma chave, seja uma string ou um número (parece dicionário de Python)
   - MULTIDIMENSIONAIS: estruturas que contém Arrays como elementos. (matrizes)*/

//a função array já me devolve um array
$a = array(1,2,3);
//print_r é a função que imprime arrays
print_r($a);

//-------------------------------------------------------- ARRAY INDEXADO ----------------------------------------------------------
#DECLARAÇÃO: existem quatro maneiras de declarar arrays indexados em PHP
#1ª - Usando a função array()
echo "ARRAY INDEXADO\n";
echo "\n_____________FORMAS DE DECLARAR ARRAY______________\n";
$cores = array("Azul", "Rosa", "Roxo", "Vinho");
print_r($cores);

#2ª - Inserindo item por item informando o índice (chave associada a cada elemento)
echo "\n_________________________________\n";
$cores2[0] = "Azul";
$cores2[1] = "Rosa";
$cores2[2] = "Roxo";
$cores2[3] = "Vinho";
print_r($cores2);

#3ª - Inserindo item por item sem informar o índice (chave associada a cada elemento), nesse caso o PHP se encarrega de colocar os índices
echo "\n_________________________________\n";
$cores3[] = "Azul";
$cores3[] = "Rosa";
$cores3[] = "Roxo";
$cores3[] = "Vinho";
print_r($cores3);

#4ª - Atribuindo uma lista para a variável que será o array
echo "\n_________________________________\n";
$cores4 = ["Azul", "Rosa", "Roxo", "Vinho"];
print_r($cores4);

#OPERAÇÕES: é possível adicionar, alterar ou excluir um elemento de um array
echo "\n_____________OPERAÇÕES COM ARRAY______________\n";
$arr = ["zero", "um", "dois", "três", "quatro"];
print_r($arr);
#ADICIONANDO
#o índice é inserido em sequência, se o último índice do vetor era 4 antes da inserção, o novo elemento terá índice 5
echo "\nInserindo elementos:\n";
$arr[] = "cinco";
print_r($arr);

#ALTERANDO
echo "\nAlterando elementos:\n";
$arr[2] = "DOIS";
print_r($arr);

#DELETANDO
#a função unset exclui o espaço na memória. Logo ele não reindexará os índices do vetor, isso deve ser feito manualmente.
echo "\nDeletando elementos:\n";
unset($arr[4]);
print_r($arr);

//-------------------------------------------------------- ARRAY ASSOCIATIVO ----------------------------------------------------------
#funciona igual aos dicionários em Python: cada elemento está associado à uma chave
echo "\nARRAY ASSOCIATIVO\n";
$idade = ["Poliana"=>22, "Estefane"=>24, "Bob"=>15];
echo "Poliana: " . $idade["Poliana"] . "\n";
echo "Estéfane: " . $idade["Estefane"] . "\n";
echo "Bob: " . $idade["Bob"] . "\n";

#alterando valores de chaves
$idade["Poliana"] += 1;
echo "Poliana depois do aniversário: " . $idade["Poliana"] . "\n";

//-------------------------------------------------------- ARRAY MULTIDIMENSIONAL ----------------------------------------------------------
echo "\nARRAY MULTIDIMENSIONAL - MATRIZES";
#   | ID | NOME | PONTOS |
#   | 1  |  Zé  |   11   |
#   | 2  | José |   4    |
#   | 3  | Zeca |   22   |

#para definir uma matriz basta declarar um array de arrays:
$jogo = array(array(1, "Zé", 11), array(2, "José", 4), array(3, "Zeca", 22));
print_r($jogo);
echo "\n" . $jogo[1][1] . "\n";

#no caso do exemplo dado, cada coluna possui um nome, então a outra maneira (e a melhor) de definir essa matriz, seria associando
#cada valor à chave correspondente da sua coluna:
$jogo2 = array(
                array("id"=>1, "nome"=>"Zé", "pontos"=>11), 
                array("id"=>2, "nome"=>"José", "pontos"=>4), 
                array("id"=>3, "nome"=>"Zeca", "pontos"=>22)
         );

#outra forma de definir o mesmo array é usando os cochetes no lugar da função array()
$jogo3 = [
            ["id"=>1, "nome"=>"Zé", "pontos"=>11],
            ["id"=>2, "nome"=>"José", "pontos"=>4],
            ["id"=>3, "nome"=>"Zeca", "pontos"=>22]
         ];


#$jogo2[linha][nome da coluna]
echo $jogo2[1]["nome"];
?>


