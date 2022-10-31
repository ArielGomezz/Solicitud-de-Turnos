<?php

function conn(){

$hostname= "localhost";
$usuario= "root";
$password= "";
$dbname= "solicitud_turnos";


    $conexion=mysqli_connect($hostname, $usuario, $password, $dbname);
    return $conexion;
}




?>