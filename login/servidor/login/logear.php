<?php session_start();
    include "../../clases/Auth.php";
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $Auth = new Auth();

    if($Auth->logear($usuario, $password)){
        header("location:../../BasedeDatos/vista/index.php");
    }
    else{
        header("location:../../../principales/Visibilízame.php");
    }
?>