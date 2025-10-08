<?php
echo "Introduzca un entero\n";
fscanf(STDIN, "%d", $n);

$suma=0;

for ($i=1; $i <=(2*$n-1) ; $i+=2) { 
    $suma+=$i;
}
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
    echo "<p>La suma es $suma</p>";
    ?>
</body>
</html>

