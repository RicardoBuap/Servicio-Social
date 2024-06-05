var boton1 = document.getElementById("boton-1");
var boton2 = document.getElementById("boton-2");
var boton3 = document.getElementById("boton-3");

boton1.addEventListener("click", function() {
    if (window.location.href.indexOf('Actores.php') > -1) {
        window.location.href = 'tabs3.php'; // Redirecciona a otra página si ya estás en Actores.html
    } else {
        window.location.href = 'Actores.php';
    }
});

boton2.addEventListener("click", function() {
    if (window.location.href.indexOf('Periodico.php') > -1) {
        window.location.href = 'tabs2.php'; // Redirecciona a otra página si ya estás en Periodico.html
    } else {
        window.location.href = 'Periodico.php';
    }
});

boton3.addEventListener("click", function() {
    if (window.location.href.indexOf('Violencia.php') > -1) {
        window.location.href = 'tabs1.php'; // Redirecciona a otra página si ya estás en Violencia.html
    } else {
        window.location.href = 'Violencia.php';
    }
});
