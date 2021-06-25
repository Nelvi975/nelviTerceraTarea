<?php
require_once '../../controlador/productoControlador.php';
 $id_pro=$_POST['id_pro'];

 echo json_encode(productoControlador::obtenerDatos($id_pro));
?>