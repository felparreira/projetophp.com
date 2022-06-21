<?php
//array
$carros = array("BMW", "Hilux", "Audi");
$carros[]="Amarok";
echo $carros[3];
echo "<hr>";

$motos = array();
$motos[]="Lander";
$motos[]="Fazer";
$motos[]="XRE";

print_r($motos);
echo "<hr>";

$clientes = ["Felipe", "Carlos", "Henrique"];
print_r($clientes);
echo "<hr>";

//count

$totalMotos = count($motos);
echo $totalMotos;
echo "<hr>";

//foreach

foreach($carros as $valor){
    echo $valor."<hr>";
}

//array associativo
$pessoa = array("nome"=>"Rodrigo","idade"=>23,"altura"=>1.75);
$pessoa["cidade"] = "Viçosa";

foreach($pessoa as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}

//array multidimensionais

$times = array(
    "cariocas"=> array("Campeão"=>"Flamengo","Vice"=>"Vasco","Terceiro"=>"Fluminense","Rebaixado"=>"Botafogo"),
    "paulistas"=> array("Santos","Palmeiras","São Paulo","Corinthians") 
);

echo "<hr>";
foreach ($times["cariocas"] as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}