@include('header')

@if(Session::has('mensaje'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('mensaje') }}
    </div>
@endif

<div class="container">
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Num Dpto</th>
            <th>Labor</th>
        </thead>
        <tbody>
            @foreach($trabajadoresMantenimiento as $trabajadorMantenimiento)
            <tr>
                <td>{{$trabajadorMantenimiento->id}}</td>
                <td>{{$trabajadorMantenimiento->nombre}}</td>
                <td>{{$trabajadorMantenimiento->departamentos->numero}}</td>
                <td>{{$trabajadorMantenimiento->labor}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a class="btn btn-primary" href="{{ url('trabajadorMantenimiento/create') }}" role="button">Registrar trabajador de mantenimiento</a>
</div>
@include('footer')