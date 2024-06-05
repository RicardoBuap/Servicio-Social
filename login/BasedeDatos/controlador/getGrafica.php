<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location:../../login.php");
    }
    require '../database/conexion.php';
    $id = $conexion -> real_escape_string($_POST['id']);

    $sql = "SELECT * FROM grafica WHERE id = $id LIMIT 1";
    $resultado = $conexion -> query($sql);
    $rows = $resultado -> num_rows;
    $grafica = [];

    if($rows > 0){
        $grafica = $resultado -> fetch_array();
    }

    echo json_encode($grafica, JSON_UNESCAPED_UNICODE);
?>