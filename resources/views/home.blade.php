<x-layouts.layout titulo="PRACTICA LARAVEL">
    @guest
        <div
            class="hero min-h-full"
            style="background-image: url(https://i.pinimg.com/736x/f2/25/f0/f225f0da5b621b872f6513d59f89a9b6.jpg);">
            <div class="hero-overlay bg-opacity-70 bg-gray-900"></div> <!-- Fondo más oscuro -->
            <div class="hero-content text-white text-center"> <!-- Texto blanco -->
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">{{ __("Aplicacion CRUD Laravel")}}</h1> <!-- Título en blanco -->
                    <p class="mb-5 text-lg">
                    {{ __("Aplicación CRUD Laravel")}}
                    <hr class="my-4"/>
                    {{ __("Registrate para acceder a los cruds")}}
                    </p>
                    <a class="btn bg-indigo-600 hover:bg-indigo-800 text-white" href="{{route("login")}}">{{ __("Login")}}</a> <!-- Botón con texto blanco -->
                </div>
            </div>
        </div>
    @endguest
    @auth
    <div class="flex justify-center gap-10">
        <div class="p-4 card bg-base-200 image-full w-96 h-80 shadow-xl mt-20"> <!-- Fondo de la tarjeta más oscuro -->
            <figure>
                <img src="{{ asset('/images/alumnos.jpg') }}" alt="Alumnos" />
            </figure>
            <div class="card-body text-white"> <!-- Texto blanco en las tarjetas -->
                <h2 class="card-title">{{ __("CRUD Alumnos!")}}</h2> <!-- Título en blanco -->
                <p>{{ __("Gestionamos Altas bajas actualizaciones y borrado de una tabla de alumnos")}}</p>
                <div class="card-actions justify-end">
                    <a class="btn bg-green-600 hover:bg-green-800 text-white" href="{{ route('alumnos.index') }}">{{ __("Ver Alumnos")}}</a> <!-- Botón con texto blanco -->
                </div>
            </div>
        </div>

        <div class="p-4 card bg-base-200 image-full w-96 h-80 shadow-xl mt-20"> <!-- Fondo de la tarjeta más oscuro -->
            <figure>
                <img src="{{ asset('/images/profesores.jpg') }}" alt="Profesores" />
            </figure>
            <div class="card-body text-white">
                <h2 class="card-title">{{ __("CRUD Profesores!")}}</h2> <!-- Título en blanco -->
                <p>{{ __("Gestionamos Altas bajas actualizaciones y borrado de una tabla de profesores")}}</p>
                <div class="card-actions justify-end">
                    <a class="btn bg-blue-600 hover:bg-blue-800 text-white" href="{{ route('profesores.index') }}">{{ __("Ver Profesores")}}</a> <!-- Botón con texto blanco -->
                </div>
            </div>
        </div>
    </div>
    @endauth
</x-layouts.layout>
