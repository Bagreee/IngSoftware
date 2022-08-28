<table class="">
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