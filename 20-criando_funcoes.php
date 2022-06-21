<?php

function exibirNome($nome){
    echo "Meu nome é $nome";
}

exibirNome("Phelps");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4)/4;
    if($media >= 7):
        echo "O aluno $nome foi aprovado com a média $media";
    else:
        echo "O aluno $nome foi reprovado.";
    endif;
}

calcularMedia("Pedro", 7, 7 , 6, 8);