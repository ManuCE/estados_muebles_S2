function mostrarEstado(){
	$.ajax({
		type:"POST",
		url:"procesos/mostrarDatosEstado.php",
		success:function(r){
			$('#tablaDatos').html(r); 
		}
	});
}
 
function obtenerDatosEstado(id_estado){
	$.ajax({
		type:"POST",
		data: "id=" + id_estado,
		url:"procesos/obtenerDatosEstado.php",
		success:function(r){

			r= jQuery.parseJSON(r);

			$('#frminsertue').find('input[name="id_estado"]').val(r['id_estado']);
			$('#frminsertue').find('input[name="estado"]').val(r['estado']);

		}
	});

}

function actualizarDatosEstado(){
	
	$.ajax({

		type:"POST",
		url:"procesos/actualizarDatosEstado.php",
		data:$('#frminsertue').serialize(),
		success:function(r){

			console.log(r);

			mostrarEstado();
			swal("Registro actualizado con exito!", "success");

		}, error:function(r){
			swal("Error!", "error");
		}
	});

	return false;
}


function eliminarDatosEstado(id_estado){
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
				url:"procesos/eliminarDatosEstado.php",
				data:"id=" + id_estado,
				success:function(r){

					if (r==1) {
					
						mostrarEstado();
						swal("Registro eliminado con exito!", ":D", "info");
					}else{
						swal("Error!", "error");
					}
				}
			});	
		} 
	});
}

function insertarDatosEstado(){
	$.ajax({
		type:"POST",
		url:"procesos/insertarDatosEstado.php",
		data:$('#frminserte').serialize(),
		success:function(r){

			if (r==1) {
				$('#frminserte')[0].reset();  // LIMPIAR FORMULARIO
				mostrarEstado();
				swal("Registro agregado con exito!", "success");
			}else{
				swal("Error!", "error");
			}
		}
	});

	return false;
}
