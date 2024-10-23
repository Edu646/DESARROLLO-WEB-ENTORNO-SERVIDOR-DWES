<?php
function invierteCadena($cad_arg) {
    $arreglo = str_split($cad_arg);
    $arreglo = array_reverse($arreglo);
    return implode("", $arreglo);
}
?>