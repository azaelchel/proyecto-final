<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto Laravel</title>
    <!-- Puedes agregar tu CSS aquí -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<header>
    <nav>
        <!-- Aquí iría tu menú de navegación, si tienes -->
        <a href="{{ url('/') }}">Inicio</a>
        <a href="{{ route('products.create') }}">Crear Producto</a>
        <a href="{{ url('/products') }}">Ver Productos</a>
    </nav>
</header>

<div class="container">
    @yield('content') <!-- Este es el contenido dinámico de cada vista -->
</div>

<footer>
    <!-- Aquí tu pie de página -->
    <p>Copyright © {{ date('Y') }}</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

