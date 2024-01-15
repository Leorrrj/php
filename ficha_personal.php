<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');
// Ahora, todas las funciones de fecha y hora utilizarán la zona horaria de Argentina.

$nombre = "Leonardo Gabriel Muños López";
$edad = 32;
$aPeliculas = array("Titanic","Icco", "El diablo viste a la moda");

print_r($aPeliculas[0]);
var_dump($aPeliculas);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 col12 text-center py-5">
                <h1>Ficha Personal</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>Fecha:</th>
                        <td><?php echo date("d/m/y"); ?></td>
                    </tr>
                    <tr>
                        <th>Nombre y Apellido:</th>
                        <td><?php echo $nombre; ?></td></td>
                    </tr>
                    <tr>
                        <th>Edad:</th>
                        <td><?php echo $edad; ?></td></td>
                    </tr>
                    <tr>
                        <th>Peliculas favoritas:</th>
                        <td><?php echo $aPeliculas[0]?><br>
                            <?php echo $aPeliculas[1]?><br>
                            <?php echo $aPeliculas[2]?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>


</body>

</html>