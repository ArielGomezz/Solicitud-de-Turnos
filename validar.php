<?php

include("db.php");

$USUARIO=$_POST["usuario"];
$PASSWORD=$_POST["password"];


$consulta = "SELECT* FROM Administracion where usuario = '$USUARIO' and password = '$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.html");

}else{
    include("index.html");
    ?>
    <h5 class="mjs-error" >¡ Error !</h5>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion)



?>