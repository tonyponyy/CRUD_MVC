<?php
 $con->query("insert into Rubro(descripcion) values ('$_REQUEST[descripcion]')") or die ($con->error);
 echo 'El nuevo rublo se almacenó';
 $con->close();
?>