@include('index-header')

@if(Session::has('mensaje'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('mensaje') }}
    </div>
@endif

<br>
<!--<form class="form-inline my-2 my-lg-0">
    <select name="estado" id="estado">
        <option value="">Todas las encomiendas</option>
        <option value="{{ $estado = 'retirada' }}">Encomiendas retiradas</option>
        <option value="{{ $estado = 'sin retirar' }}">Encomiendas sin retirar</option>
    </select>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btnFiltrar">Filtrar</button>
</form>-->

<h1>Encomiendas retiradas</h1>

<br>

<div class="container" style="width: 900px;">

    <table class="table table-striped table-flex">
        <thead>
            <th>proveedor</th>
            <th>Departamento</th>
            <th>Estado</th>
            <th>Fecha de retiro</th>
        </thead>
        <tbody>
            @foreach($encomiendas as $encomienda)

            @if($encomienda->estado == 'retirada')

            <tr>
                
                <td>{{$encomienda->proveedor}}</td>
                <td>{{$encomienda->departamentos->numero}}</td>
                <td>{{$encomienda->estado}}</td>
                <td>{{$encomienda->updated_at}}</td>

                @if(auth()->user()->role == 'conserje' or auth()->user()->role == 'mayordomo')

                    @if($encomienda->estado == 'sin retirar')
                        <td><a class="btn btn-warning" href="{{ route('encomienda.edit', $encomienda->id) }}">Editar</a></td>
                    @endif

                @endif
                
            </tr>

            @endif

            @endforeach
        </tbody>
    </table>

    <br>

    @if(auth()->user()->role == 'conserje' or auth()->user()->role == 'mayordomo')

        <a class="btn btn-primary" href="{{ url('encomienda/create') }}" role="button">Registrar encomienda</a>

    @endif

    <a class="btn btn-success" href="{{ url('encomienda') }}" role="button">Encomiendas sin retirar</a>

</div>
@include('index-footer')