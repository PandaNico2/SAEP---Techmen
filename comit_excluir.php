<?php

require './classes/Cometario.php';

if (isset($_GET ['id'])) {
    if (is_numeric($_GET ['id'])) {
        $cometario = new Cometario();
        $cometario->eliminar($_GET ['id']);
    }
}

header("Location: comit_listar.php");
exit();

?>