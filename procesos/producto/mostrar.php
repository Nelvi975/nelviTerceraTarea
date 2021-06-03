<?php
require_once '../../controlador/productoControlador.php';
$obj = new productoControlador();
$datos=$obj->MostrarDatos();

$tabla ='<table class="table table-dark">
									<thead>
										<tr class="font-weight-bold">
											<td>Tipo de Producto</td>
											<td>Marca</td>
											<td>Precio</td>
											<td>Detalle</td>
											<td>Editar</td>
											<td>Eliminar</td>
										</tr>
									</thead>
                                    <tbody>';
$datosTabla="";

foreach ($datos as $key => $value){
    $datosTabla = $datosTabla.'<tr>
                                 <td>'.$value['tipo_pro'].'</td>
                                 <td>'.$value['marca_pro'].'</td>
                                 <td>'.$value['precio_pro'].'</td>
                                 <td>'.$value['detalle_pro'].'</td>
                                 <td>
        <span class="btn btn-warning btn-sm" onclick="obtenerDatos('.$value['id_pro'].')" data-toggle="modal" data-target="#actualizarModal">
            <i class="fas fa-edit"></i>
        </span>
        
    </td>
    <td>
        <span class="btn btn-danger" onclick="eliminarDatos('.$value['id_pro'].')">
            <li class="fas fa-trash-alt"></li>
        </span>
    </td>
</tr>';
}
echo $tabla.$datosTabla.'</tbody></table>';
?>