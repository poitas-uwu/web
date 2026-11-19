<?php

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

$alumnoEdit = new Alumno(
    $fila["id"],
    $fila["nombre"],
    $fila["apellido"],
    $fila["dni"]
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h1>Editar alumno</h1>

    <form action="actualizar_alumno.php" method="POST">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre" value="<?php htmlspecialchars($alumnoEdit->GetNombre()) ?>" required /> <br /><br />

        <label for="apellido">Apellido: </label>
        <input type="text" id="apellido" name="apellido" value="<?php htmlspecialchars($alumnoEdit->GetApellido()) ?>" required /> <br /><br />

        <label for="dni">DNI: </label>
        <input type="text" id="dni" name="dni" value="<?php htmlspecialchars($alumnoEdit->GetDNI()) ?>" required /> <br /><br />

        <input type="submit" value="Guardar" />

        <a href="leer_alumno.php">Canselar</a>
    </form>
</body>

</html>

<?php $conexion->close(); ?>