<?php
// For e Foreach

for ($contador = 0; $contador <= 10; $contador++):
    echo "8 x $contador = ".($contador*8). "<br>";
endfor;
echo "<hr>";

$cores = array("Verde","Vermelho","Azul","Preto");

foreach($cores as $indice => $valor):
    echo $indice. "-" .$valor. "<br>";
endforeach;
