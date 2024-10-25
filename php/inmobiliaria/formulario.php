<?php
// procesar_vivienda.php

// Conexión a la base de datos (reemplaza con tus credenciales)
$servername = "tu_servidor";
$username = "tu_usuario";
$password = "tu_contrasena";
$dbname = "tu_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener datos del formulario
$tipo = $_POST['tipo'];
$zona = $_POST['zona'];
$direccion = $_POST['direccion'];
$dormitorios = $_POST['dormitorios'];
$precio = $_POST['precio'];
$tamano = $_POST['tamano'];
$extras = implode(", ", $_POST['extras']);
$foto = $_FILES['foto']['name'];

// Subir imagen (ajusta la ruta según tus necesidades)
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

// Insertar datos en la base de datos
$sql = "INSERT INTO viviendas (tipo, zona, direccion, dormitorios, precio, tamano, extras, foto, observaciones) 
        VALUES ('$tipo', '$zona', '$direccion', '$dormitorios', '$precio', '$tamano', '$extras', '$foto', '')";

if ($conn->query($sql) === TRUE) {
    echo "Nueva vivienda registrada";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>