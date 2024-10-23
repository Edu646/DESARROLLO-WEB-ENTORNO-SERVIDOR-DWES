<?php
function factorial($n) {
  // Caso base: el factorial de 0 es 1
  if ($n == 0) {
    return 1;
  } else {
    // Caso recursivo: n! = n * (n-1)!
    return $n * factorial($n - 1);
  }
}

// Ejemplo de uso:
$numero = 5;
$resultado = factorial($numero);
echo "El factorial de $numero es: $resultado";
?>