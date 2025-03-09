{{-- Header para móvil --}}
<header class="md:h-15v bg-sky-700 flex flex-col md:flex-row justify-between px-3 items-center shadow-lg">
    <div class="flex justify-between w-full items-center">
        <!-- Logo -->
        <img class="w-1/2 h-12 md:w-1/12 md:max-h-full" src="{{ asset('images/logo.png') }}" alt="logo">
        
        <!-- Título -->
        <h1 class="hidden md:block text-white text-5xl font-semibold">{{ __("GESTIÓN INSTITUTO") }}</h1>

        <!-- Área de usuario -->
        <div class="hidden md:flex flex-row space-x-3 items-center">
            @auth
                <span class="text-white">{{ __("Bienvenido") }}, {{ auth()->user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <input class="btn bg-blue-700 text-white rounded-lg shadow-md hover:bg-blue-800" type="submit" value="{{ __("Logout") }}">
                </form>
            @endauth

            @guest
                <a class="btn bg-blue-700 text-white rounded-lg shadow-md hover:bg-blue-800" href="{{ route('login') }}">{{ __("Login") }}</a>
                <a class="btn bg-blue-700 text-white rounded-lg shadow-md hover:bg-blue-800" href="{{ route('register') }}">{{ __("Register") }}</a>
            @endguest

            <!-- Selector de idioma -->
            <x-layouts.lang />
        </div>
    </div>
</header>

{{-- Mobile --}}
<div class="block md:hidden">
    <input type="checkbox" name="" id="menu-toggle" class="peer hidden">
    <label class="text-2xl hover:cursor-pointer text-white" for="menu-toggle">
        &#9778;
    </label>

    <div class="absolute hidden peer-checked:block bg-gray-700 p-3 rounded-xl flex flex-col space-y-2">
        @auth
            <!-- Traducción de 'Bienvenido' para mobile -->
            <span class="text-white">{{ __("Bienvenido") }}, {{ auth()->user()->name }}</span>
            <form action="{{ route("logout") }}" method="POST">
                @csrf
                <input class="btn bg-blue-700 text-white rounded-lg shadow-md hover:bg-blue-800" type="submit" value="{{ __("Logout") }}">
            </form>
        @endauth
        @guest
            <a class="btn bg-blue-700 text-white rounded-lg shadow-md hover:bg-blue-800" href="{{ route("login") }}">{{ __("Iniciar Sesion") }}</a>
            <a class="btn bg-blue-700 text-white rounded-lg shadow-md hover:bg-blue-800" href="{{ route("register") }}">{{ __("Registrar") }}</a>
        @endguest
    </div>
</div>

{{-- Header para desktop --}}
