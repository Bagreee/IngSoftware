@include('index-header')

@if(Session::has('mensaje'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('mensaje') }}
    </div>
@endif

<div class="container" style="width: 900px;">
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Departamento</th>
            <th>Labor</th>
        </thead>
        <tbody>
            @foreach($trabajadoresMantenimiento as $trabajadorMantenimiento)
            <tr>
                <td>{{$trabajadorMantenimiento->nombre}}</td>
                <td>{{$trabajadorMantenimiento->departamentos->numero}}</td>
                <td>{{$trabajadorMantenimiento->labor}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div style="display: flex; justify-content: center;">
        {!! $trabajadoresMantenimiento->links() !!}
    </div>
    <br>

    @if(auth()->user()->role == 'conserje' or auth()->user()->role == 'mayordomo')

        <a class="btn btn-primary" href="{{ url('trabajadorMantenimiento/create') }}" role="button">Registrar trabajador de mantenimiento</a>

    @endif

</div>
@include('index-footer')