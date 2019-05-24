<?php
include "../library/configuraciones.php";
include "../library/conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Avion Express -Arris</title>
	<link rel="favicon.ico" href="/favicon.ico">

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-select.css">
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="../css/font-awesome.min.css" />
	<link href="css/simple-sidebar.css" rel="stylesheet">

	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!--fonts-->
	<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<!-- js -->
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<!-- js -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/bootstrap-select.js"></script>

</head>
<body>
	<div class="container">
		<?php 	include"panel.php" ?>
	</div>


	<div class="container">
		<div class="col-md-1 col-xs-1">	</div>
		<div class="post-ad-form col-md-11 col-sm-12 col-xs-11">
			<h2 class="head">Publicar cliente</h2>

			<form id="nuevo"  action="insertaredificio.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Codigo del Cliente<span>*</span></label>
					<input type="text" class="phone" name="id" placeholder="">
				</div>
					<div class="form-group">
					<label>Nombre del Cliente<span>*</span></label>
					<input type="text" class="phone" name="nombre" placeholder="">
				</div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<a href="lista.php" class="btn btn-danger" value="">Cancelar</a>
							<input type="submit" class="btn btn-success" name="signup1" value="Guardar">
						</div>
					</div>

				</div>
				<div class="clearfix"></div>
			</form>

		</div>
	</div>
</div>
<script src="js/sidebar_menu.js"></script>
<!--footer section start-->
<?php include ("footer.php"); ?>

</body>
</html>
