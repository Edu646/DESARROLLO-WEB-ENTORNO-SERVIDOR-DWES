<?php

include 'fun.php';

$cartasRepartidas = [];
$numeroJugadores = 0;
$puntuaciones = [];
$jugadorSeleccionado = 0;
$bazaJugador = [];
$puntosBazaJugador = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener el número de jugadores del formulario
    $numeroJugadores = intval($_POST['numeroJugadores']);

    // Crear la baraja y repartir cartas
    $baraja = crearBaraja();
    $cartasPorJugador = 3; // Número de cartas por jugador
    $cartasRepartidas = [];

    for ($i = 0; $i < $cartasPorJugador; $i++) {
        for ($j = 0; $j < $numeroJugadores; $j++) {
            $indice = rand(0, count($baraja) - 1);
            if (!isset($cartasRepartidas[$j])) {
                $cartasRepartidas[$j] = []; // Inicializar el array para cada jugador
            }

            // Asegurarse de que la carta no se repita
            if (!in_array($baraja[$indice], $cartasRepartidas[$j])) {
                $cartasRepartidas[$j][] = $baraja[$indice];
                // Eliminar la carta de la baraja
                unset($baraja[$indice]);
                // Reindexar la baraja para evitar índices perdidos
                $baraja = array_values($baraja);
            }
        }
    }

    // Calcular puntuaciones para cada jugador
    foreach ($cartasRepartidas as $jugador => $cartas) {
        $puntuaciones[$jugador] = puntos_carta($cartas);
    }

    // Obtener el jugador seleccionado para mostrar la puntuación
    if (isset($_POST['jugadorSeleccionado'])) {
        $jugadorSeleccionado = intval($_POST['jugadorSeleccionado']);
    }

    // Extraer cartas de la baza de un jugador
    $bazaJugador = repartirCartas($baraja, 10); // Suponiendo que el jugador tiene 10 cartas en su baza
    $puntosBazaJugador = puntos_carta($bazaJugador);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Brisca</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <h1>Juego de Brisca</h1>
        <form method="POST" action="">
            <label for="numeroJugadores">Número de jugadores:</label>
            <input type="number" id="numeroJugadores" name="numeroJugadores" min="1" max="6" required>
            <input type="submit" value="Repartir Cartas">
        </form>

        <?php if ($numeroJugadores > 0): ?>
            <h2>Cartas Repartidas</h2>
            <?php foreach ($cartasRepartidas as $jugador => $cartas): ?>
                <div class="jugador">
                    <h3>Jugador <?php echo $jugador + 1; ?></h3>
                    <div class="cartas">
                        <?php foreach ($cartas as $carta): ?>
                            <img src="../imagenesCartas/<?php echo $carta; ?>.jpg" alt="<?php echo $carta; ?>" class="carta">
                        <?php endforeach; ?>
                    </div>
                    <p>Puntos: <?php echo $puntuaciones[$jugador]; ?></p>
                </div>
            <?php endforeach; ?>

            <h2>Selecciona un jugador para ver su puntuación</h2>
            <form method="POST" action="">
                <input type="hidden" name="numeroJugadores" value="<?php echo $numeroJugadores; ?>">
                <label for="jugadorSeleccionado">Jugador:</label>
                <select id="jugadorSeleccionado" name="jugadorSeleccionado">
                    <?php for ($i = 0; $i < $numeroJugadores; $i++): ?>
                        <option value="<?php echo $i; ?>">Jugador <?php echo $i + 1; ?></option>
                    <?php endfor; ?>
                </select>
                <input type="submit" value="Ver Puntuación">
            </form>

            <?php if ($jugadorSeleccionado >= 0): ?>
                <h3>Puntuación del Jugador <?php echo $jugadorSeleccionado + 1; ?>: <?php echo $puntuaciones[$jugadorSeleccionado]; ?></h3>
            <?php endif; ?>

            <h2>Baza del Jugador Seleccionado</h2>
            <div class="jugador">
                <h3>Jugador <?php echo $jugadorSeleccionado + 1; ?> - Cartas de la Baza</h3>
                <div class="cartas">
                    <?php foreach ($bazaJugador as $carta): ?>
                        <img src="../imagenesCartas/<?php echo $carta; ?>.jpg" alt="<?php echo $carta; ?>" class="carta">
                    <?php endforeach; ?>
                </div>
                <p>Puntos de la Baza: <?php echo $puntosBazaJugador; ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>