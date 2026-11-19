<?php

class Alumno
{
    private int $ID;
    private string $Nombre;
    private string $Apellido;
    private string $DNI;

    public function __construct(int $Id, string $_Nombre, string $_Apellido, string $_DNI)
    {
        $this->ID = $Id;
        $this->Nombre = $_Nombre;
        $this->Apellido = $_Apellido;
        $this->DNI = $_DNI;
    }

    public function GetID()
    {
        return $this->ID;
    }
    public function GetNombre()
    {
        return $this->Nombre;
    }
    public function GetApellido()
    {
        return $this->Apellido;
    }
    public function GetDNI()
    {
        return $this->DNI;
    }

    public function SetID($_ID)
    {
        $this->ID = $_ID;
    }
    public function SetNombre($_Nombre)
    {
        $this->Nombre = $_Nombre;
    }
    public function SetApellido($_Apellido)
    {
        $this->Apellido = $_Apellido;
    }
    public function SetDNI($_DNI)
    {
        $this->DNI = $_DNI;
    }
}
/*
$Alumno1 = new Alumno(1, "Juan", "Pérez", "12345678");
echo "| ID: " . $Alumno1->GetID() . " | Nombre: " . $Alumno1->GetNombre() . " | Apellido: " . $Alumno1->GetApellido() . " | DNI: " . $Alumno1->GetDNI() . " | <br>";
*/