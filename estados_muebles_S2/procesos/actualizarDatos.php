<?php

	require_once "../crud/crud.php";

	$datos = array(
	 	'nombre' => $_POST['nombre'],
		'sector' => $_POST['sector'],
		'id_mueble'=> $_POST['id_mueble']
	);

	echo Crud::actualizarDatos($datos);

?>