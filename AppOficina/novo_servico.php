<?php
    include_once 'php_action/bd_connect.php';
    include_once 'includes/header.php';
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Serviço</h3>
        <form action="cadastrar_servico.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="descricao" id="descricao">
                <label for="descricao">Descrição</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="valor" id="valor">
                <label for="valor">Valor</label>
            </div>
            <button type="submit" class="btn" name="btn-cadastrar"> Cadastrar Serviço</button>
            <a href="servicos.php" type="submit" class="btn green"> Listagem de Serviços</a>
    </div>
</div>
<?php
    include_once 'includes/footer.php'
?>      