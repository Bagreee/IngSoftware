Index
<table class="">
    <thead>
        <th>ID</th>
        <th>proveedor</th>
        <th>Num Dpto</th>
        <th>Estado</th>
    </thead>
    <tbody>
        @foreach($encomiendas as $encomienda)
        <tr>
            <td>{{$encomienda->id}}</td>
            <td>{{$encomienda->proveedor}}</td>
            <td>{{$encomienda->departamentos->numero}}</td>
            <td>{{$encomienda->estado}}</td>
            <td><a href="{{ route('encomienda.edit', $encomienda->id) }}">Editar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>