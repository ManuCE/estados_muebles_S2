<?php

	require_once "../crud/crud.php";

	$datos = array(
	 	'nombre' => $_POST['nombre'],
		'sector' => $_POST['sector']
	);

	echo Crud::insertarDatos($datos);

?>