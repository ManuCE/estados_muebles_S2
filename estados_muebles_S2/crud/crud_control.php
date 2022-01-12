<?php
	
	require_once "conexion.php";

	Class Crud extends Conexion {
		public function mostrarDatosControl(){
			$sql= "SELECT id,
							idmueble,
							muebles,
							idestado,
							estado,
							idusuario,
							usuario
					from vista4";

			$query = Conexion::conectar()->prepare($sql);
			$query->execute();
			return $query->fetchAll();
			$query->close();
		}

		public function insertarDatosControl($datos){
			$sql="INSERT into control_muebles (id_mueble, id_estado, id_usuario) values (:id_mueble,:id_estado,:id_usuario)";
			$query= Conexion::conectar()->prepare($sql);
			$query->bindParam(":id_mueble", $datos["id_mueble"], PDO::PARAM_INT);
			$query->bindParam(":id_estado", $datos["id_estado"], PDO::PARAM_INT); 
			$query->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT); 

			return $query->execute(); 

			$query->close();
		}

		public function obtenerDatosControl($id){
			$sql= "SELECT id_control,
						   id_mueble,
						  id_estado,
						  id_usuario
					from control_muebles where `id_control`=:id";
			$query = Conexion::conectar()->prepare($sql);
			$query->bindParam(":id", $id, PDO::PARAM_INT);
			$query->execute();
			return $query->fetch();
			$query = null;
		}

		public function actualizarDatosControl($data){

			$sql= "UPDATE control_muebles set id_mueble = :id_mueble,	id_estado = :id_estado, id_usuario =  :id_usuario where id_control = :id;";

			$query = Conexion::conectar()->prepare($sql);
			$query->bindParam(":id_mueble", $data["id_mueble"], PDO::PARAM_INT);
			$query->bindParam(":id_estado", $data["id_estado"], PDO::PARAM_INT);
			$query->bindParam(":id_usuario", $data["id_usuario"], PDO::PARAM_INT); 
			$query->bindParam(":id", $data["id_control"], PDO::PARAM_INT);
			
			$query->execute();

			$query->close();
		}

		public function eliminarDatosControl($id){
			$sql= "DELETE from control_muebles where id_control=:id";
			$query= Conexion::conectar()->prepare($sql);
			$query->bindParam(":id", $id, PDO::PARAM_INT);
			return $query->execute();
			$query = null;
		}
	}

?>