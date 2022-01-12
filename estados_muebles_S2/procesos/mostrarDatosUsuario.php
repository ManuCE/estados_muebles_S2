<?php
	require_once"../crud/crud_usuario.php";
	$obj= new Crud();
	$datos= $obj->mostrarDatosU  ();



	$tabla= '<table class="table table-dark">
					<thead>
						<tr class="font-weight-bold">
							
							<td>Usuario</td>
							<td>Contraseña</td>
							<td>Editar</td>
							<td>Eliminar</td>

						</tr>
					</thead> 
					<tbody>';

	$datosTabla="";

	foreach ($datos as $key => $value) {
		$datosTabla=$datosTabla.'<tr>
								
								<td>'.$value['username'].'</td>
								<td>'.$value['password'].'</td>

								<td>
									<span class="btn btn-warning btn-sm" onclick="obtenerDatosUsuario('.$value['id_usuario'].')" data-toggle="modal" data-target="#actualizarModal">
										<i class="fas fa-edit"></i>
									</span>
									
								</td>
								<td>
									<span class="btn btn-danger" onclick="eliminarDatosUsuario('.$value['id_usuario'].')">
										<li class="fas fa-trash-alt"></li>
									</span>
								</td>
							</tr>';
	}

	echo $tabla.$datosTabla.'</tbody></table>';


?>