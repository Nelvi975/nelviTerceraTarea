<?php
require_once '../../controlador/tiendaControlador.php';
$obj = new tiendaControlador();
$datos=$obj->MostrarDatos();

$tabla ='<table class="table table-dark">
									<thead>
										<tr class="font-weight-bold">
											<td>Nombre</td>
											<td>Propietario</td>
											<td>dirección</td>
											<td>telefono</td>
											<td>rubro</td>
											<td>Editar</td>
											<td>Eliminar</td>
										</tr>
									</thead>
                                    <tbody>';
$datosTabla="";

foreach ($datos as $key => $value){
    $datosTabla = $datosTabla.'<tr>
                                 <td>'.$value['nom_ti'].'</td>
                                 <td>'.$value['nom_prop_ti'].'</td>
                                 <td>'.$value['direc_ti'].'</td>
                                 <td>'.$value['telf_ti'].'</td>
                                 <td>'.$value['rubro_ti'].'</td>
                                 <td>
        <span class="btn btn-warning btn-sm" onclick="obtenerDatos('.$value['id_ti'].')" data-toggle="modal" data-target="#actualizarModal">
            <i class="fas fa-edit"></i>
        </span>
        
    </td>
    <td>
        <span class="btn btn-danger" onclick="eliminarDatos('.$value['id_ti'].')">
            <li class="fas fa-trash-alt"></li>
        </span>
    </td>
</tr>';
}
echo $tabla.$datosTabla.'</tbody></table>';
?>