<?php
function obtenerFechaHoyEnCastellano() {
    // Establecemos la zona horaria a Madrid
    date_default_timezone_set('Europe/Madrid');

    // Obtenemos la fecha actual y la formateamos en castellano
    $fechaHoy = date('j de F de Y');

    return $fechaHoy;
}

// Ejemplo de uso:
echo obtenerFechaHoyEnCastellano(); // Por ejemplo, podría imprimir: 28 de diciembre de 2023


?>