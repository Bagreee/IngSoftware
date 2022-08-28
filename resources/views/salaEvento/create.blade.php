<form action="{{ url('/salaEvento') }}" method="post">

    @csrf

    <label for="id_dpto">Departamento</label>
    <select name="id_dpto">
        <option value="">Seleccione el departamento</option>
        @foreach ($departamentos as $departamento)
            <option value="{{ $departamento->id }}">{{ $departamento->numero }}</option>
        @endforeach
    </select>
    <br>

    <label for="nombre">Nombre del solicitante</label>
    <input type="text" name="nombre" id="nombre">
    <br>

    <label for="fecha">Fecha del evento</label>
    <input type="date" name="fecha" id="fecha" min="2022-01-01">
    <br>

    <label for="asistentes">Cantidad de asistentes</label>
    <input type="text" name="asistentes" id="asistentes">
    <br>

    <input type="submit" value="Ingresar">


</form>