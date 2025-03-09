{{--Header para móvil--}}
<header class="md:h-15v bg-header flex flex-col md:flex-row justify-between px-3 items-center">
<div class="flex justify-between w-full items-center">
     <!-- Logo -->
     <img class="w-1/2 h-12 md:w-1/12 md:max-h-full" src="{{ asset('images/logo.jpeg') }}" alt="logo">
     
     <!-- Título -->
     <h1 class="hidden md:block text-white text-5xl"> {{__("GESTIÓN INSTITUTO")}}</h1>

     <!-- Área de usuario -->
     <div class="hidden md:flex flex-row space-x-3 items-center">
         @auth
             <span class="text-white">Bienvenido, {{ auth()->user()->name }}</span>
             <form action="{{route('logout')}}" method="POST" class="inline">
                 @csrf
                 <input class="btn btn-glass" type="submit" value="{{ __("Logout") }}">
             </form>
         @endauth

         @guest
             <a class="btn btn-glass" href="{{route('login')}}">{{ __("Login") }}</a>
             <a class="btn btn-glass" href="{{route('register')}}">{{ __("Register") }}</a>
         @endguest

         <!-- Selector de idioma -->
         <x-layouts.lang />
     </div>
 </div>

    </div>
                    {{--Mobile--}}
    <div class="block md:hidden">
        <input type="checkbox" name="" id="menu-toggle" class=" peer hidden">
        <label  class="text-2xl hover:cursor-pointer text-white" for="menu-toggle">
            &#9778;
        </label>


        <div class="absolute hidden peer-checked:block bg-gray-300 p-3 rounded-xl flex flex-col">
        @auth
            <span class="text-white">Bienvenido, {{ auth()->user()->name }}
            <form action="{{route("logout")}}" method="POST">
                @csrf
                <input class="btn  btn-glass" type="submit" value="Logout">
            </form>
            Logout

        @endauth
        @guest
                <a class="btn  btn-glass" href="{{route("login")}}">{{__("Iniciar Sesion")}}</a>
                <a class="btn  btn-glass" href="{{route("register")}}">{{__("Registrar")}}</a>
        @endguest
            </div>

    </div>

</header>
{{--Header para desktop--}}
