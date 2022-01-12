<?php

	require_once "../crud/crud_estado.php";

	$datos = array(
	 	'estado' => $_POST['estado']
	);

	echo Crud::insertarDatosEstado($datos);

?>