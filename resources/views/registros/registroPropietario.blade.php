@include('registros/home-header')

<div class="container">
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Num Dpto</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Estado</th>
        </thead>
        <tbody>
            @foreach($propietarios as $propietario)
            <tr>
                <td>{{$propietario->id}}</td>
                <td>{{$propietario->departamentos->numero}}</td>
                <td>{{$propietario->nombre}}</td>
                <td>{{$propietario->apellido}}</td>
                <td>{{$propietario->correo}}</td>
                <td>{{$propietario->telefono}}</td>
                <td>{{$propietario->estado}}</td>                
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>

</div>

@include('registros/home-footer')