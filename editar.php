<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">

        <title>Atualizar</title>
    </head>
    <body>

        <?php
        
        $redirecionar = true;
        
        if (isset($_GET ['id'])) {
            if (is_numeric($_GET ['id'])) {
                
                $redirecionar = false;
                
                require './classes/Produto.php';
                $emp = new Produto();

                if (isset($_POST ['nome'])) {

                    $emp->editar($_GET ['id'], $_POST ['nome'], $_POST ['descricao']);
                }

                $Produto = $emp->getProduto($_GET ['id']);
            }
        }
        
        if ($redirecionar) {
        header("Location: listar.php");
        exit();
        }
        
        ?>

        <?php if (isset($_POST ['nome'])) { ?>
            <script>
                alert('Produto atualizado com sucesso !');
            </script>
        <?php } ?>


        <form action="editar.php?id=<?php echo $_GET ['id']; ?>" method="post">

            <label>Nome </label>
            <input type="text" value="<?php echo $Produto ['nome']; ?>" name="nome" id="nome"/>
            <br/><br/>

            <!--<label>Imagen: </label>
            <input type="text" value="<?php echo $Produto ['#']; ?>" name="matri_estu" id="matri_estu"/>
            <br/><br/>-->

            <label>Descrição </label>
            <input type="text" value="<?php echo $Produto ['descricao']; ?>" name="descricao" id="descricao"/>
            <br/><br/>

            <button type="submit">Enviar</button>

        </form>

        <a href="listar.php">
        <button 
    type="button" class="btn btn-warning">Voltar</button>
    <br></a><br>


    </body>
</html>
