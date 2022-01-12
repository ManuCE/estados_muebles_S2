<?php

	require_once "../crud/crud_usuario.php";

	$datos = array(
	 	'username' => $_POST['username'],
		'password' => $_POST['password'],
		'id_usuario'=> $_POST['id_usuario']
	);

	echo Crud::actualizarDatosUsuario($datos);

?>