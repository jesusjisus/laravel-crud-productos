@extends('layouts.app')

@section('title', 'Lista de productos')

@section('content')
<h3>Lista de productos</h3>

<a href="{{ route('productos.create') }}">Nuevo producto</a>

@if ($productos->count())
<table>
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Eliminar</th>
    </tr>

    @foreach ($productos as $producto)
    <tr>
        <td>{{ $producto->nombre }}</td>
        <td>{{ $producto->precio }}</td>
        <td>{{ $producto->stock }}</td>
        <td>
    <a href="{{ route('productos.edit', $producto) }}">Editar</a>

    |
    
    <form action="{{ route('productos.destroy', $producto) }}"
          method="POST"
          style="display:inline;"
          onsubmit="return confirm('¿Seguro que deseas eliminar este producto?');">
        @csrf
        @method('DELETE')
        <button type="submit" style="color:red; border:none; background:none; cursor:pointer;">
            Eliminar
        </button>
    </form>
</td>
    </tr>
    @endforeach
</table>
@else
<p>No hay productos</p>
@endif
@endsection

