<?php
    include ('libreria/numero.php');
    include ('libreria/nomina.php');
    
    include ('libreria/persona.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomina</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
        <div class="formas">
        <h2 class="text-center">Pago Persona</h2>
        <form action="" method="POST">
            <div class="mb-3 ">
                <div class="col-12 row text-center">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <label for="nombreApellidos" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombreApellidos" name="nombreApellidos" required>
                    </div>
                </div>
            </div>
            <div class="mb-3 ">
                <div class="col-12 row">
                    <div class="col-2"></div>
                    <div class="col-4 text-center">
                        <label for="diasTrabajados" class="form-label">Dias Trabajados:</label>
                    </div>
                    <div class="col-4 text-center">
                        <label for="valorDia" class="form-label">Valor Dia:</label>
                    </div>

                </div>
            </div>
            <div class="mb-3">
                <div class="col-12 row">
                <div class="col-2"></div>
                    <div class="col-4 text-center">
                        <input type="number" class="form-control" id="diasTrabajados" name="diasTrabajados" required>
                    </div>
                    <div class="col-4 text-center">
                        <input type="number" class="form-control" id="valorDia" name="valorDia" required>

                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
        </div>
        <div class="respuesta">
            <ul class="list-group">
            <div class="col-12 text-center">
                            <h1><?php echo $nombre?></h1>
                    </div>

                <div class="col-12 row">
                    <div class="col-4 text-center">
                            <p>Salario: <?php echo $salario?></p>
                    </div>
                    <div class="col-4 text-center">
                            <p>Salud: <?php echo $salud?></p>
                            <p>Pension: <?php echo $pension?></p>
                            <p>ARL: <?php echo $arl?></p>
                            <p>Deducibles: <?php echo $deducibles?></p>
                    </div>
                    <div class="col-4 text-center">
                            <p>Subsidio de Transporte: <?php echo $subTransporte?></p>
                            <p>Retencion: <?php echo $retencion?></p>
                    </div>

                </div>

                <div class="col-12 text-center">
                            <h3>Total Pagar: <?php echo $totalPagar?></h3>
                    </div>
                
            </ul>
        </div>
    </div>
</body>
</html>