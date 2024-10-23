<?php
// Procesamos el formulario solo si se ha enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recogemos los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellidos = htmlspecialchars($_POST['apellidos']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_NUMBER_INT);
    $empleo_actual = $_POST['empleo_actual'];
    $lenguajes = $_POST['lenguajes'];
    $url_trabajo = filter_var($_POST['url_trabajo'], FILTER_VALIDATE_URL);

    // Array para almacenar los mensajes de error
    $errores = [];

    // Validación de cada campo
    if (empty($nombre)) {
        $errores[] = 'El nombre es obligatorio.';
    }
    if (empty($apellidos)) {
        $errores[] = 'Los apellidos son obligatorios.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = 'El correo electrónico no es válido.';
    }
    if (empty($telefono)) {
        $errores[] = 'El teléfono es obligatorio.';
    }
    if (!in_array($empleo_actual, ['sin empleo', 'media jornada', 'tiempo completo'])) {
        $errores[] = 'Empleo actual no válido.';
    }
    if (empty($lenguajes)) {
        $errores[] = 'Debes seleccionar al menos un lenguaje.';
    } else {
        // Validación de los lenguajes seleccionados
        $lenguajes_validos = ['Python', 'PHP', 'JavaScript', 'Java', 'C++'];
        foreach ($lenguajes as $lenguaje) {
            if (!in_array($lenguaje, $lenguajes_validos)) {
                $errores[] = 'Lenguaje no válido.';
                break; // Salimos del bucle si encontramos un error
            }
        }
    }
    if (empty($url_trabajo)) {
        $errores[] = 'La URL del trabajo es obligatoria.';
    }

    // Si no hay errores, procesamos los datos
    if (empty($errores)) {
        // Aquí puedes guardar los datos en una base de datos, enviar un email, etc.
        echo "Datos válidos. ¡Gracias por postular!";
        // Ejemplo de guardado en una base de datos (suponiendo que tienes una conexión a la base de datos):
        // $sql = "INSERT INTO usuarios (nombre, apellidos, email, telefono, empleo_actual, lenguajes, url_trabajo) VALUES (?, ?, ?, ?, ?, ?, ?)";
        // $stmt = $conn->prepare($sql);
        // $stmt->bind_param("sssssss", $nombre, $apellidos, $email, $telefono, $empleo_actual, implode(',', $lenguajes), $url_trabajo);
        // $stmt->execute();
    } else {
        // Mostramos los errores al usuario
        echo "<ul>";
        foreach ($errores as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    }
}

?>