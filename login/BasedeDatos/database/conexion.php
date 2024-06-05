<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "visibilizame";
    $conexion = new mysqli($server, $user, $pass, $db);
    if($conexion -> connect_errno)
        die("Conexión fallida" . $conexion -> connect_errno);
    else
        // echo "Se ha conectado a la base de datos exitosamente!";
?>