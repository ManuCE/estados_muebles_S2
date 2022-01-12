function mostrar(){
	$.ajax({
		type:"POST",
		url:"procesos/mostrarDatos.php",
		success:function(r){
			$('#tablaDatos').html(r); 
		}
	});
}
 
function obtenerDatos(id_mueble){
	$.ajax({
		type:"POST",
		data: "id=" + id_mueble,
		url:"procesos/obtenerDatos.php",
		success:function(r){

			r= jQuery.parseJSON(r);

			$('#frminsertu').find('input[name="id_mueble"]').val(r['id_mueble']);
			$('#frminsertu').find('input[name="nombre"]').val(r['nombre']);
			$('#frminsertu').find('input[name="sector"]').val(r['sector']);


		}
	});

}

function actualizarDatos(){
	
	$.ajax({

		type:"POST",
		url:"procesos/actualizarDatos.php",
		data:$('#frminsertu').serialize(),
		success:function(r){

			console.log(r);

			mostrar();
			swal("Registro actualizado con exito!", "success");

		}, error:function(r){
			swal("Error!", "error");
		}
	});

	return false;
}


function eliminarDatos(id_mueble){
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
				url:"procesos/eliminarDatos.php",
				data:"id=" + id_mueble,
				success:function(r){

					if (r==1) {
					
						mostrar();
						swal("Registro eliminado con exito!", ":D", "info");
					}else{
						swal("Error!", "error");
					}
				}
			});	
		} 
	});
}

function insertarDatos(){
	$.ajax({
		type:"POST",
		url:"procesos/insertarDatos.php",
		data:$('#frminsert').serialize(),
		success:function(r){

			if (r==1) {
				$('#frminsert')[0].reset();  // LIMPIAR FORMULARIO
				mostrar();
				swal("Registro agregado con exito!", "success");
			}else{
				swal("Error!", "error");
			}
		}
	});

	return false;
}
