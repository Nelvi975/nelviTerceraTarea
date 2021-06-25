<?php
require_once '../../controlador/usuarioControlador.php';
$obj = new usuarioControlador();
$datos=$obj->MostrarDatos();

$tabla ='<table class="table table-dark">
									<thead>
										<tr class="font-weight-bold">
											<td>usuario</td>
                                            <td>cargo</td>
											<td>ESTADO</td>
											<td>email</td>
											<td>nombre</td>
											<td>apellidos</td>
											<td>DNI</td>
											<td>telefono</td>
											<td>sexo</td>
											<td>Editar</td>
											<td>Eliminar</td>
										</tr>
									</thead>
                                    <tbody>';
$datosTabla="";

foreach ($datos as $key => $value){
    $datosTabla = $datosTabla.'<tr>
                                 <td>'.$value['usuario'].'</td>
                                 <td>'.$value['cargo'].'</td>
                                 <td>'.$value['estado'].'</td>
                                 <td>'.$value['email'].'</td>
                                 <td>'.$value['nombre'].'</td>
                                 <td>'.$value['apellidos'].'</td>
                                 <td>'.$value['DNI'].'</td>
                                 <td>'.$value['telefono'].'</td>
                                 <td>'.$value['sexo'].'</td>
                                 <td>
        <span class="btn btn-warning btn-sm" onclick="obtenerDatos('.$value['id'].')" data-toggle="modal" data-target="#actualizarModal">
            <i class="fas fa-edit"></i>
        </span>
        
    </td>
    <td>
        <span class="btn btn-danger" onclick="eliminarDatos('.$value['id'].')">
            <li class="fas fa-trash-alt"></li>
        </span>
    </td>
</tr>';
}
echo $tabla.$datosTabla.'</tbody></table>';
?>