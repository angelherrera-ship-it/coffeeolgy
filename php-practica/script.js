const formPractica = document.querySelector("#form-practica");
const aviso = document.querySelector("#aviso");

formPractica.addEventListener("submit", function (event) {
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;

    if (nombre === "" || correo === "") {
        event.preventDefault();
        aviso.textContent = "Falta tu nombre o tu correo.";
        aviso.classList.add("error");
        aviso.classList.remove("exito");
    } else if (!correo.includes("@")) {
        event.preventDefault();
        aviso.textContent = "El correo debe contener una arroba (@).";
        aviso.classList.add("error");
        aviso.classList.remove("exito");
    } else {
        aviso.textContent = "Datos correctos, enviando...";
        aviso.classList.add("exito");
        aviso.classList.remove("error");
    }
});
