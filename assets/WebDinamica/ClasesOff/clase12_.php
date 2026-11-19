<?php

/*
class Producto
{
    protected float $precio = 0;

    public function SetPrecio($_valor)
    {
        if ($_valor > 0) {
            $this->precio = $_valor;
        }
    }

    public function GetPrecio()
    {
        return $this->precio;
    }
}

$p = new Producto();
$p->SetPrecio(-500);
echo "precio " . $p->GetPrecio() . "<br>";
$p->SetPrecio(2500);
echo "precio " . $p->GetPrecio();
*/

/*crear una clase empleado con los atributos nombre (public) y salario (private), inicializados por constructor
el salario nunca debe poder aisgnarse en negativo*/

class Empleado
{
    private float $Salario;

    public string $Nombre;

    function __construct(string $_nombre, float $_salario = 0)
    {
        $this->Nombre = $_nombre;
        if ($_salario > 0) {
            $this->Salario = $_salario;
        }
    }

    public function GetSalario()
    {
        return $this->Salario;
    }

    public function AumentarSalario(float $monto)
    {
        $this->Salario += $monto;
    }
}

$e1 = new Empleado("marta", 300000);
echo $e1->GetSalario() . "<br>";
$e1->AumentarSalario(10);
echo $e1->GetSalario();
