<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">


    <title>Produto</title>
</head>

<body id="listar.php">

    <div id="header">

        <img src="img/techman.png" alt="" id="logoHeder">

        <a href="adicionar.php">Novo equipamento</a>

        <a href="index.php">
            <img src="img/logout_sair.png" alt="" id="logout">
        </a>

    </div>

    <?php

    require './classes/Produto.php';
    $produto = new Produto();
    $listaProduto = $produto->listar();

    ?>

    <center>
        <br>





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
                            <a href="excluir.php?id=<?php echo $c['id']; ?>">
                                <img src="img/deletar.png" alt="" width="30px">
                            </a>
                        </td>

                        <td><i class="far fa-user"></i>
                            <a href="editar.php?id=<?php echo $c['id']; ?>">
                                <img src="img/editar.png" alt="" width="25px">
                            </a>

                        </td>

                    </tr>
                <?php } ?>

            </tbody>

        </table>
    </center>

    <br><br><br>

    <a href="comit_listar.php">
        <img src="img/comentario.png" alt="" width="30px">
    </a>



</body>

</html>