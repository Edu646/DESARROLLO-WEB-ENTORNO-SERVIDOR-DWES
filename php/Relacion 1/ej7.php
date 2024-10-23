<?php
function crear_piramide($filas) {
    for ($i = 1; $i <= $filas; $i++) {
        $cadena = '';
        for ($h = 1; $h <= $i; $h++) {
            $cadena .= '*';
        }
        echo $cadena . "<br />";
    }
}

// Forma de uso
crear_piramide(5);
?>