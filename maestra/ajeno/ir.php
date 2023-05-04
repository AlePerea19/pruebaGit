<?php include './includes/headerBoot1';?>

<?php 
session_start();
?>

<div class="container-fluid">
    <div class="col-md">
        <?php 
          echo "El usuario es: ".$_SESSION["user"];
        ?>
    </div>

    <?php require_once './includes/footerBoot.php';?>
</div>