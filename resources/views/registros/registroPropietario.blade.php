@include('registros/home-header')

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
                @if(auth()->user()->role == 'admin' or auth()->user()->role == 'mayordomo')
                    <td><a class="btn btn-warning" href="{{ route('registros.modificarPropietario', $propietario->id) }}">Editar</a></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
<!--
    <a class="btn btn-primary" href="{{ url('registros/crearPropietario') }}" role="button">Registrar propietario</a>
-->
</div>

@include('registros/home-footer')