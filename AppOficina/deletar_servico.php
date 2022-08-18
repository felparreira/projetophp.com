<?php
require_once 'php_action/bd_connect.php';
//Sessão
session_start();

if(isset($_POST['btn-deletar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM servicos WHERE id='$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: servicos.php');
    else:
        $_SESSION['mensagem'] = "Erro ao deletar!";
        header('Location: servicos.php');
    endif;
endif;
?>