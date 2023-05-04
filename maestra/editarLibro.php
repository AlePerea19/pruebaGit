<?php

    include_once './';
    $con = conectar();

    $sqlExistAutos = "SELECT  * FROM automovil";
    $consultExistLibros = mysqli_query($con, $sqlExistAutos);