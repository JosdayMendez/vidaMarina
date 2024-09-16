<?php

$server = "DESKTOP-J4HUFFE";
$user = "admin";
$password = "1234";
$database = "Proyecto_VidaMarina";

try{
 
    $con = new PDO("sqlsrv:server=$server;database=$database",$user,$password);
  

} catch(Exception $e){
    Echo "Error de conexion";

}
?>