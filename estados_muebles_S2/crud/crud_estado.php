<?php
	
	require_once "conexion.php";

	Class Crud extends Conexion {
		public function mostrarDatosEstado(){
			$sql= "SELECT  id_estado,
						  estado
					from estado";

			$query = Conexion::conectar()->prepare($sql);
			$query->execute();
			return $query->fetchAll();
			$query->close();
		}

		public function insertarDatosEstado($datos){
			$sql="INSERT into estado (estado) values (:estado)";
			$query= Conexion::conectar()->prepare($sql);
			$query->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);

			return $query->execute(); 

			$query->close();
		}

		public function obtenerDatosEstado($id){
			$sql= "SELECT id_estado,
						   estado
					from estado where `id_estado`=:id";
			$query = Conexion::conectar()->prepare($sql);
			$query->bindParam(":id", $id, PDO::PARAM_INT);
			$query->execute();
			return $query->fetch();
			$query = null;
		}

		public function actualizarDatosEstado($data){

			$sql= "UPDATE estado set estado = :estado where id_estado = :id;";

			$query = Conexion::conectar()->prepare($sql);
			$query->bindParam(":estado", $data["estado"], PDO::PARAM_STR);
			$query->bindParam(":id", $data["id_estado"], PDO::PARAM_INT);
			
			$query->execute();

			$query->close();
		}

		public function eliminarDatosEstado($id){
			$sql= "DELETE from estado where id_estado=:id";
			$query= Conexion::conectar()->prepare($sql);
			$query->bindParam(":id", $id, PDO::PARAM_INT);
			return $query->execute();
			$query = null;
		}
	}

?>