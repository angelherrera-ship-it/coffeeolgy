<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Pedido recibido</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1>Pedido recibido en Heladeria Doña Nieve</h1>
<section>
<h2>Datos del pedido</h2>
<p><strong>Nombre:</strong> <?php echo htmlspecialchars($_POST['nombre']); ?></p>
<p><strong>Correo:</strong> <?php echo htmlspecialchars($_POST['correo']); ?></p>
<p><strong>Sabores:</strong> <?php echo htmlspecialchars($_POST['sabores']); ?></p>
</section>
<section>
     <h2>Carta de la heladeria</h2>
    <ul>
    <?php
    $carta = [
        "Cono simple - Bs 8",
        "Copa doble - Bs 15",
        "Litro para llevar - Bs 35"];
                foreach ($carta as $producto) {
                    echo "<li>" . $producto . "</li>";
                }
                ?>
            </ul>
        </section>
        <p>Te atiende Angel Osriel Herrera Tola</p>
        <a href="index.html">Volver</a>
    </main>
</body>
</html>
