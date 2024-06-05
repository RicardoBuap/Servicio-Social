<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="row m-auto" style="width:80%">
        <canvas id="miGraficoPastel" width="400" height="400"></canvas>
    </div>
    <?php
        $datos = array(
            "Categoría 1" => 10,
            "Categoría 2" => 20,
            "Categoría 3" => 30,
            "Categoría 4" => 40
        );
        // Convertir los datos a formato JSON para usar en JavaScript
        $datosJson = json_encode($datos);
        ?>
</body>
<script>
// Asegúrate de que el DOM esté completamente cargado antes de intentar acceder al canvas
document.addEventListener('DOMContentLoaded', function () {
    var datos = JSON.parse('<?php echo $datosJson; ?>');

    var ctx = document.getElementById('miGraficoPastel').getContext('2d');
    var miGraficoPastel = new Chart(ctx, {
        type: 'pie', // Tipo de gráfico
        data: {
            labels: Object.keys(datos), // Las categorías
            datasets: [{
                label: 'Mi dataset',
                data: Object.values(datos), // Los valores
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {}
    });
});
</script>
</html>