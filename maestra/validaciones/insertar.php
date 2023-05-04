<?php 
  include ('./basedatos/conexion.php');
  $conn = conectar();
  $id = $_POST['id_automovil'];
  $modelo = $_POST['modelo'];
  $marca = $_POST['marca'];
  $precio = $_POST['precio'];

  $sql = "SELECT id_automovil FROM automovil where titulo='".$modelo."';";
  $consulta = mysqli_query($con, $sql);
  $res= mysqli_fetch_array($consulta);

  if(!$res){
    $insercion = "insert into automovil value('id_automovil, 'modelo', 'marca', 'precio')";
    
    if(mysqli_query($conn, $insercion)){
      header('location:./librosAdmin.php');
    } else {
      echo "El libro ya existe o se especifico mal, intente de nuevo";
    }
  
  }
  mysqli_close($con);
?>