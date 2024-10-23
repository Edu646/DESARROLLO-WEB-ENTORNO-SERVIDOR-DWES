<!DOCTYPE html>
<html>
<head>
    <title>Tabla de conversión de bases numéricas</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Decimal</th>
                <th>Binario</th>
                <th>Octal</th>
                <th>Hexadecimal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 20; $i++) {
                echo "<tr>";
                printf("<td>%d</td><td>%b</td><td>%o</td><td>%x</td>", $i, $i, $i, $i);
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>