<?php
/*Conexión BD php */
//Establecer variables del servidor de bd
$vhost='localhost';
$vuser='postgres';
$vpass='nelson2002';
$vbd='pruebasqlphp';

$conexion = pg_connect("host=$vhost dbname=$vbd user=$vuser password=$vpass");

if(mysqli_connect_errno()){
    echo"La conexión de la base de datos no se pudo establcer, mirar el error".mysqli_connect_errno();
} else{
    //echo"La conexíon a $vbd fue un exito";
}
?>