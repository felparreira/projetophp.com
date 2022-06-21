<?php
/*
is_array($array) = verificar se uma determinada variável é um array
in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array
array_keys($array) = retorna um novo array com as chaves do array passado como parâmetro
array_values($array) = retorna um array com os novos valores do array passado como parâmetro
array_merge($array1, $array2) = agrega o conteúdo dos dois arrays
array_pop($array) = exclui a última posição do array
array_shift($array) = exclui a primeira posição do array
array_unshift($arr, "valor") = adiciona um ou mais elementos no início do array
array_push($array, "valor", "valor") = adiciona um ou mais elementos no final de um array
array_combine($keys, $values) = mescla os dois arrays passados
array_sum() = calcula a soma dos elementos do array
explode("/","20/01/2001") = transforma string em array
implode("-",$arr) = transforma array em string
*/

$nomes = array("Primo"=>"Felipe","Irmão"=>"José","Cunhado"=>"Roberto");

$keys = array_keys($nomes);
print_r($keys);