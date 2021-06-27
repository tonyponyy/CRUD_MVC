<?php
$registros=$con->query("select codigo,descripcion from Rubro") or
die($mysql_error);
while ($reg=$registros->fetch_array()){
    print '"<option value='.$reg["codigo"].'>'. $reg["descripcion"] .'</option>"';
}
?>