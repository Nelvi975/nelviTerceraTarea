<?php
require_once '../../controlador/productoControlador.php';

$datos = array(
    'tipo_pro' => $_POST['tipo_prou'],
    'marca_pro' => $_POST['marca_prou'],
    'precio_pro' => $_POST['precio_prou'],
    'detalle_pro' => $_POST['detalle_prou'],
    'id_pro' => $_POST['id_pro']
);

echo productoControlador::actualizarDatos($datos);

?>