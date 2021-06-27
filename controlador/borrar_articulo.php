<?php
if ($con->query("delete from Articulo  where codigo = '$_REQUEST[codigo]'")){
    print 'Articulo con el codigo '.$_REQUEST['codigo'].'ha sido borrado.';
}else print "no se ha podido borrar";
$con->close();
?>