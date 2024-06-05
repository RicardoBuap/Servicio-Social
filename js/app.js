let intro = document.querySelector('.intro');
let logoSpan = document.querySelectorAll('.logo-parts');
let contenidoPrincipal = document.querySelector('.contenido-oculto');

window.addEventListener('DOMContentLoaded', () => {

    // Animación de entrada
    logoSpan.forEach((span, index) => {
        setTimeout(() => {
            span.classList.add('active');
        }, (index + 1) * 50);
    });

    // Tiempo total para la animación de entrada y salida
    const totalAnimationTime = logoSpan.length * 50 + 500; // Tiempo para que inicie la animación de salida
    const fadeOutTime = 500; // Duración de la animación de salida de cada letra

    // Iniciar la animación de salida
    setTimeout(() => {
        logoSpan.forEach((span, index) => {
            setTimeout(() => {
                span.classList.remove('active');
                span.classList.add('fade');
            }, (index + 1) * 50);
        });
    }, totalAnimationTime);

    // Esperar a que la animación de salida y la transición del .intro terminen
    setTimeout(() => {
        intro.style.top = '-100vh'; // Inicia la transición del .intro
        // Espera a que termine la transición del .intro para mostrar el contenido principal
        setTimeout(() => {
            contenidoPrincipal.style.display = 'block';
        }, 1000); // Tiempo de la transición del .intro
    }, totalAnimationTime + fadeOutTime);
});
