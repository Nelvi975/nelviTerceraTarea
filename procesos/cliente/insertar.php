<?php
require_once '../../controlador/clienteControlador.php';

$datos = array(
    'nom_user' => $_POST['nom_user'],
    'ape_user' => $_POST['ape_user'],
    'telf_user' => $_POST['telf_user'],
    'dni_user' => $_POST['dni_user'], 
    'sex_user' => $_POST['sex_user'], 
    'direc_user' => $_POST['direc_user']
);
echo clienteControlador::insertarDatos($datos);

?>