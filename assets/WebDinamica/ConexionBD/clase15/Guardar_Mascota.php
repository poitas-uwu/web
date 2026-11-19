<?php

require "Conexion.php";
// Incluye el archivo de conexión a la base de datos.
// Permite utilizar la variable $conexion.

require "veterinaria.php";
// Incluye el archivo que contiene la clase Alumno.

$mascota1 = new Mascota(3, "Rocky", "Perro", 3);
// Crea un objeto de la clase Alumno.
// null indica que el ID será generado automáticamente.
// También se asignan el nombre, apellido y DNI.

$nombre = $mascota1->getNombre();
// Obtiene el nombre del alumno mediante el método getNombre().

$especie = $mascota1->getEspecie();
// Obtiene el apellido del alumno mediante el método getApellido().

$edad = $mascota1->GetEdad();
// Obtiene el DNI del alumno mediante el método getDni().

$stmt = $conexion->prepare(
    "INSERT INTO Mascota (nombre, especie, edad) VALUES (?, ?, ?)"
);
// Prepara la consulta SQL para insertar un alumno.
// Los signos ? serán reemplazados por los datos correspondientes.

$stmt->bind_param("ssi", $nombre, $especie, $edad);
// Vincula los datos con los signos ?.
// s representa texto y i representa un número entero.
// El nombre y apellido son textos; el DNI es un número.

$stmt->execute();
// Ejecuta la consulta y guarda el alumno en la base de datos.

if ($stmt->affected_rows > 0) {
    // Comprueba si se insertó correctamente al menos un registro.

    echo "mascota guardado correctamente.";
    // Muestra un mensaje de confirmación.
} else {
    // Se ejecuta si no se insertó ningún registro.

    echo "No se pudo guardar el Mascota.";
    // Muestra un mensaje de error.
}
