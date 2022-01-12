<?php

	require_once "../crud/crud_estado.php";

	$datos = array(
	 	'estado' => $_POST['estado'],
		'id_estado'=> $_POST['id_estado']
	);

	echo Crud::actualizarDatosEstado($datos);

?>