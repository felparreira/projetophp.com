<?php
/*
Adição +
Subrtação -
Multiplicação *
Divisão /
Módulo %
Exponenciação **
*/
$a = 10;
$b = 20;
$c = 30;
$d = 5;

$adicao = $a + $b;
echo $a." + ".$b." = ". $adicao;
echo "<hr>";

$subtracao = $a - $d;
echo $a." - ".$d." = ". $subtracao;
echo "<hr>";

$multiplicacao = $b * $c;
echo $b." x ".$c." = ". $multiplicacao;
echo "<hr>";

$divisao = $c / $d;
echo $c." / ".$d." = ". $divisao;
echo "<hr>";

$modulo = $c / $b;
echo $c." % ".$d." = ". $modulo;
echo "<hr>";

$exponente = $a ** $d;
echo $c." / ".$d." = ". $exponente;
echo "<hr>";

$media = ($a + $b + $c + $d)/4;
echo " A méida aritmética é igual a ". $media;
echo "<hr>";