<?php
session_start();
    if(!isset($_SESSION['usuario'])){
        header("location:../../login.php");
    }
require '../database/conexion.php';

$id = $conexion->real_escape_string($_POST['id']);

// Verificar si el registro existe antes de eliminarlo
$check_sql = "SELECT COUNT(*) as count FROM grafica WHERE id = $id";
$result = $conexion->query($check_sql);
$row = $result->fetch_assoc();
$count = $row['count'];

if ($count > 0) {
    // El registro existe, proceder con las eliminaciones
    $sql1 = "DELETE FROM periodico1 WHERE id = $id";
    $sql2 = "DELETE FROM periodico2 WHERE id = $id";
    $sql3 = "DELETE FROM periodico3 WHERE id = $id";
    $sql4 = "DELETE FROM grafica WHERE id= $id";

    if ($conexion->query($sql1) && $conexion->query($sql2) && $conexion->query($sql3) && $conexion->query($sql4)) {
        $_SESSION['msg'] = "Registro eliminado";
        $_SESSION['color'] = "success";
    } else {
        $_SESSION['msg'] = "Error al eliminar registro";
        $_SESSION['color'] = "danger";
    }
} else {
    // El registro no existe
    $_SESSION['msg'] = "El registro no existe";
    $_SESSION['color'] = "warning"; // Puedes usar otro color de mensaje si lo deseas
}

// Redireccionar de vuelta a la página principal
header('Location: ../vista/index.php');
?>

