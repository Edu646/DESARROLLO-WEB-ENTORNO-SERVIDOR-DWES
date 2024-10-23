<?php
// Inicializamos la variable contador en 1
$i = 1;

// Bucle while que se ejecuta mientras el contador sea menor o igual a 40
while ($i <= 40) {
    // Calculamos el cuadrado del número actual
    $cuadrado = $i * $i;

    // Imprimimos el número y su cuadrado
    echo "El cuadrado de " . $i . " es: " . $cuadrado . "<br>";

    // Incrementamos el contador
    $i++;
}
?>