

<?php
// Crear conexion
$conexion = mysqli_connect($servidor, $usuario, $clave, $bdnombre);
// Verificar conexion
if (!$conexion) {
    die("Error al conectarse a la BDs: " . mysqli_connect_error());
}
?>
