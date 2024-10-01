<?php
    include ('libreria/numero.php');
    include ('libreria/operaciones.php');

    $num1 = new Numero(valor: 10);
    $num2 = new Numero(valor: 5);

    $operaciones = new Operaciones(num1: $num1, num2: $num2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>SUMA:<?php echo $operaciones-> sumar()?></p>;
    <p>RESTA:<?php echo $operaciones-> restar()?></p>;
    <p>MULTIPLICACION:<?php echo $operaciones-> multiplicar()?></p>;
    <p>DIVISION:<?php echo $operaciones-> dividir()?></p>;
</body>
</html>