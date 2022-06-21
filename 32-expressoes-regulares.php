<?php
// Expressões regulares.
// Define um padrão a ser usada para procurar ou substituir palavras ou grupos de palaras.
// ^inicio da expressão, $ final da expressão - /i - case sensitive.
// [] conjunto de caracteres.
// {} ocorrências - ?{0,1} *{0,} +{1,}
// /^ [a-z0-9.\-\_]+@[a-z0-9-\_]+\-(com|br|com.br|net)$/
// /^ [0-9]{2}|?{2}|?[0-9]{4}$/


//$string = "felipe@gmail.com";
//$padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|com.br|net|br)$/i";
$string = "20/06/2022";
$padrao = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";

if(preg_match($padrao, $string)):
    echo "Válido!";
    echo "<hr>";
    echo $string;
else:
    echo "Inválido!";
    echo "<hr>";
endif;
?>