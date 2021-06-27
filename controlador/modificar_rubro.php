<?php
$con->query("update Rubro set descripcion ='$_REQUEST[descripcion]'
where codigo='$_REQUEST[codigo]'") or die ($mysql->error);
print 'Se modificó la descripcion del rubro';
$con->close();
?>