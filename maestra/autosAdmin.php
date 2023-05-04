|<?php include 'includes/header.php';?>
<div class="container">
  <div>
  <a href="#" class="btn btn-outline-primary"  data-bs-toggle="modal" data-bs-target="#ModalLibroInsert">Insertar</a>
  </div>
  <table class="table table-bordered border-primary">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Precio</th>
        <th></th>
        <th></th>
      
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

      <td><a href="/editarLibro.php" class="btn btn-warning"  
      data-bs-toggle ="modal" data-bs-target="#editarLibro">Editar Libro</a></td>
      
      <td><a href="#" class="btn btn-danger   " data-bs-toggle="modal"
        data-bs-target="#eliminarLibro">Eliminar</a>
      </td>
    </tr>
    <?php 
      } 
      ?>
  </tbody>
</table>
</div>
    
<?php include './insertarLibro.php';?>
<?php include './editarLibro.php';?>
<?php include './eliminarLibro.php';?>

