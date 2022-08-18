<?php
    //conexao
    include_once 'php_action/bd_connect.php';
    //header
    include_once 'includes/header.php';

    //Select
    if(isset($_GET['id'])):
        $id = mysqli_escape_string($connect, $_GET['id']);

        $sql = "SELECT * FROM servicos WHERE id= '$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);
    endif;
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Serviço</h3>
        <form action="atualizar_servico.php" method="POST">
            <input type=hidden name="id" value="<?php echo $dados['id'];?>">
            <div class="input-field col s12">
                <input type="text" name="descricao" id="descricao" value="<?php echo $dados['descricao'];?>">
                <label for="descricao">Descrição</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="valor" id="valor" value="<?php echo $dados['valor'];?>">
                <label for="valor">Valor</label>
            </div>
            <button type="submit" class="btn" name="btn-editar"> Atualizar Serviço</button>
            <a href="servicos.php" type="submit" class="btn green"> Listagem de Serviços</a>
    </div>
</div>
<?php
    include_once 'includes/footer.php';
?>      