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
                <td><a class="btn btn-warning" href="{{ route('encomienda.edit', $encomienda->id) }}">Editar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a class="btn btn-primary" href="{{ url('encomienda/create') }}" role="button">Registrar encomienda</a>
</div>
@include('footer')