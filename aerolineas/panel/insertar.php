<?php
include "../library/configuraciones.php";
include "../library/conexion.php";

$foto = '';
if ( $_FILES['foto']['error'] == 0 ) {
	$origen = $_FILES['foto']['tmp_name'];
	$destino = $_FILES['foto']['name'];
	if ( move_uploaded_file($origen, "../fotos/".$destino) ) {
		$foto = $destino;
	}
}

$sql = "INSERT INTO recibos SET
			nombre = '".$_POST['nombre']."',
			edificio = '".$_POST['edificio']."',
			modelo = '".$_POST['modelo']."',
			costo = '".$_POST['costo']."',
			fecha_registro = NOW(),
			foto = '".$foto."',
			fecha_partida = NOW(),
			fecha_llegada = NOW(),
			descripcion = '".$_POST['descripcion']."'";
include "../library/consultas_basicas.php";
