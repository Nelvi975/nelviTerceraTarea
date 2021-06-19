<?php
require_once '../../controlador/clienteControlador.php';

$datos = array(
    'nom_user' => $_POST['nom_useru'],
    'ape_user' => $_POST['ape_useru'],
    'telf_user' => $_POST['telf_useru'],
    'dni_user' => $_POST['dni_useru'], 
    'sex_user' => $_POST['sex_useru'], 
    'direc_user' => $_POST['direc_useru'],
    'id_cli' => $_POST['id_cli']
);

echo clienteControlador::actualizarDatos($datos);

?>