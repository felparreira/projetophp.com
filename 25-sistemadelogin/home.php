<?php
//Conexão
require_once('db_connect.php');

//Sessão
session_start();

//Verificação
if(!isset($_SESSION['logado'])):
    header('Location: index.php');
endif;

//Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
?>
<html>
    <head>
        <title>Página Restrita</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Página Restrita</h1>
        <h2>Olá <?php echo $dados['nome'];?>!</h2>
        <a href="logout.php">Sair</a>
    </body>
</html>