<h1>{{$titulo}}}</h1>
<form method="get" action ="usuarios">
    <label>id: </label><input type ="number" name="id"><br>
    <label>Nombre y Apellido: </label><input type ="text" name="name"><br>
    <label>Email: </label><input type ="text" name="email"><br>
    <label>Verificacion de Email: </label><input type ="text" name="email_verified_at"><br>
    <label>Token: </label><input type ="text" name="remember_token"><br>
<button type = "submit">Filtrar</button>

</form>
<table>
    <thead>
        <tr>
            <th>Numero de Socio:</th>
            <th>Apellido:</th>
            <th>Nombre:</th>
            <th>DNI:</th>
            <th>Fecha de Nacimiento</th>
            <th>Altura: </th>
            <th>Peso: </th>
            <th>Telefono: </th>
            <th>Apto Medico: </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->apellido}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->dni}}</td>
                <td>{{$cliente->fechaNacimiento}}</td>
                <td>{{$cliente->altura}}</td>
                <td>{{$cliente->peso}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->aptoMedico}}</td>
            </tr>
        @endforeach
    </tbody>
</table>