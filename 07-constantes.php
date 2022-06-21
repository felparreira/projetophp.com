<?php
//Constantes
define("NOME", "José Carlos");
define("IDADE", "47");
define("ALTURA","1.79");
define("CASADO","true");

define("TIMES",["vasco", "santos", "avai"]);

echo 'Meu nome é ' .NOME. ', minha idade é ' .IDADE. ' e minha altura é '.ALTURA ;
echo "<hr>";
echo TIMES[2];
echo "<hr>";

function exibeNome(){
    echo NOME;
}

exibeNome();