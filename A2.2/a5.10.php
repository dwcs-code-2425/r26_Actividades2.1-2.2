<?php
// echo "Introduzca un entero\n";
// fscanf(STDIN, "%d", $n);
$n = 10;

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

echo "<p>La lista de divisores del nº $n es</p>";
echo "<ul>";

$start = (int)($n/2);
for ($i=$start; $i >=2 ; $i--) { 
   
    if($n % $i ==0){
        echo "<li>$i</li>";    
    }
}
echo "<li>1</li>";

echo "</ul>";
?>
</body>
</html>



