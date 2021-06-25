function mostrar(){
	$.ajax({
		type:"POST",
		url:"./../../procesos/venta/mostrar.php",
		success:function(r){
			$('#tablaDatos').html(r);
		}
	});
}
function obtenerDatos(id_cli){
	$.ajax({
		type:"POST",
		data:"id_cli=" + id_cli,
		url:"../../procesos/venta/obtener.php",
		success:function(r){
			r=jQuery.parseJSON(r);
			$('#id_pe').val(r['id_pe']);
			$('#nom_peu').val(r['nom_pe']);
			$('#Estado_peu').val(r['Estado_pe']);
			$('#Precio_peu').val(r['Precio_pe']);
			$('#distritou').val(r['distrito'])
		}
	});
}
function actualizarDatos(){
	$.ajax({
		type:"POST",
		url:"../../procesos/venta/actualizar.php",
		data:$('#frminsertu').serialize(),
		success:function(r){
			console.log(r)
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
function eliminarDatos(id_cli){
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
				url:"../../procesos/venta/eliminar.php",
				data:"id_cli="+id_cli,
				success:function(r){
                    console.log(r);
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
		url:"../../procesos/venta/insertar.php",
		data:$('#frminsert').serialize(),
		success:function(r){
            console.log(r);
			if(r==1){
				$('#frminsert')[0].reset;//limpiar formulario
				mostrar();
				swal("¡Agregado con exito!", ":D", "success");
			}else{
				swal("¡Errror!",":(","error")
			}
		}
	});
	return false;
}