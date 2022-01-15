<?php 
	class Conexion{
		public function conectar(){
			$conexion= new PDO("sqlite:estados_muebles_S2/estado_mueble.db");
			return $conexion;
		}
	}

?>