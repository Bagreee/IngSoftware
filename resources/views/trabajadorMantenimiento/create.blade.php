<form action="{{ url('/trabajadorMantenimiento') }}" method="post">

    @csrf

    <label for="id_dpto">Departamento de destino</label>
    <select name="id_dpto">
        <option value="">Seleccione el departamento</option>
        @foreach ($departamentos as $departamento)
            <option value="{{ $departamento->id }}">{{ $departamento->numero }}</option>
        @endforeach
    </select>
    <br>

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <br>

    <label for="rut">Rut</label>
    <input type="text" name="rut" id="rut">
    <br>

    <label for="labor">Labor</label>
    <input type="text" name="labor" id="labor">
    <br>

    <input type="submit" value="Ingresar">


</form>