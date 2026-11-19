<?php
// Inicia el código PHP.

// Incluye la conexión con la base de datos.
require "conexion.php";
require "clase13_alumno.php";

$id = isset($_GET["id"]) ? (int) $_GET["id"] : 0;

$stmtSelect = $conexion->prepare("SELECT * FROM Alumnos WHERE id = ?");
$stmtSelect->bind_param("i", $id);
$stmtSelect->execute();
$resultado = $stmtSelect->get_result();
$fila = $resultado->fetch_assoc();

if (!$fila) {
    die("No existe un alumno con ese id.");
}

// Vincula el ID con el signo ?.
// La letra i indica que es un número entero.
$stmtSelect->bind_param("i", $id);

// Ejecuta la consulta de búsqueda.
$stmtSelect->execute();

// Obtiene el resultado de la consulta.
$resultado = $stmtSelect->get_result();

// Convierte la primera fila obtenida en un arreglo asociativo.
$fila = $resultado->fetch_assoc();

// Comprueba si no se encontró ningún alumno.
if (!$fila) {
    // Detiene el programa y muestra un mensaje de error.
    die("No existe un alumno con ese id.");
}

// Crea un objeto Alumno con los datos obtenidos de la base de datos.
$alumnoEdit = new Alumno(
    $fila['id'],
    $fila['nombre'],
    $fila['apellido'],
    $fila['dni']
);

// Muestra el nombre y apellido actuales del alumno.
echo "Alumno encontrado: "
    . $alumnoEdit->getNombre()
    . " "
    . $alumnoEdit->getApellido()
    . "<br>";

// Muestra el DNI actual del alumno.
echo "DNI actual: " . $alumnoEdit->getDni() . "<br>";

// Modifica el apellido utilizando su método setter.
$alumnoEdit->setApellido("Gómez Pérez");

// Modifica el DNI utilizando su método setter.
$alumnoEdit->setDni("41234567");

// Obtiene el nombre actualizado del objeto.
$nombre = $alumnoEdit->getNombre();

// Obtiene el apellido actualizado del objeto.
$apellido = $alumnoEdit->getApellido();

// Obtiene el DNI actualizado del objeto.
$dni = $alumnoEdit->getDni();

// Obtiene el ID del alumno que se va a actualizar.
$id = $alumnoEdit->getId();

// Prepara la consulta SQL para actualizar los datos.
$stmtUpdate = $conexion->prepare(
    "UPDATE Alumnos SET nombre = ?, apellido = ?, dni = ? WHERE id = ?"
);

// Vincula los valores con los signos ?.
// ss indica textos, i indica un número entero.
$stmtUpdate->bind_param("sssi", $nombre, $apellido, $dni, $id);

// Ejecuta la consulta UPDATE.
$stmtUpdate->execute();

// Comprueba si se modificó algún registro.
if ($stmtUpdate->affected_rows > 0) {
    // Muestra un mensaje de confirmación.
    echo "Alumno actualizado correctamente.";
} else {
    // Indica que no hubo cambios o que ocurrió un problema.
    echo "No se pudo actualizar o los datos ya eran iguales.";
}

// Cierra la conexión con la base de datos.
$conexion->close();
