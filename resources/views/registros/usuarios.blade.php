@include('registros/home-header')

<div class="container">
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Rol</th>
            <th>Email</th>
        </thead>
        <tbody>
            @foreach($trabajadores as $trabajador)
                @if($trabajador->role != 'admin')
                    <tr>
                        <td>{{$trabajador->id}}</td>
                        <td>{{$trabajador->name}}</td>
                        <td>{{$trabajador->role}}</td>
                        <td>{{$trabajador->email}}</td>
                        <td><a class="btn btn-warning" href="{{ route('register.edit', $trabajador->id) }}">Editar</a></td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    <br>

    <a class="btn btn-primary" href="{{ url('register') }}" role="button">Registrar trabajador</a>

</div>

@include('registros/home-footer')