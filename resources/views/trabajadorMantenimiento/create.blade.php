@include('index-header')

<form action="{{ url('/trabajadorMantenimiento') }}" method="post">

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
            <label for="nombre">Nombre del trabajador</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
        </div>

        <div class="form-group">
            <label for="rut">Rut del trabajador</label>
            <input type="text" name="rut" class="form-control" id="rut" placeholder="Rut">
        </div>

        <div class="form-group">
            <label for="labor">Labor a realizar</label>
            <input type="text" name="labor" class="form-control" id="labor" placeholder="Labor">
        </div>

        <br>

        <input type="submit" class="btn btn-primary" value="Ingresar">

    </div>

</form>

@include('index-footer')