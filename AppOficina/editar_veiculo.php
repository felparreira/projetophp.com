<?php
    //conexao
    include_once 'php_action/bd_connect.php';
    //header
    include_once 'includes/header.php';

    //Select
    if(isset($_GET['id'])):
        $id = mysqli_escape_string($connect, $_GET['id']);

        $sql = "SELECT * FROM veiculos WHERE id= '$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);
    endif;
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Veículo</h3>
        <form action="atualizar_veiculo.php" method="POST">
            <input type=hidden name="id" value="<?php echo $dados['id'];?>">
            <div class="input-field col s12">
                <input type="text" name="marca" id="marca" value="<?php echo $dados['marca'];?>">
                <label for="marca">Marca</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="modelo" id="modelo" value="<?php echo $dados['modelo'];?>">
                <label for="modelo">Modelo</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="ano" id="ano" value="<?php echo $dados['ano'];?>">
                <label for="ano">Ano</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="cor" id="cor" value="<?php echo $dados['cor'];?>">
                <label for="cor">Cor</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="placa" id="placa" value="<?php echo $dados['placa'];?>">
                <label for="placa">Placa</label>
            </div>
            <button type="submit" class="btn" name="btn-editar"> Atualizar Veículo</button>
            <a href="veiculos.php" type="submit" class="btn green"> Listagem de Veículos</a>
    </div>
</div>
<?php
    include_once 'includes/footer.php';
?>      