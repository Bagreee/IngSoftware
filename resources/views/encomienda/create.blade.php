Create

Formulario de ingreso de visita

<form action="{{ url('/encomienda') }}" method="post">

    @csrf

    <label for="id_dpto">Departamento de destino</label>
    <select name="id_dpto">
        <option value="">Seleccione el departamento</option>
        @foreach ($departamentos as $departamento)
            <option value="{{ $departamento->id }}">{{ $departamento->numero }}</option>
        @endforeach
    </select>
    <br>

    <label for="proveedor">Proveedor</label>
    <input type="text" name="proveedor" id="proveedor">
    <br>

    <label for="estado">Estado</label>
    <select name="estado" id="estado">
        <option value="sin retirar">Sin retirar</option>
    </select>
    <br>

    <input type="submit" value="Ingresar">


</form>