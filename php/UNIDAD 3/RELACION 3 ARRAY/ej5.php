<?php

// Función para generar un array de animales aleatorios
function generarAnimalesAleatorios($min = 20, $max = 30) {
    // Generar un número aleatorio de animales entre 20 y 30
    $cantidad = rand($min, $max);
    $animales = [];

    // Generar animales en el rango Unicode 128000 a 128060
    for ($i = 0; $i < $cantidad; $i++) {
        $animal = '🐾'; // Placeholder para el emoji
        while (in_array($animal, $animales)) {
            $animal = mb_chr(rand(128000, 128060), 'UTF-8');
        }
        $animales[] = $animal;
    }

    return $animales;
}

// Función para eliminar un animal del array
function eliminarAnimal(&$animales, $animal) {
    $clave = array_search($animal, $animales);
    if ($clave !== false) {
        unset($animales[$clave]);
    }
}

// Función principal
function main() {
    // Generar grupo de animales
    $animales = generarAnimalesAleatorios();
    
    // Mostrar grupo inicial
    echo "Grupo inicial de animales:\n";
    echo implode(" ", $animales) . "\n";

    // Elegir un animal al azar y eliminarlo
    $animalSuelto = $animales[array_rand($animales)];
    eliminarAnimal($animales, $animalSuelto);
    
    // Mostrar el animal suelto
    echo "Animal suelto: $animalSuelto\n";

    // Mostrar grupo actualizado
    $animalesActualizados = array_values($animales); // Reindexar el array
    echo "Grupo de animales sin el animal suelto:\n";
    echo implode(" ", $animalesActualizados) . "\n";

    // Mostrar el número total de animales restantes
    $totalAnimalesRestantes = count($animalesActualizados);
    echo "Número total de animales que quedan: $totalAnimalesRestantes\n";
}

// Ejecutar la función principal
main();
?>
