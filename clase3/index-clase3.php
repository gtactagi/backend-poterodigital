//esto se corre o ejecuta en xamp, borrando lo que sigue la barra dps de localhost una vez que abri apache
//se introduce el nombre de la carpeta backend, la cual se genera dentro de la carpeta donde esta el XAmp carpeta htdocs
//se pone el numero de clase, arrancamos por clase3
//ruta seria: C://XAMPP//htdocs//backend//clase3//index.php, ojo que lo llame index1.php, corregir ese nombre
// y luego en el navegador se coloca localhost/backend/clase3/index1.php, en realidad solo index

<?php

// Ejercicio 1:
echo "hola mundo";
echo "<br>";

// Ejercicio 2: mostrar string "Hola mundo"
$variable_string = "Hola mundo";
echo $variable_string;
echo "<br>";

// Ejercicio 3: definir variables enteras y realizar operaciones fundamentales
$var_int1 = 20;
$var_int2 = 5;

$suma = $var_int1 + $var_int2;
$resta = $var_int1 - $var_int2;
$multiplicacion = $var_int1 * $var_int2;
$division_entera = $var_int1 / $var_int2;
$resto_division = $var_int1 % $var_int2;
echo "la suma de los numeros 20 y 5 es:";
echo $suma;
echo "<br>";
echo "la resta de los numeros 20 y 5 es:";
echo $resta;
echo "<br>";
echo "la multiplicacion de los numeros 20 y 5 es:";
echo $multiplicacion;
echo "<br>";
echo "la division de los numeros 20 y 5 es:";
echo $division_entera;
echo "<br>";
echo "la operacion resto de los numeros 20 y 5 es:";
echo $resto_division;
echo "<br>";

// Ejercicio 4: transformar Celsius a Fahrenheit
$temperatura_celsius = 20;
$temperatura_fahrenheit = ($temperatura_celsius * 1.8) + 32;
echo "<br>";
echo "una temperatura de 20 grados celsius equivalen a:";
echo $temperatura_fahrenheit;
echo " grados fahrenheit";
echo "<br>";

// Ejercicio 5: calcular perímetros y áreas de figuras geométricas
$base_rectangulo = 18;
$alto_rectangulo = 12;
echo "<br>";
$perimetro_rectangulo = 2 * $base_rectangulo + 2 * $alto_rectangulo;
$area_rectangulo = $base_rectangulo * $alto_rectangulo;
echo "el perimetro del rectangulo con base 18 y altura 12 es:";
echo $perimetro_rectangulo;
echo "<br>";
echo "<br>";
echo "el area del rectangulo con base 18 y altura 12 es:";
echo $area_rectangulo;
echo "<br>";
echo "<br>";

$radio_circulo = 30;

$perimetro_circulo = 3.1416 * 2 * $radio_circulo;
$area_circulo = 3.1416 * $radio_circulo * $radio_circulo;
echo "el perimetro del circulo con radio 30 es:";
echo $perimetro_circulo;
echo "<br>";
echo "el area del circulo con radio 30 es:";
echo $area_circulo;

?>







 ?>
