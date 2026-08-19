const formContacto = document.querySelector("#form-contacto");
const estado = document.querySelector("#form-estado");

if (formContacto) {
    formContacto.addEventListener("submit", function (event) {
        const nombre = document.querySelector("#nombre").value;
        const correo = document.querySelector("#correo").value;
        const telefono = document.querySelector("#telefono").value;
        const mensaje = document.querySelector("#mensaje").value;

        if (nombre.trim() === "") {
            event.preventDefault();
            estado.textContent = "Por favor escribe tu nombre.";
            estado.classList.remove("oculto", "exito");
            estado.classList.add("error");
            return;
        }

        if (!correo.includes("@")) {
            event.preventDefault();
            estado.textContent = "El correo debe contener una arroba (@).";
            estado.classList.remove("oculto", "exito");
            estado.classList.add("error");
            return;
        }

        if (telefono.trim() === "") {
            event.preventDefault();
            estado.textContent = "Por favor escribe tu teléfono.";
            estado.classList.remove("oculto", "exito");
            estado.classList.add("error");
            return;
        }

        if (mensaje.trim() === "") {
            event.preventDefault();
            estado.textContent = "Por favor escribe un mensaje.";
            estado.classList.remove("oculto", "exito");
            estado.classList.add("error");
            return;
        }
    });

    const inputNombre = document.querySelector("#nombre");
    const inputCorreo = document.querySelector("#correo");
    const inputTelefono = document.querySelector("#telefono");
    const inputMensaje = document.querySelector("#mensaje");
    const btnEnviar = document.querySelector("#btn-enviar");

    function revisarCampos() {
        const nombreOk = inputNombre.value.trim() !== "";
        const correoOk = inputCorreo.value.includes("@");
        const telefonoOk = inputTelefono.value.trim() !== "";
        const mensajeOk = inputMensaje.value.trim() !== "";
        btnEnviar.disabled = !(nombreOk && correoOk && telefonoOk && mensajeOk);
    }

    inputNombre.addEventListener("input", revisarCampos);
    inputCorreo.addEventListener("input", revisarCampos);
    inputTelefono.addEventListener("input", revisarCampos);
    inputMensaje.addEventListener("input", revisarCampos);
}

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