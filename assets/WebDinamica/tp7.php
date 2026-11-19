<?php
$host = "localhost";
$usuario = "root";
$contrasena = "1234";
$base_datos = "eze";

$conexion = mysqli_connect($host, $usuario, $contrasena, $base_datos);


if ($conexion->connect_error) {
    die("Error de Conexión" . $conexion->connect_error);
} else {
    echo "conexion exitosa";
}

echo "ACTIVIDAD 1<br><br>";
class Alumno
{


    private $alumnoId;
    private $nombre;
    private $apellido;
    private $DNI;


    public function __construct($id, $nombre, $apellido, $DNI)
    {
        $this->alumnoId = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->DNI = $DNI;
    }


    public function getAlumnoId()
    {
        return $this->alumnoId;
    }


    public function getNombre()
    {
        return $this->nombre;
    }


    public function getApellido()
    {
        return $this->apellido;
    }


    public function getDNI()
    {
        return $this->DNI;
    }




    public function setAlumnoId($id)
    {
        $this->alumnoId = $id;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }


    public function setDNI($DNI)
    {
        $this->DNI = $DNI;
    }
}




$alumno1 = new Alumno(1, "Juan", "Lopez", 52874221);
$alumno2 = new Alumno(2, "Jesus", "Perez", 49321780);
$alumno3 = new Alumno(3, "Ivan", "Galindo", 39872230);




echo $alumno1->getAlumnoId() . "<br>";
echo $alumno1->getNombre() . "<br>";
echo $alumno1->getApellido() . "<br>";
echo $alumno1->getDNI() . "<br><br>";


echo $alumno2->getAlumnoId() . "<br>";
echo $alumno2->getNombre() . "<br>";
echo $alumno2->getApellido() . "<br>";
echo $alumno2->getDNI() . "<br><br>";


echo $alumno3->getAlumnoId() . "<br>";
echo $alumno3->getNombre() . "<br>";
echo $alumno3->getApellido() . "<br>";
echo $alumno3->getDNI() . "<br><br><br>";


$sql = "INSERT INTO alumnos (alumnoId, nombre, apellido, DNI)
        VALUES (:id, :nombre, :apellido, :dni)";


$insertar = $conexion->prepare($sql);


$insertar->execute([
    ":id" => 1,
    ":nombre" => "Juan",
    ":apellido" => "Lopez",
    ":dni" => 52874221
]);


echo "Alumno insertado correctamente";
