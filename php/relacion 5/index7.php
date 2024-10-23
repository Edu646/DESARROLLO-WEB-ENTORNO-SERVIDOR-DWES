<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Empleo</title>
</head>
<body>
    <h1>Formulario de Postulación</h1>

    <?php
    include 'php6.php';
    
    ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>

        <label>Empleo actual:</label>
        <input type="radio" id="sin_empleo" name="empleo_actual" value="sin empleo">
        <label for="sin_empleo">Sin empleo</label>
        <input type="radio" id="media_jornada" name="empleo_actual" value="media jornada">
        <label for="media_jornada">Media jornada</label>
        <input type="radio" id="tiempo_completo" name="empleo_actual" value="tiempo completo">
        <label for="tiempo_completo">Tiempo completo</label>

        <label>Lenguajes que domina:</label>
        <input type="checkbox" id="python" name="lenguajes[]" value="Python">
        <label for="python">Python</label>
        <input type="checkbox" id="php" name="lenguajes[]" value="PHP">
        <label for="php">PHP</label>
        <label for="url_trabajo">URL de un trabajo realizado:</label>
        <input type="url" id="url_trabajo" name="url_trabajo" required>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>