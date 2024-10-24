<?php
// 1. Crear un archivo de texto con varias líneas (si no existe)
$archivo = "mi_archivo.txt";
$contenido_inicial = "Esta es la primera línea.\nEsta es la segunda línea.\nY esta es la tercera línea.";

if (!file_exists($archivo)) {
    file_put_contents($archivo, $contenido_inicial);
}

// 2. Abrir el archivo en modo lectura
$fp = fopen($archivo, "r");

// 3. Leer y mostrar el contenido línea por línea
while (!feof($fp)) {
    $linea = fgets($fp);
    echo $linea . "<br>";
}

// 4. Cerrar el archivo
fclose($fp);

// 5. Escribir un nuevo texto (no es necesario abrir en modo lectura)
$nuevo_texto = "Este es el nuevo contenido.";
file_put_contents($archivo, $nuevo_texto);

// 6. Copiar el archivo a uno nuevo             
copy($archivo, "copia_de_mi_archivo.txt");

// 7. Renombrar el archivo original
rename($archivo, "archivo_renombrado.txt");

// 8. Eliminar el archivo renombrado
unlink("archivo_renombrado.txt");
?>