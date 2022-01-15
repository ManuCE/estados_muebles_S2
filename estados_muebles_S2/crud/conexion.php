<?php 
	class Conexion{
		public function conectar(){
			$conexion= sqlite_open("sqlite:estados_muebles_S2/estados_muebles_S2/estado_mueble.db");
			return $conexion;
		}
	}

?>