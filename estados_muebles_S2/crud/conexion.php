<?php 
	class Conexion{
		public function conectar(){
			$conexion= new PDO("sqlite:" . __DIR__ . "/estado_mueble.db");
			return $conexion;
		}
	}

?>
