<?php
// Obtener la longitud de la línea desde la URL
$longitud = $_GET['longitud'];

// Validar la longitud
if (!isset($longitud) || !is_numeric($longitud)) {
    // Si no se proporciona una longitud válida, establecer un valor por defecto
    $longitud = 500;
} else {
    // Asegurar que la longitud esté entre 10 y 1000
    $longitud = max(10, min(1000, $longitud));
}

// Generar el código SVG
echo '<svg width="' . $longitud . '" height="10">';
echo '<line x1="0" y1="5" x2="' . $longitud . '" y2="5" stroke="black" />';
echo '</svg>';