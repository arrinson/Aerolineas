<?php
include "library/configuraciones.php";
include "library/conexion.php";

$sql = "SELECT * FROM recibos WHERE id = '" . $_GET['id'] . "'";
include "library/consultas_datos.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistema de aerolineas colombianas : <?php echo  $datos[0]['nombre']; ?></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!--fonts-->
	<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<!-- js -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-select.js"></script>



	<link rel="stylesheet" href="css/flexslider.css" media="screen" />
</head>
<body>
	<div>
		<?php include"header.php" ?>
	</div>

	<div class="single-page main-grid-border">
		<div class="container">
			<ol class="breadcrumb" style="margin-bottom: 5px;">
				<li><a href="index.html">Inicio</a></li>
				<li class="active"><a href="mobiles.html">Viajes</a></li>
				<li class="active"><?php echo  $datos[0]['nombre']; ?></li>
			</ol>
			<div class="product-desc">
				<div class="col-md-offset-3">	</div>
				<div class="col-md-6 product-view">
					<?php
					foreach ($datos as $indice => $registro) {
						$marca = "No asignado";
						$sql_marca = "SELECT nombre FROM edificios WHERE id = '" . $registro['edificio'] . "'";
						$resultado_marca = mysqli_query($conexion, $sql_marca);
						$numFilas_marca = mysqli_num_rows($resultado_marca);
						if ( $numFilas_marca == 1 ) {
							$registro_marca = mysqli_fetch_assoc($resultado_marca);
							$marca = $registro_marca['nombre'];
						}
						?>


						<h2><?php echo  $datos[0]['nombre']; ?></h2>
						<p> <i class="glyphicon glyphicon-map-marker"></i> <a href="#">Bogotá</a>| Registrado el: <?php echo  $datos[0]['fecha_registro']; ?></p>
						<div >
								<div >
							<?php
							if ( $registro['foto'] != '' ) {
								?>
								<img src="fotos/<?php echo $registro['foto']; ?>" >
								<?php
							}
							?>
						</div>
					<?php
				}
				?>
			</div>
			<!-- FlexSlider -->
			<script defer src="js/jquery.flexslider.js"></script>
			<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

			<br><br>

			</div>
			<div class="col-md-5 product-details-grid">
				<div class="item-price">
					<div class="product-price">
						<p class="p-price">Precio a cancelar</p>
						<h3 class="rate">&#36 <?php echo  $datos[0]['costo']; ?></h3>
						<div class="clearfix"></div>
					</div>

				</div>
				<div class="interested text-center">
					<h4>Dudas o Sugerencias  <small>Llamenos </small></h4>
					<p><i class="glyphicon glyphicon-earphone"></i>3134089711</p>
				</div>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//single-page-->
<!--footer section start-->
<footer>
	<?php include"footer.php" ?>
</footer>
<!--footer section end-->
</body>
</html>
