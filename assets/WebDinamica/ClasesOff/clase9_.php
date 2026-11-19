<?php

/*1. crear una clase alumno con diferentes atributos que tenga 2 objetos de tipo alumno,
mostrar sus datos y utilizar los metodos saludas, cumplir anio y hacer que uno de los alumnos cupla anio*/

/*
class Alumno
{
    public string $_nombre;
    public string $_apellido;
    public int $_edad;
    public string $_curso;

    public function Saludar()
    {
        echo "hola soy " . $this->_nombre . " " . $this->_apellido;
    }

    public function CumplirAnio()
    {
        $this->_edad++;
        echo "el alumno " . $this->_nombre . " cumplio " . $this->_edad . " añitos";
    }
}

$alumno1 = new Alumno();
$alumno1->_nombre = "pepe";
$alumno1->_apellido = "pepin";
$alumno1->_edad = 14;
$alumno1->_curso = "1C";

$alumno2 = new Alumno();
$alumno2->_nombre = "jose";
$alumno2->_apellido = "jisan";
$alumno2->_edad = 14;
$alumno2->_curso = "1D";

echo "alumno 1 | " . $alumno1->_nombre . " | " . $alumno1->_apellido . " | " . $alumno1->_edad . " | " . $alumno1->_curso . "<br>";
$alumno1->Saludar();
echo "<br>";
$alumno1->CumplirAnio();
echo "<br>";

echo "alumno 2 | " . $alumno2->_nombre . " | " . $alumno2->_apellido . " | " . $alumno2->_edad . " | " . $alumno2->_curso . "<br>";
$alumno2->Saludar();
*/

/*crear una clase producto, la clase debe tener nombre, precio y estock...
y los siguientes metodos mostrar dato, aumentar precio y vender
crear 2 objetos diferentes, mostrar los datos de cada producto, aumentar el precio de uno de ellos, 
vender algunas unidades del otro y mostrar nuevamente los datos*/

class Producto
{
    public string $_nombre;
    public float $_precio;
    public int $_stock;

    public function MostrarDatos()
    {
        echo "Producto  |  " . $this->_nombre . "<br>" . " Stock  |  " . $this->_stock . "<br>" . " Precio  |  " . $this->_precio . "<br>" . "----------------" . "<br>";
    }

    public function AumentarPrecio(float $valor)
    {
        $this->_precio += $valor;
        echo "precio de " . $this->_nombre . " actualizado" . "<br>";
    }

    public function Vender(int $cantidad)
    {
        $this->_stock -= $cantidad;
        echo "venta de " . $this->_nombre . " realizada" . "<br>";
    }
}

$producto1 = new Producto();
$producto1->_nombre = "galletitas";
$producto1->_precio = 200.0;
$producto1->_stock = 40;

$producto2 = new Producto();
$producto2->_nombre = "gaseosa";
$producto2->_precio = 400.0;
$producto2->_stock = 15;

$producto1->MostrarDatos();
$producto2->MostrarDatos();

$producto1->AumentarPrecio(50);
$producto2->Vender(5);

echo "--------------------- <br>";

$producto1->MostrarDatos();
$producto2->MostrarDatos();
