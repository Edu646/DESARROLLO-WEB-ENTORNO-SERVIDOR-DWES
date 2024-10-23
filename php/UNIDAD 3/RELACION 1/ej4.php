<?php
function calcularPotencia($base, $exponente = 2) {
    // Utilizamos la función pow() de PHP para calcular la potencia
    $resultado = pow($base, $exponente);
    return $resultado;
}

// Calculando 2 elevado a la 3
$resultado1 = calcularPotencia(2, 3);
echo $resultado1; // Imprime: 8

// Calculando 5 elevado al cuadrado (exponente por defecto)
$resultado2 = calcularPotencia(5);
echo $resultado2; // Imprime: 25

?>