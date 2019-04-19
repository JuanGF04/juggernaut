<?php

  $resultado = DB::table('players')->get();

  echo "<table>";
  echo "<tr><td>ID</td><td>NOMBRE</td><td>POSICION</td><td>PRECIO</td></tr>";

  foreach ($resultado as $mostrar) {
    $id = $mostrar->id;
    $nombre = $mostrar->nombre;
    $posicion = $mostrar->posicion;
    $precio = $mostrar->precio;

  echo "<tr>
          <td>$id</td>
          <td>$nombre</td>
          <td>$posicion</td>
          <td>$precio</td>
        </tr>";
  }

  echo"</table></br>";

?>
