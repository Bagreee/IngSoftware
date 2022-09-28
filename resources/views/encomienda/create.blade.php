@include('index-header')


<form action="{{ url('/encomienda') }}" method="post">

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
            <label for="proveedor">Proveedor</label>
            <input type="text" name="proveedor" class="form-control" id="proveedor" placeholder="Proveedor" required>
        </div>

        <label for="estado">Estado</label>
        <select name="estado" id="estado" class="form-control">
            <option value="sin retirar">Sin retirar</option>
        </select>

        <br>
        
        <input type="submit" class="btn btn-primary" value="Ingresar">

    </div>

</form>


@include('index-footer')