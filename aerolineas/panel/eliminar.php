<?php
include "../library/configuraciones.php";
include "../library/conexion.php";

$sql = "DELETE FROM recibos
		WHERE
			id = '".$_POST['id']."'";

include "../library/consultas_basicas.php";
