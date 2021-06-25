<?php
require_once '../../controlador/tiendaControlador.php';
 $id_ti=$_POST['id_ti'];

 echo tiendaControlador::eliminarDatos($id_ti);
?>