function mostrarU(){
	$.ajax({
		type:"POST",
		url:"procesos/mostrarDatosUsuario.php",
		success:function(r){
			$('#tablaDatos').html(r); 
		}
	});
}
 
function obtenerDatosUsuario(id_usuario){
	$.ajax({
		type:"POST",
		data: "id=" + id_usuario,
		url:"procesos/obtenerDatosUsuario.php",
		success:function(r){

			r= jQuery.parseJSON(r);

			$('#frminsertuu').find('input[name="id_usuario"]').val(r['id_usuario']);
			$('#frminsertuu').find('input[name="username"]').val(r['username']);
			$('#frminsertuu').find('input[name="password"]').val(r['password']);
		}
	});

}

function actualizarDatosUsuario(){
	
	$.ajax({

		type:"POST",
		url:"procesos/actualizarDatosUsuario.php",
		data:$('#frminsertuu').serialize(),
		success:function(r){

			console.log(r);

			mostrarU();
			swal("Registro actualizado con exito!", "success");

		}, error:function(r){
			swal("Error!", "error");
		}
	});

	return false;
}


function eliminarDatosUsuario(id_usuario){
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
				url:"procesos/eliminarDatosUsuario.php",
				data:"id=" + id_usuario,
				success:function(r){

					if (r==1) {
					
						mostrarU();
						swal("Registro eliminado con exito!", ":D", "info");
					}else{
						swal("Error!", "error");
					}
				}
			});	
		} 
	});
}

function insertarDatosUsuario(){
	$.ajax({
		type:"POST",
		url:"procesos/insertarDatosUsuario.php",
		data:$('#frminsertu').serialize(),
		success:function(r){

			if (r==1) {
				$('#frminsertu')[0].reset();  // LIMPIAR FORMULARIO
				mostrarU();
				swal("Registro agregado con exito!", "success");
			}else{
				swal("Error!", "error");
			}
		}
	});

	return false;
}
