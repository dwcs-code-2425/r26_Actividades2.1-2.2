<?php
echo "Introduce la calificación:\n";
fscanf(STDIN, "%f", $nota);

//con valores pequeños de float, podemos convertir a entero sin peligro
//para valores grandes, el resultado puede ser inesperado por la precisión de PHP. En esos casos es mejor usar funciones como floor() o round()
$nota = (int) $nota;

switch ($nota) {
    case 10:
        echo "Matrícula";
        break;
    case 9:
        echo "Sobresaliente";
        break;
    case 8:
    case 7:
        echo "Notable";
        break;
    case 6:
    case 5:

        echo "Aprobado";
        break;
    default:
        echo "Suspenso";
}




