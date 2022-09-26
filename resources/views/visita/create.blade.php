@include('index-header')

<form action="{{ url('/visita') }}" method="post">

    @csrf
    <div class="container">

        <label for="id_dpto">Departamento de destino</label>
        <select name="id_dpto" class="form-control">
        <option value="">Seleccione el departamento</option>
            @foreach ($departamentos as $departamento)
                <option value="{{ $departamento->id }}">{{ $departamento->numero }}</option>
            @endforeach
        </select>

        <div class="form-group">
            <label for="nombre">Nombre del visitante</label>
            <input type="text" name="nombre" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Nombre">
        </div>

        <div class="form-group">
            <label for="num_estacionamiento">Numero de estacionamiento</label>
            <input type="text" name="num_estacionamiento" class="form-control" id="num_estacionamiento" placeholder="Estacionamiento">
        </div>
        
        <div class="form-group">
            <label for="patente">Patente del vehiculo</label>
            <input type="text" name="patente" class="form-control" id="patente" placeholder="Patente">
        </div>

        <br>

        <input type="submit" class="btn btn-primary" value="Ingresar">

    </div>

</form>

@include('index-footer')