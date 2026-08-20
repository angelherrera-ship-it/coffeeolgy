<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo producto - COFFEEoLOGY</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #2e1a0f; color: #f7ede1; margin: 0; padding: 2rem;">
    <header>
        <h1>☕ COFFEEoLOGY</h1>
        <p>Registrar nuevo producto</p>
        <nav>
            <a href="/" style="color: #f7ede1; margin-right: 15px;">Inicio</a>
            <a href="/productos" style="color: #f7ede1;">Ver productos</a>
        </nav>
    </header>
    <main>
        @if ($errors->any())
            <div style="background:#4a2416; border:1px solid #c0392b; padding:1rem; margin-bottom:1rem;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/productos/nuevo" method="POST" style="display:flex; flex-direction:column; gap:0.75rem; max-width:320px;">
            @csrf

            <label for="nombre">Nombre del producto</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">

            <label for="descripcion">Descripción</label>
            <input type="text" id="descripcion" name="descripcion" value="{{ old('descripcion') }}">

            <label for="precio">Precio en Bs</label>
            <input type="number" step="0.01" id="precio" name="precio" value="{{ old('precio') }}">

            <label for="stock">Stock disponible</label>
            <input type="number" id="stock" name="stock" value="{{ old('stock') }}">

            <button type="submit">Registrar producto</button>
        </form>
    </main>
</body>
</html>
