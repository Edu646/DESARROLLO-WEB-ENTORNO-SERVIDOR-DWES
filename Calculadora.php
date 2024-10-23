<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>
    <form method="post" action="">
        <label for="num1">Number 1:</label>
        <input type="num" name="num1" id="num1" required>

        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2" required>

        <button type="submit" name="operation" value="sumar">sumar</button>
        <button type="submit" name="operation" value="restar">restar</button>
        <button type="submit" name="operation" value="multiplicar">Multiplicar</button>
        <button type="submit" name="operation" value="dividir">Dividir</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = filter_input(INPUT_POST, 'num1', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $num2 = filter_input(INPUT_POST, 'num2', FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
        $operation = filter_input(INPUT_POST, 'operation',FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_ALLOW_FRACTION );
        if (filter_var($num1,FILTER_VALIDATE_FLOAT,FILTER_FLAG_ALLOW_THOUSAND) && filter_var($num2,FILTER_VALIDATE_FLOAT,FILTER_FLAG_ALLOW_THOUSAND )){
            switch ($operation) {
                case 'sumar':
                    $result = $num1 + $num2;
                    break;
                case 'restar':
                    $result = $num1 - $num2;
                    break;
                case 'multiplicar':
                    $result = $num1 * $num2;
                    break;
                case 'dividir':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "No se puede dividir entre 0";
                    }
                    break;
                default:
                    $result = "Operacion invalida";
            }

            echo "resultado " . $result;
        } else {
            echo "Por favor pon dos numeros ";
        }
    }
    ?>
</body>
</html>