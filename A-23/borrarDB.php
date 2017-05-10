<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar</title>
  </head>
  <body>
    <?php
      include 'dbnba.php';
      $equipo=new dbnba();
      $borrar=$equipo->BorrarEquipo($_GET["nombre"]);
      if ($borrar==true) {
        echo "Se ha borrado con éxito";
        echo "<a href='index.php'>Volver a inicio</a>'";
       echo "<a href='listaequipos.php'> Borrar otro registro</a>'";
      }else {
        echo "<a href='listaequipos.php>No se ha podido borrar.</a>'";
      }
     ?>
  </body>
</html>
