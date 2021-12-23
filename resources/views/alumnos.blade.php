<h1>{{$titulo}}}</h1>
<form method="get" action ="alumnos">
    <label>Nro Socio: </label><input type ="number" name="id"><br>
    <label>Apellido: </label><input type ="text" name="apellido"><br>
    <label>Nombre: </label><input type ="text" name="nombre"><br>
    <label>DNI: </label><input type ="text" name="DNI"><br>
    <label>Fecha de nacimiento: </label><input type ="text" name="fechaNacimiento"><br>
    <label>altura: </label><input type ="text" name="altura"><br>
    <label>peso: </label><input type ="text" name="peso"><br>
    <label>telefono: </label><input type ="text" name="telefono"><br>
    <label>aptoMedico: </label><input type ="text" name="aptoMedico"><br>
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
                <td>{{$alumno->id}}</td>
                <td>{{$alumno->apellido}}</td>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->dni}}</td>
                <td>{{$alumno->fechaNacimiento}}</td>
                <td>{{$alumno->altura}}</td>
                <td>{{$alumno->peso}}</td>
                <td>{{$alumno->telefono}}</td>
                <td>{{$alumno->aptoMedico}}</td>
            </tr>
        @endforeach
    </tbody>
</table>