<!DOCTYPE html>
<html>
<head>
    <title>Crear Número Telefónico</title>
</head>
<body>
<h1>Crear Número Telefónico</h1>

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

<form method="POST" action="{{ route('telefonos.store') }}">
    @csrf
    <label>Número:</label><br>
    <input type="text" name="numero"><br><br>

    <label>Usuario:</label><br>
    <select name="user_id">
        <option value="">Seleccione un usuario</option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->nombre }}</option>
        @endforeach
    </select><br><br>

    <button type="submit">Guardar</button>
</form>
</body>
</html>

