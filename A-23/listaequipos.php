<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista equipos</title>
  </head>
  <body>
    <?php
      include 'dbnba.php';
      $equipo=new dbnba();
      ?>
      <table border="1px">
        <thead>
        <tr>
        <td><strong>Nombre</strong></td>
          <td><strong>Ciudad</strong></td>
          <td><strong>Conferencia</strong></td>
          <td><strong>Division</strong></td>
          <td><strong>Borrar</strong></td>
          </tr>
        </thead>
      <?php
        $tablalista=$equipo->ListaEquipos();
        foreach ($tablalista as $fila) {
        echo "<tr>";
        echo "<td>";
        echo "" .$fila['Nombre'];
        echo "</td>";
        echo "<td>";
        echo "" .$fila['Ciudad'];
        echo "</td>";
        echo "<td>";
        echo "" .$fila['Conferencia'];
        echo "</td>";
        echo "<td>";
        echo "" .$fila['Division'];
        echo "</td>";
        
        echo" <td><a href='borrarDB.php?nombre=".$fila["Nombre"]."'>Borrar registro</a></td></tr>";
        }
     ?>
     </table>
  </body>
</html>
