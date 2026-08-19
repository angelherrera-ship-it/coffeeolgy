const slides = document.querySelectorAll(".slider .slide");
if (slides.length > 0) {
    let slideActual = 0;
    let autoplayInterval;
    let pausado = false;

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

    function iniciarAutoplay() {
        autoplayInterval = setInterval(siguienteSlide, 3000);
    }

    iniciarAutoplay();

    const btnNext = document.querySelector(".slider .next");
    const btnPrev = document.querySelector(".slider .prev");
    const btnPause = document.querySelector("#pauseButton");

    if (btnNext) btnNext.addEventListener("click", siguienteSlide);
    if (btnPrev) btnPrev.addEventListener("click", anteriorSlide);

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