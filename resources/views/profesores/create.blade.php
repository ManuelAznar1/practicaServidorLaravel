<x-layouts.layout>
    <div class="flex flex-row justify-center items-center min-h-full bg-gray-300">
        <!-- Session Status -->

        <form action="{{ route('profesores.store') }}" method="POST">
            @csrf
            <div class="bg-white grid grid-cols-2 gap-4 divide-x-8">
                {{-- Datos del Profesor --}}
                <div class="bg-white rounded-2xl p-5 grid grid-cols-2 gap-4">
                    <div>
                        <x-input-label for="nombre" value="Nombre"/>
                        <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                                      value="{{ old('nombre') }}" required/>
                        @error("nombre")
                        <div class="text-sm text-red-600">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <x-input-label for="apellido" value="Apellido"/>
                        <x-text-input id="apellido" class="block mt-1 w-full" type="text" name="apellido"
                                      value="{{ old('apellido') }}" required/>
                        @error("apellido")
                        <div class="text-sm text-red-600">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <x-input-label for="email" value="Email"/>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                      value="{{ old('email') }}" required autocomplete="email"/>
                        @error("email")
                        <div class="text-sm text-red-600">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <x-input-label for="telefono" value="Teléfono"/>
                        <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono"
                                      value="{{ old('telefono') }}" required/>
                        @error("telefono")
                        <div class="text-sm text-red-600">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <x-input-label for="fecha_nacimiento" value="Fecha de Nacimiento"/>
                        <x-text-input id="fecha_nacimiento" class="block mt-1 w-full" type="date" name="fecha_nacimiento"
                                      value="{{ old('fecha_nacimiento') }}" required/>
                        @error("fecha_nacimiento")
                        <div class="text-sm text-red-600">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="max-h-96 overflow-y-auto px-4 text-sm">
                            <h2 class="font-semibold text-lg mb-2">Listado de asignaturas</h2>
                            <div x-data="{ asignaturas: {} }">
                                @foreach(config("asignaturas") as $asignatura)
                                    <div class="flex items-center gap-3 border-b py-2">
                                        <input type="checkbox" name="asignaturas[]" value="{{$asignatura}}" x-model="asignaturas['{{$asignatura}}']">
                                        <label for="asignatura{{$loop->index}}" class="flex-grow">{{$asignatura}}</label>
                                        <template x-if="asignaturas['{{$asignatura}}']">
                                            <div>
                                                <select name="curso[{{$asignatura}}]" class="border rounded text-sm">
                                                    <option disabled selected value="">Curso</option>
                                                    <option value="1º">1º</option>
                                                    <option value="2º">2º</option>
                                                </select>

                                                <select name="horario[{{$asignatura}}]" class="border rounded text-sm">
                                                    <option disabled selected value="">Horario</option>
                                                    <option value=>No definido</option>
                                                    <option value="Diurno">Diurno</option>
                                                    <option value="Vespertino">Vespertino</option>
                                                </select>
                                            </div>
                                        </template>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                {{-- asignaturas --}}

                {{-- Botones --}}
                <div class="p-2">
                    <button class="btn btn-sm btn-success" type="submit">Guardar</button>
                    <a class="btn btn-sm btn-danger" href="{{ route('profesores.index') }}">Cancelar</a>
                </div>
            </div>
        </form>

    </div>
</x-layouts.layout>

