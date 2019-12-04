<?php

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);
if (!$conexion) {
    die("Fallo: " . mysqli_connect_error());
}

//Evitar inyección SQL
$usuarioF = mysqli_real_escape_string($conexion, $_REQUEST["usuario"]);
$contrasenaF = mysqli_real_escape_string($conexion, $_REQUEST["contrasena"]);

$sql = "SELECT usuario, contrasena FROM usuarios WHERE usuario ='" . $usuarioF . "' AND contrasena ='" . $contrasenaF . "'";

$resultado = mysqli_query($conexion, $sql);
mysqli_close($conexion);

?>