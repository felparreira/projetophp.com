<?php
    include_once 'php_action/bd_connect.php';
    include_once 'includes/header.php';
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Veículo</h3>
        <form action="cadastrar_veiculo.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="marca" id="marca">
                <label for="marca">Marca</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="modelo" id="modelo">
                <label for="modelo">Modelo</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="ano" id="ano">
                <label for="ano">Ano</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="cor" id="cor">
                <label for="cor">Cor</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="placa" id="placa">
                <label for="placa">Placa</label>
            </div>
            <button type="submit" class="btn" name="btn-cadastrar"> Cadastrar Veículo</button>
            <a href="veiculos.php" type="submit" class="btn green"> Listagem de Veículos</a>
    </div>
</div>
<?php
    include_once 'includes/footer.php'
?>      