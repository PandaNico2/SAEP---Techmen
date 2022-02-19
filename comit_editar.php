<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">

        <title>Atualizar Comentario</title>
    </head>
    <body>

        <?php
        
        $redirecionar = true;
        
        if (isset($_GET ['id'])) {
            if (is_numeric($_GET ['id'])) {
                
                $redirecionar = false;
                
                require './classes/Cometario.php';
                $emp = new Cometario();

                if (isset($_POST ['conteudo'])) {

                    $emp->editar($_GET ['id'], $_POST ['conteudo'], $_POST ['data'], $_POST ['id_prod']);
                }

                $Cometario = $emp->getCometario($_GET ['id']);
            }
        }
        
        if ($redirecionar) {
        header("Location: comit_listar.php");
        exit();
        }
        
        ?>

        <?php if (isset($_POST ['conteudo'])) { ?>
            <script>
                alert('Cometario atualizado com sucesso !');
            </script>
        <?php } ?>


        <form action="comit_editar.php?id=<?php echo $_GET ['id']; ?>" method="post">

            <label>Nome </label>
            <input type="text" value="<?php echo $Cometario ['conteudo']; ?>" name="conteudo" id="conteudo"/>
            <br/><br/>

            <label>data </label>
            <input type="date" value="<?php echo $Cometario ['data']; ?>" name="data" id="data"/>
            <br/><br/>

            <label>Descrição </label>
            <input type="text" value="<?php echo $Cometario ['id_prod']; ?>" name="id_prod" id="id_prod"/>
            <br/><br/>

            <button type="submit">Enviar</button>

        </form>

        <a href="comit_listar.php">
        <button 
    type="button" class="btn btn-warning">Voltar</button>
    <br></a><br>


    </body>
</html>
