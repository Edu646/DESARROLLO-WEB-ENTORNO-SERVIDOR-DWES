<?php
function procesarCadena($argumento) {
    if (is_string($argumento)) {
        if (empty($argumento)) {
            return "Este es el relleno porque estaba vacía";
        } else {
            return strtoupper($argumento);
        }
    } else {
        return $argumento . " no es una cadena de caracteres.";
    }
}


echo procesarCadena(""); // Salida: Este es el relleno porque estaba vacía
echo procesarCadena("hola mundo"); // Salida: HOLA MUNDO
echo procesarCadena(123); // Salida: 123 no es una cadena de caracteres.
echo procesarCadena(true); // Salida: 1 no es una cadena de caracteres.

?>