<?php

$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$NewPrice = $_POST['NuevoPrecio'];
$Icompra = $_POST['Icompra'];
$Idescuento = $_POST['Idescuento'];
$Ipagar = $_POST['Ipagar'];
$DNP = $_POST['DNP'];
$DEspecial = $_POST['DEspecial'];
$cantobsequio = $_POST['cantobsequio'];

function NewPrice ($DNP,$precio) {

    $NewPrice = $DNP * $precio;
    return $NewPrice;
}

function Icompra ($DNP,$precio,$cantidad) {

    $Icompra = ($DNP * $precio) * $cantidad;
    return $Icompra;
}

function Idescuento ($DEspecial,$DNP,$precio,$cantidad) {

    $Idescuento = $DEspecial * (($DNP * $precio) * $cantidad);
    return $Idescuento;
}

function Ipagar ($DEspecial,$DNP,$precio,$cantidad) {

    $Ipagar = (($DNP * $precio) * $cantidad) - ($DEspecial * (($DNP * $precio) * $cantidad));
    return $Ipagar;
}

function obsequio($cantobsequio,$cantidad){

    $obsequio = $cantobsequio * $cantidad;
    return $obsequio;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados Ejercicio 02</title>
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
                        <h5> El nuevo precio es:  <?php echo NewPrice($DNP,$precio) ?> </h5>
                        <br>
                        <h5> El importe de la compra es: <?php echo Icompra($DNP,$precio,$cantidad) ?> </h5>
                        <br>
                        <h5> El importe de descuento es: <?php echo Idescuento($DEspecial,$DNP,$precio,$cantidad) ?> </h5>
                        <br>
                        <h5> El importe a pagar es: <?php echo Ipagar($DEspecial,$DNP,$precio,$cantidad)?> </h5>
                        <br>
                        <h5> La cantidad de obsequios es: <?php echo obsequio($cantobsequio,$cantidad)?> </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>