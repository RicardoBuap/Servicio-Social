<?php session_start();
    if(!isset($_SESSION['usuario']))
        header("location:../../login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibilízame</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="Icon" href="../img/Icono.ico">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
        include "../database/conexion.php";
        $id = $_GET["id"];
        $consulta  = $conexion -> query("SELECT mes, año, descripcion, tipo, etiquetaY, tituloX, rango FROM grafica WHERE id = $id");
        $consulta2 = $conexion -> query("SELECT columna1, columna2, columna3, columna4, columna5, columna6, columna7 FROM grafica WHERE id = $id");
        $consulta3 = $conexion -> query("SELECT dato1, dato2, dato3, dato4, dato5, dato6, dato7 FROM periodico1 WHERE id = $id");
        $consulta4 = $conexion -> query("SELECT dato1, dato2, dato3, dato4, dato5, dato6, dato7 FROM periodico2 WHERE id = $id");
        $consulta5 = $conexion -> query("SELECT dato1, dato2, dato3, dato4, dato5, dato6, dato7 FROM periodico3 WHERE id = $id");
    ?>
    <div class="container-fluid">
        <?php while($fila = $consulta -> fetch_assoc()) {?>
        <div class="container mx-0 px-0">
            <div class="row mt-3 justify-content-around align-items-center" style="width:100%">
                <h1 class="titulo">
                    <?php
                        $dato1 = $fila['mes'];
                        $dato2 = $fila['año'];
                        echo "$dato1 $dato2";
                    ?>
                </h1>
                <a href="../vista/index.php">
                    <img src="../img/icono-cerrar.png" class="img-fluid" 
                        alt="Image" style="height:35px; width:auto;">
                </a>
            </div>
            <div class="row m-auto pt-3" style="width:80%">
                <canvas id="myChart"></canvas>
            </div>
            <div class="row m-auto py-3" style="width:75%">
                <p class="texto">
                    <?php
                        $dato3 = $fila['descripcion'];
                        echo "$dato3";
                    ?>
                </p>
            </div>
        </div>
    </div>
    <?php
        function obtenerDatosNoNulosYGenerarOutput($consulta) {
            $datosNoNulos = array();
            while ($recorrer = $consulta->fetch_assoc()) {
                foreach ($recorrer as $clave => $valor) {
                    if ($valor !== null) {
                        $datosNoNulos[] = $valor;
                    }
                }
            }
        
            $output = "";
            $primeraIteracion = true;
            foreach ($datosNoNulos as $dato) {
                if (!$primeraIteracion) {
                    $output .= ", ";
                }
                $output .= "'".$dato."'";
                $primeraIteracion = false;
            }
            
            return $output;
        }
        // Usando la función para simplificar el código original
        $output = obtenerDatosNoNulosYGenerarOutput($consulta2);
        $output2 = obtenerDatosNoNulosYGenerarOutput($consulta3);
        $output3 = obtenerDatosNoNulosYGenerarOutput($consulta4);
        $output4 = obtenerDatosNoNulosYGenerarOutput($consulta5); 
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- ChartJs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
            type: '<?php $dato4 = $fila['tipo']; echo "$dato4";?>',
            data: {
            color:'#3b7f56',
            labels: [<?php echo $output?>],
            //labels: ['Sol de Puebla', 'Intolerancia', 'Síntesis'],
            datasets: [
                {
                    label:'Sol de Puebla',
                    data: [<?php echo "$output2"; ?>],//Son los datos de la columna1
                    backgroundColor:'rgba(142,168,194,255)',
                    hoverBackgroundColor:'thistle',
                },
                {
                    label:'Intolerancia',
                    data: [<?php echo "$output3"; ?>],
                    backgroundColor:'rgba(175,215,188,255)',
                    hoverBackgroundColor:'thistle',
                },
                {
                    label:'Síntesis',
                    data: [<?php echo "$output4"; ?>],
                    backgroundColor:'rgba(153,172,197,255)',
                    hoverBackgroundC3olor:'thistle',
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
                max:<?php $dato6 = $fila['rango']; echo "$dato6";?>,
                // stepSize:10,
                title:{
                    color:'rgba(150,150,183,255)',
                    display:true,
                    align:'center',
                    text:'<?php $dato5 = $fila['etiquetaY']; echo $dato5; ?>'
                },
                },
                x:{
                title:{
                    display:true,
                    align:'center',
                    color:'rgba(150,150,183,255)',
                    text:'<?php $dato7 = $fila['tituloX']; echo $dato7; ?>'
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
                    }
                }
                });
    </script>
    <?php } ?>
</body>
</html>
