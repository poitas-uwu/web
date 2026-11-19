<?php

require "Conexion.php";
// Incluye el archivo de conexión a la base de datos.
// Permite utilizar la variable $conexion.

require "veterinaria.php";
// Incluye el archivo que contiene la clase Alumno.

$cliente1 = new Cliente(2, "pepe", "2227349437");
// Crea un objeto de la clase Alumno.
// null indica que el ID será generado automáticamente.
// También se asignan el nombre, apellido y DNI.

$nombre = $cliente1->getNombre();
// Obtiene el nombre del alumno mediante el método getNombre().

$telefono = $cliente1->getTelefono();
// Obtiene el apellido del alumno mediante el método getApellido().

//$edad = $mascota1->GetEdad();
// Obtiene el DNI del alumno mediante el método getDni().

$stmt = $conexion->prepare(
    "INSERT INTO Clientes (nombre, telefono) VALUES (?, ?)"
);
// Prepara la consulta SQL para insertar un alumno.
// Los signos ? serán reemplazados por los datos correspondientes.

$stmt->bind_param("ss", $nombre, $telefono);
// Vincula los datos con los signos ?.
// s representa texto y i representa un número entero.
// El nombre y apellido son textos; el DNI es un número.

$stmt->execute();
// Ejecuta la consulta y guarda el alumno en la base de datos.

if ($stmt->affected_rows > 0) {
    // Comprueba si se insertó correctamente al menos un registro.

    echo "cliente guardado correctamente.";
    // Muestra un mensaje de confirmación.
} else {
    // Se ejecuta si no se insertó ningún registro.

    echo "No se pudo guardar el cliente.";
    // Muestra un mensaje de error.
}
