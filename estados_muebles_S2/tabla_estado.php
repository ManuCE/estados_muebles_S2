<!DOCTYPE html>
<html>
<head>
	<title>Estados</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<div class="container">
		<div class="row">
			<h2>Crud Tabla Estado</h2>
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						<ul class="nav nav-tabs card-header-tabs">
							<li class="nav-item">
								<a class="nav-link active" href="#">Crud Estado</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12">
								<span class="btn btn-primary" data-toggle="modal" data-target="#insertarModal">
									<i class="fas fa-plus-circle"></i> Nuevo registro
								</span>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-12">
									<div id="tablaDatos">  </div>									
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<?php require_once "modalInsert_estados.php" ?>
	<?php require_once "modalUpdate_estados.php" ?>

	<script src="librerias/bootstrap4/jquery-3.4.1.min.js"></script>
	<script src="librerias/bootstrap4/popper.min.js"></script>
	<script src="librerias/bootstrap4/bootstrap.min.js"></script>
	<script src="librerias/sweetalert.min.js"></script>
	<script src="js/crud_Estado.js"></script>


	<script type="text/javascript">
		mostrarEstado();
	</script>

</body>
</html>