<?php
require_once '../../controlador/ventaControlador.php';

$datos = array(
    'nom_pe' => $_POST['nom_pe'],
    'Estado_pe' => $_POST['Estado_pe'],
    'Precio_pe' => $_POST['Precio_pe'],
    'distrito' => $_POST['distrito'], 
);
echo ventaControlador::insertarDatos($datos);

?>