<?php
 echo '<table>';
 echo '<tr><th>Codigo</th><th>Descripcion</th><th>precio</th><th>Codigo rubro</th></tr>';
 while ($reg=$registros->fetch_array()){
     echo '<tr>';
         echo '<td>';
                 echo $reg['codigo'];
         echo '</td>';
         echo '<td>';
                echo $reg['descripcion'];
          echo '</td>';
          echo '<td>';
                echo $reg['precio'];
          echo '</td>';
          echo '<td>';
                echo $reg['codigo_rubro'];
          echo '</td>';
     echo '</tr>';
 }
 echo '</table>';

 $con->close();
?>