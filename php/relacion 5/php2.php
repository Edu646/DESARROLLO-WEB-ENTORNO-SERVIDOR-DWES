<?php
// Recogemos los datos enviados por el formulario y los almacenamos en un array
$datos_usuario = array(
    'usuario' => $_POST['usuario'],
    'contrasena' => $_POST['contrasena']
);

// Ahora puedes utilizar el array $datos_usuario para realizar diversas acciones
// Por ejemplo, mostrar los datos de forma formateada:
echo "Datos del usuario:<br>";
foreach ($datos_usuario as $clave => $valor) {
    echo "$clave: $valor<br>";
}

// O, en lugar de mostrar los datos, puedes compararlos con datos almacenados en una base de datos
// para verificar la autenticación del usuario.

// Ejemplo de comparación con datos de una base de datos (simplificado):
$usuarios_validos = array(
    'admin' => 'password123',
    'usuario1' => 'contraseña456'
);

if (isset($usuarios_validos[$datos_usuario['usuario']]) &&
    $usuarios_validos[$datos_usuario['usuario']] === $datos_usuario['contrasena']) {
    echo "Autenticación exitosa!";
} else {
    echo "Usuario o contraseña incorrectos.";
}