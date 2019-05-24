<?php
include "../library/configuraciones.php";
include "../library/conexion.php";


$sql = "INSERT INTO edificios SET
			id = '".$_POST['id']."',
			nombre = '".$_POST['nombre']."'";
include "../library/consultas_basicas.php";
