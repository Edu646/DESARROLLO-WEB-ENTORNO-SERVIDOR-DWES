<?php
// funciones.php

// Definición de la baraja de Brisca
function crearBaraja() {
    $palos = ['oros', 'copas', 'espadas', 'bastos'];
    $cartas = [];
    $nombres_de_Carta = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];

    foreach ($palos as $N_palo) {
        foreach ($nombres_de_Carta as $Nombre_ca) {
            $cartas[] = $N_palo . '_' . $Nombre_ca;
        }
    }
    
    return $cartas;
}

// Función para repartir cartas sin repetición
function repartirCartas($baraja, $cantidad) {
    $cartasRepartidas = [];

    for ($i = count($cartasRepartidas); $i < $cantidad; $i++) {
        $indice = rand(0, count($baraja) - 1);
        if (!in_array($baraja[$indice], $cartasRepartidas)) {
            $cartasRepartidas[] = $baraja[$indice];
        }
    }

    return $cartasRepartidas;
}

// Función para calcular puntos de la baza
function puntos_carta($baza) {
    $puntillos = [
        '1' => 11,
        '2' => 0,
        '3' => 10,
        '4' => 0,
        '5' => 0,
        '6' => 0,
        '7' => 0,
        '8' => 0,
        '9' => 0,
        '10' => 2,
        '11' => 3,
        '12' => 4
    ];
    
    $sumaPuntos = 0;

    foreach ($baza as $carta) {
        // Extraer el nombre de la carta
        $nombre_de_Carta = explode('_', $carta)[1]; // Cambiado a '' para coincidir con el formato de la carta
        $sumaPuntos += $puntillos[$nombre_de_Carta];
    }

    return $sumaPuntos;
}
?>