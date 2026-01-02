<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laravel - Jesus</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-900 via-indigo-900 to-black
             flex items-center justify-center text-white">

    <div class="bg-black bg-opacity-70 rounded-2xl shadow-2xl p-10 max-w-3xl w-full text-center">

        {{-- TÍTULO SUPERIOR --}}
        <h2 class="text-xl text-blue-300 mb-2 tracking-wide">
            Laravel - Jesus
        </h2>

        {{-- TÍTULO PRINCIPAL --}}
        <h1 class="text-4xl md:text-5xl font-extrabold text-blue-400 mb-4">
            Hola, soy Jesus Esteban Tornero Vera
        </h1>

        {{-- DESCRIPCIÓN --}}
        <p class="text-gray-300 text-lg mb-8">
            Este es mi primer proyecto en Laravel
        </p>

        {{-- IMAGEN (opcional, puedes cambiar el nombre) --}}
        {{-- 
        <img src="{{ asset('images/tienda-gamer.png') }}"
             alt="Tienda Gamer"
             class="mx-auto mb-8 w-56 rounded-xl shadow-lg">
        --}}

        {{-- BOTONES --}}
        @auth
            <a href="{{ route('productos.index') }}"
               class="inline-block bg-blue-600 hover:bg-blue-700
                      px-6 py-3 rounded-lg font-bold shadow-lg transition">
                🚀 Ir a la Tienda
            </a>
        @else
            <div class="flex justify-center gap-4">
                <a href="{{ route('login') }}"
                   class="bg-blue-600 hover:bg-blue-700
                          px-6 py-3 rounded-lg font-bold transition">
                    Iniciar Sesión
                </a>

                <a href="{{ route('register') }}"
                   class="bg-gray-700 hover:bg-gray-800
                          px-6 py-3 rounded-lg font-bold transition">
                    Registrarse
                </a>
            </div>
        @endauth

    </div>

</body>
</html>
