<?php
require_once '../../controlador/usuarioControlador.php';

$datos = array(
    'usuario' => $_POST['usuariou'],
    'password' => $_POST['passwordu'],
    'email' => $_POST['emailu'],
    'nombre' => $_POST['nombreu'], 
    'apellidos' => $_POST['apellidosu'], 
    'DNI' => $_POST['DNIu'],
    'telefono' => $_POST['telefonou'],
    'sexo' => $_POST['sexou'],
    'cargo' => $_POST['cargou'],
    'estado' => $_POST['estadou'],
    'id' => $_POST['id']
);

echo usuarioControlador::actualizarDatos($datos);

?>