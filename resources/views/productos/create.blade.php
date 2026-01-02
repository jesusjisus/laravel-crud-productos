@extends('layouts.app')

@section('title', 'Nuevo producto')

@section('content')
<h3>Nuevo producto</h3>

<form action="{{ route('productos.store') }}" method="POST">
    @csrf

    <p>
        Nombre:<br>
        <input type="text" name="nombre">
    </p>

    <p>
        Precio:<br>
        <input type="number" name="precio" step="0.01">
    </p>

    <p>
        Stock:<br>
        <input type="number" name="stock">
    </p>

    <button type="submit">Guardar</button>
</form>

<a href="{{ route('productos.index') }}">Volver</a>
@endsection
