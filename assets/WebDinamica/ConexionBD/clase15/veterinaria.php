<?php

class Mascota
{
    private int $MascotaId;
    private string $Nombre;
    private string $Especie;
    private int $Edad;

    public function __construct(int $id, string $nombre, String $especie, int $edad)
    {
        $this->MascotaId = $id;
        $this->Nombre = $nombre;
        $this->Especie = $especie;
        $this->Edad = $edad;
    }

    public function GetId()
    {
        return $this->MascotaId;
    }

    public function GetNombre()
    {
        return $this->Nombre;
    }

    public function GetEspecie()
    {
        return $this->Especie;
    }

    public function GetEdad()
    {
        return $this->Edad;
    }
}

class Cliente
{
    private int $Id;
    private string $Nombre;
    private string $Telefono;

    public function __construct(int $id, string $nombre, string $telefono)
    {
        $this->Id = $id;
        $this->Nombre = $nombre;
        $this->Telefono = $telefono;
    }

    public function GetId()
    {
        return $this->Id;
    }

    public function GetNombre()
    {
        return $this->Nombre;
    }

    public function GetTelefono()
    {
        return $this->Telefono;
    }
}
