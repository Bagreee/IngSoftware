@include('registros/home-header')

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

</div>

@include('registros/home-footer')