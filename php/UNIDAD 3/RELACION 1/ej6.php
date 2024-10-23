<?php

function mcd($a, $b) {
    // Algoritmo de Euclides
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Programa para probar la función
$num1 = 24;
$num2 = 36;

$resultado = mcd($num1, $num2);

echo "El máximo común divisor de $num1 y $num2 es: $resultado";
?>