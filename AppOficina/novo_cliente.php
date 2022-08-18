<?php
    include_once 'php_action/bd_connect.php';
    include_once 'includes/header.php';
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Cliente</h3>
        <form action="cadastrar_cliente.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome">
                <label for="sobrenome">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="endereco" id="endereco">
                <label for="endereco">Endereço</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="telefone" id="telefone">
                <label for="telefone">Telefone</label>
            </div>
            <button type="submit" class="btn" name="btn-cadastrar"> Cadastrar Cliente</button>
            <a href="clientes.php" type="submit" class="btn green"> Listagem de Clientes</a>
        </form>
    </div>
</div>
<?php
    include_once 'includes/footer.php'
?>      