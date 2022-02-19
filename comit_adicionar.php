<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title>Adicionar Cometario</title>
</head>

<body>

    <?php
    if (isset($_POST['conteúdo'])) {

        require './classes/Cometario.php';

        $cli = new Cometario();
        $cli->inserir($_POST['conteúdo'], $_POST['data'], $_POST['id_prod']);

    }
    ?>

    <?php if (isset($_POST['conteúdo'])) { ?>
        <script>
            alert('Emprestimo inserido com sucesso !');
        </script>
    <?php } ?>

    <form action="comit_adicionar.php" method="post">

        <label>conteúdo </label>
        <input type="text" name="conteúdo" id="conteúdo" />
        <br /><br />

        <label>id_prod </label>
        <input type="text" name="id_prod" id="id_prod" />
        <br /><br />

        <label>Descrição </label>
        <input type="date" name="data" id="data" />
        <br /><br />

        <button type="submit">Enviar</button>
    </form>

    <a href="listar.php">
        <button 
    type="button" class="btn btn-warning">Voltar</button>
    <br></a><br>

</body>

</html>