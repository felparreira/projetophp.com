<html>
    <body>

    <?php
        if(isset($_POST['enviar-formulario'])):
                        
            $formatosPermitidos = array("png","jpg","jpeg","gif");
            $quantidadeArquivos = count($_FILES['arquivo']['name']);
            $contador = 0;

            while($contador < $quantidadeArquivos):

            $extensao = pathinfo($_FILES['arquivo']['name']['$contador'], PATHINFO_EXTENSION);
            
            if(in_array($extensao, $formatosPermitidos)):
                $pasta = "arquivos/";
                $temporario = $_FILES['arquivo']['tmp_name']['$contador'];
                $novoNome = uniqid().".$extensao";
                
                if(move_uploaded_file($temporario, $pasta.$novoNome)):
                    echo "Upload feito com sucesso!";
            else:
                echo "Erro, não foi possível fazer o upload.";
            endif;
        endif;
        $contador++;
    endwhile;
    endif;
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="arquivo[]" multiple><br><br>
            <input type="submit" name="enviar_formulario"><br><br>
    </body>
<html>