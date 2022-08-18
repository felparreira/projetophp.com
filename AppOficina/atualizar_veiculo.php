<?php
require_once 'php_action/bd_connect.php';
//Sessão
session_start();

if(isset($_POST['btn-editar'])):
    $marca = mysqli_escape_string($connect, $_POST['marca']);
    $modelo = mysqli_escape_string($connect, $_POST['modelo']);
    $ano = mysqli_escape_string($connect, $_POST['ano']);
    $cor = mysqli_escape_string($connect, $_POST['cor']);
    $placa = mysqli_escape_string($connect, $_POST['placa']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE veiculos SET marca='$marca', modelo='$modelo', ano='$ano', cor='$cor', placa='$placa' WHERE id='$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: veiculos.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar!";
        header('Location: veiculos.php');
    endif;
endif;
?>