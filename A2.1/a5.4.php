<?php
echo "Introduza 3 números separados por un espazo\n";
fscanf(STDIN, "%f %f %f", $a, $b, $c);
$d = $b ** 2 - 4 * $a * $c;
$aa = 2 * $a;


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
    if ($d >= 0) {
        $dd = sqrt($d);
        $x1 = (-$b + $dd) / $aa;
        $x2 = (-$b - $dd) / $aa;
        echo "<p>A ecuación ten raíces reais: $x1, $x2</p>";
        //Para ver como utilizar o formato con printf con máis decimais:
        printf("<p>A ecuación ten raíces reais: %.2f, %.2f</p>", $x1, $x2);
    } else {
        $dd = sqrt(-$d);
        $re = -$b / $aa;
        $im = $dd / ($a * 2);
        echo "<p>A ecuación ten raíces complexas conxugadas</p>";
        echo "<p>Parte real: $re</p>";

        echo "<p>Parte imaginaria: $im</p>";
    }
    ?>
</body>

</html>