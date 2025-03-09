<x-layouts.layout>
    <div class="flex flex-row justify-center items-center min-h-full bg-gray-300">
        <!-- Session Status -->
        <form action="{{ route('profesores.update', $profesor->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="bg-white rounded-2xl p-5">
                <div>
                    <x-input-label for="nombre" :value="__('Nombre')"/>
                    <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                                  value="{{ $profesor->nombre }}" required/>
                    @error("nombre")
                        <div class="text-sm text-red-600">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <x-input-label for="apellido" :value="__('Apellido')"/>
                    <x-text-input id="apellido" class="block mt-1 w-full" type="text" name="apellido"
                                  value="{{ $profesor->apellido }}" required/>
                    @error("apellido")
                        <div class="text-sm text-red-600">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <x-input-label for="email" :value="__('Email')"/>
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                  value="{{ $profesor->email }}" required autocomplete="email"/>
                    @error("email")
                        <div class="text-sm text-red-600">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <x-input-label for="telefono" :value="__('Telefono')"/>
                    <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono"
                                  value="{{ $profesor->telefono }}" required/>
                    @error("telefono")
                        <div class="text-sm text-red-600">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <x-input-label for="fecha_nacimiento" :value="__('Fecha de Nacimiento')"/>
                    <x-text-input id="fecha_nacimiento" class="block mt-1 w-full" type="date" name="fecha_nacimiento"
                                  value="{{ $profesor->fecha_nacimiento }}" required/>
                    @error("fecha_nacimiento")
                        <div class="text-sm text-red-600">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="p-2">
                    <button class="btn btn-sm btn-success" type="submit">{{__("Guardar")}}</button>
                    <a class="btn btn-sm btn-danger" href="{{ route('profesores.index') }}">{{__("Cancelar")}}</a>
                </div>
            </div>
        </form>
    </div>
</x-layouts.layout>

