/*ejercicio1:
a): pares de 1 a 10 en un array:*/
<?php

$numerospares = array();

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        $numerospares[] = $i;
    }
}
foreach ($numerospares as $numero) {
    echo $numero ."<br>";
}
?>

/*b)crear array y meter valores:*/

<?php

$array_b = array("Pedro", "Ana", 34, 1);
print_r($array_b);

?>

/*c) crear array asociativo*/

<?php

$array_c = array(
    "Nombre" => "Pedro",
    "Apellido" => "Torres",
    "Dirección" => "Av. Mayo 3703",
    "Teléfono" => "1122334455"
);

?>

/*d)crear array y mostrar referenciando posicion:*/
<?php
$array_d = array("Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago");

foreach ($array_d as $indice => $ciudad) {
    echo "La ciudad con el índice $indice tiene el nombre $ciudad<br>";
}
?>

/*e) crear array asociativo con ciudades*/

<?php
array_e= array(
    'MD' => 'Madrid',
    'BCL' => 'Barcelona',
    'LD' => 'Londres',
    'NY' => 'New York',
    'LA' => 'Los Ángeles',
    'CCG' => 'Chicago'
);

foreach ($array_e as $indice => $ciudad) {
    echo "El índice de $ciudad es $indice<br>";
}
?>
