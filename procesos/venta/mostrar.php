<?php
require_once '../../controlador/ventaControlador.php';
$obj = new ventaControlador();
$datos=$obj->MostrarDatos();

$tabla ='<table class="table table-dark">
									<thead>
										<tr class="font-weight-bold">
											<td>Nombre</td>
											<td>Estado</td>
											<td>Precio</td>
											
											<td>Editar</td>
											<td>Eliminar</td>
										</tr>
									</thead>
                                    <tbody>';
$datosTabla="";

foreach ($datos as $key => $value){
    $datosTabla = $datosTabla.'<tr>
                                 <td>'.$value['nom_pe'].'</td>
                                 <td>'.$value['Estado_pe'].'</td>
                                 <td>'.$value['Precio_pe'].'</td>
                                 
                                 <td>
        <span class="btn btn-warning btn-sm" onclick="obtenerDatos('.$value['id_pe'].')" data-toggle="modal" data-target="#actualizarModal">
            <i class="fas fa-edit"></i>
        </span>
        
    </td>
    <td>
        <span class="btn btn-danger" onclick="eliminarDatos('.$value['id_pe'].')">
            <li class="fas fa-trash-alt"></li>
        </span>
    </td>
</tr>';
}
echo $tabla.$datosTabla.'</tbody></table>';
?>