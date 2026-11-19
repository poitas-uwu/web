<?php

$host = "localhost";
$usuario = "root";
$contrasena = "1234";
$base_datos = "WebDinamica";

$conexion = mysqli_connect($host, $usuario, $contrasena, $base_datos);


if ($conexion->connect_error) {
    die("Error de Conexión" . $conexion->connect_error);
} else {
    echo "conexion exitosa";
}
