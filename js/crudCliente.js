function mostrar(){
	$.ajax({
		type:"POST",
		url:"./../../procesos/cliente/mostrar.php",
		success:function(r){
			$('#tablaDatos').html(r);
		}
	});
}
function obtenerDatos(id_cli){
	$.ajax({
		type:"POST",
		data:"id_cli=" + id_cli,
		url:"../../procesos/cliente/obtener.php",
		success:function(r){
			r=jQuery.parseJSON(r);
			$('#id_cli').val(r['id_cli']);
			$('#nom_user').val(r['nom_user']);
			$('#ape_user').val(r['ape_user']);
			$('#telf_user').val(r['telf_user']);
			$('#dni_user').val(r['dni_user']);
			$('#sex_user').val(r['sex_user']);
			$('#direc_user').val(r['direc_user'])
		}
	});
}
function actualizarDatos(){
	$.ajax({
		type:"POST",
		url:"../../procesos/cliente/actualizar.php",
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
				url:"../../procesos/cliente/eliminar.php",
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
		url:"../../procesos/cliente/insertar.php",
		data:$('#frminsertC').serialize(),
		success:function(r){
            console.log(r);
			if(r==1){
				$('#frminsertC')[0].reset;//limpiar formulario
				mostrar();
				swal("¡Agregado con exito!", ":D", "success");
			}else{
				swal("¡Errror!",":(","error")
			}
		}
	});
	return false;
}