const formHelados = document.querySelector("#form-helados");
const inputNombre = document.querySelector("#nombre");
const inputCorreo = document.querySelector("#correo");
const aviso = document.querySelector("#aviso-helados");
formHelados.addEventListener("submit", function (event) {
    const nombre = inputNombre.value;
    const correo = inputCorreo.value;
    if (nombre === "" || correo === "") {
        event.preventDefault();
        aviso.textContent = "Falta tu nombre o tu correo, sin eso no podemos anotar el pedido.";
        aviso.classList.remove("exito");
        aviso.classList.add("error");
    } else if (!correo.includes("@")) {
        event.preventDefault();
        aviso.textContent = "Ese correo no tiene arroba - revisalo por favor.";
        aviso.classList.remove("exito");
        aviso.classList.add("error");
    } else {
        aviso.textContent = "Pedido anotado mucho gusto te atiende Angel Osriel Herrera Tola";
        aviso.classList.remove("error");
        aviso.classList.add("exito");
    }
});
