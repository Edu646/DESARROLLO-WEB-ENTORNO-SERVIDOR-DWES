<?php
// Simulamos la tirada de dos dados
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);

// Mostramos los valores obtenidos
echo "El primer dado ha sacado: " . $dado1 . "<br>";
echo "El segundo dado ha sacado: " . $dado2 . "<br>";

// Verificamos si es una pareja
if ($dado1 == $dado2) {
    echo "¡Has sacado una pareja!";
} else {
    // Si no es una pareja, encontramos el mayor
    $mayor = ($dado1 > $dado2) ? $dado1 : $dado2;
    echo "El valor mayor es: " . $mayor;
}
?>