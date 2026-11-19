<?php

class Empleado
{
    private int $ID;
    private string $Nombre;
    private string $Apellido;
    private string $Cargo;

    public function __construct(string $nombre, string $apellido, string $cargo)
    {
        $this->Nombre = $nombre;
        $this->Apellido = $apellido;
        $this->Cargo = $cargo;
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
    public function GetCargo()
    {
        return $this->Cargo;
    }
}
