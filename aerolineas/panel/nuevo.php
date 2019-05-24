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

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
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

<!--Funciones de input-->
<script type="text/javascript">
	document.nombreDelFormulario.addEventListener('submit', validarFormulario);

	function validarFormulario(evObject) {

	evObject.preventDefault(); //Evita el envío del formulario hasta comprobar


}

</script>


</head>
<body>
	<div class="container">
		<?php 	include"panel.php" ?>
	</div>


	<div class="container">
		<div class="col-md-1 col-xs-1">	</div>
		<div class="post-ad-form col-md-11 col-sm-12 col-xs-11">
			<h2 class="head">Publicar Viaje</h2>

			<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="insertar.php" method="post" enctype="multipart/form-data" onsubmit="return validacion()">

				<!-- Nombre del pasajero-->
				<div class="form-group">
					<label>Nombre del Viajero<span>*</span></label>
					<input type="text" class="phone" name="nombre" placeholder=""  title="Un Nombre de usuario debe empezar por la letra mayuscula" required>
				</div>
				<div class="clearfix"></div>

				<!-- Elejir tiquete-->
				<div class="form-group">
					<label class="control-label" for="edificio">Tiquete<span class="required">*</span></label>
					<div class="">
						<select name="edificio" class="container-fluid" required>
							<option>Seleccione un Tiquete</option>
							<?php
							$sql = "SELECT * FROM edificios";
							include "../library/consultas_datos.php";
							foreach ($datos as $registro) {
								?>
								<option value="<?php echo $registro['id']; ?>"><?php echo $registro['nombre']; ?></option>
								<?php
							}
							?>
						</select>

					</div>
					<div class="clearfix"></div>


					<!--Lugares a viajar -->
					<div class="form-group">
						<label>Lugares a viajar<span>*</span></label>
						<!-- <input type="text" name="modelo" >
						-->
						<select name="modelo" id="container-fluid" required>
							<option value="1">Argentina</option>
							<option value="2">Estados unidos</option>
							<option value="3">China</option>
							<option value="4">Nueva Irlanda</option>
							<option value="5">Mexico</option>
							<option value="6">Islas de sanadres</option>
							<option value="7">Brasil</option>
							<option value="8">Meta</option>
							<option value="9">Asia</option>
							<option value="10">Angola</option>
							<option value="11">Alemania</option>
							<option value="12">Andora</option>
							<option value="13">Buenos aires</option>
							<option value="14">Europa</option>
						</select>
					</div>
					<div class="clearfix"></div>



					<div class="form-group">
						<label>Valor a pagar <span>*</span></label>
						<input type="text" class="phone" name="costo" id="validarFormulario" required>
					</div>
					<div class="clearfix"></div>



					<div class="form-group">
						<label>Descripción del Viaje<span>*</span></label>
						<textarea class="mess" placeholder="Descripcion o notas del estado actual" name="descripcion" required></textarea>
					</div>


					<div class="form-group ">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto">Foto <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="file" id="foto" class="form-control col-md-7 col-xs-12" name="foto">
						</div>
						<br>
						<br><br>
					</div>

					<div class="form-group">
						<label>Lugar Silla<span>*</span></label>
						<!-- <input type="text" name="modelo" >
						-->
						<select name="modelo" id="container-fluid">

							<option value="silla 1">1</option>
							<option value="silla 2">2</option>
							<option value="silla 3">3</option>
							<option value="silla 4">4</option>
							<option value="silla 5">5</option>
							<option value="silla 6">6</option>
							<option value="silla 7">7</option>
							<option value="silla 8">8</option>
							<option value="silla 9">9</option>
							<option value="silla 10">10</option>
							<option value="silla 11">11</option>
							<option value="silla 12">12</option>
							<option value="silla 13">13</option>
							<option value="silla 15">14</option>
							<option value="silla 15">15</option>
							<option value="silla 16">16	</option>
							<option value="silla 17">17</option>
							<option value="silla 18">18</option>
							<option value="silla 19">19</option>
							<option value="silla 20">20</option>
						</select>
					</div>


					<div class="clearfix"></div>
							<div class="form-group">
							<label>Fecha partida<span>*</span></label>
							<input type="date" name="fecha_partida" value="" >
							<div>
							<br>
							<div class="clearfix"></div>
							<div class="form-group">
							<label>Fecha llegada<span>*</span></label>
							<input type="date" name="fecha_llegada" value="" >
							<div>


						<br>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<a href="lista.php" class="btn btn-danger" value="">Cancelar</a>
							<input type="submit" class="btn btn-success" value="Guardar" id="validarFormulario">
						</div>
					</div>

				</div>
				<div class="clearfix"></div>
			</form>

		</div>
	</div>
</div>
<script src="js/sidebar_menu.js"></script>
<script type="text/javascript" src="../js/jquery.flexisel.js"></script>
<!--footer section start-->
<?php include("footer.php") ?>
<!--footer section end-->
</body>
</html>
