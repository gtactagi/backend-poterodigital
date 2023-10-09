
<?php
   // Verificando si ingresó el nombre del alumno
   if (!isset($_GET['nombre'])) {
       echo "Error: El nombre del alumno no fue ingresado.<br>";
   } else {
       $nombre = $_GET['nombre'];

       // Verificando si ingresó la nota
       if (!isset($_GET['nota'])) {
           echo "Error: La nota no fue ingresada.<br>";
       } else {
           $nota = $_GET['nota'];

           // Verificando si la nota es un numero
           if (!is_numeric($nota)) {
               echo "Error: La nota no es un numero valido.<br>";
           } else {
               // Verificando si la nota está entre 0 y 10
               if ($nota < 0 || $nota > 10) {
                   echo "Error: La nota debe estar entre 0 y 10.<br>";
               } else {
                   // Determinar la calificacion segun la nota ingresada
                   if ($nota >= 0 && $nota <= 2) {
                       $calificacion = "Muy deficiente";
                   } elseif ($nota >= 3 && $nota <= 5) {
                       $calificacion = "Insuficiente";
                   } elseif ($nota >= 6 && $nota <= 7) {
                       $calificacion = "Bien";
                   } elseif ($nota >= 8 && $nota <= 9) {
                       $calificacion = "Notable";
                   } elseif ($nota == 10) {
                       $calificacion = "Sobresaliente";
                   }

                   // Mostrar la calificación junto con el nombre del alumno
                   echo "El alumno $nombre ha obtenido una calificación de: $calificacion.<br>";
               }
           }
       }
   }
   ?>
