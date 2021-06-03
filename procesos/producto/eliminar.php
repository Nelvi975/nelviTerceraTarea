<?php
 require_once '../../controlador/productoControlador.php';
 $id_pro=$_POST['id_pro'];

 echo productoControlador::eliminarDatos($id_pro);
?>