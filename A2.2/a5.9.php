<?php
echo "Introduzca un entero\n";
fscanf(STDIN, "%d", $n);

$suma = 1; 
$ter= 1;

for ($i=1; $i <=$n ; $i++) { 
  //$ter = $ter/2;
  $ter /=2;
  $suma+=$ter;
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
   <?php echo "<p>La suma es $suma</p>";?>
    
</body>
</html>
