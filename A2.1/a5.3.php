<?php
echo "Introduza un número\n";
fscanf(STDIN, "%f", $x);
$f = 0; 
if($x>0){
    $f = $x**2;
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
    <?php echo "<p>El valor de la funcion es: $f</p>" ?>
</body>
</html>