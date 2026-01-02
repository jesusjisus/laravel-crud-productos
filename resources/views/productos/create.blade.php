@extends('layouts.app')

@section('title', 'Nuevo producto')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-lg bg-white rounded-xl shadow-lg p-8">

        <!-- Título -->
        <h3 class="text-2xl font-bold text-center text-blue-600 mb-6">
            🎮 Nuevo Producto - Level Up Store
        </h3>

        <!-- Formulario -->
        <form action="{{ route('productos.store') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Nombre -->
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Nombre del producto
                </label>
                <input type="text" name="nombre"
                       class="mt-1 w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                       placeholder="Ej: Teclado Mecánico RGB" required>
            </div>

            <!-- Precio -->
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Precio (S/)
                </label>
                <input type="number" name="precio" step="0.01"
                       class="mt-1 w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                       placeholder="Ej: 250.00" required>
            </div>

            <!-- Stock -->
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Stock
                </label>
                <input type="number" name="stock"
                       class="mt-1 w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                       placeholder="Ej: 30" required>
            </div>

            <!-- Botones -->
            <div class="flex justify-between pt-4">
                <a href="{{ route('productos.index') }}"
                   class="px-5 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition">
                    ⬅ Volver
                </a>

                <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-semibold">
                    💾 Guardar
                </button>
            </div>
        </form>

    </div>
</div>
@endsection

