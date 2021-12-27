<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    @isset($userData)
                        <p>Usuarios registrados al dia de hoy!</p>
                        {{ $userData }}
                        <p>ejercicios disponibles</p>

                        @foreach ($ejercicios as $ejercicio)
                        {{-- revisar de realizar un formulario --}}

                            <div class="d-flex gap-3 mb-3 align-items-center">
                                <li>
                                    Nombre: {{ $ejercicio->nombreEjercicio }}
                                </li>
                                <li>
                                    Musculo: {{ $ejercicio->musculo }}
                                </li>
                                {{-- <button onclick="doSomeAction({{ $ejercicio }})" class="btn btn-primary addEjercicioToAlumno">
                                    añadir
                                </button> --}}
                                <form action="{{ route('user.store') }} method="POST">
                                    @csrf
                                    <input type="hidden" value={{ $ejercicio }}>
                                    <button type="submit" class="btn btn-primary">
                                        Añadir
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
