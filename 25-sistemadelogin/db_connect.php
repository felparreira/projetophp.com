<?php
//Conexão com Banco de Dados

$servername = "localhost";
$username = "root";
$password = "123456";
$db_name = "sistemalogin";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if (mysqli_connect_error()):
    echo "Falha na conexão: ".mysqli_connect_error();
endif;
?>