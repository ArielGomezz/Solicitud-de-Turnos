<?php

include("ag.php");

//RECIBO LOS DATOS DEL FORMULARIO 
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$provincia=$_POST['provincia'];
$domicilio=$_POST['domicilio'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$fecha=$_POST['fecha'];
$descripcion=$_POST['descripcion'];
$obra=$_POST['obra'];


$conexion=conn();
$sql= "INSERT INTO paciente (nombre, apellido, dni, provincia, domicilio, email, telefono, fecha,
 descripcion, obra)
 VALUES ('$nombre', '$apellido', '$dni', '$provincia', )";
 $resul = mysqli_query($conexion, $sql)

// FINALIZARRRRR CAPTURAS EN PRACTICA GOOGLE DRIVE

?>