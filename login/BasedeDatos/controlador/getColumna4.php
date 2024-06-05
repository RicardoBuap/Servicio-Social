<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location:../../login.php");
    }
    require '../database/conexion.php';
    $id = $conexion -> real_escape_string($_POST['id']);

    $sql = "SELECT periodico1.dato4 AS dato4_periodico1, periodico2.dato4 AS dato4_periodico2, periodico3.dato4 AS dato4_periodico3
            FROM periodico1
            JOIN periodico2 ON periodico1.id = periodico2.id
            JOIN periodico3 ON periodico2.id = periodico3.id WHERE periodico1.id = $id
            ";
    $resultado = $conexion -> query($sql);
    $rows = $resultado -> num_rows;
    $columna4 = [];

    if($rows > 0){
        $columna4 = $resultado -> fetch_array();
    }

    echo json_encode($columna4, JSON_UNESCAPED_UNICODE);
?>