@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto py-10">

 {{-- TÍTULO ESTILO GAMER FUTURISTA --}}
<div class="bg-gradient-to-br from-black via-gray-900 to-indigo-900
            rounded-2xl p-10 mb-10 text-center shadow-[0_0_30px_rgba(0,0,0,0.8)]
            border-4 border-indigo-700 relative overflow-hidden">

    <h1 class="text-6xl font-extrabold text-yellow-400 tracking-widest drop-shadow-[0_2px_4px_rgba(0,0,0,0.6)]">
        🎮 LEVEL UP STORE
    </h1>

    <p class="text-indigo-200 mt-4 text-xl italic tracking-wide">
        Tienda Gamer · Productos de Alto Nivel
    </p>

    <div class="absolute inset-x-0 bottom-0 h-1 bg-yellow-500 shadow-md"></div>
</div>

    {{-- MENSAJE --}}
    @if(session('success'))
        <div class="bg-green-600 text-white px-4 py-3 rounded mb-6 shadow">
            {{ session('success') }}
        </div>
    @endif

    {{-- BOTÓN --}}
    <div class="flex justify-end mb-4">
        <a href="{{ route('productos.create') }}"
           class="bg-blue-700 hover:bg-blue-800 text-white font-bold
                  px-5 py-2 rounded-lg shadow">
            ➕ Nuevo Producto
        </a>
    </div>

    {{-- TABLA --}}
    <div class="bg-white rounded-xl shadow-xl overflow-hidden">
        <table class="w-full text-center">
            <thead class="bg-blue-900 text-white">
                <tr>
                    <th class="py-3">Nombre</th>
                    <th>Precio (S/)</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody class="text-gray-800">
                @forelse ($productos as $producto)
                <tr class="border-b hover:bg-blue-50">
                    <td class="py-3 font-semibold">{{ $producto->nombre }}</td>
                    <td>S/ {{ number_format($producto->precio,2) }}</td>
                    <td>{{ $producto->stock }}</td>
                    <td class="flex justify-center gap-2 py-3">

                        <a href="{{ route('productos.edit', $producto) }}"
                           class="bg-blue-600 hover:bg-blue-700
                                  text-white px-3 py-1 rounded">
                            ✏ Editar
                        </a>

                        <form action="{{ route('productos.destroy', $producto) }}"
                              method="POST"
                              onsubmit="return confirm('¿Eliminar producto?')">
                            @csrf
                            @method('DELETE')
                            <button
                                class="bg-red-600 hover:bg-red-700
                                       text-white px-3 py-1 rounded">
                                🗑 Eliminar
                            </button>
                        </form>

                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="py-6 text-gray-500">
                        No hay productos registrados
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection


