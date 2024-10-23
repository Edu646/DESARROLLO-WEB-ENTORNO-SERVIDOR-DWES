<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Boletín de Notas</title>
  <style>
    body {
      background-color: lightskyblue;
      font-family: sans-serif;
    }
    table {
      border-collapse: collapse;
      width: 50%;
      margin: 20px auto;
    }
    th, td {
      border: 1px solid black;
      text-align: center;
      padding: 8px;
    }
    h1 {
      text-align: center;
      margin-top: 20px;
    }
    p {
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <h1>Boletín de notas</h1>

  <?php

  $asignaturas = array("Matemáticas", "Lengua", "Física", "Latín", "Inglés");
  $trimestres = array(
    array(3, 10, 7),
    array(8, 5, 3),
    array(7, 2, 1),
    array(4, 7, 8),
    array(6, 2, 3)
  );

  function calcularMedia($notas) {
    return round(array_sum($notas) / count($notas), 1);
  }

  echo "<table>
    <tr>
      <th>Asignatura</th>
      <th>Trimestre 1</th>
      <th>Trimestre 2</th>
      <th>Trimestre 3</th>
      <th>Media</th>
    </tr>";

  $mediaTotal = 0;

  for ($i = 0; $i < count($asignaturas); $i++) {
    $media = calcularMedia($trimestres[$i]);
    echo "<tr>
      <td>{$asignaturas[$i]}</td>
      <td>{$trimestres[$i][0]}</td>
      <td>{$trimestres[$i][1]}</td>
      <td>{$trimestres[$i][2]}</td>
      <td>{$media}</td>
    </tr>";

    $mediaTotal += $media;
  }

  