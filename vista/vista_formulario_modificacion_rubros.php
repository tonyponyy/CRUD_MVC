<?php
   if ($reg=$registro->fetch_array()){
    ?>
     <form method="post" action="pagina6.php">
    Descripcion del rubro :
    <input type="text" name="descripcion" size="50" value="<?php echo $reg['descripcion'] ;?>">
    <input type="hidden" name="codigo" size="50" value="<?php echo $_REQUEST['codigo'] ;?>">
    <br>
    <input type="submit" value ="confirmar">
</form>
<?php
}else print 'No existe rubro con ese codigo.';
$con->close();
?>