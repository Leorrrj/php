<?php
$aAuto=array();
$aAuto["color"]= array("Negro", "Verde");
$aAuto["marca"]= "Ford";
$aAuto["anio"]= 1908;
$aAuto["precio"]= 800;

echo $aAuto["color"][0];
print_r($aAuto);

echo "El auto " . $aAuto["marca"] . " del año " . $aAuto["anio"] . " es de color " . $aAuto["color"][0]

//$bVariable = false; //b bolean
//if($bVariable == true){ //if condicional
//    echo "Hola mundo" 
//}

?>
