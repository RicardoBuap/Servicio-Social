<!-- Modal  -->
<div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevoModalLabel">Agregar registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" autocomplete="off" action="../controlador/guarda.php">
                    <div class="row mb-2">
                        <div class="col-5">
                            <label class="form-label">Mes</label>
                            <select class="form-control limpiar" id="mes" name="mes" required>
                                <option value="" disabled selected>Selecciona un mes</option>
                                <option value="Enero">Enero</option>
                                <option value="Febrero">Febrero</option>
                                <option value="Marzo">Marzo</option>
                                <option value="Abril">Abril</option>
                                <option value="Mayo">Mayo</option>
                                <option value="Junio">Junio</option>
                                <option value="Julio">Julio</option>
                                <option value="Agosto">Agosto</option>
                                <option value="Septiembre">Septiembre</option>
                                <option value="Octubre">Octubre</option>
                                <option value="Noviembre">Noviembre</option>
                                <option value="Diciembre">Diciembre</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Año</label>
                            <select class="form-control limpiar" id="año" name="año" required>
                                <option value="" dissabled selected>Selecciona un año</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-11">
                            <label class="form-label">Categoría</label>
                            <input type="text" id="categoria" class="form-control limpiar" name="categoria" placeholder="Ingrese una categoría" name="categoria" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-11">
                            <label  class="form-label">Descripción</label>
                            <textarea class="form-control limpiar" id="descripcion" name="descripcion" rows="7" name="descripcion" required></textarea>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-5">
                            <label class="form-label">Rango</label>
                            <input type="number" id="rango" placeholder="Ingrese el rango" class="form-control limpiar" min="0" name="rango" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Tipo de gráfico</label>
                            <select class="form-control limpiar" name="grafico" id="grafico" required>
                                <option value="" disabled selected>Seleccione un grafico</option>
                                <option value="bar">Barras</option>
                                <!-- <option value="pie">Circular</option> -->
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-11">
                            <label class="form-label">EtiquetaY</label>
                            <input type="text" id="etiquetaY" class="form-control limpiar" name="etiquetaY" required placeholder="Ingresa el eje Y">
                        </div>
                        <div class="col-11">
                            <label class="form-label">EtiquetaX</label>
                            <input type="text" id="etiquetaX" class="form-control limpiar" name="etiquetaX" required placeholder="Ingrese el eje X">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-11">
                            <label class="form-label">Nombre de la columna 1:</label>
                            <input type="text" name="columna1" class="form-control limpiar" id="columna1" placeholder="Ingresa el nombre de la columna" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-11">
                            <label class="form-label">Nombre de la columna 2:</label>
                            <input type="text" name="columna2" class="form-control limpiar" id="columna2" placeholder="Ingresa el nombre de la columna">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-11">
                            <label class="form-label">Nombre de la columna 3:</label>
                            <input type="text" class="form-control limpiar" name="columna3" id="columna3" placeholder="Ingresa el nombre de la columna">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-11">
                            <label class="form-label">Nombre de la columna 4:</label>
                            <input type="text" class="form-control limpiar" id="columna4" name="columna4" placeholder="Ingresa el nombre de la columna">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-11">
                            <label class="form-label">Nombre de la columna 5:</label>
                            <input type="text" class="form-control limpiar" id="columna5" name="columna5" placeholder="Ingresa el nombre de la columna">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-11">
                            <label class="form-label">Nombre de la columna 6:</label>
                            <input type="text" class="form-control limpiar" id="columna6" name="columna6" placeholder="Ingresa el nombre de la columna">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-11">
                            <label class="form-label">Nombre de la columna 7:</label>
                            <input type="text" class="form-control limpiar" id="columna7" name="columna7" placeholder="Ingresa el nombre de la columna">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="form-label">Periódico 1</label>
                        <div class="col-11 mb-2"> 
                            <input style="display:none;" type="number" placeholder="Dato 1 Periódico 1" class="form-control dato1 limpiar dato-periodico" min="0" id="dato1periodico1" name="dato1periodico1">
                        </div>
                        <div class="col-11 mb-2"> 
                            <input style="display:none;" type="number" placeholder="Dato 2 Periódico 1" class="form-control dato2 limpiar dato-periodico" min="0" id="dato2periodico1" name="dato2periodico1">
                        </div>
                        <div class="col-11 mb-2"> 
                            <input style="display:none;" type="number" placeholder="Dato 3 Periódico 1" class="form-control dato3 limpiar dato-periodico" min="0" id="dato3periodico1" name="dato3periodico1">
                        </div>
                        <div class="col-11 mb-2"> 
                            <input style="display:none;" type="number" placeholder="Dato 4 Periódico 1" class="form-control dato4 limpiar dato-periodico" min="0" id="dato4periodico1" name="dato4periodico1">
                        </div>
                        <div class="col-11 mb-2"> 
                            <input style="display:none;" type="number" placeholder="Dato 5 Periódico 1" class="form-control dato5 limpiar dato-periodico" min="0" id="dato5periodico1" name="dato5periodico1">
                        </div>
                        <div class="col-11 mb-2"> 
                            <input style="display:none;" type="number" placeholder="Dato 6 Periódico 1" class="form-control dato6 limpiar dato-periodico" min="0" id="dato6periodico1" name="dato6periodico1">
                        </div>
                        <div class="col-11 mb-2"> 
                            <input style="display:none;" type="number" placeholder="Dato 7 Periódico 1" class="form-control dato7 limpiar dato-periodico" min="0" id="dato7periodico1" name="dato7periodico1">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="form-label">Periódico 2</label>
                        <div class="col-11 mb-2">
                            <input style="display:none;" type="number" placeholder="Dato 1 Periódico 2" class="form-control dato1 limpiar dato-periodico" min="0" id="dato1periodico2" name="dato1periodico2">
                        </div>
                        <div class="col-11 mb-2">
                            <input style="display:none;" type="number" placeholder="Dato 2 Periódico 2" class="form-control dato2 limpiar dato-periodico" min="0" id="dato2periodico2" name="dato2periodico2">
                        </div>
                        <div class="col-11 mb-2">
                            <input style="display:none;" type="number" placeholder="Dato 3 Periódico 2" class="form-control dato3 limpiar dato-periodico" min="0" id="dato3periodico2" name="dato3periodico2">
                        </div>
                        <div class="col-11 mb-2">
                            <input style="display:none;" type="number" placeholder="Dato 4 Periódico 2" class="form-control dato4 limpiar dato-periodico" min="0" id="dato4periodico2" name="dato4periodico2">
                        </div>
                        <div class="col-11 mb-2">
                            <input style="display:none;" type="number" placeholder="Dato 5 Periódico 2" class="form-control dato5 limpiar dato-periodico" min="0" id="dato5periodico2" name="dato5periodico2">
                        </div>
                        <div class="col-11 mb-2"> 
                            <input style="display:none;" type="number" placeholder="Dato 6 Periódico 2" class="form-control dato6 limpiar dato-periodico" min="0" id="dato6periodico2" name="dato6periodico2">
                        </div>
                        <div class="col-11 mb-2"> 
                            <input style="display:none;" type="number" placeholder="Dato 7 Periódico 2" class="form-control dato7 limpiar dato-periodico" min="0" id="dato7periodico2" name="dato7periodico2">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="formlabel">Periódico 3</label>
                        <div class="col-11 mb-2">
                            <input style="display:none;" type="number" placeholder="Dato 1 Periódico 3" class="form-control dato1 limpiar dato-periodico" min="0" id="dato1periodico3" name="dato1periodico3">
                        </div>
                        <div class="col-11 mb-2">
                            <input style="display:none;" type="number" placeholder="Dato 2 Periódico 3" class="form-control dato2 limpiar dato-periodico" min="0" id="dato2periodico3" name="dato2periodico3">
                        </div>
                        <div class="col-11 mb-2">
                            <input style="display:none;" type="number" placeholder="Dato 3 Periódico 3" class="form-control dato3 limpiar dato-periodico" min="0" id="dato3periodico3" name="dato3periodico3">
                        </div>
                        <div class="col-11 mb-2">
                            <input style="display:none;" type="number" placeholder="Dato 4 Periódico 3" class="form-control dato4 limpiar dato-periodico" min="0" id="dato4periodico3" name="dato4periodico3">
                        </div>
                        <div class="mb-2">
                            <input style="display:none;" type="number" placeholder="Dato 5 Periódico 3" class="form-control dato5 limpiar dato-periodico" min="0" id="dato5periodico3" name="dato5periodico3">
                        </div>
                        <div class="col-11 mb-2"> 
                            <input style="display:none;" type="number" placeholder="Dato 6 Periódico 3" class="form-control dato6 limpiar dato-periodico" min="0" id="dato6periodico3" name="dato6periodico3">
                        </div>
                        <div class="col-11 mb-2"> 
                            <input style="display:none;" type="number" placeholder="Dato 7 Periódico 3" class="form-control dato7 limpiar dato-periodico" min="0" id="dato7periodico3" name="dato7periodico3">
                        </div>
                    </div>
                    <div class="text-center p-3">
                        <button type="submit" class="btn btn-outline-success">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    //Verificación de columnas vacías
    let nuevoModalEventos = document.getElementById("nuevoModal");

    function manejarInputColumna(idColumna, claseInputsPeriodicos) {
        nuevoModalEventos.querySelector('.modal-body #' + idColumna).addEventListener("input", function() {
            let valorColumna = nuevoModalEventos.querySelector('.modal-body #' + idColumna).value;
            let inputsPeriodicos = nuevoModalEventos.querySelectorAll('.modal-body .' + claseInputsPeriodicos);

            if (valorColumna !== "") {
                inputsPeriodicos.forEach(function(input) {
                    input.style.display = "block";
                    input.required = true; // Corrige 'requiered' a 'required'
                });
            } else {
                inputsPeriodicos.forEach(function(input) {
                    input.style.display = "none";
                    input.required = false; // Corrige 'requiered' a 'required'
                    input.value = "";
                });
            }
        });
    }

    // Ahora solo necesitas llamar a manejarInputColumna para cada columna
    manejarInputColumna("columna1", "dato1");
    manejarInputColumna("columna2", "dato2");
    manejarInputColumna("columna3", "dato3");
    manejarInputColumna("columna4", "dato4");
    manejarInputColumna("columna5", "dato5");
    manejarInputColumna("columna6", "dato6");
    manejarInputColumna("columna7", "dato7");
</script>