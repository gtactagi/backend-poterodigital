<?php

/*ejercicio1:*/
for ($i = 1; $i <= 10; $i++) {
    echo " ".$i;
}
/*ejercicio2:*/
for ($i = 9; $i >= 1; $i--) {
    echo " ".$i;
}
/*ejercicio3:*/
for ($i = 1; $i <= 20; $i++) {

	if ($i % 2 == 0){
    	echo " ".$i + ($i+1);
        }
}

/*ejercicio4*/:
for ($i = 1; $i <= 20; $i++) {

	if ($i % 2 != 0 ){
    	echo " ".$i;
        }
}

/*ejercicio5*/:
$suma = 0;

for ($i = 1; $i <= 20; $i++) {
    $suma += $i;

echo "La suma de los números del 1 al 20 es: $suma";

/*ejercicio6:*/

$suma = 0;

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        $suma += $i;
    }
}

echo "La suma de los números pares del 1 al 20 es: $suma";$suma = 0;


?>
