<h1>{{$titulo}}}</h1>
<form method="get" action ="usuarios">
    <label>Nro Socio: </label><input type ="number" name="id"><br>
    <label>Nombre: </label><input type ="text" name="nombre"><br>
    <label>Apellido: </label><input type ="text" name="apellido"><br>
    <label>Rutina: </label><input type ="text" name="nombre"><br>
<button type = "submit">Filtrar</button>


</form>
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