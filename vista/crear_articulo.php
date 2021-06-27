<?php
print 'Se cargó el articulo y se generó el codigo del articulo ';
print $con->insert_id;
$con->close();
?>