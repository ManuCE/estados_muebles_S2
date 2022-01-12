<?php

	require_once "../crud/crud.php";

	$datos = array(
		'id_mueble' => $_POST['id_mueble'],
		'id_estado'=> $_POST['id_estado'],
		'id_usuario'=> $_POST['id_usuario'],
	 	'id_control' => $_POST['id_control']
	);

	echo Crud::actualizarDatosControl($datos);

?>