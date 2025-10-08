<?php
echo "Introduce la calificación:\n";
fscanf(STDIN, "%f", $nota);

switch ($nota) {
    case ($nota == 10):
        echo "Matrícula";
        break;
    case ($nota >= 9 && $nota < 10):
        echo "Sobresaliente";
        break;
    case ($nota >= 7 && $nota < 9):
        echo "Notable";
        break;
    case ($nota >= 5 && $nota < 7):
        echo "Aprobado";
        break;
    default:
        echo "Suspenso";
}




