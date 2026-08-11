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
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;

    if (nombre === "") {
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
});

document.querySelector("#cerrar-modal").addEventListener("click", function () {
    document.querySelector("#modal-exito").classList.add("oculto");
});

const inputNombre = document.querySelector("#nombre");
const inputCorreo = document.querySelector("#correo");
const btnEnviar = document.querySelector("#btn-enviar");

function revisarCampos() {
    const nombreOk = inputNombre.value.trim() !== "";
    const correoOk = inputCorreo.value.includes("@");
    btnEnviar.disabled = !(nombreOk && correoOk);
}

inputNombre.addEventListener("input", revisarCampos);
inputCorreo.addEventListener("input", revisarCampos);