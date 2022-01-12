<?php
	require_once "../crud/crud_control.php";
	$id= $_POST['id'];

	echo json_encode(Crud::obtenerDatosControl($id));
?>