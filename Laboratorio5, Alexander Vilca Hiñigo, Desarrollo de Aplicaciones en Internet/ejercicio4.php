<?php

$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$descuento = $_POST['descuento'];
$Ibruto = $_POST['Ibruto'];
$desc1 = $_POST['desc1'];
$desc2 = $_POST['desc2'];
$desctotal = $_POST['desctotal'];
$Ipagar = $_POST['Ipagar'];

function Ibruto ($cantidad, $precio) {

    $Ibruto = $cantidad * $precio;
    return $Ibruto;
}

function desc1 ($cantidad, $precio, $descuento) {

    $desc1 = ($cantidad * $precio) * $descuento;
    return $desc1;
}

function desc2 ($cantidad, $precio, $descuento) {

    $desc2 = (($cantidad * $precio) - ($cantidad * $precio) * $descuento) * $descuento;
    return $desc2;
}

function desctotal ($cantidad, $precio, $descuento) {

    $desctotal = round((($cantidad * $precio) * $descuento) + ((($cantidad * $precio) - ($cantidad * $precio) * $descuento) * $descuento));
    return $desctotal;
}

function Ipagar ($cantidad, $precio, $descuento) {

    $Ipagar = round(($cantidad * $precio) - ((($cantidad * $precio) * $descuento) + ((($cantidad * $precio) - ($cantidad * $precio) * $descuento) * $descuento)));
    return $Ipagar;
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados Ejercicio 04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 mt-5">
                <div class="card">
                    <div class="card-header bg-light">
                        <h5 class="card-title text-dark" style="text-align: center;"> Resultados </h5>
                    </div>
                    <div class="card-body">
                        <h5> El importe de la compra es:  <?php echo Ibruto($cantidad,$precio) ?> </h5>
                        <br>
                        <h5> El importe de descuento es: <?php echo desctotal($cantidad, $precio, $descuento)?> </h5>
                        <br>
                        <h5> El importe para pagar es: <?php echo Ipagar($cantidad, $precio, $descuento)?> </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>