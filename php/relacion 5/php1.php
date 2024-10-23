<?php
// Configuración del correo electrónico (ajusta esto según tu servidor)
$to = "tu_correo@ejemplo.com"; // Reemplaza con tu dirección de correo
$subject = "Nuevo mensaje desde el formulario";

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Validación básica
if (empty($nombre) || empty($email) || empty($mensaje)) {
    echo "Por favor, completa todos los campos.";
    exit;
}

// Sanitizar los datos (¡IMPORTANTE!)
$nombre = htmlspecialchars($nombre);
$email = htmlspecialchars($email);
$mensaje = htmlspecialchars($mensaje);

// Crear el cuerpo del correo
$cuerpo = "Nombre: $nombre\n";
$cuerpo .= "Email: $email\n";
$cuerpo .= "Mensaje:\n$mensaje";

// Enviar el correo
if (mail($to, $subject, $cuerpo)) {
    echo "¡Mensaje enviado correctamente!";
} else {
    echo "Lo sentimos, ha ocurrido un error al enviar el mensaje.";
}
?>