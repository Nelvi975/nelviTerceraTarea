<?php
 require_once '../../controlador/usuarioControlador.php';
 $id=$_POST['id'];

 echo json_encode(usuarioControlador::obtenerDatos($id));
?>