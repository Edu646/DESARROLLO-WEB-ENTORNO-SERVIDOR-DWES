<!DOCTYPE html>

<html lang="es">

<head>

<meta charset="UTF-8">

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Inserción de Vivienda</title>

<link rel="stylesheet" href="./form.css">

</head>

<body>
<h2>Inserción de Vivienda</h2>

 <form action="formulario.php" method="post" enctype="multipart/form-data">
    
    <label for="tipo">Tipo de vivienda:</label>

 <select name="tipo" id="tipo">

 <option value="Piso">Piso</option>

 <option value="Adosado">Adosado</option>

<option value="Chalet">Chalet</option>

<option value="Casa">Casa</option>

</select>



<label for="zona">Zona:</label>

<select name="zona" id="zona">

 <option value="Centro">Centro</option>

 <option value="Zaidín">Zaidín</option>

 <option value="Chana">Chana</option>

 <option value="Albaicín">Albaicín</option>

 <option value="Sacromonte">Sacromonte</option>

 <option value="Realejo">Realejo</option>

</select>



<label for="direccion">Dirección:</label>

 <input type="text" name="direccion" id="direccion">



 <label>Número de dormitorios:</label>
    <input type="radio" name="dormitorios" value="1" >1
    <input type="radio" name="dormitorios" value="2"  >2
    <input type="radio" name="dormitorios" value="3"  >3
    <input type="radio" name="dormitorios" value="4"  >4
    <input type="radio" name="dormitorios" value="5"  >5




 <label for="precio">Precio:</label>

 <input type="number" name="precio" id="precio"> €



<label for="tamano">Tamaño:</label>

 <input type="number" name="tamano" id="tamano"> m²



 <label>Extras:</label>

 <input type="checkbox" name="extras[]" value="Piscina"> Piscina

<input type="checkbox" name="extras[]" value="Jardín"> Jardín

<input type="checkbox" name="extras[]" value="Garaje"> Garaje



<label for="foto">Foto:</label>

<input type="file" name="foto" id="foto">



 <label for="observaciones">Observaciones:</label>

 <textarea name="observaciones" id="observaciones"></textarea>



 <input type="submit" value="Insertar vivienda">

</form>

</body>

</html> 