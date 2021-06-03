<?php
require_once '../../controlador/productoControlador.php';
 $id_pro=$_POST['id'];

 echo json_encode(productoControlador::obtenerDatos($id));
?>