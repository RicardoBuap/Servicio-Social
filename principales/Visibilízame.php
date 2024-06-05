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
    <style>
        /* Establece el fondo y el texto a blanco para mayor visibilidad */
        body {
            background-color: #dbd3ea;
        }

        .container-fluid {
            height: 100vh;
        }

        /* Estilo para la animación del latido */
        @keyframes heartbeat {
            0% {
                transform: scale(1);
            }
            25% {
                transform: scale(1.05);
            }
            50% {
                transform: scale(1);
            }
            75% {
                transform: scale(0.95);
            }
            100% {
                transform: scale(1);
            }
        }

        .heartbeat {
            animation: heartbeat 1s ease-in-out infinite;
        }

        .max-vh-100 {
            max-height: 80vh;
        }
        
    </style>
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center animate__animated animate__fadeIn">
        <div class="row">
            <div class="col-12 text-center">
                <img src="../img/fondo.png" alt="Icono de carga" class="img-fluid heartbeat max-vh-100">
            </div>
            <div class="col-12 mt-3">
                <h1 class="roboto-bold titulo text-center">
                    !Bienvenida a Visibilízame!
                </h1>
            </div>
        </div>
    </div>
<script src="../js/bootstrap.bundle.min.js"></script>
<script>
    // Espera 5 segundos antes de redirigir a otra página
    setTimeout(function() {
        window.location.href = 'manual-de-usuario.php'; // Reemplaza 'https://ejemplo.com' con la URL de destino
    }, 4000);
</script>
</body>
</html>
