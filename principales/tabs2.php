<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibilízame</title>
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" as="style">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preload" href="../css/normalize.css" as="style">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="preload" href="../css/bootstrap.min.css" as="style">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="preload" href="../css/animate.min.css" as="style">
    <link rel="stylesheet" href="../css/animate.min.css">
    <!-- <link rel="preload" href="../css/bootstrap-icons.min.css" as="style">
    <link rel="stylesheet" href="../css/bootstrap-icons.min.css"> -->
    <link rel="preload" href="../css/globales.css" as="style">
    <link rel="stylesheet" href="../css/globales.css">
    <link rel="Icon" href="../img/Icono.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid animate__animated animate__fadeIn">
        <?php
            include 'menu.php';
        ?>
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center justify-content-center background-color-ffe0bb height-100px">
                <h1 class="h1 roboto-bold text-center categoria background-color-e66868 font-color-ffffff">Tipología</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12 m-0 p-0">
                <ul class="nav nav-tabs d-flex justify-content-center background-color-ffe0bb" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="py-1 font-size-tab nav-link active background-color-f9da9b roboto-regular font-color-e07f5e" id="seccion1-tab" data-bs-toggle="tab" data-bs-target="#seccion1" type="button" role="tab" aria-controls="seccion1" aria-selected="true">Información</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="py-1 font-size-tab nav-link roboto-regular background-color-f1c79b font-color-bd834b" id="seccion2-tab" data-bs-toggle="tab" data-bs-target="#seccion2" type="button" role="tab" aria-controls="seccion2" aria-selected="false">Gráficas</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <!-- Primer pestaña Información -->
                    <div class="tab-pane fade show active background-color-f9da9b" id="seccion1" role="tabpanel" aria-labelledby="seccion1-tab">
                        <div class="dropdown">
                            <button class="ms-4 font-size-button btn btn-secondary border-0 background-color-dba362 dropdown-toggle px-4 my-3 roboto-regular rounded-5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categoría
                            </button>
                            <ul class="dropdown-menu border border p-0">
                                <li><a class="dropdown-item dropdown-item-dba362 contenido-visual font-color-8d8d8e border-bottom" data-value="1">Formato de la nota (Periódico 1)</a></li>
                                <li><a class="dropdown-item dropdown-item-dba362 contenido-visual font-color-8d8d8e border-bottom" data-value="2">Formato de la nota (Periódico 2)</a></li>
                                <li><a class="dropdown-item dropdown-item-dba362 contenido-visual font-color-8d8d8e border-bottom" data-value="3">Formato de la nota (Periódico 3)</a></li>
                                <li><a class="dropdown-item dropdown-item-dba362 contenido-visual font-color-8d8d8e border-bottom" data-value="4">Notas Periodísticas (Periódico 1)</a></li>
                                <li><a class="dropdown-item dropdown-item-dba362 contenido-visual font-color-8d8d8e border-bottom" data-value="5">Notas Periodísticas (Periódico 2)</a></li>
                                <li><a class="dropdown-item dropdown-item-dba362 contenido-visual font-color-8d8d8e border-bottom" data-value="6">Notas Periodísticas (Periódico 3)</a></li>
                                <li><a class="dropdown-item dropdown-item-dba362 contenido-visual font-color-8d8d8e border-bottom" data-value="7">Municipios dónde ocurrieron los sucesos (Periódico 1)</a></li>
                                <li><a class="dropdown-item dropdown-item-dba362 contenido-visual font-color-8d8d8e border-bottom" data-value="8">Municipios dónde ocurrieron los sucesos (Periódico 2)</a></li>
                                <li><a class="dropdown-item dropdown-item-dba362 contenido-visual font-color-8d8d8e" data-value="9">Municipios dónde ocurrieron los sucesos (Periódico 3)</a></li>
                                <li><hr class="dropdown-divider m-0 p-0"></li>
                                <li><a class="dropdown-item disabled" href="#">We are  working to future options!</a></li>
                            </ul>
                        </div>
                        <div class="col-12 pb-4">
                            <div class="min-height-100vh border-radius-20px mx-4 background-color-ffffff contenedor-imagenes">
                            <!-- Aquí va el PHP  -->
                            <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['opcion_seleccionada'])) {
                                    $opcion = $_POST['opcion_seleccionada'];
                                
                                    switch ($opcion) {
                                        case '1':
                                            include 'Periódico/1.html';
                                            break;
                                        case '2':
                                            include 'Periódico/2.html';
                                            break;
                                        case '3':
                                            include 'Periódico/3.html';
                                            break;
                                        case '4':
                                            include 'Periódico/4.html';
                                            break;
                                        case '5':
                                            include 'Periódico/5.html';
                                            break;
                                        case '6':
                                            include 'Periódico/6.html';
                                            break;
                                        case '7':
                                            include 'Periódico/7.html';
                                            break;
                                        case '8':
                                            include 'Periódico/8.html';
                                            break;
                                        case '9':
                                            include 'Periódico/9.html';
                                            break;
                                        default:
                                            echo 'Por favor, selecciona una opción.';
                                            break;
                                    }
                                    exit;
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                    <!-- Segunda Pestaña Gráficas -->
                    <div class="background-color-f1c79b tab-pane fade" id="seccion2" role="tabpanel" aria-labelledby="seccion2-tab">
                        <div class="row p-0 m-0">
                            <div class="col-12 d-flex p-0 m-0">
                                <div class="dropdown">
                                    <button class="ms-4 font-size-button btn btn-secondary border-0 background-color-e07f5e dropdown-toggle px-4 my-3 roboto-regular rounded-5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Categoría
                                    </button>
                                    <ul class="dropdown-menu border border p-0">
                                        <?php
                                            include '../Gráfica/conexion.php';
                                            // Consulta para obtener todas las categorías
                                            $sql = "SELECT id, categoria FROM grafica ORDER BY id ASC";
                                            $resultado = $conexion->query($sql);
                                            $graficas = [];
                                            if ($resultado->num_rows > 0) {
                                                while($fila = $resultado->fetch_assoc()) {
                                                    $graficas[] = $fila;
                                                }
                                            } else {
                                                echo "0 resultados";
                                            }
                                        ?>
                                        <?php foreach ($graficas as $grafica): ?>
                                        <li>
                                            <a class="dropdown-item dropdown-item-768ca1 font-color-8d8d8e border-bottom contenido-grafica" data-value="<?php echo $grafica['id']; ?>">
                                                <?php echo $grafica['categoria']; ?>
                                            </a>
                                        </li>
                                        <?php endforeach; ?>
                                        <li><hr class="dropdown-divider m-0 p-0"></li>
                                        <li><a class="dropdown-item disabled" href="#">We are  working to future options!</a></li>
                                    </ul>
                                </div>
                                <!-- <div class="dropdown">
                                    <button class="ms-4 font-size-button btn btn-secondary border-0 background-color-e07f5e dropdown-toggle px-4 my-3 roboto-regular rounded-5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Tiempo
                                    </button>
                                    <ul class="dropdown-menu border border p-0">
                                        <li><a class="dropdown-item dropdown-item-e07f5e font-color-8d8d8e border-bottom" data-value="1">Enero</a></li>
                                        <li><a class="dropdown-item dropdown-item-e07f5e font-color-8d8d8e border-bottom" data-value="2">Febrero</a></li>
                                        <li><a class="dropdown-item dropdown-item-e07f5e font-color-8d8d8e border-bottom" data-value="2">Marzo</a></li>
                                        <li><a class="dropdown-item dropdown-item-e07f5e font-color-8d8d8e border-bottom" data-value="2">Abril</a></li>
                                        <li><a class="dropdown-item dropdown-item-e07f5e font-color-8d8d8e border-bottom" data-value="2">Mayo</a></li>
                                        <li><a class="dropdown-item dropdown-item-e07f5e font-color-8d8d8e border-bottom" data-value="2">Junio</a></li>
                                        <li><a class="dropdown-item dropdown-item-e07f5e font-color-8d8d8e" data-value="2">Julio</a></li>
                                        <li><hr class="dropdown-divider m-0 p-0"></li>
                                        <li><a class="dropdown-item disabled" href="#">We are  working to future options!</a></li>
                                    </ul>
                                </div> -->
                            </div>
                            <!-- <div class="col-6"></div> -->
                        </div>
                        <div class="col-12 pb-4">
                            <div class="min-height-100vh border-radius-20px mx-4 background-color-ffffff d-flex flex-column align-items-center contenedor-grafica">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    document.querySelectorAll('.contenido-visual').forEach(item => {
    item.addEventListener('click', function(e) {
        e.preventDefault();
        var valorSeleccionado = this.getAttribute('data-value');
        var url = '../Periódico/' + valorSeleccionado + '.html'; // Construye la URL del archivo HTML

        // Crear una solicitud AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.querySelector('.contenedor-imagenes').innerHTML = this.responseText;
            }
        };
        xhr.send();
    });
});
</script>

<script>
        document.querySelectorAll('.contenido-grafica').forEach(item => {
    item.addEventListener('click', function(e) {
        e.preventDefault();
        var valorSeleccionado = this.getAttribute('data-value');
        
        // Ahora cargamos plantilla-grafica.php pasando el id seleccionado
        // Asegúrate de que la URL sea correcta y accesible desde donde estás llamando
        var url = '../Gráfica/plantilla-grafica.php?id=' + valorSeleccionado;

        // Utilizamos fetch para la solicitud
        fetch(url)
        .then(response => response.text()) // Obtenemos el HTML como texto
        .then(html => {
            // Insertamos el HTML recibido dentro del contenedor
            document.querySelector('.contenedor-grafica').innerHTML = html;
            // Aquí podrías inicializar cualquier JavaScript necesario para manejar el contenido cargado
        })
        .catch(error => console.error('Error al cargar la plantilla:', error));
    });
});
</script>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>