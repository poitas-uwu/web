<?php
/*

class Producto
{
    public string $_nombre;
    public int $_stock;
    public float $_precio;

    function __construct($nombre, $stock = 0, $precio = 0)
    {
        $this->_nombre = $nombre;
        $this->_stock = $stock;
        $this->_precio = $precio;
    }
}

$p1 = new Producto("Mouse", 20);
$p2 = new Producto("Teclado", 15, 9800);

echo $p1->_nombre . " | " . $p1->_stock . " | " . $p1->_precio . "<br>";
echo $p2->_nombre . " | " . $p2->_stock . " | " . $p2->_precio . "<br>";
*/

/*
class Libro
{
    public string $_titulo;
    public string $_autor;
    public int $_anio;

    function __construct($titulo, $autor, $anio)
    {
        $this->_titulo = $titulo;
        $this->_autor = $autor;
        $this->_anio = $anio;
    }
}

$libro1 = new Libro("frankenstein", "mary shelley", 1818);

$libro2 = new Libro("kimi no koto ga dai dai dai dai daisuki na 100-nin no kanojo", "rikito nakamura", 2019);


echo $libro1->_titulo . " | " . $libro1->_autor . " | " . $libro1->_anio . "<br>";
echo $libro2->_titulo . " | " . $libro2->_autor . " | " . $libro2->_anio . "<br>";
*/

class Alumno
{
    public string $_nombre;
    public string $_curso;
    public float $_promedio;

    function __construct($nombre, $curso, $promedio = 0)
    {
        $this->_nombre = $nombre;
        $this->_curso = $curso;
        $this->_promedio = $promedio;
    }
}

$alumno1 = new Alumno("pepe", "3d", 8);
$alumno2 = new Alumno("jose", "2a");
$alumno3 = new Alumno("maria", "1f", 10);


echo $alumno1->_nombre . " | " . $alumno1->_curso . " | " . $alumno1->_promedio . "<br>";
echo $alumno2->_nombre . " | " . $alumno2->_curso . " | " . $alumno2->_promedio . "<br>";
echo $alumno3->_nombre . " | " . $alumno3->_curso . " | " . $alumno3->_promedio . "<br>";
