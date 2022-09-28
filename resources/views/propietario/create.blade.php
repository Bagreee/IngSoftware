@include('index-header')

<form action="{{ url('/propietario') }}" method="post">

    @csrf
    <div class="container">

        <label for="id_dpto">Departamento</label>
        <select name="id_dpto" class="form-control">
        <option value="">Seleccione el departamento</option>
            @foreach ($departamentos as $departamento)
                <option value="{{ $departamento->id }}">{{ $departamento->numero }}</option>
            @endforeach
        </select>

        <div class="form-group">
            <label for="nombre">Nombre del propietario</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" required>
        </div>

        <div class="form-group">
            <label for="apellido">Apellido del propietario</label>
            <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido" required>
        </div>

        <div class="form-group">
            <label for="correo">Correo del propietario</label>
            <input type="text" name="correo" class="form-control" id="correo" placeholder="Correo" required>
        </div>

        <div class="form-group">
            <label for="telefono">Telefono del trabajador</label>
            <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Telefono" required>
        </div>

        <label for="estado">Estado del propietario</label>
        <select name="estado" class="form-control">          
        <option value="activo">Activo</option>
        </select>

        <br>

        <input type="submit" class="btn btn-primary" value="Ingresar">

    </div>

</form>

@include('index-footer')