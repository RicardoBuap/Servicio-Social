<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location:../../login.php");
    }
    require '../database/conexion.php';
    $id = $conexion -> real_escape_string($_POST['id']);

    $sql = "SELECT periodico1.dato7 AS dato7_periodico1, periodico2.dato7 AS dato7_periodico2, periodico3.dato7 AS dato7_periodico3
            FROM periodico1
            JOIN periodico2 ON periodico1.id = periodico2.id
            JOIN periodico3 ON periodico2.id = periodico3.id WHERE periodico1.id = $id
            ";
    $resultado = $conexion -> query($sql);
    $rows = $resultado -> num_rows;
    $columna7 = [];

    if($rows > 0){
        $columna7 = $resultado -> fetch_array();
    }

    echo json_encode($columna7, JSON_UNESCAPED_UNICODE);
?>