<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Mi Sitio')</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="clients">Clientes</a></li>
            <li><a href="vehicle">Vehiculos</a></li>
        </ul>
    </nav>
    <hr>
    <div class="container">
        @yield('content')
    </div>
    <hr>
    <footer>Systema de encuesta - 2026</footer>
</body>
</html>
