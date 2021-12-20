<h1>{{$titulo}}}</h1>
<table>
    <thead>
        <tr>
            <th>Numero de Socio:</th>
            <th>Nombre:</th>
            <th>Apellido:</th>
            <th>Ejercicios:</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->apellido}}</td>
                <td>{{$cliente->ejercicios}}</td>
            </tr>
        @endforeach
    </tbody>
</table>