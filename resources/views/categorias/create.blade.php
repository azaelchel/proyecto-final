<!DOCTYPE html>
<html>
<head>
    <title>Crear Categoría</title>
</head>
<body>
<h1>Crear Categoría</h1>

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

<form method="POST" action="{{ route('categorias.store') }}">
    @csrf
    <label>Nombre:</label><br>
    <input type="text" name="nombre"><br><br>

    <label>Descripción:</label><br>
    <textarea name="descripcion"></textarea><br><br>

    <button type="submit">Guardar</button>
</form>
</body>
</html>
