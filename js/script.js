// si no hay slider en la pagina  no hace nada de esto
const slides = document.querySelectorAll(".slider .slide");
if (slides.length > 0) {
    let slideActual = 0;
    let autoplayInterval;
    let pausado = false;

    // estas 3 funciones son las que cambian de slide, le quitan active a todos
    // y se lo ponen al que toca. el modulo % es para que no se salga del rango
    function mostrarSlide(indice) {
        slides.forEach((slide, i) => {
            slide.classList.remove("active");
            if (i === indice) slide.classList.add("active");
        });
    }

    function siguienteSlide() {
        slideActual = (slideActual + 1) % slides.length;
        mostrarSlide(slideActual);
    }

    function anteriorSlide() {
        slideActual = (slideActual - 1 + slides.length) % slides.length;
        mostrarSlide(slideActual);
    }

    // el autoplay, cambia de slide solo cada 3 segundos
    function iniciarAutoplay() {
        autoplayInterval = setInterval(siguienteSlide, 3000);
    }

    iniciarAutoplay();

    const btnNext = document.querySelector(".slider .next");
    const btnPrev = document.querySelector(".slider .prev");
    const btnPause = document.querySelector("#pauseButton");

    if (btnNext) btnNext.addEventListener("click", siguienteSlide);
    if (btnPrev) btnPrev.addEventListener("click", anteriorSlide);

    // boton de pausa, funciona como interruptor: para el autoplay o lo prende de nuevo
    if (btnPause) {
        btnPause.addEventListener("click", function () {
            pausado = !pausado;
            if (pausado) {
                clearInterval(autoplayInterval);
                btnPause.textContent = "▶";
            } else {
                iniciarAutoplay();
                btnPause.textContent = "❚❚";
            }
        });
    }
}