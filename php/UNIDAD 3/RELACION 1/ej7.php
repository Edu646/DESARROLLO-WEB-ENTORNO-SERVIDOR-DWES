<?php

function esPrimo($numero) {
    // Los números menores o iguales a 1 no son primos
    if ($numero <= 1) {
        return false;
    }

    // Los números primos solo son divisibles por 1 y por sí mismos
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

// Programa para probar la función
$numeroAProbar = 17; // Puedes cambiar este valor para probar otros números

if (esPrimo($numeroAProbar)) {
    echo $numeroAProbar . " es un número primo.";
} else {
    echo $numeroAProbar . " no es un número primo.";
}

?>