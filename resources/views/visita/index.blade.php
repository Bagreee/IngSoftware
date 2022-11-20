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
        </thead>
        <tbody>
            @foreach($visitas as $visita)
            <tr>
                <td>{{$visita->nombre}}</td>
                <td>{{$visita->departamentos->numero}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>

    @if(auth()->user()->role == 'conserje' or auth()->user()->role == 'mayordomo')

        <a class="btn btn-primary" href="{{ url('visita/create') }}" role="button">Registrar visitante</a>

    @endif

</div>

@include('index-footer')