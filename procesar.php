<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensaje recibido</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <section>
            <h2>Datos recibidos</h2>
            <p><strong>Nombre:</strong> <?php echo htmlspecialchars($_POST['nombre']); ?></p>
            <p><strong>Correo:</strong> <?php echo htmlspecialchars($_POST['correo']); ?></p>
            <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($_POST['telefono']); ?></p>
            <p><strong>Mensaje:</strong> <?php echo htmlspecialchars($_POST['mensaje']); ?></p>
            <a href="index.html">Volver</a>
        </section>
    </main>
</body>
</html>
