<x-layouts.layout titulo="instituo">
    @guest
        <div
            class="hero min-h-full"
            style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-neutral-content text-center">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">Aprendiendo Laravel</h1>
                    <p class="mb-5">
                        Aplicación para aprender Laravel
                    <hr/>
                    Registrate para acceder a las opciones
                    </p>
                    <a class="btn btn-primary" href="{{route("login")}}">Login</a>
                </div>
            </div>
        </div>
    @endguest
    @auth
            <div class=" p-4 card bg-base-100 image-full w-96 shadow-xl">
                <figure>
                    <img
                        src="{{asset("/images/alumnos.jpeg")}}"
                        alt="Alumnos" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">CRUD Alumnos!</h2>
                    <p>Gestionamos Altas bajas actualizaciones y borrado de una tabla de alumnos
                    <div class="card-actions justify-end">
                        <a class="btn btn-primary" href="{{route("alumnos.index")}}">Ver alumnos</a>
                    </div>
                </div>
            </div>
        @endauth
</x-layouts.layout>
