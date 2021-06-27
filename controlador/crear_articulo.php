<?php
 $con->query("insert into Articulo(descripcion,precio,codigo_rubro)
 values ('$_REQUEST[descripcion]',$_REQUEST[precio],$_REQUEST[codigorubro])") 
 or die ($con->error);
?>