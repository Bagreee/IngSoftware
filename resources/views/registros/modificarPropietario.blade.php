@include('registros/home-header')

<form action="{{ route('registros.modificarPropietario', $propietario->id) }}" method="post">

                @csrf
                @method('PUT')
                <div class="container">

                    <div class="form-group">
                        <label for="id_dpto">Num Dpto</label>
                        <input type="text" name="id_dpto" class="form-control" id="id_dpto" value="{{ $propietario->departamentos->numero }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $propietario->nombre }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" class="form-control" id="apellido" value="{{ $propietario->apellido }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="text" name="correo" class="form-control" id="correo" value="{{ $propietario->correo }}">
                    </div>

                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" name="telefono" class="form-control" id="telefono" value="{{ $propietario->telefono }}">
                    </div>

                    <label for="estado">Estado</label>
                    <select name="estado" id="estado" class="form-control">
                        <option value="activo">Activo</option>
                        <option value="no activo">No activo</option>
                    </select>
                    <br>

                    <input type="submit" class="btn btn-primary" value="Editar">

                </div>

</form>

@include('registros/home-footer')