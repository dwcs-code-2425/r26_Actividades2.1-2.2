<?php
// const PULGADAS_CM_RATIO= 2.54;
// const PIES_PULGADAS_RATIO= 12;

// echo "Ingresa la altura en cm ";
// fscanf(STDIN, "%f", $altura);

// $pulgadas = $altura/PULGADAS_CM_RATIO;
// $pies = $pulgadas/PIES_PULGADAS_RATIO;



// printf( "La altura en pulgadas es %.2f \n",  $pulgadas);
// printf( "La altura en pies es %.2f \n",  $pies);

echo "Ingrese un entero";
fscanf(STDIN, "%d", $a);
$resultado = ($a % 2 == 0) ? "par" : "impar";
echo "$a es $resultado";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($resultado == "par") {
        echo "<p> \$resultado es $resultado </p>";
    }

    if ($resultado == "par") {
    ?>
        <p>$resultado es <?php echo $resultado; ?></p>
    <?php }

    if ($resultado == "par") {
    ?>
        <p>$resultado es <?= $resultado ?> </p>
    <?php }
    ?>
</body>

</html>