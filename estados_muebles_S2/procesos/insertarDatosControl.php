<?php

	require_once "../crud/crud_control.php";

	$datos = array(
	 	'id_mueble' => $_POST['id_mueble'],
		'id_estado' => $_POST['id_estado'],
		'id_usuario' => $_POST['id_usuario']
	);

	echo Crud::insertarDatosControl($datos);

?>