<?php
include './basesdatos/conexion.php';
$con = conectar();

$id =$_GET['id_automovil'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$precio = $_POST['precio'];




$sqlUpdateAuto = "UPDATE  automovil SET ,Modelo='$modelo', Marca = '$marca', precio='$precio' WHERE  id_automovil ='$id'";

    if($consulUpdateAuto = mysqli_query($con, $sqlUpdateAuto)){
        header('location:');
    }else{
        echo "Error".$consultUpdateLibro."<br>".mysqli_error($con);
    }

mysqli_close($con);

?>