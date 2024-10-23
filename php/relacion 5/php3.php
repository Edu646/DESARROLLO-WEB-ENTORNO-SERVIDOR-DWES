<?php
// Array asociativo para almacenar usuarios y contraseñas
$usuarios = [
    'usuario1' => 'contraseña1',
    'usuario2' => 'contraseña2',
    // Agrega más usuarios aquí
];

// Obtener datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Verificar si el usuario existe y la contraseña coincide
if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $contrasena) {
    // Credenciales correctas, redireccionar
    echo "Inicio de sesión exitoso";
    header("Location: inicio_de_sesion.html");
} else {
    // Credenciales incorrectas
    header("Location: error.html ");
}
?>

