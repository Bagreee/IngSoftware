@include('header')

<form action="{{ url('/salaEvento') }}" method="post">

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
            <label for="nombre">Nombre del solicitante</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
        </div>

        <div class="form-group">
            <label for="fecha">Fecha del evento</label>
            <input type="date" name="fecha" class="form-control" id="fecha" min="2022-01-01">
        </div>

        <div class="form-group">
            <label for="asistentes">Cantidad de asistentes</label>
            <input type="text" name="asistentes" class="form-control" id="asistentes" placeholder="Asistentes">
        </div>

        <br>

        <input type="submit" class="btn btn-primary" value="Ingresar">

    </div>

</form>

@include('footer')