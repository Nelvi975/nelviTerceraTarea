<?php
require_once '../../controlador/clienteControlador.php';
 $id_pe=$_POST['id_pe'];

 echo clienteControlador::eliminarDatos($id_cli);
?>