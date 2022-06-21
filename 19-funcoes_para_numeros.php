<?php
//Funções para Números
/*
    number_format
    round
    ceil
    floor
    rand
*/
$db = 1232.56;
$preco = number_format($db, 2, ",",".");
echo "O valor do produto é R$ $preco";

echo "<hr>";

echo round(3.7);
echo "<hr>";

echo ceil(7.3);
echo "<hr>";

echo floor(3.7);
echo "<hr>";

echo rand(1,100);
