<?php
// Definicion del arreglo que debe contener los datos de la tabla
$datos = array();
$resultado = mysqli_query($conexion, $sql);
if ($resultado) {
  $numFilas = mysqli_num_rows($resultado);
  if ( $numFilas > 0) {
    while ( $registro = mysqli_fetch_assoc($resultado) ) {
      $datos[] = $registro;
    }
  }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
//mysqli_close($conexion);