<?php
    include ('libreria/numero.php');
    include ('libreria/areas.php');

    $lado = new Numero(valor: 6);
    $baseTriangulo = new Numero(valor: 5);
    $alturaTriangulo = new Numero(valor: 4);
    $baseRectangulo = new Numero(valor: 4);
    $alturaRectangulo = new Numero(valor: 7);

    $areas = new Areas(lado: $lado, baseTriangulo: $baseTriangulo, alturaTriangulo: $alturaTriangulo, baseRectangulo: $baseRectangulo, alturaRectangulo: $alturaRectangulo);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Areas de figuras geometricas</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">

    <div class="col-12 row cuadros">
        <div class="col-4 text-center">
            <h3>Area Cuadrado</h3>
            <h3><?php echo $areas-> calcularAreaCuadrado()?></h3>
        </div>
        <div class="col-4 text-center">
            <h3>Area Triangulo</h3>
            <h3><?php echo $areas-> calcularAreaTriangulo()?></h3>
        </div>
        <div class="col-4 text-center">
            <h3>Area Rectangulo</h3>
            <h3><?php echo $areas-> calcularAreaRectangulo()?></h3>
        </div>
        
    </div>

    </div>
</body>
</html>