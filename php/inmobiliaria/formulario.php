<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Vivienda</title>
    <link rel="stylesheet" href="./mostrar.css">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturamos los datos del formulario
    $tipo = htmlspecialchars($_POST['tipo']);
    $zona = htmlspecialchars($_POST['zona']);
    $direccion = htmlspecialchars($_POST['direccion']);
    $dormitorios = htmlspecialchars($_POST['dormitorios']);
    $precio = htmlspecialchars($_POST['precio']);
    $tamano = htmlspecialchars($_POST['tamano']);
    $extras = isset($_POST['extras']) ? $_POST['extras'] : [];
    $observaciones = htmlspecialchars($_POST['observaciones']);

    // Manejo de la subida de la foto
    $foto = $_FILES['foto'];
    $fotoNombre = basename(htmlspecialchars($foto['name']));
    $fotoTmp = $foto['tmp_name'];
    $fotoError = $foto['error'];
    
    // Verificación de errores de subida
    if ($fotoError === 0) {
        $fotoDestino = './fotos/' . $fotoNombre; // Asegúrate de que hay una barra diagonal
        if (move_uploaded_file($fotoTmp, $fotoDestino)) {
            // Archivo subido exitosamente
        } else {
            $fotoDestino = ''; // En caso de error
        }
    } else {
        $fotoDestino = '';
    }
    
    // Muestra de la información capturada
    echo "<div class='details'>";
    echo "<h2>Detalles de la Vivienda</h2>";
    echo "<p><strong>Tipo de vivienda:</strong> $tipo</p>";
    echo "<p><strong>Zona:</strong> $zona</p>";
    echo "<p><strong>Dirección:</strong> $direccion</p>";
    echo "<p><strong>Número de dormitorios:</strong> $dormitorios</p>";
    echo "<p><strong>Precio:</strong> $precio €</p>";
    echo "<p><strong>Tamaño:</strong> $tamano m²</p>";

    if (!empty($extras)) {
        echo "<p><strong>Extras:</strong> " . implode(", ", $extras) . "</p>";
    } else {
        echo "<p><strong>Extras:</strong> Ninguno</p>";
    }
    
    echo "<p><strong>Observaciones:</strong> $observaciones</p>";

    // Mostrar la URL de la foto subida
    if ($fotoDestino) {
        echo "<p><strong>URL de la foto de la vivienda:</strong> <a href='$fotoDestino'>$fotoDestino</a></p>";
    } else {
        echo "<p><strong>No se ha subido ninguna foto.</strong></p>";
    }
    echo "</div>";
} else {
    echo "<p>No se han recibido datos del formulario.</p>";
}
?>

</body>
</html>
