<?php
//$bVariable = false; //b bolean

$usuario="invitado";
if ($usuario == "admin"|| $usuario == "invitado"){ //== igual  || or && ambas variables se cumplen  if condicional
    echo "Bienvenido al sistema";
}
else{
    echo "Acceso denegado";
}
?>
