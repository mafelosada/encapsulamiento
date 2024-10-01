<?php
    include ('libreria/numero.php');
    include ('libreria/nomina.php');

    $diasTrabajados = new Numero(valor: 45);
    $valorDia = new Numero(valor: 70000);

    $pago = new Pagar(diasTrabajados: $diasTrabajados, valorDia: $valorDia);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago Persona</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">

    <div class="col-12 row cuadros">
        <div class="col-12 text-center">
            <h3>Salario</h3>
            <h3><?php echo $pago-> calcularSalario()?></h3>
        </div>
        <div class="col-6 text-center cuadros">
            <h3>Salario-> <?php echo $pago-> calcularSalud()?></h3>
            <h3>Pension-> <?php echo $pago-> calcularPension()?></h3>
            <h3>Arl-> <?php echo $pago-> calcularArl()?></h3>
        </div>
        <div class="col-6 text-center cuadros">
            <h3>Subsidio de Transporte-> <?php echo $pago-> calcularSubTransporte()?></h3>
            <h3>Retencion-> <?php echo $pago-> calcularRetencion()?></h3>
            <h3>Deducibles-> <?php echo $pago-> calcularDeducibles()?></h3>
        </div>
        <div class="col-12 text-center">
            <h3>Total Pagar</h3>
            <h3><?php echo $pago-> calcularPagar()?></h3>
        </div>

        
    </div>

    </div>
</body>
</html>