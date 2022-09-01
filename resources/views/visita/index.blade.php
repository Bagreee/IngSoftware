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
        </thead>
        <tbody>
            @foreach($visitas as $visita)
            <tr>
                <td>{{$visita->id}}</td>
                <td>{{$visita->nombre}}</td>
                <td>{{$visita->departamentos->numero}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a class="btn btn-primary" href="{{ url('visita/create') }}" role="button">Registrar visitante</a>
</div>

@include('footer')