            let nuevoModal = document.getElementById('nuevoModal')
            let editaModal = document.getElementById('editaModal')
            let eliminaModal = document.getElementById('eliminaModal')

            nuevoModal.addEventListener('hide.bs.modal', event => {
                nuevoModal.querySelector('.modal-body #mes').focus()
            })

            editaModal.addEventListener('hide.bs.modal', event => {
                editaModal.querySelector('.modal-body #mes').focus()
            })

            nuevoModal.addEventListener('hide.bs.modal', event => {
                let campos = nuevoModal.querySelectorAll('.modal-body .limpiar');
                campos.forEach(campo => campo.value = "");
                
                let datosPeriodicos = nuevoModal.querySelectorAll('.modal-body .dato-periodico');
                datosPeriodicos.forEach(dato => {
                    dato.style.display = "none";
                    dato.required = false;
                });
            });
            
            editaModal.addEventListener('hide.bs.modal', event => {
                let campos = editaModal.querySelectorAll('.modal-body .limpiar');
                campos.forEach(campo => campo.value = "");

                let datosPeriodicos = editaModal.querySelectorAll('.modal-body .dato-periodico');
                datosPeriodicos.forEach(dato =>{
                    dato.style.display = "none";
                    dato.required = false;
                });
            });

            //Enviando información a editaModal.php
            editaModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')

            let inputdato1periodico1 = editaModal.querySelector('.modal-body #dato1periodico1');
            let inputdato1periodico2 = editaModal.querySelector('.modal-body #dato1periodico2');
            let inputdato1periodico3 = editaModal.querySelector('.modal-body #dato1periodico3');

            let inputdato2periodico1 = editaModal.querySelector('.modal-body #dato2periodico1');
            let inputdato2periodico2 = editaModal.querySelector('.modal-body #dato2periodico2');
            let inputdato2periodico3 = editaModal.querySelector('.modal-body #dato2periodico3');

            let inputdato3periodico1 = editaModal.querySelector('.modal-body #dato3periodico1');
            let inputdato3periodico2 = editaModal.querySelector('.modal-body #dato3periodico2');
            let inputdato3periodico3 = editaModal.querySelector('.modal-body #dato3periodico3');

            let inputdato4periodico1 = editaModal.querySelector('.modal-body #dato4periodico1');
            let inputdato4periodico2 = editaModal.querySelector('.modal-body #dato4periodico2');
            let inputdato4periodico3 = editaModal.querySelector('.modal-body #dato4periodico3');

            let inputdato5periodico1 = editaModal.querySelector('.modal-body #dato5periodico1');
            let inputdato5periodico2 = editaModal.querySelector('.modal-body #dato5periodico2');
            let inputdato5periodico3 = editaModal.querySelector('.modal-body #dato5periodico3');

            let inputdato6periodico1 = editaModal.querySelector('.modal-body #dato6periodico1');
            let inputdato6periodico2 = editaModal.querySelector('.modal-body #dato6periodico2');
            let inputdato6periodico3 = editaModal.querySelector('.modal-body #dato6periodico3');

            let inputdato7periodico1 = editaModal.querySelector('.modal-body #dato7periodico1');
            let inputdato7periodico2 = editaModal.querySelector('.modal-body #dato7periodico2');
            let inputdato7periodico3 = editaModal.querySelector('.modal-body #dato7periodico3');
        
            let inputId = editaModal.querySelector('.modal-body #id')
            let inputMes = editaModal.querySelector('.modal-body #mes')
            let inputAño = editaModal.querySelector('.modal-body #año')
            let inputCategoria = editaModal.querySelector('.modal-body #categoria')
            let inputDescripcion = editaModal.querySelector('.modal-body #descripcion')
            let inputRango = editaModal.querySelector('.modal-body #rango')
            let inputGrafico = editaModal.querySelector('.modal-body #grafico')
            let inputEtiquetaX = editaModal.querySelector('.modal-body #etiquetaX')
            let inputEtiquetaY = editaModal.querySelector('.modal-body #etiquetaY')
            let inputColumna1 = editaModal.querySelector('.modal-body #columna1')
            let inputColumna2 = editaModal.querySelector('.modal-body #columna2')
            let inputColumna3 = editaModal.querySelector('.modal-body #columna3')
            let inputColumna4 = editaModal.querySelector('.modal-body #columna4')
            let inputColumna5 = editaModal.querySelector('.modal-body #columna5')
            let inputColumna6 = editaModal.querySelector('.modal-body #columna6')
            let inputColumna7 = editaModal.querySelector('.modal-body #columna7')
            let url  = "../controlador/getGrafica.php"
            let url2 = "../controlador/getColumna1.php";
            let url3 = "../controlador/getColumna2.php";
            let url4 = "../controlador/getColumna3.php";
            let url5 = "../controlador/getColumna4.php";
            let url6 = "../controlador/getColumna5.php";
            let url7 = "../controlador/getColumna6.php";
            let url8 = "../controlador/getColumna7.php";

            let formData = new FormData()
            formData.append('id', id)
            fetch(url, {
                method:"POST",
                body: formData
            }).then(response => response.json())
            .then(data =>{
                inputId.value = data.id;
                inputMes.value = data.mes;
                inputAño.value = data.año;
                inputCategoria.value = data.categoria;
                inputDescripcion.value = data.descripcion;
                inputRango.value = data.rango;
                inputGrafico.value = data.tipo;
                inputEtiquetaX.value = data.tituloX;
                inputEtiquetaY.value = data.etiquetaY;
                inputColumna1.value = data.columna1;
                inputColumna2.value = data.columna2;
                inputColumna3.value = data.columna3;
                inputColumna4.value = data.columna4;
                inputColumna5.value = data.columna5;
                inputColumna6.value = data.columna6;
                inputColumna7.value = data.columna7;

                if(inputColumna1.value.trim() != "" && inputColumna2.value.trim() != "" 
                && inputColumna3.value.trim() != "" 
                && inputColumna4.value.trim() != "" && inputColumna5.value.trim() != "" 
                && inputColumna6.value.trim() != "" && inputColumna7.value.trim() != ""){
                inputdato1periodico1.style.display="block";
                inputdato1periodico2.style.display="block";
                inputdato1periodico3.style.display="block";
                let formData2 = new FormData();
                formData2.append('id', id);
                fetch(url2, {
                    method:"POST",
                    body:formData2
                }).then(response => response.json())
                .then(data2 =>{
                    inputdato1periodico1.value = data2.dato1_periodico1;
                    inputdato1periodico2.value = data2.dato1_periodico2;
                    inputdato1periodico3.value = data2.dato1_periodico3;
                })
                .catch(err => console.log(err));

                inputdato2periodico1.style.display="block";
                inputdato2periodico2.style.display="block";
                inputdato2periodico3.style.display="block";
                let formData3 = new FormData();
                formData3.append('id', id);
                fetch(url3, {
                    method:"POST",
                    body:formData3
                }).then(response => response.json())
                .then(data3 =>{
                    console.log(data3);
                    inputdato2periodico1.value = data3.dato2_periodico1;
                    inputdato2periodico2.value = data3.dato2_periodico2;
                    inputdato2periodico3.value = data3.dato2_periodico3;
                })
                .catch(err => console.log(err));

                inputdato3periodico1.style.display="block";
                inputdato3periodico2.style.display="block";
                inputdato3periodico3.style.display="block";
                let formData4 = new FormData();
                formData4.append('id', id);
                fetch(url4, {
                    method:"POST",
                    body:formData4
                }).then(response => response.json())
                .then(data4 =>{
                    console.log(data4);
                    inputdato3periodico1.value = data4.dato3_periodico1;
                    inputdato3periodico2.value = data4.dato3_periodico2;
                    inputdato3periodico3.value = data4.dato3_periodico3;
                })
                .catch(err => console.log(err));
                
                inputdato4periodico1.style.display="block";
                inputdato4periodico2.style.display="block";
                inputdato4periodico3.style.display="block";
                let formData5 = new FormData();
                formData5.append('id', id);
                fetch(url5, {
                    method:"POST",
                    body:formData5
                }).then(response => response.json())
                .then(data5 =>{
                    console.log(data5);
                    inputdato4periodico1.value = data5.dato4_periodico1;
                    inputdato4periodico2.value = data5.dato4_periodico2;
                    inputdato4periodico3.value = data5.dato4_periodico3;
                })
                .catch(err => console.log(err));

                inputdato5periodico1.style.display="block";
                inputdato5periodico2.style.display="block";
                inputdato5periodico3.style.display="block";
                let formData6 = new FormData();
                formData6.append('id', id);
                fetch(url6, {
                    method:"POST",
                    body:formData6
                }).then(response => response.json())
                .then(data6 =>{
                    console.log(data6);
                    inputdato5periodico1.value = data6.dato5_periodico1;
                    inputdato5periodico2.value = data6.dato5_periodico2;
                    inputdato5periodico3.value = data6.dato5_periodico3;
                })
                .catch(err => console.log(err));

                inputdato6periodico1.style.display="block";
                inputdato6periodico2.style.display="block";
                inputdato6periodico3.style.display="block";
                let formData7 = new FormData();
                formData7.append('id', id);
                fetch(url7, {
                    method:"POST",
                    body:formData7
                }).then(response => response.json())
                .then(data7 =>{
                    console.log(data7);
                    inputdato6periodico1.value = data7.dato6_periodico1;
                    inputdato6periodico2.value = data7.dato6_periodico2;
                    inputdato6periodico3.value = data7.dato6_periodico3;
                })
                .catch(err => console.log(err));

                inputdato7periodico1.style.display="block";
                inputdato7periodico2.style.display="block";
                inputdato7periodico3.style.display="block";
                let formData8 = new FormData();
                formData8.append('id', id);
                fetch(url8, {
                    method:"POST",
                    body:formData8
                }).then(response => response.json())
                .then(data8 =>{
                    console.log(data8);
                    inputdato7periodico1.value = data8.dato7_periodico1;
                    inputdato7periodico2.value = data8.dato7_periodico2;
                    inputdato7periodico3.value = data8.dato7_periodico3;
                })
                .catch(err => console.log(err));
            }
                else if(inputColumna1.value.trim() != "" && inputColumna2.value.trim() != "" 
                    && inputColumna3.value.trim() != "" && inputColumna4.value.trim() !="" 
                    && inputColumna5.value.trim() != "" && inputColumna6.value.trim() != ""){
                console.log("Aquí hay cuatro columnas");
                inputdato1periodico1.style.display="block";
                inputdato1periodico2.style.display="block";
                inputdato1periodico3.style.display="block";
                let formData2 = new FormData();
                formData2.append('id', id);
                fetch(url2, {
                    method:"POST",
                    body:formData2
                }).then(response => response.json())
                .then(data2 =>{
                    inputdato1periodico1.value = data2.dato1_periodico1;
                    inputdato1periodico2.value = data2.dato1_periodico2;
                    inputdato1periodico3.value = data2.dato1_periodico3;
                })
                .catch(err => console.log(err));

                inputdato2periodico1.style.display="block";
                inputdato2periodico2.style.display="block";
                inputdato2periodico3.style.display="block";
                let formData3 = new FormData();
                formData3.append('id', id);
                fetch(url3, {
                    method:"POST",
                    body:formData3
                }).then(response => response.json())
                .then(data3 =>{
                    console.log(data3);
                    inputdato2periodico1.value = data3.dato2_periodico1;
                    inputdato2periodico2.value = data3.dato2_periodico2;
                    inputdato2periodico3.value = data3.dato2_periodico3;
                })
                .catch(err => console.log(err));

                inputdato3periodico1.style.display="block";
                inputdato3periodico2.style.display="block";
                inputdato3periodico3.style.display="block";
                let formData4 = new FormData();
                formData4.append('id', id);
                fetch(url4, {
                    method:"POST",
                    body:formData4
                }).then(response => response.json())
                .then(data4 =>{
                    console.log(data4);
                    inputdato3periodico1.value = data4.dato3_periodico1;
                    inputdato3periodico2.value = data4.dato3_periodico2;
                    inputdato3periodico3.value = data4.dato3_periodico3;
                })
                .catch(err => console.log(err));
                
                inputdato4periodico1.style.display="block";
                inputdato4periodico2.style.display="block";
                inputdato4periodico3.style.display="block";
                let formData5 = new FormData();
                formData5.append('id', id);
                fetch(url5, {
                    method:"POST",
                    body:formData5
                }).then(response => response.json())
                .then(data5 =>{
                    console.log(data5);
                    inputdato4periodico1.value = data5.dato4_periodico1;
                    inputdato4periodico2.value = data5.dato4_periodico2;
                    inputdato4periodico3.value = data5.dato4_periodico3;
                })
                .catch(err => console.log(err));

                inputdato5periodico1.style.display="block";
                inputdato5periodico2.style.display="block";
                inputdato5periodico3.style.display="block";
                let formData6 = new FormData();
                formData6.append('id', id);
                fetch(url6, {
                    method:"POST",
                    body:formData6
                }).then(response => response.json())
                .then(data6 =>{
                    console.log(data6);
                    inputdato5periodico1.value = data6.dato5_periodico1;
                    inputdato5periodico2.value = data6.dato5_periodico2;
                    inputdato5periodico3.value = data6.dato5_periodico3;
                })
                .catch(err => console.log(err));

                inputdato6periodico1.style.display="block";
                inputdato6periodico2.style.display="block";
                inputdato6periodico3.style.display="block";
                let formData7 = new FormData();
                formData7.append('id', id);
                fetch(url7, {
                    method:"POST",
                    body:formData7
                }).then(response => response.json())
                .then(data7 =>{
                    console.log(data7);
                    inputdato6periodico1.value = data7.dato6_periodico1;
                    inputdato6periodico2.value = data7.dato6_periodico2;
                    inputdato6periodico3.value = data7.dato6_periodico3;
                })
                .catch(err => console.log(err));
            }
                else if(inputColumna1.value.trim() != "" && inputColumna2.value.trim() != "" && inputColumna3.value.trim() != "" 
                    && inputColumna4.value.trim() !="" && inputColumna5.value.trim() != ""){
                    console.log("Aquí hay cuatro columnas")
                    inputdato1periodico1.style.display="block";
                    inputdato1periodico2.style.display="block";
                    inputdato1periodico3.style.display="block";
                    let formData2 = new FormData();
                    formData2.append('id', id);
                    fetch(url2, {
                        method:"POST",
                        body:formData2
                    }).then(response => response.json())
                    .then(data2 =>{
                        inputdato1periodico1.value = data2.dato1_periodico1;
                        inputdato1periodico2.value = data2.dato1_periodico2;
                        inputdato1periodico3.value = data2.dato1_periodico3;
                    })
                    .catch(err => console.log(err));

                    inputdato2periodico1.style.display="block";
                    inputdato2periodico2.style.display="block";
                    inputdato2periodico3.style.display="block";
                    let formData3 = new FormData();
                    formData3.append('id', id);
                    fetch(url3, {
                        method:"POST",
                        body:formData3
                    }).then(response => response.json())
                    .then(data3 =>{
                        console.log(data3);
                        inputdato2periodico1.value = data3.dato2_periodico1;
                        inputdato2periodico2.value = data3.dato2_periodico2;
                        inputdato2periodico3.value = data3.dato2_periodico3;
                    })
                    .catch(err => console.log(err));

                    inputdato3periodico1.style.display="block";
                    inputdato3periodico2.style.display="block";
                    inputdato3periodico3.style.display="block";
                    let formData4 = new FormData();
                    formData4.append('id', id);
                    fetch(url4, {
                        method:"POST",
                        body:formData4
                    }).then(response => response.json())
                    .then(data4 =>{
                        console.log(data4);
                        inputdato3periodico1.value = data4.dato3_periodico1;
                        inputdato3periodico2.value = data4.dato3_periodico2;
                        inputdato3periodico3.value = data4.dato3_periodico3;
                    })
                    .catch(err => console.log(err));
                    
                    inputdato4periodico1.style.display="block";
                    inputdato4periodico2.style.display="block";
                    inputdato4periodico3.style.display="block";
                    let formData5 = new FormData();
                    formData5.append('id', id);
                    fetch(url5, {
                        method:"POST",
                        body:formData5
                    }).then(response => response.json())
                    .then(data5 =>{
                        console.log(data5);
                        inputdato4periodico1.value = data5.dato4_periodico1;
                        inputdato4periodico2.value = data5.dato4_periodico2;
                        inputdato4periodico3.value = data5.dato4_periodico3;
                    })
                    .catch(err => console.log(err));

                    inputdato5periodico1.style.display="block";
                    inputdato5periodico2.style.display="block";
                    inputdato5periodico3.style.display="block";
                    let formData6 = new FormData();
                    formData6.append('id', id);
                    fetch(url6, {
                        method:"POST",
                        body:formData6
                    }).then(response => response.json())
                    .then(data6 =>{
                        inputdato5periodico1.value = data6.dato5_periodico1;
                        inputdato5periodico2.value = data6.dato5_periodico2;
                        inputdato5periodico3.value = data6.dato5_periodico3;
                    })
                    .catch(err => console.log(err));
                }
                else if(inputColumna1.value.trim() != "" && inputColumna2.value.trim() != "" && inputColumna3.value.trim() != "" 
                    && inputColumna4.value.trim() !=""){
                    inputdato1periodico1.style.display="block";
                    inputdato1periodico2.style.display="block";
                    inputdato1periodico3.style.display="block";
                    let formData2 = new FormData();
                    formData2.append('id', id);
                    fetch(url2, {
                        method:"POST",
                        body:formData2
                    }).then(response => response.json())
                    .then(data2 =>{
                        console.log(data2);
                        inputdato1periodico1.value = data2.dato1_periodico1;
                        inputdato1periodico2.value = data2.dato1_periodico2;
                        inputdato1periodico3.value = data2.dato1_periodico3;
                    })
                    .catch(err => console.log(err));

                    inputdato2periodico1.style.display="block";
                    inputdato2periodico2.style.display="block";
                    inputdato2periodico3.style.display="block";
                    let formData3 = new FormData();
                    formData3.append('id', id);
                    fetch(url3, {
                        method:"POST",
                        body:formData3
                    }).then(response => response.json())
                    .then(data3 =>{
                        console.log(data3);
                        inputdato2periodico1.value = data3.dato2_periodico1;
                        inputdato2periodico2.value = data3.dato2_periodico2;
                        inputdato2periodico3.value = data3.dato2_periodico3;
                    })
                    .catch(err => console.log(err));

                    inputdato3periodico1.style.display="block";
                    inputdato3periodico2.style.display="block";
                    inputdato3periodico3.style.display="block";
                    let formData4 = new FormData();
                    formData4.append('id', id);
                    fetch(url4, {
                        method:"POST",
                        body:formData4
                    }).then(response => response.json())
                    .then(data4 =>{
                        console.log(data4);
                        inputdato3periodico1.value = data4.dato3_periodico1;
                        inputdato3periodico2.value = data4.dato3_periodico2;
                        inputdato3periodico3.value = data4.dato3_periodico3;
                    })
                    .catch(err => console.log(err));
                    
                    inputdato4periodico1.style.display="block";
                    inputdato4periodico2.style.display="block";
                    inputdato4periodico3.style.display="block";
                    let formData5 = new FormData();
                    formData5.append('id', id);
                    fetch(url5, {
                        method:"POST",
                        body:formData5
                    }).then(response => response.json())
                    .then(data5 =>{
                        console.log(data5);
                        inputdato4periodico1.value = data5.dato4_periodico1;
                        inputdato4periodico2.value = data5.dato4_periodico2;
                        inputdato4periodico3.value = data5.dato4_periodico3;
                    })
                    .catch(err => console.log(err));
                }
                else if(inputColumna1.value.trim() != "" && inputColumna2.value.trim() != "" && inputColumna3.value.trim() != ""){
                    inputdato1periodico1.style.display="block";
                    inputdato1periodico2.style.display="block";
                    inputdato1periodico3.style.display="block";
                    let formData2 = new FormData();
                    formData2.append('id', id);
                    fetch(url2, {
                        method:"POST",
                        body:formData2
                    }).then(response => response.json())
                    .then(data2 =>{
                        inputdato1periodico1.value = data2.dato1_periodico1;
                        inputdato1periodico2.value = data2.dato1_periodico2;
                        inputdato1periodico3.value = data2.dato1_periodico3;
                    })
                    .catch(err => console.log(err));

                    inputdato2periodico1.style.display="block";
                    inputdato2periodico2.style.display="block";
                    inputdato2periodico3.style.display="block";
                    let formData3 = new FormData();
                    formData3.append('id', id);
                    fetch(url3, {
                        method:"POST",
                        body:formData3
                    }).then(response => response.json())
                    .then(data3 =>{
                        console.log(data3);
                        inputdato2periodico1.value = data3.dato2_periodico1;
                        inputdato2periodico2.value = data3.dato2_periodico2;
                        inputdato2periodico3.value = data3.dato2_periodico3;
                    })
                    .catch(err => console.log(err));

                    inputdato3periodico1.style.display="block";
                    inputdato3periodico2.style.display="block";
                    inputdato3periodico3.style.display="block";
                    let formData4 = new FormData();
                    formData4.append('id', id);
                    fetch(url4, {
                        method:"POST",
                        body:formData4
                    }).then(response => response.json())
                    .then(data4 =>{
                        console.log(data4);
                        inputdato3periodico1.value = data4.dato3_periodico1;
                        inputdato3periodico2.value = data4.dato3_periodico2;
                        inputdato3periodico3.value = data4.dato3_periodico3;
                    })
                    .catch(err => console.log(err));
                }
                else if(inputColumna1.value.trim() != "" && inputColumna2.value.trim() != ""){
                    inputdato1periodico1.style.display="block";
                    inputdato1periodico2.style.display="block";
                    inputdato1periodico3.style.display="block";
                    let formData2 = new FormData();
                    formData2.append('id', id);
                    fetch(url2, {
                        method:"POST",
                        body:formData2
                    }).then(response => response.json())
                    .then(data2 =>{
                        inputdato1periodico1.value = data2.dato1_periodico1;
                        inputdato1periodico2.value = data2.dato1_periodico2;
                        inputdato1periodico3.value = data2.dato1_periodico3;
                    })
                    .catch(err => console.log(err));

                    inputdato2periodico1.style.display="block";
                    inputdato2periodico2.style.display="block";
                    inputdato2periodico3.style.display="block";
                    let formData3 = new FormData();
                    formData3.append('id', id);
                    fetch(url3, {
                        method:"POST",
                        body:formData3
                    }).then(response => response.json())
                    .then(data3 =>{
                        inputdato2periodico1.value = data3.dato2_periodico1;
                        inputdato2periodico2.value = data3.dato2_periodico2;
                        inputdato2periodico3.value = data3.dato2_periodico3;
                    })
                    .catch(err => console.log(err));
                }

                else if(inputColumna1.value.trim() != ""){
                    inputdato1periodico1.style.display="block";
                    inputdato1periodico2.style.display="block";
                    inputdato1periodico3.style.display="block";
                    let formData2 = new FormData();
                    formData2.append('id', id);
                    fetch(url2, {
                        method:"POST",
                        body:formData2
                    }).then(response => response.json())
                    .then(data2 =>{
                        inputdato1periodico1.value = data2.dato1_periodico1;
                        inputdato1periodico2.value = data2.dato1_periodico2;
                        inputdato1periodico3.value = data2.dato1_periodico3;
                    })
                    .catch(err => console.log(err));
                }
            }).catch(err => console.log(err));
        })

        eliminaModal.addEventListener('shown.bs.modal', event =>{
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')
            eliminaModal.querySelector('.modal-footer #id').value = id
        })