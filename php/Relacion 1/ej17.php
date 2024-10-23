<?php
// Obtener los parámetros de la URL
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

// Verificar si se han recibido ambos parámetros
if (isset($numero1) && isset($numero2)) {
    // Convertir los valores a enteros para realizar operaciones numéricas
    $numero1 = intval($numero1);
    $numero2 = intval($numero2);

    // Verificar si el primer número es menor que el segundo
    if ($numero1 < $numero2) {
        echo "Los números impares entre $numero1 y $numero2 son: ";
        for ($i = $numero1 + 1; $i < $numero2; $i++) {
            // Verificar si el número es impar
            if ($i % 2 != 0) {
                echo $i . " ";
            }
        }
    } else {
        echo "El primer número debe ser menor que el segundo.";
    }
} else {
    echo "Faltan parámetros. Por favor, incluye 'numero1' y 'numero2' en la URL.";
}
?>