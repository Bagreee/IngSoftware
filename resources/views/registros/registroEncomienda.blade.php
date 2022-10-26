@include('registros/home-header')

<div class="container">
    <table class="table table-striped">
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

                @if(auth()->user()->role == 'conserje' or auth()->user()->role == 'mayordomo')
                    <td><a class="btn btn-warning" href="{{ route('encomienda.edit', $encomienda->id) }}">Editar</a></td>
                @endif
                
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>

</div>

@include('registros/home-footer')