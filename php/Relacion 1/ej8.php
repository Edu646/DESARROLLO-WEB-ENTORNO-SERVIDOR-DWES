<?php
function piramideHueca($altura) {
    for ($i = 1; $i <= $altura; $i++) {
        // Espacios en blanco al inicio de cada fila
        for ($j = 1; $j <= $altura - $i; $j++) {
            echo "&nbsp;";
        }

        // Primer asterisco de la fila
        echo "*";

        // Espacios en blanco en el medio de la fila
        if ($i > 1 && $i < $altura) {
            for ($k = 1; $k <= 2 * $i - 3; $k++) {
                echo "&nbsp;";
            }
            echo "*";
        }

        // Salto de línea al final de cada fila
        echo "<br>";
    }
}

// Solicita al usuario la altura de la pirámide
echo "Ingrese la altura de la pirámide: ";
$altura = readline(50);

// Llama a la función para dibujar la pirámide
piramideHueca($altura);
?>