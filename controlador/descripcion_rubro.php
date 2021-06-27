<?php
    $registro = $con->query("select descripcion from Rubro where codigo = '$_REQUEST[codigo]'") or die ($con->error);
?>