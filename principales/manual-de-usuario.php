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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<style>
    .card img {
        height: 144px;
    }

    .card{
        margin: 0 0.5em;
        box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
        border: none;
    }

    .container-fluid {
        height: 100vh;
    }

    @media (max-width: 1100px) {

    @media(max-width: 410px) {
        .card-size{
            width: 280px;
            height: 400px;
        }
    }

    @media(max-width: 355px) {
        .card-size{
            width: 245px;
            height: 425px;
        }
        
        .height-140px{
            height: 170px;
        }
    }
}

    .contenido-pequeño {
        display: none;
    }

    @media (max-width: 1100px) {
        .contenido-grande {
            display: none;
        }
        .contenido-pequeño {
            display: block;
        }
    }
</style>
<body class="background-color-dbd3ea">
    <div class="container-fluid justify-content-center align-items-center d-flex animate__animated animate__fadeIn">
        <div id="carouselExampleControls" class="carousel slide contenido-grande" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cards-wrapper d-flex justify-content-center align-items-center">
                        <div class="card card-size rounded-4">
                            <div class="card-body d-flex flex-column">
                                <div class="col-12 height-140px">
                                    <h5 class="card-title font-color-8e388e text-center roboto-bold">¡Hola! <br> Qué gusto que estés aquí</h5>
                                    <p class="card-text font-color-8e388e text-center">Antes de comenzar, ¿Por qué no te mostramos cómo
                                        funciona nuestra App?
                                    </p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="../img/Guia1.jpg" class="img-fluid mt-2" alt="...">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="Actores.php" class="btn btn-primary button-hover-dbd3ea border-0 mt-4 background-color-822381 font-color-ffffff">Omitir</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-size rounded-4">
                            <div class="card-body d-flex flex-column">
                                <div class="col-12 height-140px">
                                    <h5 class="card-title font-color-8e388e text-center roboto-bold">Objetivo</h5>
                                    <p class="card-text font-color-8e388e text-center">Para iniciar, el propósito de esta app es que puedas
                                        conocer y analizar cómo los periódicos comunican las noticias sobre la violencia 
                                        hacia las mujeres.
                                    </p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="../img/Guia2.jpg" class="img-fluid mt-2" alt="...">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="Actores.php" class="btn btn-primary button-hover-dbd3ea border-0 mt-4 background-color-822381 font-color-ffffff">Omitir</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-size rounded-4">
                            <div class="card-body d-flex flex-column">
                                <div class="col-12 height-140px">
                                    <h5 class="card-title font-color-8e388e text-center roboto-bold">Paso 1</h5>
                                    <p class="card-text font-color-8e388e text-center">Para ello inicia seleccionando en la parte superior de
                                        tú pantalla, la categoría que deseas analizar.
                                    </p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="../img/Guia3.jpg" class="img-fluid mt-2" alt="...">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="Actores.php" class="btn btn-primary button-hover-dbd3ea border-0 mt-4 background-color-822381 font-color-ffffff">Omitir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper d-flex justify-content-center align-items-center">
                        <div class="card card-size rounded-4">
                            <div class="card-body d-flex flex-column">
                                <div class="col-12 height-140px">
                                    <h5 class="card-title font-color-8e388e text-center roboto-bold">Paso 2</h5>
                                    <p class="card-text font-color-8e388e text-center">
                                        Después selecciona un punto a analizar de dicha categoría.
                                    </p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="../img/Guia4.jpg" class="img-fluid mt-2" alt="...">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="Actores.php" class="btn btn-primary button-hover-dbd3ea border-0 mt-4 background-color-822381 font-color-ffffff">Omitir</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-size rounded-4">
                            <div class="card-body d-flex flex-column">
                                <div class="col-12 height-140px">
                                    <h5 class="card-title font-color-8e388e text-center roboto-bold">Paso 3</h5>
                                    <p class="card-text font-color-8e388e text-center">
                                        Luego puedes elegir en la parte superior si vas a ver las gráficas
                                        o la información ilustrativa.
                                    </p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="../img/Guia5.jpg" class="img-fluid mt-2" alt="...">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="Actores.php" class="btn btn-primary button-hover-dbd3ea border-0 mt-4 background-color-822381 font-color-ffffff">Omitir</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-size rounded-4">
                            <div class="card-body d-flex flex-column">
                                <div class="col-12 height-140px">
                                    <h5 class="card-title font-color-8e388e text-center roboto-bold">Paso 4</h5>
                                    <p class="card-text font-color-8e388e text-center">
                                        Una vez seleccionado el tipo de información, elige de entre las 
                                        siguientes opciones la clase, el tiempo y el periódico.
                                    </p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="../img/Guia6.jpg" class="img-fluid mt-2" alt="...">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="Actores.php" class="btn btn-primary button-hover-dbd3ea border-0 mt-4 background-color-822381 font-color-ffffff">Omitir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper d-flex justify-content-center align-items-center">
                        <div class="card card-size rounded-4">
                            <div class="card-body d-flex flex-column">
                                <div class="col-12 height-140px">
                                    <h5 class="card-title font-color-8e388e text-center roboto-bold">Paso 5</h5>
                                    <p class="card-text font-color-8e388e text-center">
                                        Por último, selecciona la gráfica que quieras ver. Una vez que acabes
                                        puedes seguir viendo otras opciones.
                                    </p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="../img/Guia7.jpg" class="img-fluid mt-2" alt="...">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="Actores.php" class="btn btn-primary button-hover-dbd3ea border-0 mt-4 background-color-822381 font-color-ffffff">Omitir</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-size rounded-4">
                            <div class="card-body d-flex flex-column">
                                <div class="col-12 height-140px">
                                    <h5 class="card-title font-color-8e388e text-center roboto-bold">Menú</h5>
                                    <p class="card-text font-color-8e388e text-center">
                                        Puedes utilzar el menú hamburguesa en la parte superior izquierda para navegar
                                        por la app.
                                    </p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="../img/Guia8.jpg" class="img-fluid mt-2" alt="...">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="Actores.php" class="btn btn-primary button-hover-dbd3ea border-0 mt-4 background-color-822381 font-color-ffffff">Omitir</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-size rounded-4">
                            <div class="card-body d-flex flex-column">
                                <div class="col-12 height-140px">
                                    <h5 class="card-title font-color-8e388e text-center roboto-bold">¡Listo! <br> Ya puedes iniciar tú recorrido</h5>
                                    <p class="card-text font-color-8e388e text-center">
                                        ¡Qué lo disfrutes! Y no olvides contactarnos para cualquier duda o sugerencia.
                                    </p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="../img/Guia9.jpg" class="img-fluid mt-2" alt="...">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="Actores.php" class="btn btn-primary button-hover-dbd3ea border-0 mt-4 background-color-822381 font-color-ffffff">Omitir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- contenido responsivo, para pantallas a una resolución menor o igual a 1100px -->
        <div id="carouselExampleControls-2" class="carousel slide contenido-pequeño" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cards-wrapper d-flex justify-content-center align-items-center">
                        <div class="card card-size rounded-4">
                            <div class="card-body d-flex flex-column">
                                <div class="col-12 height-140px">
                                    <h5 class="card-title font-color-8e388e text-center">¡Hola! <br> Qué gusto que estés aquí</h5>
                                    <p class="card-text font-color-8e388e text-center">Antes de comenzar, ¿Por qué no te mostramos cómo
                                        funciona nuestra App?
                                    </p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="../img/Guia1.jpg" class="img-fluid mt-2" alt="...">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary button-hover-dbd3ea border-0 mt-4 background-color-822381 font-color-ffffff">Omitir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper d-flex justify-content-center align-items-center">
                        <div class="card card-size rounded-4">
                            <div class="card-body d-flex flex-column">
                                <div class="col-12 height-140px">
                                    <h5 class="card-title font-color-8e388e text-center">Objetivo</h5>
                                    <p class="card-text font-color-8e388e text-center">Para iniciar, el propósito de esta app es que puedas
                                        conocer y analizar cómo los periódicos comunican las noticias sobre la violencia 
                                        hacia las mujeres.
                                    </p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="../img/Guia2.jpg" class="img-fluid mt-2" alt="...">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary button-hover-dbd3ea border-0 mt-4 background-color-822381 font-color-ffffff">Omitir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper d-flex justify-content-center align-items-center">
                        <div class="card card-size rounded-4">
                            <div class="card-body d-flex flex-column">
                                <div class="col-12 height-140px">
                                    <h5 class="card-title font-color-8e388e text-center">Paso 1</h5>
                                    <p class="card-text font-color-8e388e text-center">Para ello inicia seleccionando en la parte superior de
                                        tú pantalla, la categoría que deseas analizar.
                                    </p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="../img/Guia3.jpg" class="img-fluid mt-2" alt="...">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary button-hover-dbd3ea border-0 mt-4 background-color-822381 font-color-ffffff">Omitir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper d-flex justify-content-center align-items-center">
                        <div class="card card-size rounded-4">
                            <div class="card-body d-flex flex-column">
                                <div class="col-12 height-140px">
                                    <h5 class="card-title font-color-8e388e text-center">Paso 2</h5>
                                    <p class="card-text font-color-8e388e text-center">
                                        Después selecciona un punto a analizar de dicha categoría.
                                    </p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="../img/Guia4.jpg" class="img-fluid mt-2" alt="...">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary button-hover-dbd3ea border-0 mt-4 background-color-822381 font-color-ffffff">Omitir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper d-flex justify-content-center align-items-center">
                        <div class="card card-size rounded-4">
                            <div class="card-body d-flex flex-column">
                                <div class="col-12 height-140px">
                                    <h5 class="card-title font-color-8e388e text-center">Paso 3</h5>
                                    <p class="card-text font-color-8e388e text-center">
                                        Luego puedes elegir en la parte superior si vas a ver las gráficas
                                        o la información ilustrativa.
                                    </p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="../img/Guia5.jpg" class="img-fluid mt-2" alt="...">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary button-hover-dbd3ea border-0 mt-4 background-color-822381 font-color-ffffff">Omitir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper d-flex justify-content-center align-items-center">
                        <div class="card card-size rounded-4">
                            <div class="card-body d-flex flex-column">
                                <div class="col-12 height-140px">
                                    <h5 class="card-title font-color-8e388e text-center">Paso 4</h5>
                                    <p class="card-text font-color-8e388e text-center">
                                        Una vez seleccionado el tipo de información, elige de entre las 
                                        siguientes opciones la clase, el tiempo y el periódico.
                                    </p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="../img/Guia6.jpg" class="img-fluid mt-2" alt="...">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary button-hover-dbd3ea border-0 mt-4 background-color-822381 font-color-ffffff">Omitir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper d-flex justify-content-center align-items-center">
                        <div class="card card-size rounded-4">
                            <div class="card-body d-flex flex-column">
                                <div class="col-12 height-140px">
                                    <h5 class="card-title font-color-8e388e text-center">Paso 5</h5>
                                    <p class="card-text font-color-8e388e text-center">
                                        Por último, selecciona la gráfica que quieras ver. Una vez que acabes
                                        puedes seguir viendo otras opciones.
                                    </p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="../img/Guia7.jpg" class="img-fluid mt-2" alt="...">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary button-hover-dbd3ea border-0 mt-4 background-color-822381 font-color-ffffff">Omitir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper d-flex justify-content-center align-items-center">
                        <div class="card card-size rounded-4">
                            <div class="card-body d-flex flex-column">
                                <div class="col-12 height-140px">
                                    <h5 class="card-title font-color-8e388e text-center">Menú</h5>
                                    <p class="card-text font-color-8e388e text-center">
                                        Puedes utilzar el menú hamburguesa en la parte superior izquierda para navegar
                                        por la app.
                                    </p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="../img/Guia8.jpg" class="img-fluid mt-2" alt="...">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary button-hover-dbd3ea border-0 mt-4 background-color-822381 font-color-ffffff">Omitir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper d-flex justify-content-center align-items-center">
                        <div class="card card-size rounded-4">
                            <div class="card-body d-flex flex-column">
                                <div class="col-12 height-140px">
                                    <h5 class="card-title font-color-8e388e text-center">¡Listo! <br> Ya puedes iniciar tú recorrido</h5>
                                    <p class="card-text font-color-8e388e text-center">
                                        ¡Qué lo disfrutes! Y no olvides contactarnos para cualquier duda o sugerencia.
                                    </p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <img src="../img/Guia9.jpg" class="img-fluid mt-2" alt="...">
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary button-hover-dbd3ea border-0 mt-4 background-color-822381 font-color-ffffff">Omitir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls-2"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls-2"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>