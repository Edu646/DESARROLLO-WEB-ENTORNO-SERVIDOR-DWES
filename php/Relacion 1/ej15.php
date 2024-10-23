<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
</head>
<body>
    <?php
    // Obtener los números de la URL
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operacion = $_GET['operacion'];

    // Verificar si los números están definidos y son numéricos
    if (isset($num1) && isset($num2) && is_numeric($num1) && is_numeric($num2)) {
        // Realizar la operación según el valor de 'operacion'
        switch ($operacion) {
            case 'suma':
                $resultado = $num1 + $num2;
                break;
            case 'resta':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicacion':
                $resultado = $num1 * $num2;
                break;
            case 'division':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    echo "No se puede dividir por cero.";
                    exit;
                }
                break;
            default:
                echo "Operación inválida.";
                exit;
        }

        // Mostrar el resultado
        echo "El resultado de la operación es: " . $resultado;
    } else {
        echo "Por favor, ingresa dos números válidos.";
    }
    ?>
</body>
</html>