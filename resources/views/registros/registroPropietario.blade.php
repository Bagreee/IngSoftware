@include('registros/home-header')

<div class="container" style="width: 1400px; background-color: #F0F9FC; border-radius: 10px; border-color: black; border: 1px solid black;">
    <table class="table table-striped">
        <thead>
            <th>Departamento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Estado</th>
            <th>Registrado por</th>
        </thead>
        <tbody>
            @foreach($propietarios as $propietario)
            <tr>
                <td>{{$propietario->departamentos->numero}}</td>
                <td>{{$propietario->nombre}}</td>
                <td>{{$propietario->apellido}}</td>
                <td>{{$propietario->correo}}</td>
                <td>{{$propietario->telefono}}</td>
                <td>{{$propietario->estado}}</td>
                <td>{{$propietario->trabajador}}</td>           
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>

</div>

@include('registros/home-footer')