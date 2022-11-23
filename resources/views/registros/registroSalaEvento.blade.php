@include('registros/home-header')

<div class="container" style="width: 1100px; background-color: #F0F9FC; border-radius: 10px; border-color: black; border: 1px solid black;">
    <table class="table table-striped">
        <thead>
            <th>Nombre del organizador</th>
            <th>Departamento</th>
            <th>Fecha</th>
            <th>Cantidad de asistentes</th>
        </thead>
        <tbody>
            @foreach($eventos as $evento)
            <tr>
                <td>{{$evento->title}}</td>
                <td>{{$evento->departamentos->numero}}</td>
                <td>{{$evento->start}}</td>
                <td>{{$evento->asistentes}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div style="display: flex; justify-content: center;">
        {!! $eventos->links() !!}
    </div>
    <br>

</div>

@include('registros/home-footer')