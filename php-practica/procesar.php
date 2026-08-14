<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos recibidos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Datos recibidos - Práctica PHP</h1>
        <p><strong>Nombre:</strong> <?php echo htmlspecialchars($_POST['nombre']); ?></p>
        <p><strong>Correo:</strong> <?php echo htmlspecialchars($_POST['correo']); ?></p>
        <p><strong>Mensaje:</strong> <?php echo htmlspecialchars($_POST['mensaje']); ?></p>
        <a href="index.html">Volver</a>
    </main>
</body>
</html>
