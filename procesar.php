<?php
$nombre = trim($_POST['nombre'] ?? '');
$correo = trim($_POST['correo'] ?? '');
$telefono = trim($_POST['telefono'] ?? '');
$mensaje = trim($_POST['mensaje'] ?? '');

$dirDatos = __DIR__ . '/data';
if (!is_dir($dirDatos)) {
    mkdir($dirDatos, 0755, true);
}

$archivo = $dirDatos . '/mensajes.csv';
$existeArchivo = file_exists($archivo);

$fp = fopen($archivo, 'a');
if (!$existeArchivo) {
    fputcsv($fp, ['Fecha', 'Nombre', 'Correo', 'Teléfono', 'Mensaje']);
}
fputcsv($fp, [date('Y-m-d H:i:s'), $nombre, $correo, $telefono, $mensaje]);
fclose($fp);
?>
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
            <p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></p>
            <p><strong>Correo:</strong> <?php echo htmlspecialchars($correo); ?></p>
            <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($telefono); ?></p>
            <p><strong>Mensaje:</strong> <?php echo htmlspecialchars($mensaje); ?></p>
            <a href="index.html">Volver</a>
        </section>
    </main>
</body>
</html>
