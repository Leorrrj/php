<?php
ini_set('display_errors', 1 );
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$valor=rand(1, 51);
if (($valor % 2) == 0) {
    echo 'Es un número par';
} else {
    echo 'Es un número impar';
}