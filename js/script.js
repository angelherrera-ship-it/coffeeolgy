const cuerpo = document.querySelector("body");
const botonModo = document.querySelector("#btn-tema");

let esDeDia = false;

function alternarModo() {
    cuerpo.classList.toggle("claro");
    esDeDia = !esDeDia;

    if(esDeDia) {
        botonModo.textContent = "Modo Noche🌃";
    } else {
        botonModo.textContent = "Modo Día☀️";
    }
}

botonModo.addEventListener("click", alternarModo);

const formContacto = document.querySelector("#form-contacto");
const estado = document.querySelector("#form-estado");

formContacto.addEventListener("submit", function (event) {
    event.preventDefault();

    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;

    if (nombre === "") {
        estado.textContent = "Por favor escribe tu nombre.";
        estado.classList.remove("oculto", "exito");
        estado.classList.add("error");
        return;
    }

    if (!correo.includes("@")) {
        estado.textContent = "El correo debe contener una arroba (@).";
        estado.classList.remove("oculto", "exito");
        estado.classList.add("error");
        return;
    }

    estado.textContent = "¡Gracias! Tu mensaje fue enviado correctamente.";
    estado.classList.remove("oculto", "error");
    estado.classList.add("exito");
    document.querySelector("#modal-exito").classList.remove("oculto");

    formContacto.reset();
});

document.querySelector("#cerrar-modal").addEventListener("click", function () {
    document.querySelector("#modal-exito").classList.add("oculto");
});