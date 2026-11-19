<?php


$edad = 17;
if ($edad >= 18) {
    echo "es mayor de edad<br>";
} else {
    echo "no es mayor de edad<br>";
} #ejercisio 1



$nota = 7;
if ($nota > 6) {
    echo "esta aprobado";
} else {
    echo "esta desaprobado";
} #ejercisio 2




$num = 10;
if ($num < 0) {
    echo "el numero es negativo";
} else {
    echo "el numero es positivo";
} #ejercisio 3



$precio = 2000;
if ($precio > 2000) {
    $total = $precio * 0.8;
    echo $total;
} else {
    $total = $precio * 0.9;
    echo $total;
} #ejercisio 4




$acceso = true;
if ($acceso == true) {
    echo "bienvenido al sistema";
} else {
    echo "acceso denegado";
} #ejercisio 5

$contador = 1;
while ($contador <= 10); {
    echo "contador {$contador} <br>";
    $contador++;
} #ejercisio 6

for ($i = 0; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i;
    }
}


for ($i = 0; $i <= 10; $i++) {
    $tabla = $i * 5;
    echo "{$i} x 5 = {$tabla}";
}

for ($i = 10; $i >= 1; $i--) {
    echo $i;
}


$acumulador = 0;
for ($i = 0; $i <= 100; $i++) {
    $acumulador = $acumulador + $i;
}
echo $acumulador;
