<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $contador = 0;

    do {
        $tirada = rand(1, 6);
        $contador++;
        echo "<p>Ha salido un $tirada</p>";
    } while ($tirada != 5);

    echo "<p>Hemos tirado el dado $contador veces</p>";

    ?>
</body>

</html>