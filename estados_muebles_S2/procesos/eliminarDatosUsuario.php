<?php
	require_once "../crud/crud_usuario.php";
	$id= $_POST['id'];

	echo Crud::eliminarDatosUsuario($id);
?>