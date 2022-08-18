<?php
require_once 'php_action/bd_connect.php';
//Sessão
session_start();

if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $endereco = mysqli_escape_string($connect, $_POST['endereco']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE clientes SET nome='$nome', sobrenome='$sobrenome', email='$email', endereco='$endereco', telefone='$telefone' WHERE id='$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: clientes.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar!";
        header('Location: clientes.php');
    endif;
endif;
?>