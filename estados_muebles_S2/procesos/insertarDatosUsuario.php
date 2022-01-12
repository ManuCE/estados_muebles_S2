<?php

	require_once "../crud/crud_usuario.php";

	$datos = array(
	 	'username' => $_POST['username'],
		'password' => $_POST['password']
	);

	echo Crud::insertarDatosUsuario($datos);

?>