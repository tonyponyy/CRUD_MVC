<?php
$registros = $con->query("select codigo,descripcion from Rubro") or die ($con->error);
echo '<table>';
echo '<tr><th>Codigo</th><th>Descripcion</th></tr>';

while ($reg=$registros->fetch_array()){
    echo '<tr>';
        echo '<td>';
                echo $reg['codigo'];
        echo '</td>';
        echo '<td>';
               echo $reg['descripcion'];
         echo '</td>';
    echo '</tr>';
}
echo '</table>';
$con->close();
?>