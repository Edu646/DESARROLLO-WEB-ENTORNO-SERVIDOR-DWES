<?php
function suma($a, $b) {
    return $a + $b;
}

function resta($a, $b) {
    return $a - $b;
}

function multiplicacion($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if ($b == 0) {
        return "No se puede dividir por cero";
    } else {
        return $a / $b;
    }
}


function calculadora($num1, $num2, $operacion) {
    switch ($operacion) {
        case '+':
            return suma($num1, $num2);
        case '-':
            return resta($num1, $num2);
        case '*':
            return multiplicacion($num1, $num2);
        case '/':
            return division($num1, $num2);
        default:
            return "Operación no válida";
    }
}

// Recogemos los valores de la URL, asegurándonos de que son numéricos y la operación es válida
$num1 = isset($_GET['num1']) && is_numeric($_GET['num1']) ? $_GET['num1'] : 0;
$num2 = isset($_GET['num2']) && is_numeric($_GET['num2']) ? $_GET['num2'] : 0;
$operacion = isset($_GET['operacion']) ? urldecode($_GET['operacion']) : '';

// Llamamos a la función calculadora
$resultado = calculadora($num1, $num2, $operacion);

// Mostramos el resultado
echo "El resultado de $num1 $operacion $num2 es: $resultado";
?>