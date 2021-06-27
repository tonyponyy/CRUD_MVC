<?php
    $registros = $con->query("select descripcion from Rubro where codigo = '$_REQUEST[codigo]'") or die ($mysql->error);
    if ($reg=$registros->fetch_array()){
        echo 'La descripcion del rubro es : '.$reg['descripcion'];
    } else echo 'No existe un rubro con ese codigo';
    $con->close();
?>