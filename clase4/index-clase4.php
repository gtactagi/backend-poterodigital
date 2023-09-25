<?php
// Ejercicio 1: Si es positivo, mostrar un mensaje; de lo contrario, no hacer nada
$n = 10;
if ($n > 0) {
    echo "El número ingresado es un número positivo";
}
echo "<br>";

// Ejercicio 2: Número mayor a 1 y menor a 10
$n = -9;
if ($n > 1 && $n < 10) {
    echo "El número ingresado es mayor a 1 y menor a 10";
}
echo "<br>";

// Ejercicio 3: Número mayor o igual a 10 o menor a 2
$n = 10;
if ($n >= 10 || $n < 2) {
    echo "El número ingresado es mayor o igual a 10 o menor a 2";
} else {
    echo "El número ingresado no cumple ninguna de las condiciones";
}
echo "<br>";

// Ejercicio 4: Crear 2 números e imprimir operaciones básicas según condiciones
$numero1 = 8;
$numero2 = 4;
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;
$division = $numero1 / $numero2;
$resto = $numero1 % $numero2;

if ($numero1 > $numero2) {
    echo "Los resultados para la suma y la resta son respectivamente: " . $suma . " y " . $resta;
} elseif ($numero2 > $numero1) {
    echo "Los resultados para la multiplicación, división y resto son respectivamente: " . $multiplicacion . ", " . $division . ", y " . $resto;
} else {
    echo "Los números ingresados son iguales";
}
?>
