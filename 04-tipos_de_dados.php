<?php
/*Dados Escalares*/
//string
$nome = "Ola Mundo";
var_dump($nome);

if(is_string($nome)):
    echo "É uma string";
else: echo "Não é uma string";
endif;
echo "<hr>";

//int
$idade = 31;
var_dump($idade);
if(is_int($idade)):
    echo "É um inteiro";
    else: echo "Não é um inteiro";
endif;
echo "<hr>";

//float
$altura = 1.67;
var_dump($altura);
if(is_float($altura)):
    echo "É um float";
    else: echo "Não é um float";
endif;
echo "<hr>";

//boolean
$admin = false;
var_dump($admin);
if(is_bool($admin)):
    echo "É um boolean";
    else: echo "Não é um boolean";
endif;
echo "<hr>";

/*Dados Compostos*/
//array
$carros = array("Gol", "Uno", "Palio", 12, true, 20.8);
var_dump($carros);
if(is_array($carros)):
    echo "É um array";
    else: echo "Não é um array";
endif;
echo "<hr>";

//object
class Cliente{
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Felipe");

var_dump($cliente);
if(is_object($cliente)):
    echo "É um objeto";
    else: echo "Não é um objeto";
endif;
echo "<hr>";

//null
$cidade=null;
var_dump($cidade);

//resource
