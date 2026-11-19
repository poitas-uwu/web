<?php
echo "<pre>";
var_dump($_SERVER["REQUEST_METHOD"]);
var_dump($_POST);
echo "</pre>";
require "Conexion.php";
// Incluye el archivo de conexión a la base de datos.
// Permite utilizar la variable $conexion.

require "clase13_alumno.php";
// Incluye el archivo que contiene la clase Alumno.

$alumno1 = new Alumno(0, $_POST['nombre'], $_POST['apellido'], $_POST['dni']);
//
// Crea un objeto de la clase Alumno.    
// null indica que el ID será generado automáticamente.
// También se asignan el nombre, apellido y DNI.
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$nombre = $alumno1->getNombre();
// Obtiene el nombre del alumno mediante el método getNombre().

$apellido = $alumno1->getApellido();
// Obtiene el apellido del alumno mediante el método getApellido().

$dni = $alumno1->getDni();
// Obtiene el DNI del alumno mediante el método getDni().

$stmt = $conexion->prepare(
    "INSERT INTO Alumnos (nombre, apellido, dni) VALUES (?, ?, ?)"
);
// Prepara la consulta SQL para insertar un alumno.
// Los signos ? serán reemplazados por los datos correspondientes.

$stmt->bind_param("sss", $nombre, $apellido, $dni);
// Vincula los datos con los signos ?.
// s representa texto y i representa un número entero.
// El nombre y apellido son textos; el DNI es un número.

$stmt->execute();
// Ejecuta la consulta y guarda el alumno en la base de datos.

if ($stmt->affected_rows > 0) {
    // Comprueba si se insertó correctamente al menos un registro.

    echo "Alumno guardado correctamente.";
    // Muestra un mensaje de confirmación.
} else {
    // Se ejecuta si no se insertó ningún registro.

    echo "No se pudo guardar el alumno.";
    // Muestra un mensaje de error.
}
