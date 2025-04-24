@extends('layouts.app')

@section('title', 'Crear Número Telefónico')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Crear Número Telefónico</h5>
        </div>
        <div class="card-body">

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('telefonos.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="numero" class="form-label">Número</label>
                    <input type="text" name="numero" class="form-control" value="{{ old('numero') }}" required>
                </div>

                <div class="mb-3">
                    <label for="user_id" class="form-label">Usuario</label>
                    <select name="user_id" class="form-select" required>
                        <option value="">Seleccione un usuario</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                {{ $user->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('telefonos.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
