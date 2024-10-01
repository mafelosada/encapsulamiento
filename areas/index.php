<?php
    include ('libreria/numero.php');
    include ('libreria/areas.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áreas</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="col-12 row">

        <div class="col-6 formas">
        <form action="" method="POST">
                <h4>Área del Cuadrado</h4>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="lado" class="form-label">Lado:</label>
                            <input type="number" class="form-control" id="lado" name="lado" required>
                        </div>

                <h4>Área del Triangulo</h4>
                        <div class="mb-3">
                            <label for="baseTriangulo" class="form-label">Base:</label>
                            <input type="number" class="form-control" id="baseTriangulo" name="baseTriangulo" required>
                        </div>
                        <div class="mb-3">
                            <label for="alturaTriangulo" class="form-label">Altura:</label>
                            <input type="number" class="form-control" id="alturaTriangulo" name="alturaTriangulo" required>
                        </div>

                <h4>Área del Rectangulo</h4>
                        <div class="mb-3">
                            <label for="baseRectangulo" class="form-label">Base:</label>
                            <input type="number" class="form-control" id="baseRectangulo" name="baseRectangulo" required>
                        </div>
                        <div class="mb-3">
                            <label for="alturaRectangulo" class="form-label">Altura:</label>
                            <input type="number" class="form-control" id="alturaRectangulo" name="alturaRectangulo" required>
                        </div>


            <div class="text-center">
                <button type="submit" class="btn btn-primary">Calcular</button>
            </div>

            </form>

        </div>


        <div class="col-5 formas">
            <h3 class="text-center">Resultados</h3>
                <h5>Área del cuadrado: <?php echo $areaCuadrado;?></h5>

                <h5>Área del triángulo: <?php echo $areaTriangulo;?></h5>

                <h5>Área del rectángulo: <?php echo $areaRectangulo;?></h5>

        </div>
       

        </div>



    </div>

</body>
</html>
