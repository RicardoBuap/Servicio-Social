<style>
    .grafica {
        width: 100%;
    }

    @media (min-width: 400px) {
        .grafica {
            width: 80%;
        }
    }

    @media (min-width: 1024px) {
        .grafica {
            width: 60%;
        }
    }

    @media (min-width: 1200px) {
        .grafica {
            width: 50%;
        }
    }
    </style>
    <body>
    <div class="container-fluid m-0 d-flex flex-column align-items-center justify-content-center grafica">
        <div class="container my-5" style="border: 3px solid #285576; border-radius: 30px;">
            <div class="row my-3">
                <div class="col-12 d-flex flex-column align-items-center">
                    <h1 class="titulo roboto-bold">
                        <?php
                            // $dato1 = $fila['mes'];
                            // $dato2 = $fila['año'];
                            // echo "$dato1 $dato2";
                        ?>
                    </h1>
                </div>
                <!-- <div class="col-6 d-flex flex-column align-items-center">
                    <i class="bi bi-x-circle-fill" style="color: #9b97ca; font-size: 30px;"></i>
                </div> -->
            </div>
            <div class="row d-flex flex-column align-items-center">
                <div class="col-12" style="width:100%">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="row my-3 d-flex flex-column align-items-center">
                <div class="col-12">
                    <p class="parrafo roboto-light-italic mx-2 text-center" style="color: #959595;">
                        <?php
                            // $dato3 = $fila['descripcion'];
                            // echo "$dato3";
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>