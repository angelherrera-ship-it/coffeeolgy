<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Mi Tienda')</title>
</head>
<body>
    <h1>@yield('h1', 'Mi Tienda')</h1>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Integradora - Angel Osriel Herrera Tola - 18 de agosto de 2026</p>
    </footer>
</body>
</html>