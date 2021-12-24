<div>
    @isset($ejercicios)
        @foreach ($ejercicios as $ejercicio)
            <li>
                {{ $ejercicio }}
            </li>
        @endforeach
    @endisset
</div>
