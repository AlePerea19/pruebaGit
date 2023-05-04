<?php include 'includes/header.php';?>
<div class="container">
  <div>
  
  </div>
  <table class="table table-bordered border-primary">
    <thead>
      <tr>   
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Precio</th>
      </tr>
    </thead>
    <tbody>
      <?php 
  include_once './basesdatos/conexion.php';
  $con = conectar();
  $sqlConsulta = "SELECT marca, modelo, precio FROM automovil;";
  $res = mysqli_query($con, $sqlConsulta);
  
  while($arregloAuto= mysqli_fetch_array($res)){
    ?>  
    <tr>
      
      <td><?php echo $arregloAuto['marca'] ?></td>
      <td><?php echo$arregloAuto['modelo'] ?></td>
      <td><?php echo $arregloAuto['Precio'] ?></td>

      
    </tr>
    <?php 
      } 
      ?>
  </tbody>
</table>
</div>
