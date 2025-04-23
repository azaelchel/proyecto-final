@extends('layouts.app') {{-- si usas layout --}}
@section('content')
    <h1>Lista de Productos</h1>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <a href="{{ route('products.create') }}">Agregar nuevo producto</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Categoría</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @forelse($products as $product)
            <tr>
                <td>{{ $product->nombre }}</td>
                <td>{{ $product->descripcion }}</td>
                <td>${{ $product->precio }}</td>
                <td>{{ $product->category->nombre ?? 'Sin categoría' }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}">Editar</a> |
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Seguro que quieres eliminar este producto?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5">No hay productos aún.</td></tr>
        @endforelse
        </tbody>
    </table>
@endsection
