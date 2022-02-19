<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Produto</title>
</head>
<body>

<?php

require './classes/Produto.php';
$produto = new Produto();
$listaProduto = $produto->listar();

    ?>

    <center>
        <br>

    
    <a href="adicionar.php">
        <button 
    type="button" class="btn btn-warning">Adicionar</button>
    <br></a><br>


        <table class="table table-dark table-striped table-hover" style="width: 70%; margin-top:30px;  border: 1px solid white;">
            <thead>
                <tr>
                    <td>Imagen</td>
                    <td>Produto</td>
                    <td>Descrição</td>
                    
                </tr>
            </thead>

            <tbody>
                <?php foreach ($listaProduto as $c) { ?>
                    <tr>

                    <td></td>
                        <td><i class="fas fa-address-card"></i> <?php echo $c['id']; ?></td>
                        <td><i class="fas fa-address-card"></i> <?php echo $c['nome']; ?></td>
                        <td><i class="fas fa-address-card"></i> <?php echo $c['descricao']; ?></td>
                        <td>
                            <a href="excluir.php?id=<?php echo $c ['id']; ?>">
                            <button type="button" class="btn btn-danger">Apagar</button>
                            </a>
                        </td>

                        <td><i class="far fa-user"></i> 
                            <a href="editar.php?id=<?php echo $c ['id']; ?>">
                            <button type="button" class="btn btn-info">Editar</button>
                            </a>
                            
                        </td>

                    </tr>
                <?php } ?>

            </tbody>

        </table>
    </center>

    <br><br><br>

    <a href="comit_listar.php">comentario</a>



</body>
</html>
