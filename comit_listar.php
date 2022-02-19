<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Comentario</title>
</head>
<body>

<?php

require './classes/Cometario.php';
$Cometario = new Cometario();
$listaCometario = $Cometario->listar();

    ?>

    <center>
        <br>

    
    <a href="comit_adicionar.php">
        <button 
    type="button" class="btn btn-warning">Adicionar</button>
    <br></a><br>


        <table class="table table-dark table-striped table-hover" style="width: 70%; margin-top:30px;  border: 1px solid white;">
            <thead>
                <td>Cometario</td>
            </thead>

            <tbody>
                <?php foreach ($listaCometario as $c) { ?>
                    <tr>

                    <td></td>
                        <td><i class="fas fa-address-card"></i> <?php echo $c['conteudo']; ?></td>
                        <td><i class="fas fa-address-card"></i> <?php echo $c['conteudo']; ?></td>
                        <td>
                            <a href="comit_excluir.php?id=<?php echo $c ['id']; ?>">
                            <button type="button" class="btn btn-danger">Apagar</button>
                            </a>
                        </td>

                        <td><i class="far fa-user"></i> 
                            <a href="comit_editar.php?id=<?php echo $c ['id']; ?>">
                            <button type="button" class="btn btn-info">Editar</button>
                            </a>
                            
                        </td>

                    </tr>
                <?php } ?>

            </tbody>

        </table>
    </center>



</body>
</html>
