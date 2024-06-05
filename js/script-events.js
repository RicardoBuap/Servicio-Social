document.addEventListener('DOMContentLoaded', function() {
    var botones = document.querySelectorAll('.button');

    function handleClick() {
        window.location.href = 'Actores.html';
    }
    
    botones.forEach(function(boton) {
        boton.addEventListener('click', handleClick);
    });
});
