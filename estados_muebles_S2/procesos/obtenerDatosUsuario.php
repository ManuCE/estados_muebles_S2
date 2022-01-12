<?php
	require_once "../crud/crud_usuario.php";
	$id= $_POST['id'];

	echo json_encode(Crud::obtenerDatosUsuario($id));
?>