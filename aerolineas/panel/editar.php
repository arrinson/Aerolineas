<?php
include "../library/configuraciones.php";
include "../library/conexion.php";

$sql = "SELECT * FROM recibos WHERE id = '" . $_GET['id'] . "'";
include "../library/consultas_datos.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Avion Express-Arris </title>
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
			<h2 class="head">Editar Viaje</h2>

			<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="actualizar.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
				<div class="form-group">
					<label>Nombre del Cliente<span>*</span></label>
					<input type="text" class="phone" name="nombre" value="<?php echo $datos[0]['nombre']; ?>">
				</div>
				<div class="clearfix"></div>

				<div class="form-group">
					<label class="control-label" for="totalizador"> Tiquete<span class="required">*</span></label>
					<div class="">

						<select name="totalizador" class="form-control col-md-7 col-xs-12">
							<option>Seleccione un Perfil</option>

							<?php
							$sql_totalizador = "SELECT * FROM edificios";
							$resultado_totalizador = mysqli_query($conexion, $sql_totalizador);
							$numFilas_totalizador = mysqli_num_rows($resultado_totalizador);
							if ( $numFilas_totalizador > 0 ) {
								while ( $registro_totalizador = mysqli_fetch_assoc($resultado_totalizador) ) {
									$seleccionado = "";
									if ( $registro_totalizador['id'] == $datos[0]['edificio'] ) {
										$seleccionado = "selected";
									}
    // echo '<option value="'.$registro_totalizador['id'].'" '.$seleccionado.'>';
    // echo $registro_totalizador['nombre'];
    // echo '</option>';
									?>
									<option
									value="<?php echo $registro_totalizador['id']; ?>"
									<?php echo $seleccionado; ?> >
									<?php echo $registro_totalizador['nombre']; ?>
								</option>
								<?php
							}
						}?>
					</select>

				</div>
				<div class="clearfix"></div>



				<div class="form-group">
					<label>Numero del viaje<span>*</span></label>
					<input type="text" name="modelo" value="<?php echo $datos[0]['modelo']; ?>" >
				</div>
				<div class="clearfix"></div>



				<div class="form-group">
					<label>Precio a pagar <span>*</span></label>
					<input type="text" class="phone" name="costo" value="<?php echo $datos[0]['costo']; ?>">
				</div>
				<div class="clearfix"></div>



				<div class="form-group">
					<label>Detalles<span>*</span></label>
					<input type="text" class="phone" name="descripcion" value="<?php echo $datos[0]['descripcion']; ?>">
				</div>

				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto">Foto <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="file" id="foto" class="form-control col-md-7 col-xs-12" name="foto">
						<hr>
						<?php
						if ( $datos[0]['foto'] != '' ) {
							?>
							<img src="../fotos/<?php echo $datos[0]['foto']; ?>" class="img-responsive">
							<div class="checkbox">
								<label>
									<input type="checkbox" class="flat" name="eliminar_foto"> Eliminar
								</label>
							</div>
							<?php
						} else {
							echo "No tiene foto.";
						}
						?>
									
						</div>


					</div>
					<br>

					<div class="clearfix"></div>
					<br>


				<div class="form-group">
					<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						<a href="lista.php" class="btn btn-danger" value="">Cancelar</a>
						<input type="submit" class="btn btn-success" value="Guardar">
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
<?php include("footer.php") ?>
<!--footer section end-->
</body>
</html>
