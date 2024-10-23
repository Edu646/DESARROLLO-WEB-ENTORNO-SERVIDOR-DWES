
<?php
$a = 1;
$b = 2;
$c = -15;

$raiz = $b*$b - 4*$a*$c ;
$sol1 = (-$b+sqrt($raiz))/(2*$a);
$sol2 = (-$b-sqrt($raiz))/(2*$a);
echo("<br>".$sol1."<br>");
echo("<br>".$sol2."<br>");
?>