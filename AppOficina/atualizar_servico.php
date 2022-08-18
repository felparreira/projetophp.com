<?php
require_once 'php_action/bd_connect.php';
//Sessão
session_start();

if(isset($_POST['btn-editar'])):
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);
    $valor = mysqli_escape_string($connect, $_POST['valor']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE servicos SET descricao='$descricao', valor='$valor' WHERE id='$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: servicos.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar!";
        header('Location: servicos.php');
    endif;
endif;
?>