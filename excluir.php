<?php

require './classes/Produto.php';

if (isset($_GET ['id'])) {
    if (is_numeric($_GET ['id'])) {
        $produto = new Produto();
        $produto->eliminar($_GET ['id']);
    }
}

header("Location: listar.php");
exit();

?>