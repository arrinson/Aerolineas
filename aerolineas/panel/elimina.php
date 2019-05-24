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
	<title>Avion Express</title>
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
	<script>
		$(document).ready(function () {
			var mySelect = $('#first-disabled2');

			$('#special').on('click', function () {
				mySelect.find('option:selected').prop('disabled', true);
				mySelect.selectpicker('refresh');
			});

			$('#special2').on('click', function () {
				mySelect.find('option:disabled').prop('disabled', false);
				mySelect.selectpicker('refresh');
			});

			$('#basic2').selectpicker({
				liveSearch: true,
				maxOptions: 1
			});
		});
	</script>

</head>
<body>
	<div class="container">
		<?php 	include"panel.php" ?>
	</div>


	<div class="container">
		<div class="col-md-1 col-xs-1">	</div>
		<div class="post-ad-form col-md-11 col-sm-12 col-xs-11">
			<h2 class="head">Eliminar Viaje</h2>

			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Eliminar</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" action="eliminar.php" method="post" data-parsley-validate class="form-horizontal form-label-left">
                      <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                      <div class="lead text-danger text-center">Esta seguro que desea eliminar  "<?php echo $datos[0]['nombre'], " "; ?>"?</div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                          <a href="lista.php" class="btn btn-default"><i class="fa fa-close"></i> Cancelar</a>
                          <button type="submit" href="eliminar.php" class="btn btn-danger"><i class="fa fa-check"></i> Eliminar</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

		</div>
	</div>
</div>
<script src="js/sidebar_menu.js"></script>
<script type="text/javascript" src="../js/jquery.flexisel.js"></script>
<!--footer section start-->
<footer>
	<div class="footer-bottom text-center container-fluid">
		<div class="container">
			<div class="footer-logo">
				<a href="index.php"><span>Avion Express</span>-Arris</a>
			</div>
			<div class="copyrights">
				<p> © 2016 Sitio web creado por <a href="www.ciudadsoft.com"> Marianas-Web</a>
				</p></div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

</footer>
<!--footer section end-->
</body>
</html>
