<!DOCTYPE html>
<html>
<head>
    <title>Crear Usuario</title>
</head>
<body>
<h1>Crear Usuario</h1>

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

<form method="POST" action="{{ route('usuarios.store') }}">
    @csrf
    <label>Nombre:</label><br>
    <input type="text" name="nombre"><br><br>

    <label>Nombre Largo:</label><br>
    <input type="text" name="nombre_largo"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Phone (opcional):</label><br>
    <input type="text" name="phone"><br><br>

    <button type="submit">Guardar</button>
</form>
</body>
</html>

