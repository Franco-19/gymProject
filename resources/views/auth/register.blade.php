<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nombre')" />

                <x-input
                    id="name"
                    class="block mt-1 w-full"
                    type="text"
                    name="name"
                    :value="old('name')"
                    required autofocus
                />
            </div>

            {{-- Apellido --}}
            <div class="mt-4">
                <x-label for="apellido" :value="__('Apellido')" />

                <x-input
                    id="apellido"
                    class="block mt-1 w-full"
                    type="text"
                    name="apellido"
                    :value="old('apellido')"
                    required autofocus
                />
            </div>

            {{-- dni --}}
            <div class="mt-4">
                <x-label for="dni" :value="__('D.N.I.')" />

                <x-input
                    id="dni"
                    class="block mt-1 w-full"
                    type="number"
                    name="dni"
                    :value="old('dni')"
                    required autofocus
                />
            </div>

            {{-- fecha de nacimiento --}}
            <div class="mt-4">
                <x-label for="fechaNacimiento" :value="__('Fecha de nacimiento')" />

                <x-input
                    id="fechaNacimiento"
                    class="block mt-1 w-full"
                    type="date"
                    name="fechaNacimiento"
                    :value="old('fechaNacimiento')"
                    required autofocus
                />
            </div>

            {{-- peso --}}
            <div class="mt-4">
                <x-label for="peso" :value="__('Peso(kg)')" />

                <x-input
                    id="peso"
                    class="block mt-1 w-full"
                    type="number"
                    name="peso"
                    :value="old('peso')"
                    required autofocus
                />
            </div>

            {{-- altura --}}
            <div class="mt-4">
                <x-label for="altura" :value="__('Altura(cm)')" />

                <x-input
                    id="altura"
                    class="block mt-1 w-full"
                    type="number"
                    name="altura"
                    :value="old('altura')"
                    required autofocus
                />
            </div>

            {{-- telefono --}}
            <div class="mt-4">
                <x-label for="telefono" :value="__('Teléfono')" />

                <x-input
                    id="telefono"
                    class="block mt-1 w-full"
                    type="tel"
                    name="telefono"
                    :value="old('telefono')"
                    required autofocus
                />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            {{--
                fecha de nacimiento
                peso
                altura
                telefono
            --}}

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmar Contraseña')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya tienes cuenta?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registrar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
