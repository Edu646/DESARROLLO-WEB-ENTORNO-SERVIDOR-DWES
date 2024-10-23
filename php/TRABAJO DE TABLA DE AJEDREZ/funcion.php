<?php 
// Para empezar se crena las arrays con toda la informacion de las piezas blancas y negras
// Es decir creamos una array llamada $piezasBlancas y otra $piezaNegras
$piezasBlancas=array("torreb","caballob","alfilb","reinab","reyb","alfilb","caballob","torreb");
$piezaNegras=array("torren","caballon","alfiln","reinan","reyn","alfiln","caballon","torren");
// Creamos la funcion creartablero que es la encargada de crear la tabla y de poner las figuras en ella
function creartablero() {
    echo "<table border='1'>";
// Empezamos haciendo un for en el que creamos la variable fila , la inicializamos a cero y si es menor que  8 se incrementa
    for ($fila = 0; $fila < 8; $fila++) {
        echo "<tr>";
        // Dentro del for hacemos otro para que pinte las columnas de la tabla de ajedrez de la misma manera que el for anterior
        /* Ademas que hemos creado la variable llamada color que dice que si es igual a la fila mas la columna y dividido entre dos de cero
         pintara los cuadrados de la tabla de la siguiente manera: si da cero el cuadrado es blanco y si es el resultado impar sera gris */
        for ($columna = 0; $columna < 8; $columna++) {
            $color = ($fila + $columna) % 2 == 0 ? "blanca" : "gris";
            echo "<td class='$color'>";


            /* En esta parte ponemos variables globales las array anteriores para poder poner las imagenes de las piezas de la tabla de ajedrez*/ 
            global $piezaNegras , $piezasBlancas;

             /*Para poder poner las figuras se ha usado 4 if dos para poder colocar las fichas blancas en el inferior del tablero
             Y otros dos para poder colocar la fichas negras en el lado superior de la tabla*/
            if ($fila == 7) {                                                              
                echo "<img src='./fichasAjedrez/" . $piezasBlancas[$columna] . ".png'>"; 
            }      
            /*Este if indica que si la variable fila = 7 va a colocar las imagenes que hay en array comentado con la posicion que salgan en la columna*/
                                                                                        
            if ($fila == 6) {
                echo "<img src='./fichasAjedrez/peon-blanco.png'>"; 
            }
                /*Este if indica que si la variable fila = 6 va a colocar a todos los peones ya que solo tiene que poner la imagen varias veces seguidas*/
            if ($fila == 0) {
                echo "<img src='./fichasAjedrez/" . $piezaNegras[$columna] . ".png'>"; 
            }
                /*Este if indica que si la variable fila = 0 va a colocar las imagenes que hay en array comentado con la posicion que salgan en la columna*/
            if ($fila == 1) {
                echo "<img src='./fichasAjedrez/peon-negro.png'>"; 
                /*Este if indica que si la variable fila = 1 va a colocar a todos los peones ya que solo tiene que poner la imagen varias veces seguidas*/
            }


            echo "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}


 ?> 