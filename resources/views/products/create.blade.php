<!DOCTYPE html>
<html>
<head>
    <title>Crear Producto</title>
</head>
<body>
<h1>Crear Producto</h1>

@if (session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

@if ($errors->any())
    <div style="color: red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <label>Nombre:</label><br>
    <input type="text" name="nombre"><br><br>

    <label>Descripción:</label><br>
    <textarea name="descripcion"></textarea><br><br>

    <label>Precio:</label><br>
    <input type="text" name="precio"><br><br>

    <label>Categoría:</label><br>
    <select name="category_id">
        <option value="">Seleccione una categoría</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->nombre }}</option>
        @endforeach
    </select><br><br>

    <button type="submit">Guardar</button>
</form>
</body>
</html>

