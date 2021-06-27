<?php
    $registros = $con->query("select codigo,descripcion,precio,codigo_rubro from Articulo") or die ($con->error);
?>