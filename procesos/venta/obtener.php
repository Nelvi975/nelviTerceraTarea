<?php
 require_once '../../controlador/ventaControlador.php';
 $id_pe=$_POST['id_pe'];

 echo json_encode(ventaControlador::obtenerDatos($id_pe));
?>