<?php
require_once '../controladores/Controlador.php';

$datos = array(
    'nombre' => $_POST['nombre'],
    'apellido' => $_POST['apellido'],
    'email' => $_POST['email'],
    'password' => password_hash($_POST['password'],PASSWORD_BCRYPT) 
);

echo Controlador::insertarDatos($datos);

?>