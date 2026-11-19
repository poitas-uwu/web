<?php

// declarar una varieble edad y mostrar un mensaje que diga si es mayor o menor de edad

/*
$edad = 17;

if ($edad >= 18) {
    echo "mayor de edad";
} else {
    echo "menor de edad";
}
*/

// declar una variable con un numero y mostrar si es positivo o negativo

/*
$num = 14;

if ($num < 0) {
    echo "el numero es negativo";
} elseif ($num == 0) {
    echo "el numero es 0";
} else {
    echo "el numero es positivo";
}
*/

//usar un bucle while para mostrar los numeros del 1 al 10 en pantalla
/*
$i = 1;
while ($i <= 10) {
    echo $i . " ";
    $i++;
}
*/
//usar un bucle for para mostrar los numeros pares del 0 al 20
/*
for ($i = 0; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
*/

//usar el bucle for para mostrar los nums del 10 al 1 
/*
for ($i = 0; $i <= 10; $i++) {
    echo $i;
}
*/
//declarar una variable acumuladora y usar un bucle for para sumar los numeros del 1 al 100
$sum = 0;
for ($i = 0; $i <= 100; $i++) {
    $sum = $sum + $i;
}
echo $sum;
