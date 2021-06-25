<?php
    require_once '../../controlador/tiendaControlador.php';

    $id_ti=$_POST['id_ti'];

    echo json_encode(tiendaControlador::obtenerDatos($id_ti));
?>