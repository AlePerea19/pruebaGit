<?php
  include("./basesdatos/conexion.php");
  session_start();
  $_SESSION['login']=false;
  $con = conectar();

  $correo = $_POST["email"] ?? NULL;
  $contraseña = $_POST["password"] ?? NULL;

  $sql = "SELECT user, pwd, rol FROM usuarios 
          WHERE user = '".$correo."' ;";
  
  $res = mysqli_query($con,$sql);

  $dato = mysqli_fetch_array($res);

  if($dato){
    if($dato['user'] == $correo){
      $_SESSION['login'] = true;
      $_SESSION['user'] = $dato['user'];
      $_SESSION['pwd'] = $dato['pwd'];
      $_SESSION['rol'] = $dato['rol'];

      if($dato['rol'] == "admin"){
        header('location:autosAdmin.php');
      } else if($dato['rol']=="empleado"){
        header('location:./autosEmpl.php');
      } else{
        header('location:./index.php');
      }
    } else{
      header('location:./index.php');
    } 
  } else {
    header('location:./index.php');
  }
  mysqli_close($con);
?>