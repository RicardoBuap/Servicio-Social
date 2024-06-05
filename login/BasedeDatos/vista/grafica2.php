<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibilízame</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="../css/config-General-Grafica.css">
    <!-- Icono de la Página -->
    <!-- <link rel="Icon" href="../img/Icono.ico"> -->
</head>
<body>
    <?php
        include "database/conexion.php";
        $consulta1 = $conexion -> query("SELECT mes FROM grafica WHERE id = 24");
        $consulta2 = $conexion -> query("SELECT año FROM grafica WHERE id = 24");
        $consulta3 = $conexion -> query("SELECT descripcion FROM grafica WHERE id = 24");
        $consulta4 = $conexion -> query("SELECT tipo FROM grafica WHERE id = 24");
        $consulta5 = $conexion -> query("SELECT etiquetaY FROM grafica WHERE id= 24");
    ?>
    <?php
        $fila4  = $consulta4 -> fetch_assoc();
        $dato4  = $fila4 ['tipo'];
        $fila5  = $consulta5 -> fetch_assoc();
        $dato5  = $fila5['etiquetaY']; 
    ?>
    <div class="container-fluid">
        <div class="container">
            <div class="row mt-3 align-items-center">
                <div class="col-10 col-sm-11 col-md-10 col-lg-10 col-xl-10 text-center" style="padding-right: 0px; padding-left: 0px;">
                    <h1 class="titulo">
                    <?php
                        $fila  = $consulta1 -> fetch_assoc();
                        $fila2 = $consulta2 -> fetch_assoc();
                        $dato  = $fila ['mes'];
                        $dato2 = $fila2['año'];
                        echo "$dato $dato2";
                    ?>
                    </h1>
                </div>
                <div class="col-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 text-center" style="padding-left: 0px; padding-right: 0px;"> 
                    <a href="../Página finales/Plantilla_Prueba.html">
                        <img src="icono-cerrar.png" class="img-fluid" alt="Image" style="height: 35px; width:auto;"/>
                    </a>
                </div>
            </div>
            <div class="row mb-4 mt-3">
                <div class="col-1 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
                <div class="col-10 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                    <div class="animate__animated animate__fadeIn">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
                <div class="col-1 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
            </div>
            <div class="row pt-3">
                <div class="col-1 col-sm-1 col-md-2 col-lg-2 col-xl-2"></div>
                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-8">
                        <p class="texto">
                            <?php
                                $fila3  = $consulta3 -> fetch_assoc();
                                $dato3  = $fila3 ['descripcion'];
                                echo "$dato3";
                            ?>
                        </p>
                </div>
                <div class="col-1 col-sm-1 col-md-2 col-lg-8 col-xl-2"></div>
            </div>
        </div>
    </div>

    <!-- Agrega el enlace al archivo JavaScript de Bootstrap y Popper.js (requerido por Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- ChartJs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- <script src="js/config-40.js"></script> -->
    <script>
        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
            type: '<?php echo $dato4; ?>',
            data: {
            color:'#3b7f56',
            labels: ['0','1-3','4-7','8+'],
            //labels: ['Sol de Puebla', 'Intolerancia', 'Síntesis'],
            datasets: [
                {
                    label:'Sol de Puebla',
                    data: [5,12,19,3],
                    // borderWidth: 0,
                    backgroundColor:'rgba(142,168,194,255)',
                    hoverBackgroundColor:'thistle',
                    // barThickness: 40,
                    // barPercentage:0.8,
                },
                {
                    label:'Intolerancia',
                    data: [3,6,2,1],
                    // borderWidth: 0,
                    backgroundColor:'rgba(175,215,188,255)',
                    hoverBackgroundColor:'thistle',
                    // barThickness: 40,
                    // barPercentage:0.8,
                },
                {
                    label:'Síntesis',
                    data: [3,3,0,0],
                    // borderWidth: 0,
                    backgroundColor:'rgba(153,172,197,255)',
                    hoverBackgroundColor:'thistle',
                    // barThickness: 40,
                    // barPercentage:0.8,
                }]
            },
            options: {
            responsive : true,
            maintainAspectRatio:false,
            aspectRatio:1,
            scales: {
                y: {
                beginAtZero: true,
                min:0,
                max:30,
                // stepSize:10,
                title:{
                    color:'rgba(150,150,183,255)',
                    display:true,
                    align:'center',
                    text:'<?php echo $dato5;?>'
                },
                },
                x:{
                title:{
                    display:true,
                    align:'center',
                    color:'rgba(150,150,183,255)',
                    text:'Cantidad de veces que se encontró la palabra'
                },
                ticks:{
                    //  autoSkip:true,
                    //   maxRotation:90,
                    //   minRotation:90,
                    color:'rgba(150,150,183,255)',
                },
                grid:{
                    display:false
                }
                }
                    },
                    plugins: {
                        // title:{
                        //     display:true,
                        //     text: 'Periódico 1 - Enero 2022'
                        // }
                    }
                }
                });
    </script>
</body>
</html>
