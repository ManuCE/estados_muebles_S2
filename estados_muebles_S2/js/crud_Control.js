function mostrarC(){
	$.ajax({
		type:"POST",
		url:"procesos/mostrarDatosControl.php",
		success:function(r){
			$('#tablaDatos').html(r); 
		}
	});
}
 
function obtenerDatosControl(id_control){
	$.ajax({
		type:"POST",
		data: "id=" + id_control,
		url:"procesos/obtenerDatosUsuario.php",
		success:function(r){

			r= jQuery.parseJSON(r);

			$('#frminsertuc').find('input[name="id_control"]').val(r['id_control']);
			$('#frminsertuc').find('input[name="mueble"]').val(r['mueble']);
			$('#frminsertuc').find('input[name="estado"]').val(r['estado']);
			$('#frminsertuc').find('input[name="usuario"]').val(r['usuario']);


		}
	});

}

function actualizarDatosControl(){
	
	$.ajax({

		type:"POST",
		url:"procesos/actualizarDatos.php",
		data:$('#frminsertuc').serialize(),
		success:function(r){

			console.log(r);

			mostrarC();
			swal("Registro actualizado con exito!", "success");

		}, error:function(r){
			swal("Error!", "error");
		}
	});

	return false;
}


function eliminarDatosControl(id_mueble){
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
				url:"procesos/eliminarDatosControl.php",
				data:"id=" + id_control,
				success:function(r){

					if (r==1) {
					
						mostrarC();
						swal("Registro eliminado con exito!", ":D", "info");
					}else{
						swal("Error!", "error");
					}
				}
			});	
		} 
	});
}

function insertarDatosControl(){
	$.ajax({
		type:"POST",
		url:"procesos/insertarDatosControl.php",
		data:$('#frminsertc').serialize(),
		success:function(r){

			if (r==1) {
				$('#frminsertc')[0].reset();  // LIMPIAR FORMULARIO
				mostrarC();
				swal("Registro agregado con exito!", "success");
			}else{
				swal("Error!", "error");
			}
		}
	});

	return false;
}
