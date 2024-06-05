<?php session_start();
    if(!isset($_SESSION['usuario'])){
        header("location:../../login.php");
    }
    require '../database/conexion.php';
    $id = $conexion -> real_escape_string($_POST['id']);

    $sql = "SELECT periodico1.dato1 AS dato1_periodico1, periodico2.dato1 AS dato1_periodico2, periodico3.dato1 AS dato1_periodico3
            FROM periodico1
            JOIN periodico2 ON periodico1.id = periodico2.id
            JOIN periodico3 ON periodico2.id = periodico3.id WHERE periodico1.id =$id
            ";
    $resultado = $conexion -> query($sql);
    $rows = $resultado -> num_rows;
    $columna1 = [];

    if($rows > 0){
        $columna1 = $resultado -> fetch_array();
    }

    echo json_encode($columna1, JSON_UNESCAPED_UNICODE);
?>