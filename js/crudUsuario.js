function mostrar(){
	$.ajax({
		type:"POST",
		url:"./../../procesos/usuario/mostrar.php",
		success:function(r){
			$('#tablaDatos').html(r);
		}
	});
}
function obtenerDatos(id){
	$.ajax({
		type:"POST",
		data:"id=" + id,
		url:"../../procesos/usuario/obtener.php",
		success:function(r){
			r=jQuery.parseJSON(r);
			$('#id').val(r['id']);
			$('#usuariou').val(r['usuario']);
			$('#passwordu').val(r['password']);
			$('#emailu').val(r['email']);
			$('#nombreu').val(r['nombre']);
            $('#apellidosu').val(r['apellidos']);
			$('#DNIu').val(r['DNI']);
			$('#telefonou').val(r['telefono']);
			$('#sexou').val(r['sexo']);
			$('#cargou').val(r['cargo']);
			$('#estadou').val(r['estado'])
		}
	});
}
function actualizarDatos(){
	$.ajax({
		type:"POST",
		url:"../../procesos/usuario/actualizar.php",
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
function eliminarDatos(id){
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
				url:"../../procesos/usuario/eliminar.php",
				data:"id="+id,
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
		url:"../../procesos/usuario/insertar.php",
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