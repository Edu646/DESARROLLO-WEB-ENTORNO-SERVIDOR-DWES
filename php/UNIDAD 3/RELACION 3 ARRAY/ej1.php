<?php
/*1. Ejercicio 1
Escribe un script que almacene un array de 8 números enteros:

a.      recorrerá el array y lo mostrará

b.       lo ordenará y lo mostrará

c.       mostrará su longitud

d.       buscará un elemento dentro del array

e.      buscará un elemento dentro del array, pero por el parámetro que llegue a la URL

Para mostrar los elementos del array en cada uno de los apartados se creará una función llamada mostrarArray().*/



$numeros = [3, 8, 2, 1, 5, 9, 4, 7];

// Función para mostrar los elementos del array
function mostrarArray($array) {
    echo implode(', ', $array) . "<br>";
}

// a. Recorrer y mostrar el array
echo "Array original:<br>";
mostrarArray($numeros);

// b. Ordenar y mostrar el array
echo "<br>Array ordenado:<br>";
sort($numeros);
mostrarArray($numeros);

// c. Mostrar la longitud del array
echo "<br>Longitud del array: " . count($numeros) . "<br>";

// d. Buscar un elemento dentro del array (ejemplo con un valor fijo)
$elementoABuscar = 5;
$indice = array_search($elementoABuscar, $numeros);
echo "<br>El elemento $elementoABuscar se encuentra en el índice $indice";

// e. Buscar un elemento dentro del array por parámetro de URL (ejemplo con PHP puro)
if (isset($_GET['numero'])) {
    $elementoABuscar = $_GET['numero'];
    $indice = array_search($elementoABuscar, $numeros);
    echo "<br>El elemento $elementoABuscar se encuentra en el índice $indice";
}


?>