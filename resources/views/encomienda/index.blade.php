@include('index-header')

@if(Session::has('mensaje'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('mensaje') }}
    </div>
@endif

<br>
Filtro 
<select name="filtro" id="filtro">
    <option value="">Todas las encomiendas</option>
    <option value="retirada">Encomiendas retiradas</option>
    <option value="sin retirar">Encomiendas sin retirar</option>
</select>
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
<br>

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
@include('index-footer')