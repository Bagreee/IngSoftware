Ventana de edicion
<form action="{{ route('encomienda.update', $encomienda->id) }}" method="post">

    @csrf
    @method('PUT')
    <br>
    <label for="proveedor">Proveedor</label>
    <input type="text" id="proveedor" name="proveedor" value="{{ $encomienda->proveedor }}" readonly>
    <br>

    <label for="estado">Estado</label>
    <select name="estado" id="estado">
        <option value="sin retirar">Sin retirar</option>
        <option value="retirada">Retirada</option>
    </select>
    <br>

    <input type="submit" value="Editar">

</form>