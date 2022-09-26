@include('index-header')

<form action="{{ route('encomienda.update', $encomienda->id) }}" method="post">

    @csrf
    @method('PUT')
    <div class="container">

        <div class="form-group">
            <label for="id_dpto">Num Dpto</label>
            <input type="text" name="id_dpto" class="form-control" id="id_dpto" value="{{ $encomienda->departamentos->numero }}" readonly>
        </div>

        <div class="form-group">
            <label for="proveedor">Proveedor</label>
            <input type="text" name="proveedor" class="form-control" id="proveedor" value="{{ $encomienda->proveedor }}" readonly>
        </div>

        <label for="estado">Estado</label>
        <select name="estado" id="estado" class="form-control">
            <option value="sin retirar">Sin retirar</option>
            <option value="retirada">Retirada</option>
        </select>
        <br>

        <input type="submit" class="btn btn-primary" value="Editar">

    </div>

</form>

@include('index-footer')