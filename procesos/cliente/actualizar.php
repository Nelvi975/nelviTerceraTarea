<?php
require_once '../../controlador/clienteControlador.php';

$datos = array(
    'tipo_pro' => $_POST['tipo_pro'],
    'marca_pro' => $_POST['marca_pro'],
    'precio_pro' => $_POST['precio_pro'],
    'detalle_pro' => $_POST['detalle_pro'], 
);

echo clienteControlador::insertarDatos($datos);

?>