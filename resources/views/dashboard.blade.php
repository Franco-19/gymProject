<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


                <div class="user__info p-3">
                    <small class="error text-danger mb-2 d-block"></small>
                </div>
                <button class="btn btn-primary submitButton" data-id="{{ auth()->id() }}">
                    Agregar async
                </button>

                {{-- <script>
                    $(document).ready(function() {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        function fetchData(e) {
                            console.log(e);
                            let id = e.dataset.id;
                            $.ajax({
                                type: 'POST',
                                url: "{{ route('user.store') }}",
                                'accept': "Application/json",
                                'content-type': "Application/json"
                                data: {
                                    id
                                },
                                success: function(data) {
                                    console.log(data)
                                    console.log('realizamos la petición correctamente');
                                    $('.user__info').html(data)
                                },
                                error: function(err) {
                                    const error = JSON.parse(err.responseText).message
                                    $('.error').html(error)
                                }
                            })
                        }

                        $(".submitButton").on("click", function(event) {
                            event.preventDefault()

                            console.log('click!')
                            console.log(event)

                            fetchData(event);
                        });
                    })
                </script> --}}


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
                                    Id: {{ $ejercicio->idejercicios }}
                                </li>
                                <li>
                                    Nombre: {{ $ejercicio->nombreEjercicio }}
                                </li>
                                <li>
                                    Musculo: {{ $ejercicio->musculo }}
                                </li>
                                {{-- <button onclick="doSomeAction({{ $ejercicio }})" class="btn btn-primary addEjercicioToAlumno">
                                    añadir
                                </button> --}}
                                <form class="addResourceToDb" action="{{ route('user.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $ejercicio }}" name="ejercicio">
                                    {{-- <input type="text"> --}}
                                    <input type="submit" class="btn btn-primary" value="Añadir">
                                </form>
                            </div>
                        @endforeach
                        {{-- <script>
                            var userID = {{ isset($userID) ? $userID : '0' }};
                            $.ajax({
                                type: "POST",
                                url: "{{ route('user.store') }}",
                                data: {
                                    ejercicio: $ejercicio
                                }
                            }).done(function(msg) {
                                alert(msg);
                            });
                        </script> --}}
                    @endisset
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
