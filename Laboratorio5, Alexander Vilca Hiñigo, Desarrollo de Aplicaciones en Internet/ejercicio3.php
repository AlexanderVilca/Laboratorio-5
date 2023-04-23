<?php

$dias = $_POST['dias'];
$tarifa = $_POST['tarifa'];
$DP = $_POST['DP'];
$lapiceros = $_POST['lapiceros'];
$IBruto = $_POST['IBruto'];
$IDesc = $_POST['IDesc'];
$IPagar = $_POST['IPagar'];
$ObsLap = $_POST['ObsLap'];

function IBruto ($dias, $tarifa) {

    $IBruto = $dias * $tarifa;
    return $IBruto;
}

function IDesc ($DP, $dias, $tarifa) {

    $IDesc = $DP * ($dias * $tarifa);
    return $IDesc;
}

function IPagar ($DP, $dias, $tarifa) {

    $IPagar = ($dias * $tarifa) - ($DP * ($dias * $tarifa));
    return $IPagar;
}

function ObsLap ($lapiceros,$dias) {

    $ObsLap = $lapiceros * $dias;
    return $ObsLap;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados Ejercicio 03</title>
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
                        <h5> El importe bruto es:  <?php echo IBruto($dias, $tarifa) ?> </h5>
                        <br>
                        <h5> El importe de descuento es: <?php echo IDesc($DP, $dias, $tarifa) ?> </h5>
                        <br>
                        <h5> El importe neto a pagar es: <?php echo Ipagar($DP, $dias, $tarifa) ?> </h5>
                        <br>
                        <h5> La cantidad de lapiceros es: <?php echo ObsLap($lapiceros,$dias)?> </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>