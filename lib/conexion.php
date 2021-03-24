<?php
    // Variables de conexión
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "basecomputadores";
    // crear la variable que maneja la conexión
    $conexion = new mysqli($servername, $username, $password, $database) 
    or die("Conexión falló: ". $conexion->connect_error);
?>