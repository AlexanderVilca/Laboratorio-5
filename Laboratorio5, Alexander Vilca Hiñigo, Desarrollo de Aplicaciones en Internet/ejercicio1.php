
<?php

$Sueldo = $_POST['Sueldo'];
$CantHijos = $_POST['Canthijos'];
$Bonificacion = $_POST['Bonificacion'];
$comision = $_POST['comision'];
$SueldoBruto = $_POST['SueldoBruto'];
$ITV = $_POST['ITV'];
$Sdescuento = $_POST['sdescuento'];
$Sneto = $_POST['sneto'];

function Bonificacion($Bonificacion,$CantHijos){

    $Bonificacion = $Bonificacion * $CantHijos;
    return $Bonificacion;
}

function comisi0n ($comision,$ITV, $Bonificacion, $CantHijos){

    $comisi0n = round($comision * $ITV + ($Bonificacion * $CantHijos));
    return $comisi0n;
}

function SueldoBrut0 ($Sueldo,$comision, $ITV, $Bonificacion, $CantHijos){

    $SueldoBrut0 = round($Sueldo + ($comision * $ITV + ($Bonificacion * $CantHijos)));
    return $SueldoBrut0;
}

function Sdescuent0 ($Sueldo,$comision, $ITV, $Bonificacion,$Sdescuento, $CantHijos){
    $Sdescuent0 = round($Sdescuento * ($Sueldo + ($comision * $ITV + ($Bonificacion * $CantHijos))));
    return $Sdescuent0;
}

function Sneto ($Sueldo,$comision, $ITV, $Bonificacion,$Sdescuento,$CantHijos) {
    $sneto = round(($Sueldo + ($comision * $ITV + ($Bonificacion * $CantHijos))) - (round($Sdescuento * ($Sueldo + ($comision * $ITV + ($Bonificacion * $CantHijos))))));
    return $sneto;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados Ejercicio 01</title>
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
                    <h5> La Bonificación es:  <?php echo Bonificacion($Bonificacion,$CantHijos) ?> </h5>
                    <br>
                    <h5> La Comisión es: <?php echo comisi0n($comision, $ITV, $Bonificacion, $CantHijos) ?> </h5>
                    <br>
                    <h5> El Sueldo Bruto es: <?php echo SueldoBrut0($Sueldo, $comision , $ITV, $Bonificacion, $CantHijos) ?> </h5>
                    <br>
                    <h5> El Descuento es: <?php echo Sdescuent0($Sueldo,$comision, $ITV, $Bonificacion,$Sdescuento, $CantHijos)?></h5>
                    <br>
                    <h5> El Sueldo Neto es: <?php echo Sneto($Sueldo,$comision, $ITV, $Bonificacion,$Sdescuento,$CantHijos)?> </h5>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>