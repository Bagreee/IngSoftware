@include('index-header')

@if(Session::has('mensaje'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('mensaje') }}
    </div>
@endif

<br>

<br>

<h1>Encomiendas sin retirar</h1>

<div class="container">

    <table class="table table-striped table-flex">
        <thead>
            <th>proveedor</th>
            <th>Num Dpto</th>
            <th>Estado</th>
            <!--<th>Correo</th>-->
        </thead>
        <tbody>
            @foreach($encomiendas as $encomienda)

            @if($encomienda->estado == 'sin retirar')

            <tr>
                
                <td>{{$encomienda->proveedor}}</td>
                <td>{{$encomienda->departamentos->numero}}</td>
                <td>{{$encomienda->estado}}</td>
                <!--@foreach($propietarios as $propietario)
                    @if($encomienda->id_dpto == $propietario->id_dpto)
                    <td>{{$propietario->correo}}</td>
                    @endif
                @endforeach-->
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

    <a class="btn btn-success" href="{{ url('retiradas') }}" role="button">Encomiendas retiradas</a>

</div>
@include('index-footer')