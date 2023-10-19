<?php

/*ejercicio1:
a)funcion para el cuadrado*/

<?php
function dimension_cuadrado($lado) {
  $perimetro = 4 * $lado;
  $superficie = pow($lado, 2);

  echo "El perimetro es " . $perimetro . "<br>";
  echo "La superficie es " . $superficie;
}

$lado = 4;

dimension_cuadrado($lado);
?>

/*b)convertir mayuscula y minuscula*/

<?php

function convertir_mayuscula($cadena) {
    return strtoupper($cadena);
}

function convertir_minusculas($cadena) {
    return strtolower($cadena);
}


$cadena = "HOLA profe";

// Llamado a conversion a mayuscula
$reslutado_mayusculas = convertir_mayusculas($cadena);
echo "mayuscula: " . $resultadoMayusculas . "<br>";

//Llamado a conversion a minusc
$resultadp_minusculas = convertir_minusculas($cadena);
echo "minuscula: " . $resultadoMinusculas;
?>

/*c)segun mes devolver cantidad de dias*/

<?php

<?php
function esPar($numero) {
    return $numero % 2 == 0;
}

function cantidadDiasEnMes($mes) {
    if ($mes >= 1 && $mes <= 12) {
        if ($mes < 2 || ($mes > 2 && $mes <= 7)) {
            // Para enero o meses impares (excepto febrero)
            return esPar($mes) ? 30 : 31;
        } elseif ($mes == 2) {
            return "El mes ingresado tiene menos de 30 días.";
        } else {
            // Para meses mayores a 7
            return esPar($mes) ? 31 : 30;
        }
    } else {
        return "Mes no válido. Debe estar entre 1 y 12.";
    }
}

// jeemplo
$mes = 92;
$resultado = cantidadDiasEnMes($mes);
echo $resultado;

?>

/*d)opcional*/

<?php
function check_palindromo($str) {
    $invertedstr = strrev($str);

    if ($str === $invertedstr) {
        return "Es un palíndromo";
    } else {
        return "No es un palíndromo";
    }
}

$str = "levelrt"; // Puedes cambiar el valor aquí

$resultado = check_palindromo($str);
echo $resultado;

?>
