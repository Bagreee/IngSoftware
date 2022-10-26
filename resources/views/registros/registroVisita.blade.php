@include('registros/home-header')

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

</div>

@include('registros/home-footer')