<?php
// Inicia el código HTML
echo "<table border='1'>";
echo "<tr><th>Nombre de la variable</th><th>Valor</th></tr>";

// Recorre el array $_SERVER
foreach ($_SERVER as $variable => $valor) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($variable) . "</td>";
    echo "<td>" . htmlspecialchars($valor) . "</td>";
    echo "</tr>";
}

// Cierra la tabla
echo "</table>";
?>
