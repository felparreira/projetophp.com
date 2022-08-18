<?php
//Conexão com banco de dados

$servername = "localhost";
$username = "root";
$password = "123456";
$db_name = "app_oficina";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
    echo "Erro na Conexão: ".mysqli_connect_error();
endif;