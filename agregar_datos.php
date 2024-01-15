<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');
// Ahora, todas las funciones de fecha y hora utilizarán la zona horaria de Argentina.

//Siempre poner estas lineas para mostrar errores
ini_set('display_errors', 1 );
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$miArray[]= array();
$miArray[0]= "Hola";
$miArray[15]= "Hello";
$miArray[]= "Periscopio";   // posision 16
$miArray[]= "Libro";        // posision 17
$miArray[1]= "Bateria";


print_r($miArray)
?>