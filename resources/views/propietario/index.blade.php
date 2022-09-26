@include('index-header')

@if(Session::has('mensaje'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('mensaje') }}
    </div>
@endif

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
                <td><a class="btn btn-warning" href="{{ route('propietario.edit', $propietario->id) }}">Editar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a class="btn btn-primary" href="{{ url('propietario/create') }}" role="button">Registrar propietario</a>
</div>
@include('index-footer')