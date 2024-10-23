<!DOCTYPE html>
<html>
<head>
    <title>Números en inglés y español</title>
</head>
<body>
    <table>
        <tr>
            <th>Número en inglés</th>
            <th>Número en español</th>
        </tr>
        <?php
            // Arreglos con los números en inglés y español
            $numeros_ingles = ["one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten"];
            $numeros_espanol = ["uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve", "diez"];

            // Bucle para crear las filas de la tabla
            for ($i = 0; $i < 10; $i++) {
                echo "<tr>";
                echo "<td>" . $numeros_ingles[$i] . "</td>";
                echo "<td>" . $numeros_espanol[$i] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>