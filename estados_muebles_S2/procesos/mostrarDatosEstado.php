<?php
	require_once"../crud/crud_estado.php";
	$obj= new Crud();
	$datos= $obj->mostrarDatosEstado();



	$tabla= '<table class="table table-dark">
					<thead>
						<tr class="font-weight-bold">
							
							<td>Estado</td>
							<td>Editar</td>
							<td>Eliminar</td>

						</tr>
					</thead> 
					<tbody>';

	$datosTabla="";

	foreach ($datos as $key => $value) {
		$datosTabla=$datosTabla.'<tr>
								
								<td>'.$value['estado'].'</td>
								<td>
									<span class="btn btn-warning btn-sm" onclick="obtenerDatosEstado('.$value['id_estado'].')" data-toggle="modal" data-target="#actualizarModal">
										<i class="fas fa-edit"></i>
									</span>
									
								</td>
								<td>
									<span class="btn btn-danger" onclick="eliminarDatosEstado('.$value['id_estado'].')">
										<li class="fas fa-trash-alt"></li>
									</span>
								</td>
							</tr>';
	}

	echo $tabla.$datosTabla.'</tbody></table>';


?>