<x-layouts.layout titulo="login">
    <div class="flex flex-row justify-center items-center min-h-full bg-gradient-to-r from-blue-100 to-blue-50"> <!-- Fondo degradado suave de azul claro -->
        <!-- Session Status -->
        <div class="bg-white rounded-2xl p-8 shadow-lg w-full max-w-md"> <!-- Fondo blanco con sombra para el formulario -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-blue-700 font-semibold" />
                    <x-text-input id="email" class="block mt-1 w-full p-3 border border-blue-300 rounded-lg focus:ring-2 focus:ring-blue-400 text-gray-700 placeholder-gray-500" 
                                  type="email" 
                                  name="email" 
                                  :value="old('email')" 
                                  required autofocus 
                                  autocomplete="username" 
                                  placeholder="{{ __('Ingrese su correo electrónico') }}" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-blue-700 font-semibold" />

                    <x-text-input id="password" 
                                  class="block mt-1 w-full p-3 border border-blue-300 rounded-lg focus:ring-2 focus:ring-blue-400 text-gray-700 placeholder-gray-500"
                                  type="password"
                                  name="password"
                                  required 
                                  autocomplete="current-password" 
                                  placeholder="{{ __('Ingrese su contraseña') }}" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500 shadow-sm" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-6">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-blue-600 hover:text-blue-800 focus:outline-none" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="ms-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.layout>

