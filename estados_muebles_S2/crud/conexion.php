<?php 
	class Conexion{
		public function conectar(){
			$conexion= new PDO("mysql:host=localhost;dbname=estados_de_muebles","userdb", "123456");
			return $conexion;
		}
	}

?>