<?php
session_start();
// isset sirve para saber si existe la variable
if ( isset($_POST['usuario']) and isset($_POST['clave']) ) {
	if ( $_POST['usuario'] == "avion" and $_POST['clave'] == "avion123" ) {
		header('location: panel/lista.php');
		if ($_POST['administrador'] == "123" and $_POST['clave'] == "123" ) {
			header('location: panel/lista.php');
		}

	} else {
		$_SESSION['ingresoError'] = 'Al ingresar nombre de usuario o contraseña invalida.';
		header('location: login.php');
	}
} else {
	$_SESSION['ingresoError'] = 'Iniciar session';
	header('location: login.php');
}
?>
