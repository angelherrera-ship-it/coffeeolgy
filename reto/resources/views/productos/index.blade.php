<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - COFFEEoLOGY</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #2e1a0f; color: #f7ede1; margin: 0; padding: 2rem;">
    <header>
        <h1>☕ COFFEEoLOGY</h1>
        <p>Catálogo de productos</p>
        <nav>
            <a href="/" style="color: #f7ede1; margin-right: 15px;">Inicio</a>
            <a href="/productos/nuevo" style="color: #f7ede1;">Registrar nuevo producto</a>
        </nav>
    </header>
    <main>
        <p>Hay {{ count($productos) }} productos en el catálogo.</p>

        <table style="border-collapse: collapse; width:100%; max-width:640px;">
            <thead>
                <tr>
                    <th style="text-align:left; border-bottom:1px solid #f7ede1; padding:0.5rem;">Nombre</th>
                    <th style="text-align:left; border-bottom:1px solid #f7ede1; padding:0.5rem;">Precio</th>
                    <th style="text-align:left; border-bottom:1px solid #f7ede1; padding:0.5rem;">Stock</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td style="padding:0.5rem;">{{ $producto->nombre }}</td>
                        <td style="padding:0.5rem;">Bs {{ $producto->precio }}</td>
                        <td style="padding:0.5rem;">{{ $producto->stock }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>
