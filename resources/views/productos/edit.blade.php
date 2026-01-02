@extends('layouts.app')

@section('title', 'Editar producto')

@section('content')
<h3>Editar producto</h3>

<form action="{{ route('productos.update', $producto) }}" method="POST">
    @csrf
    @method('PUT')

    <p>
        Nombre:<br>
        <input type="text" name="nombre" value="{{ $producto->nombre }}">
    </p>

    <p>
        Precio:<br>
        <input type="number" name="precio" step="0.01" value="{{ $producto->precio }}">
    </p>

    <p>
        Stock:<br>
        <input type="number" name="stock" value="{{ $producto->stock }}">
    </p>

    <button type="submit">Actualizar</button>
</form>

<a href="{{ route('productos.index') }}">Volver</a>
@endsection
