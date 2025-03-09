<x-layouts.layout>
    <h1>{{__("Profesor")}}: {{$profesor->id}}</h1>
    <h2>{{__("Asignaturas que imparte")}}:</h2>
    @foreach($profesor->asignaturas as $asignatura)
        <h2 class="space-x-2">
        <span> {{__($asignatura->asignatura)}}</span>
        <span> {{__($asignatura->curso)}}</span>
        <span> {{__($asignatura->horario)}}</span>
        </h2>
    @endforeach
</x-layouts.layout>
