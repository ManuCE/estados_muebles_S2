<?php 
	class Conexion extends SQLite3	{
		public function conectar(){
			$this->open('estado_mueble.db');
			return $conexion;
		}
	}

	

?>