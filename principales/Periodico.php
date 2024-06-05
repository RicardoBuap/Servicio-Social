<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibilízame</title>
    <link rel="preload" href="../css/normalize.css" as="style">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="preload" href="../css/bootstrap.min.css" as="style">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="preload" href="../css/animate.min.css" as="style">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="preload" href="../css/bootstrap-icons.min.css" as="style">
    <link rel="stylesheet" href="../css/bootstrap-icons.min.css">
    <link rel="preload" href="../css/globales.css" as="style">
    <link rel="stylesheet" href="../css/globales.css">
    <link rel="Icon" href="../img/Icono.ico">
    <!-- <link rel="preload" href="../js/events.js" as="script"> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body class="background-color-fee0bb">
    <div class="container-fluid animate__animated animate__fadeIn">
        <?php
            include 'menu.php';
        ?>
        <div class="row background-color-fee0bb">
            <h1 class="h1 text-center my-4 roboto-regular font-color-bc604e">¿Con qué te gustaría comenzar?</h1>
            <div class="col-4 d-flex align-items-center justify-content-center mb-4">
                <button class="button roboto-medium background-color-e89d75 font-color-ffffff button-hover-bc604e" id="boton-1">Actores</button>
            </div>
            <div class="col-4 d-flex align-items-center justify-content-center mb-4">
                <button class="button roboto-medium background-color-e89d75 font-color-ffffff button-hover-bc604e" id="boton-2">Periódico</button>
            </div>
            <div class="col-4 d-flex align-items-center justify-content-center mb-4">
                <button class="button roboto-medium background-color-e89d75 font-color-ffffff button-hover-bc604e" id="boton-3">Violencia</button>
            </div>
        </div>
        <div class="row background-color-f9c4a7">
            <div class="col-12 mt-4 d-flex align-items-center justify-content-center">
                <img src="../img/Plantilla2.png" class="img-fluid" alt="imagen">
            </div>
            <div class="col-12 my-2">
                <p class="lead text-center roboto-regular-italic font-color-e1805f">
                    En está categoría encontrarás información acerca de las notas periodísticas que se analizaron.
                </p>
            </div>
        </div>
        <div class="row pb-5 pt-5 background-color-fee0bb">
            <div class="col-6 d-flex align-items-center justify-content-end">
                <div class="col-12 col-sm-10 col-md-8 rounded-4 card background-color-fee0bb border-color-e66868">
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-12 d-flex justify-content-center align-items-center">
                                <img src="../img/icono-3.png" alt="ícono" class="icono">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                                <h2 class="h2 roboto-bold font-color-e1805f">Notas</h2>
                                <p class="lead text-center font-color-b37163 roboto-regular">Es datos sobre el contenido de la noticia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-star">
                <div class="col-12 col-sm-10 col-md-8 rounded-4 card background-color-fee0bb border-color-e66868">
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-12 d-flex justify-content-center align-items-center">
                                <img src="../img/icono-4.png" alt="ícono" class="icono">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                                <h2 class="h2 roboto-bold font-color-e1805f">Publicaciones</h2>
                                <p class="lead text-center font-color-b37163 roboto-regular">Es sobre la forma de comunicar la noticia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="../js/travel-pages.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/swiper-bundle.min.js"></script>
</body>
</html>