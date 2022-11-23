@include('index-header')

@if(Session::has('mensaje'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('mensaje') }}
    </div>
@endif

<div class="container" style="width: 1100px;">
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Departamento</th>
            <th>Estacionamiento</th>
            <th>Fecha de ingreso</th>
        </thead>
        <tbody>
            @foreach($visitas as $visita)
            <tr>
                <td>{{$visita->nombre}}</td>
                <td>{{$visita->departamentos->numero}}</td>
                <td>{{$visita->num_estacionamiento}}</td>
                <td>{{$visita->fecha_ingreso}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div style="display: flex; justify-content: center;">
        {!! $visitas->links() !!}
    </div>
    
    <br>

    @if(auth()->user()->role == 'conserje' or auth()->user()->role == 'mayordomo')

        <a class="btn btn-primary" href="{{ url('visita/create') }}" role="button">Registrar visitante</a>

    @endif

</div>

@include('index-footer')