<?php
//Conexão com banco de dados
include_once 'php_action/bd_connect.php';
include_once 'includes/header.php';

session_start();
if(isset($_SESSION['mensagem'])): ?>
<script>
    //mensagem
    window.onload = function(){
        M.toast({html: 'echo $_SESSION['mensagem'];'})
    };
</script>

<?php
endif;
session_unset();
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Veículos</h3>
        <table class="striped">
            <thead>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Cor</th>
                <th>Placa</th>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM veiculos";
                    $resultado = mysqli_query($connect, $sql);
                    if(mysqli_num_rows($resultado) > 0):
                    while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['marca']; ?></td>
                    <td><?php echo $dados['modelo']; ?></td>
                    <td><?php echo $dados['ano']; ?></td>
                    <td><?php echo $dados['cor']; ?></td>
                    <td><?php echo $dados['placa']; ?></td>
                    <td><a href="editar_veiculo.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                    <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                    <!-- Modal Structure -->
                    <div id="modal<?php echo $dados['id']; ?>" class="modal">
                        <div class="modal-content">
                        <h4>Confirmar ação</h4>
                        <p>Tem certeza que deseja excluir este registro?</p>
                        </div>
                        <div class="modal-footer">                        
                        <form action="deletar_veiculo.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                            <button type="submit" name="btn-deletar" class="btn red"> Sim, quero deletar</button>
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                        </form>
                        </div>
                    </div>                            
                </tr>
                <?php endwhile;
                else:?>
                <tr>
                    <td></td>
                </tr>
                <?php
                endif; ?>
            </tbody>
        </table>
        <br>
        <a href="novo_veiculo.php" class="btn"> Adicionar Veículo</a>
        <a href="index.php" class="btn"> Voltar</a>        
    </div>
</div>
<?php
    include_once 'includes/footer.php'
?>      