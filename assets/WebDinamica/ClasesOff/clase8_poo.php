<?php
/*
class Libro
{
    public $titulo;
    public $autor;
    public $anio;
}

$libro1 = new Libro();
$libro1->titulo = "frankenstein";
$libro1->autor = "mary shelley";
$libro1->anio = 1818;

$libro2 = new Libro();
$libro2->titulo = "kimi no koto ga dai dai dai dai daisuki na 100-nin no kanojo";
$libro2->autor = "rikito nakamura";
$libro2->anio = "2019";

echo "titulo " . $libro1->titulo . " |autor " . $libro1->autor . " |año " . $libro1->anio . "<br>";

echo "titulo " . $libro2->titulo . " |autor " . $libro2->autor . " |año " . $libro2->anio;
*/

class Auto
{
    public string $marca;
    public string $modelo;
    public int $velocidad = 0;

    public function acelerar() {}
    public function frenar() {}
}


/*crear una clase auto. crear 2 objetos de tipo auto, asignar diferentes caracteristicas a cada uno.
hacer que uno de los autos ascelere 2 veces*/