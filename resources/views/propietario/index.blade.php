@include('index-header')

@if(Session::has('mensaje'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('mensaje') }}
    </div>
@endif

<div class="container" style="width: 1000px;">
    <table class="table table-striped">
        <thead>
            <th>Departamento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Telefono</th>
        </thead>
        <tbody>
            @foreach($propietarios as $propietario)
            <tr>
                <td>{{$propietario->departamentos->numero}}</td>
                <td>{{$propietario->nombre}}</td>
                <td>{{$propietario->apellido}}</td>
                <td>{{$propietario->correo}}</td>
                <td>{{$propietario->telefono}}</td>
                @if(auth()->user()->role == 'admin' or auth()->user()->role == 'mayordomo')
                    <td><a class="btn btn-warning" href="{{ route('propietario.edit', $propietario->id) }}">Editar</a></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>

    @if(auth()->user()->role == 'admin' or auth()->user()->role == 'mayordomo')

        <a class="btn btn-primary" href="{{ url('propietario/create') }}" role="button">Registrar propietario</a>

    @endif

</div>
@include('index-footer')