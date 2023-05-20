<?php

    include_once './';
    $con = conectar();

    $sqlExistAutos = "SELECT  * FROM libros";
    $consultExistLibros = mysqli_query($con, $sqlExistAutos);