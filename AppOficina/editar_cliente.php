<?php
    //conexao
    include_once 'php_action/bd_connect.php';
    //header
    include_once 'includes/header.php';

    //Select
    if(isset($_GET['id'])):
        $id = mysqli_escape_string($connect, $_GET['id']);

        $sql = "SELECT * FROM clientes WHERE id= '$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);
    endif;
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Cliente</h3>
        <form action="atualizar_cliente.php" method="POST">
            <input type=hidden name="id" value="<?php echo $dados['id'];?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome'];?>">
                <label for="sobrenome">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email" value="<?php echo $dados['email'];?>">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="endereco" id="endereco" value="<?php echo $dados['endereco'];?>">
                <label for="idade">Endereço</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="telefone" id="telefone" value="<?php echo $dados['telefone'];?>">
                <label for="telefone">Telefone</label>
            </div>
            <button type="submit" class="btn" name="btn-editar"> Atualizar Cliente</button>
            <a href="clientes.php" type="submit" class="btn green"> Listagem de Clientes</a>
    </div>
</div>
<?php
    include_once 'includes/footer.php';
?>      