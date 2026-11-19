<?php
require "conexion.php";
$id = (int) $_GET["id"];
echo "<br>   " . $id . "<br>";

$stmtSelect = $conexion->prepare("SELECT * FROM Alumnos WHERE id = ?");
$stmtSelect->bind_param("i", $id);
$stmtSelect->execute();
$resultado = $stmtSelect->get_result();
$fila = $resultado->fetch_assoc();

if (!$fila) {
    die("No existe un alumno con ese id. <br>");
}

echo "se va a eliminar" . $fila['nombre'] . ' ' . $fila['apellido'] . "<br>";

$stmtDelete = $conexion->prepare("DELETE FROM Alumnos WHERE id = ?");
$stmtDelete->bind_param("i", $id);
$stmtDelete->execute();

if ($conexion->affected_rows > 0) {
    echo "Alumno eliminado correctamente.";
} else {
    echo "No se encontro el alumno a eliminar.";
}

echo "<br> <a href='leer_alumno.php'> volver a la lista de alumnos</a>";

$conexion->close();
