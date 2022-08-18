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
    $descricao = clear($_POST['descricao']);
    $valor = clear($_POST['valor']);

    $sql = "INSERT INTO servicos (descricao, valor) VALUES ('$descricao', '$valor')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: servicos.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: servicos.php');
    endif;
endif;
?>