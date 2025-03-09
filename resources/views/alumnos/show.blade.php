<x-layouts.layout>
    <h1>{{__("Alumno")}} : {{$alumno->id}}</h1>
    <h2>{{__("Idiomas que habla")}}:</h2>
    @foreach($alumno->idiomas as $idioma)
        <h2 class="space-x-2">
        <span> {{__($idioma->idioma)}}</span>
        <span> {{__($idioma->nivel)}}</span>
        <span> {{__($idioma->titulo)}}</span>
        </h2>
    @endforeach
</x-layouts.layout>
