<?php include './includes/headerBoot1.php;'?>
<?php 
session_start();
?>

<div class="container-fluid">
  <div class="col-md">
    <?php 
      $SESSION["user"] = "Alumno";
      echo "Se ha colocado informacion en la sesion. </br>";
    ?>

    <a href="ejer12:1.php">Visite la siguiente pagina</a>
  </div>

</div>

<?php require_once './include/footerBoot.php'?>