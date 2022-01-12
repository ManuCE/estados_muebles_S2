<?php
	require_once"../crud/crud_control.php";
	$obj= new Crud();
	$datos= $obj->mostrarDatosControl();



	$tabla= '<table class="table table-dark">
					<thead>
						<tr class="font-weight-bold">
							
							<td>Mueble</td>
							<td>Estado</td>
							<td>Usuario</td>
							<td>Editar</td>
							<td>Eliminar</td>

						</tr>
					</thead> 
					<tbody>';

	$datosTabla="";

	foreach ($datos as $key => $value) {
		$datosTabla=$datosTabla.'<tr>
								
								<td>'.$value['muebles'].'</td>
								<td>'.$value['estado'].'</td>
								<td>'.$value['usuario'].'</td>

								<td>
									<span class="btn btn-warning btn-sm" onclick="obtenerDatosControl('.$value['id'].')" data-toggle="modal" data-target="#actualizarModal">
										<i class="fas fa-edit"></i>
									</span>
									
								</td>
								<td>
									<span class="btn btn-danger" onclick="eliminarDatosControl('.$value['id'].')">
										<li class="fas fa-trash-alt"></li>
									</span>
								</td>
							</tr>';
	}

	echo $tabla.$datosTabla.'</tbody></table>';


?>