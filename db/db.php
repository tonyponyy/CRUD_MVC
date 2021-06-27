<?php
class Conectar{
    
    public static function conexion(){
        $mysql = new mysqli("DIRECCION","USUARIO","CONTRASEÑA","NOMBRE_BASE_DATOS");
        return $mysql;
    }
    
}
$conexion = new Conectar;
$con = $conexion->conexion();
if ($con->connect_error) die ("problemas con la base de datos");
?>