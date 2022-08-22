Formulario de ingreso de visita

<form action="{{ url('/visita') }}" method="post">

    @csrf
<!--
    <label for="id_dpto">Departamento de destino</label>
    <input type="text" name="id_dpto" id="id_dpto">
    <br>
-->
    <label for="id_dpto">Departamento de destino</label>
    <select name="id_dpto">
        <option value="">Seleccione el departamento</option>
        @foreach ($departamentos as $departamento)
            <option value="{{ $departamento->id }}">{{ $departamento->numero }}</option>
        @endforeach
    </select>
    <br>

    <label for="nombre">Nombre del visitante</label>
    <input type="text" name="nombre" id="nombre">
    <br>

    <label for="num_estacionamiento">Numero de estacionamiento</label>
    <input type="text" name="num_estacionamiento" id="num_estacionamiento">
    <br>

    <label for="patente">Patente del vehiculo</label>
    <input type="text" name="patente" id="patente">
    <br>

    <input type="submit" value="Ingresar">


</form>