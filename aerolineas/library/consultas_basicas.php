<?php
$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    header ('location: lista.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
//mysqli_close($conexion);