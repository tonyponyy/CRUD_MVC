<?php
 if ($con->query("delete from Rubro  where codigo = '$_REQUEST[codigo]'")){
    print 'Rubro con el codigo '.$_REQUEST['codigo'].' borrado.';
}else print "no se ha podido borrar";

$con->close();
?>