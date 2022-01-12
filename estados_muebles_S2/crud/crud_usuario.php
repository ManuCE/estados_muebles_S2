<?php
	
	require_once "conexion.php";

	Class Crud extends Conexion {
		public function mostrarDatosU(){
			$sql= "SELECT  id_usuario,
						  username,
						  password
					from usuario;";

			$query = Conexion::conectar()->prepare($sql);
			$query->execute();
			return $query->fetchAll();
			$query->close();
		}

		public function insertarDatosUsuario($datos){
			$sql="INSERT into usuario (username, password) values (:username,:password)";
			$query= Conexion::conectar()->prepare($sql);
			$query->bindParam(":username", $datos["username"], PDO::PARAM_STR);
			$query->bindParam(":password", $datos["password"], PDO::PARAM_STR); 

			return $query->execute(); 

			$query->close();
		}

		public function obtenerDatosUsuario($id){
			$sql= "SELECT id_usuario,
						   username,
						  password
					from usuario where `id_usuario`=:id";
			$query = Conexion::conectar()->prepare($sql);
			$query->bindParam(":id", $id, PDO::PARAM_INT);
			$query->execute();
			return $query->fetch();
			$query = null;
		}

		public function actualizarDatosUsuario($data){

			$sql= "UPDATE usuario set username = :username, password = :password where id_usuario = :id;";

			$query = Conexion::conectar()->prepare($sql);
			$query->bindParam(":username", $data["username"], PDO::PARAM_STR);
			$query->bindParam(":password", $data["password"], PDO::PARAM_STR); 
			$query->bindParam(":id", $data["id_usuario"], PDO::PARAM_INT);
			
			$query->execute();

			$query->close();
		}

		public function eliminarDatosUsuario($id){
			$sql= "DELETE from usuario where id_usuario=:id";
			$query= Conexion::conectar()->prepare($sql);
			$query->bindParam(":id", $id, PDO::PARAM_INT);
			return $query->execute();
			$query = null;
		}
	}

?>