<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title>Adicionar produto</title>

<link rel="css/style.css" href="style.css">
</head>

<body>

    <?php
    if (isset($_POST['nome'])) {

        require './classes/Produto.php';

        $cli = new Produto();
        $cli->inserir($_POST['nome'], $_POST['descricao']);

    }
    ?>

    <?php if (isset($_POST['nome'])) { ?>
        <script>
            alert('Emprestimo inserido com sucesso !');
        </script>
    <?php } ?>

    <form action="adicionar.php" method="post">

        <label>Nome </label>
        <input type="text" name="nome" id="nome" />
        <br /><br />

        <!--<label>Endereço da imagen </label>
        <input type="text" name="descricao" id="descricao" />
        <br /><br />-->

        <label>Descrição </label>
        <input type="text" name="descricao" id="descricao" />
        <br /><br />

        <button type="submit">Enviar</button>
    </form>

    <a href="listar.php">
        <button 
    type="button" class="btn btn-warning">Voltar</button>
    <br></a><br>

</body>

</html>