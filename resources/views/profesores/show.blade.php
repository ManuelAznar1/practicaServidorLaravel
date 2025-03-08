<x-layouts.layout>
    <h1>Profesor: {{$profesor->id}}</h1>
    <h2>Asignaturas que imparte</h2>
    @foreach($profesor->asignaturas as $asignatura)
        <h2 class="space-x-2">
        <span> {{$asignatura->asignatura}}</span>
        <span> {{$asignatura->curso}}</span>
        <span> {{$asignatura->horario}}</span>
        </h2>
    @endforeach
</x-layouts.layout>
