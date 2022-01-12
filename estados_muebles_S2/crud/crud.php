<?php
	
	require_once "conexion.php";

	Class Crud extends Conexion {
		public function mostrarDatos(){
			$sql= "SELECT  id_mueble,
						  nombre,
						  sector
					from muebles";

			$query = Conexion::conectar()->prepare($sql);
			$query->execute();
			return $query->fetchAll();
			$query->close();
		}

		public function insertarDatos($datos){
			$sql="INSERT into muebles (nombre, sector) values (:nombre,:sector)";
			$query= Conexion::conectar()->prepare($sql);
			$query->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$query->bindParam(":sector", $datos["sector"], PDO::PARAM_STR); 

			return $query->execute(); 

			$query->close();
		}

		public function obtenerDatos($id){
			$sql= "SELECT id_mueble,
						   nombre,
						  sector
					from muebles where `id_mueble`=:id";
			$query = Conexion::conectar()->prepare($sql);
			$query->bindParam(":id", $id, PDO::PARAM_INT);
			$query->execute();
			return $query->fetch();
			$query = null;
		}

		public function actualizarDatos($data){

			$sql= "UPDATE muebles set nombre = :nombre,	sector = :sector where id_mueble = :id;";

			$query = Conexion::conectar()->prepare($sql);
			$query->bindParam(":nombre", $data["nombre"], PDO::PARAM_STR);
			$query->bindParam(":sector", $data["sector"], PDO::PARAM_STR); 
			$query->bindParam(":id", $data["id_mueble"], PDO::PARAM_INT);
			
			$query->execute();

			$query->close();
		}

		public function eliminarDatos($id){
			$sql= "DELETE from muebles where id_mueble=:id";
			$query= Conexion::conectar()->prepare($sql);
			$query->bindParam(":id", $id, PDO::PARAM_INT);
			return $query->execute();
			$query = null;
		}
	}

?>