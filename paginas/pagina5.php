<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar rubros</title>
</head>
<body>
    <?php
     require_once("../db/db.php");
     require_once("../controlador/descripcion_rubro.php");
     require_once("../vista/vista_formulario_modificacion_rubros.php");
    ?>
 <ol>
          <li> <a href="index.php">Alta de rubros</a></li>
          <li> <a href="consulta.html">Consulta de rubros</a></li>
          <li> <a href="listado.php">Lista de rubros</a></li> 
          <li> <a href="borrar.html">Borrar rubros</a></li> 
          <li> <a href="modificar.html">Modificar rubros</a></li> 
        </ol>
        <ol>
          <li> <a href="borrar_articulo.html">Borrar articulos</a></li>
          <li> <a href="alta_articulo.php">Alta articulos</a></li>
          <li> <a href="listado_articulos.php">Lista articulos</a></li>
        </ol>
</body>
</html>