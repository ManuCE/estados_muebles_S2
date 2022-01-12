<?php
	require_once "../crud/crud_estado.php";
	$id= $_POST['id'];

	echo Crud::eliminarDatosEstado($id);
?>