<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<h1>Bienvenido</h1>

<nav>
    <a href="{{ route('usuarios.create') }}">Crear Usuario</a> |
    <a href="{{ route('telefonos.create') }}">Crear Teléfono</a> |
    <a href="{{ route('categorias.create') }}">Crear Categoría</a> |
    <a href="{{ route('products.create') }}">Crear Producto</a>
</nav>

<h2>Usuarios</h2>
<ul>
    @foreach ($users as $user)
        <li>{{ $user->nombre }} ({{ $user->email }})</li>
    @endforeach
</ul>

<h2>Teléfonos</h2>
<ul>
    @foreach ($phones as $phone)
        <li>{{ $phone->numero }} (Usuario: {{ $phone->user->nombre }})</li>
    @endforeach
</ul>

<h2>Categorías</h2>
<ul>
    @foreach ($categories as $category)
        <li>{{ $category->nombre }} - {{ $category->descripcion }}</li>
    @endforeach
</ul>

<h2>Productos</h2>
<ul>
    @foreach ($products as $product)
        <li>{{ $product->nombre }} - Categoría: {{ $product->category->nombre }} - Precio: ${{ $product->precio }}</li>
    @endforeach
</ul>

<h2>Secciones</h2>
<ul>
    <li><a href="{{ route('products.create') }}">Crear producto</a></li>
    <li><a href="{{ url('/products') }}">Ver productos</a></li>
    <li><a href="{{ route('usuarios.create') }}">Crear usuario</a></li>
    <li><a href="{{ route('telefonos.create') }}">Crear teléfono</a></li>
    <li><a href="{{ route('categorias.create') }}">Crear categoría</a></li>
</ul>


</body>
</html>

