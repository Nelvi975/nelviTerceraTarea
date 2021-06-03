<?php
require_once '../../controlador/clienteControlador.php';
$obj = new clienteControlador();
$datos=$obj->MostrarDatos();

$tabla ='<table class="table table-dark">
									<thead>
										<tr class="font-weight-bold">
											<td>Nombre</td>
											<td>apellidos</td>
											<td>telefono</td>
											<td>DNI</td>
											<td>SEXO</td>
											<td>Direccion</td>
											<td>Editar</td>
											<td>Eliminar</td>
										</tr>
									</thead>
                                    <tbody>';
$datosTabla="";

foreach ($datos as $key => $value){
    $datosTabla = $datosTabla.'<tr>
                                 <td>'.$value['nom_user'].'</td>
                                 <td>'.$value['ape_user'].'</td>
                                 <td>'.$value['telf_user'].'</td>
                                 <td>'.$value['dni_user'].'</td>
                                 <td>'.$value['sex_user'].'</td>
                                 <td>'.$value['direc_user'].'</td>
                                 <td>
        <span class="btn btn-warning btn-sm" onclick="obtenerDatos('.$value['id_cli'].')" data-toggle="modal" data-target="#actualizarModal">
            <i class="fas fa-edit"></i>
        </span>
        
    </td>
    <td>
        <span class="btn btn-danger" onclick="eliminarDatos('.$value['id_cli'].')">
            <li class="fas fa-trash-alt"></li>
        </span>
    </td>
</tr>';
}
echo $tabla.$datosTabla.'</tbody></table>';
?>