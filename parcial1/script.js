function mostrarMensaje() {
    const mensaje = document.querySelector("#mensaje");
    mensaje.textContent = "Pedido recibido - te atiende Angel Herrera";
    mensaje.classList. remove("oculto");}
const boton = document.querySelector("#btn-confirmar");
boton.addEventListener("click", mostrarMensaje);