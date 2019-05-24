<?php
include "../library/configuraciones.php";
include "../library/conexion.php";

$sql = "SELECT * FROM edificios";
include "../library/consultas_datos.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Avion Express - Sistema de aerolineas colombianas</title>
	<link rel="favicon.ico" href="/favicon.ico">

	<link rel="stylesheet" href="../css/bootstrap.min.css">

	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link rel="stylesheet" href="../css/font-awesome.min.css" />
	<link href="css/simple-sidebar.css" rel="stylesheet">

	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/jquery.dataTables.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<!-- js -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/bootstrap-select.js"></script>
	<script src="../js/jquery.dataTables.min.js"></script>





</head>
<body>
	<div class="container">
		<?php 	include"panel.php" ?>
	</div>

	<script>
		$(document).ready( function () {
			$('#datatable-keytable').DataTable();
		} );



	</script>


		<br><br>

		<div class="container">

			<table id="datatable-keytable" class="table table-striped table-bordered" class="display">
				<thead>
					<tr>
						<th>Total a pagar</th>
						<th>Acciones</th>
					</tr>
				</thead>


				<tbody>
					<?php
					foreach ($datos as $indice => $registro) {
					$edificio = "No asignado";
					$sql_marca = "SELECT nombre FROM edificios WHERE id = '" . $registro['edificio'] . "'";
					$resultado_marca = mysqli_query($conexion, $sql_marca);
					$numFilas_marca = mysqli_num_rows($resultado_marca);
					if ( $numFilas_marca == 1 ) {
						$registro_marca = mysqli_fetch_assoc($resultado_marca);
						$edificio = $registro_marca['nombre'];
					}
					?>
						<tr>
							<td><?php echo $edificio; ?></td>

							<td>

								<a href="editar.php?id=<?php echo $registro['id']; ?>" class="btn btn-success btn-xs"><i class="fa fa-edit m-right-xs"></i> Editar</a>
								<a href="elimina.php?id=<?php echo $registro['id']; ?>" class="btn btn-danger  btn-xs" ><i class="fa fa-trash m-right-xs"></i> Eliminar</a>
								<a href="../articulo.php?id=<?php echo $registro['id']; ?>" class="btn btn-warning btn-xs"><i class="fa fa-eye m-right-xs"></i> Ver</a>
								<div class="ui">

								</div>

							</td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>

		</div>
	</div>

	<script src="js/sidebar_menu.js"></script>
	<script type="text/javascript" src="../js/jquery.flexisel.js"></script>
	<!--footer section start-->
	<?php include("footer.php") ?>
	<!--footer section end-->
</body>
</html>