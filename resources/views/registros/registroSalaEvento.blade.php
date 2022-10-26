@include('registros/home-header')

<div class="container">
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Nombre del organizador</th>
            <th>Num Dpto</th>
            <th>Fecha</th>
            <th>Cantidad de asistentes</th>
        </thead>
        <tbody>
            @foreach($eventos as $evento)
            <tr>
                <td>{{$evento->id}}</td>
                <td>{{$evento->nombre}}</td>
                <td>{{$evento->departamentos->numero}}</td>
                <td>{{$evento->fecha}}</td>
                <td>{{$evento->asistentes}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>

</div>

@include('registros/home-footer')