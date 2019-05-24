<?php
include "../library/configuraciones.php";
include "../library/conexion.php";

$foto = '';
$foto_actualizacion = '';
if ( $_FILES['foto']['error'] == 0 ) {
	$origen = $_FILES['foto']['tmp_name'];
	$destino = $_FILES['foto']['name'];
	if ( move_uploaded_file($origen, "../fotos/".$destino) ) {
		$foto = $destino;
		$foto_actualizacion = "foto = '".$foto."',";
	} else {
		echo "No carga la foto";
	}
}

if ( isset($_POST['eliminar_foto']) ) {
	$foto_actualizacion = "foto = '',";
}

$sql = "UPDATE recibos SET
			nombre = '".$_POST['nombre']."',
			edificio = '".$_POST['totalizador']."',
			modelo = '".$_POST['modelo']."',
			costo = '".$_POST['costo']."',
			fecha_registro = NOW(),
			fecha_partida = NOW(),
			fecha_llegada = NOW(),
			".$foto_actualizacion."
			descripcion = '".$_POST['descripcion']."'

		WHERE
			id = '".$_POST['id'] . "'";


include "../library/consultas_basicas.php";
