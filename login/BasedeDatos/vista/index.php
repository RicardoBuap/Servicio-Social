<?php session_start();
    if(!isset($_SESSION['usuario'])){
        header("location:../../login.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibilízame</title>
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" as="style">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preload" href="../../../css/normalize.css" as="style">
    <link rel="stylesheet" href="../../../css/normalize.css">
    <link rel="preload" href="../css/bootstrap.min.css" as="style">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="preload" href="../../../css/animate.min.css" as="style">
    <link rel="stylesheet" href="../../../css/animate.min.css">
    <link rel="preload" href="../../../css/globales.css" as="style">
    <link rel="stylesheet" href="../../../css/globales.css">
    <link rel="Icon" href="../../../img/Icono.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<body>
<?php
    include '../database/conexion.php';
?>
<div class="container-fluid animate__animated animate__fadeIn">
    <div class="row">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">
                    <img src="../img/Icono.ico" alt="Icono" width="40px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a disabled class="nav-link"><?php echo "Bienvenido " . $_SESSION['usuario'];?></a>
                        <a class="nav-link" style="cursor: pointer;" aria-current="page" data-bs-toggle="modal" data-bs-target="#nuevoModal">Formulario</a>
                        <a href="../../servidor/login/logout.php" class="nav-link">Salir</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <?php
        if(isset($_SESSION['msg']) && isset($_SESSION['color'])){ ?>
        <div class="row">
            <div class="alert alert-<?= $_SESSION['color'];?> alert-dismissible fade show text-center my-0" role="alert">
                <?= $_SESSION['msg']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        <?php
            unset($_SESSION['msg']);
            unset($_SESSION['color']);
        } ?>
    <div class="row">
        <div class="alert alert-warning alert-dismissible fade show text-center my-0" role="alert">
            <strong>Instrucciones!</strong> Llenar los campos respectivamente, con el formato indicado, y sin dejar campos vacíos!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    <div class="row justify-content-center pt-2">
        <div class="col-auto table-responsive">
            <table class="table">
                <thead class="table text-center">
                    <tr>
                        <!-- <th scope="col">id</th> -->
                        <th scope="col">Mes</th>
                        <th scope="col">Año</th>
                        <th scope="col">Categoría</th>
                        <!-- <th scope="col">Descripción</th> -->
                        <th scope="col">Modificar</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Visualizar</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                    <?php
                        $sql =  $conexion -> query("SELECT *FROM grafica");
                        while($datos = $sql -> fetch_object()){
                    ?>
                            <!-- <td><?= $datos -> id?></td> -->
                            <td><?= $datos -> mes?></td>
                            <td><?= $datos -> año?></td>
                            <td><?= $datos -> categoria?></td>
                            <!-- <td><?= $datos -> descripcion?></td> -->
                            <td>
                                <a class="btn btn-small btn-outline-warning" data-bs-toggle="modal" data-bs-target="#editaModal"
                                data-bs-id="<?= $datos -> id?>">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-small btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal"
                                data-bs-id="<?= $datos -> id?>">
                                    <i class="bi bi-trash3"></i>
                                </a>
                            </td>
                            <td>
                                <a href="../vista/grafica.php?id=<?= $datos -> id?>" class="btn btn-small btn-outline-secondary"><i class="bi bi-bar-chart-fill"></i></a>
                            </td>
                    </tr>
                        <?php
                            }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
    include 'nuevoModal.php';
    include 'eliminaModal.php';
    include 'editaModal.php';
?>
<script src="../../../js/bootstrap.bundle.min.js"></script>
<script src="../js/script-index.js"></script>
</body>
</html>

