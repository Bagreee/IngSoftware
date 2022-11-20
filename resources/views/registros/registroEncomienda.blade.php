@include('registros/home-header')

<div class="container" style="width: 900px; background-color: #F0F9FC; border-radius: 10px; border-color: black; border: 1px solid black;">
    <table class="table table-striped">
        <thead>
            <th>proveedor</th>
            <th>Departamento</th>
            <th>Estado</th>
        </thead>
        <tbody>
            @foreach($encomiendas as $encomienda)
            <tr>
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