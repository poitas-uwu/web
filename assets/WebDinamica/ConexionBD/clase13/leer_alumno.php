<?php

require "Conexion.php";
//incluye el archivo de conexion y usar $conexion

$querySelect = "SELECT id, nombre, apellido, dni FROM alumnos";
// variable con la conbsulta que devuelve ID, nombre, apellido y dni

$resultado = $conexion->query($querySelect);
// ejecuta la consulta y deja el resultado en una variable

// recorre cada fila, fetch_assoc() combierte cada fila en un arreglo asociativo
echo "<table border='1' cellpadding='6'>";
echo "<tr> <th> ID </th> <th> Nombre </th> <th> Apellido </th> <th> DNI </th> <th> Acciones </th> ";

while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($fila['id']) . "</td>";
    echo "<td>" . htmlspecialchars($fila['nombre']) . "</td>";
    echo "<td>" . htmlspecialchars($fila['apellido']) . "</td>";
    echo "<td>" . htmlspecialchars($fila['dni']) . "</td>";

    echo "<td>
    <a href='editar_alumno.php?id=" . $fila['id'] . "'> Editar </a> |
    <a href='borrar_alumno.php?id=" . $fila['id'] . "'> Borrar </a>
    </td>";
    echo "</tr>";
}

echo "</table>";
/*echo "<br>";
while ($fila = $resultado->fetch_assoc()) {
    echo $fila['nombre'] . " " . $fila['apellido'] . "<br>";
    // muestra nombre y apellido
}
*/