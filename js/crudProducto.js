function mostrar(){
	$.ajax({
		type:"POST",
		url:"./../../procesos/producto/mostrar.php",
		success:function(r){
			$('#tablaDatos').html(r);
		}
	});
}
function obtenerDatos(id_pro){
	$.ajax({
		type:"POST",
		data:"id_pro=" + id_pro,
		url:"../../procesos/producto/obtener.php",
		success:function(r){
			r=jQuery.parseJSON(r);
			$('#id_pro').val(r['id_pro']);
			$('#tipo_prou').val(r['tipo_pro']);
			$('#marca_prou').val(r['marca_pro']);
			$('#precio_prou').val(r['precio_pro']);
			$('#detalle_prou').val(r['detalle_pro']);
			
		}
	});
}
function actualizarDatos(){
	$.ajax({
		type:"POST",
		url:"../../procesos/producto/actualizar.php",
		data:$('#frminsertu').serialize(),
		success:function(r){
			if(r==1){
				mostrar();
				swal("Actualizado con exito!", ":D", "success");
			}else{
				swal("¡Errror!",":(","error")
			}
		}
	});
	return false;
}
function eliminarDatos(id_pro){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "!Una vez eliminado no podra recuperarse¡",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				url:"../../procesos/producto/eliminar.php",
				data:"id_pro="+id_pro,
				success:function(r){
					if(r==1){
						mostrar();
						swal("Eliminado con exito!", ":D", "success");
					}else{
						swal("¡Errror!",":(","error")
					}
				}
			});
		} 
	});
}
function insertarDatos(){
	$.ajax({
		type:"POST",
		url:"./../../procesos/producto/insertar.php",
		data:$('#frminsert').serialize(),
		success:function(r){
			if(r==1){
				$('#frminsert')[0].reset;//limpiar formulario
				mostrar();
				swal("¡Agregado con exito!", ":D", "success");
			}else{
				swal("¡Errror!",":(","error")
				console.log(r)
			}
		}
	});
	return false;
}