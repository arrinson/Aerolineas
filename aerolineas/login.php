<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<head>
		<meta charset="UTF-8">
		<title>Ingreso Aerolineas</title>
		<?php 	include"meta.php" ?>
	</head>
	<body>
		<div>
			<div class="container-fluid">

				<nav class="navbar-fixed-top navbar-default">
					<div class="container">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<div class="logo">
							<a href="index.php"><span>Avion Express</span>-Arris</a>
						</div>

						<div class="collapse navbar-collapse header-right" id="myNavbar">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.php">Inicio</a></li>

								<li><a  class="active" href="login.php">Ingresar</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>    		<!-- content-starts-here -->
		</div>
		<section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">

						</div>
						<br><br>
						<div class="signin">
							<h1>Acceder al sistema de aerolineas</h1>
							<br>
							<?php
if ( isset($_SESSION['ingresoError']) ) { // Si exite el error
	echo '
	<div class="alert alert-danger">
		<strong>Error</strong> '.$_SESSION['ingresoError'].'
	</div>';
  unset($_SESSION['ingresoError']); // Eliminar variable
}
?>
<form action="ingreso_validacion.php" method="post">
	<div class="log-input">
		<div class="log-input-left">
			<input type="text" class="user"  placeholder="Nombre de usuario" name="usuario" />
		</div>

		<div class="clearfix"> </div>
	</div>
	<div class="log-input">
		<div class="log-input-left">
			<input type="password" class="lock" id="pwd" placeholder="Contraseña" name="clave" />
		</div>

		<div class="clearfix"> </div>
	</div>
	<input type="submit" value="Iniciar sesión">
</form>
</div>

</div>
</div>
</div>
<!--footer section start-->

<footer >
	<div class="footer-bottom text-center container-fluid">
		<div class="container">
			<div class="footer-logo">
				<a href="index.php"><span>Avion Express</span>-Arris</a>
			</div>
				<div class="copyrights">
					<p> © 2016 Sitio web creado por <a href=""> Marianas-Web</a>
					</div>
					<div class="clearfix"></div>
				</footer>
			</footer>
			<!--footer section end-->
		</section>
	</body>
	</html>
