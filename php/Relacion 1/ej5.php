<?php
date_default_timezone_set('UTC');
$fecha1 = ("d/m/y");

echo("la fecha de hoy es:  " . $fecha1);
echo("La suma de un dia es : " .$fecha1.date("d/m/y" ,strtotime("+1 day")));
echo("La resta de dos meses es : " .$fecha1.date("d/m/y" ,strtotime("-2 month")))
?>