<?php 
	class Conexion{
		public function conectar(){
			$conexion= sqlite_open("estados_muebles_S2/estado_mueble.db");
			return $conexion;
		}
	}

?>