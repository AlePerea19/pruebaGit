<?php
include './basedatos/conexion.php';
$con = conectar();

$id =$_GET['id'];



$sqlUpdateLibro = "DELETE FROM automovil  WHERE  id_automovil ='$id'";

    if($consulUpdateLibro = mysqli_query($con, $sqlUpdateLibro)){
        header('location:./autosAdmin.php');
    }else{
        echo "Error".$consultUpdateLibro."<br>".mysqli_error($con);
    }

mysqli_close($con);

?>