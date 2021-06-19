<?php
 require_once '../../controlador/clienteControlador.php';
 $id_cli=$_POST['id_cli'];

 echo json_encode(clienteControlador::obtenerDatos($id_cli));
?>