<?php
require_once '../../controlador/usuarioControlador.php';

$datos = array(
    'nom_pe' => $_POST['nom_peu'],
    'Estado_pe' => $_POST['Estado_peu'],
    'Precio_pe' => $_POST['Precio_peu'],
    'distrito' => $_POST['distritou'], 
    'id_pe' => $_POST['id_pe'],
    'id_DdP' => $_POST['id_DdP']
);

echo ventaControlador::actualizarDatos($datos);

?>