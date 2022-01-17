<?php 
	class Conexion{
		public function conectar(){
			$conexion= new PDO("sqlite:" . __DIR__ . "/estado_mueble.sqlite3");
			return $conexion;
		}
	}

?>
