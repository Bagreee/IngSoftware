<table class="">
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