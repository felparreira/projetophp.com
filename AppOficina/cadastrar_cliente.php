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
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);    
    $endereco = clear($_POST['endereco']);
    $telefone = clear($_POST['telefone']);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, endereco, telefone) VALUES ('$nome', '$sobrenome', '$email', '$endereco','$telefone')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: clientes.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: clientes.php');
    endif;
endif;
?>