<?php
	require_once "../crud/crud_estado.php";
	$id= $_POST['id'];

	echo json_encode(Crud::obtenerDatosEstado($id));
?>