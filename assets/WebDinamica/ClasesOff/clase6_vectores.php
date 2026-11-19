<?php

// declarar un arreglo vacio llamado edades y cargarlo con 4 valores usando asignacion por indice puntual, luego mostrar todos los valores
echo " <br> <br> act de la clase <br>";

$Edades = [];
$Edades[0] = 12;
$Edades[3] = 100;
$Edades[5] = 43;
$Edades[7] = 19;

echo $Edades[0] . "<br>";
echo $Edades[3] . "<br>";
echo $Edades[5] . "<br>";
echo $Edades[7] . "<br>";


echo " <br> <br> act 1 <br>";

$NumerosEnteros = [];
$NumerosEnteros[] = 3;
$NumerosEnteros[] = 6;
$NumerosEnteros[] = 9;
$NumerosEnteros[] = 1;
$NumerosEnteros[] = 2;

foreach ($NumerosEnteros as $numero) {
    echo $numero . "<br>";
}

echo " <br> <br> act 2 <br>";

$Nombres = [];
$Nombres[] = "pepe casas";
$Nombres[] = "jaimito rulo";
$Nombres[] = "mario lando";
foreach ($Nombres as $nombre) {
    echo $nombre . "<br>";
}

echo " <br> <br> act 3 <br>";

$Colores = [];
$Colores[] = "cyan";
$Colores[] = "mostaza";
$Colores[] = "morado";
$Colores[] = "amarillo";

foreach ($Colores as $color) {
    echo $color . " <br>";
}

echo " <br> <br> act 4 <br>";

$Precios = [];
$Precios[] = 300.32;
$Precios[] = 123.42;
$Precios[] = 43.07;

echo $Precios[0] . "<br>";
echo $Precios[2] . "<br>";


echo " <br> <br> act 5 <br>";

$NumerosDecimales = [];
$NumerosDecimales[] = 93;
$NumerosDecimales[] = 56;
$NumerosDecimales[] = 9;
$NumerosDecimales[] = 53;
$NumerosDecimales[] = 132;

foreach ($NumerosDecimales as $numero) {
    echo $numero . "<br>";
}
