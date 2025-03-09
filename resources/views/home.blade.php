<x-layouts.layout titulo="PRACTICA LARAVEL">
    @guest
        <div
            class="hero min-h-full"
            style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-neutral-content text-center">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">{{ __("Aplicacion CRUD Laravel")}}</h1>
                    <p class="mb-5">
                    {{ __("Aplicación CRUD Laravel")}}
                    <hr/>
                    {{ __("Registrate para acceder a los cruds")}}
                    </p>
                    <a class="btn btn-primary" href="{{route("login")}}">{{ __("Login")}}</a>
                </div>
            </div>
        </div>
    @endguest
    @auth
    <div class="flex justify-center gap-10">
    <div class="p-4 card bg-base-100 image-full w-96 shadow-xl mt-20"> <!-- Añadí mt-20 para mover este div hacia abajo -->
        <figure>
            <img src="{{ asset('/images/alumnos.jpeg') }}" alt="Alumnos" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">{{ __("CRUD Alumnos!")}}</h2>
            <p>{{ __("Gestionamos Altas bajas actualizaciones y borrado de una tabla de alumnos")}}</p>
            <div class="card-actions justify-end">
                <a class="btn btn-primary" href="{{ route('alumnos.index') }}">{{ __("Ver Alumnos")}}</a>
            </div>
        </div>
    </div>

    <div class="p-4 card bg-base-100 image-full w-96 shadow-xl mt-20"> <!-- Añadí mt-20 para mover este div hacia abajo -->
        <figure>
            <img src="{{ asset('/images/alumnos.jpeg') }}" alt="Profesores" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">{{ __("CRUD Profesores!")}}</h2>
            <p>{{ __("Gestionamos Altas bajas actualizaciones y borrado de una tabla de profesores")}}</p>
            <div class="card-actions justify-end">
                <a class="btn btn-primary" href="{{ route('profesores.index') }}">{{ __("Ver Profesores")}}</a>
            </div>
        </div>
    </div>
</div>

        @endauth
</x-layouts.layout>
