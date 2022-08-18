<?php
require_once 'php_action/bd_connect.php';
//Sessão
session_start();

//Clear
function clear($input) {
    global $connect;
    //sql
    $var = mysqli_escape_string($connect, $input);
    //xss
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['btn-cadastrar'])):
    $marca = clear($_POST['marca']);
    $modelo = clear($_POST['modelo']);
    $ano = clear($_POST['ano']);
    $cor = clear($_POST['cor']);
    $placa = clear($_POST['placa']);

    $sql = "INSERT INTO veiculos (marca, modelo, ano, cor, placa) VALUES ('$marca', '$modelo', '$ano', '$cor', '$placa')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: veiculos.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: veiculos.php');
    endif;
endif;
?>