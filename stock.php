<?php
ini_set('display_errors', 1 );
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$stock= 800;
$venta=1;
if($venta) {
    $stock--;//le resta a la variable stock  
}
print_r($stock);

if($stock >0){
    echo "Hay stock.";
}
else{
    echo "No hay stock.";
}
?>