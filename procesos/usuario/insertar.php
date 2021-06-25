<?php
require_once '../../controlador/usuarioControlador.php';

$datos = array(
    'usuario' => $_POST['usuario'],
    'password' => password_hash($_POST['password'],PASSWORD_BCRYPT),
    'email' => $_POST['email'],
    'nombre' => $_POST['nombre'], 
    'apellidos' => $_POST['apellidos'], 
    'DNI' => $_POST['DNI'],
    'telefono' => $_POST['telefono'],
    'sexo' => $_POST['sexo'],
    'cargo' => $_POST['cargo'],
    'estado' => $_POST['estado']
);
echo usuarioControlador::insertarDatos($datos);

?>