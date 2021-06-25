<?php
require_once '../../controlador/usuarioControlador.php';
 $id=$_POST['id'];

 echo usuarioControlador::eliminarDatos($id);
?>