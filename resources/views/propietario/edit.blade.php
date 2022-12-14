<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="grid-layout">
        <div class="box header">
            <div class="header-flex-container">

                <a class="header-registro" href="{{ url('/') }}"><img src="http://gestachile.cl/wp-content/uploads/2018/07/logo-gesta.jpg" class="logo-gesta"></a>

                <a class="header-registro" href="{{ url('visita') }}">Visitas</a>

                <a class="header-registro" href="{{ url('encomienda') }}">Encomiendas</a>

                <a class="header-registro" href="{{ url('trabajadorMantenimiento') }}">Trabajadores de mantenimiento</a>

                <a class="header-registro" href="{{ url('salaEvento') }}">Eventos</a>

                <a class="header-registro" href="{{ url('propietario') }}">Propietarios</a>

                @if(auth()->check())

                <div class="header-session">
                    <p class="text-xl">Bienvenido <b>{{ auth()->user()->name }}</b></p>

                    <button type="button" class="btn btn-warning"><a style="text-decoration: none; color: black"  href="{{ route('login.destroy') }}">Cerrar sesion</a></button>
                </div>

                @endif

            </div>
        </div>
        <div class="box menu-lateral">
            
            <div class="container">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="{{ url('visita/create') }}"><p>Registrar visitante</p></a>
                <br>
                    <a class="list-group-item list-group-item-action" href="{{ url('encomienda/create') }}"><p>Registrar encomienda</p></a>
                <br>
                    <a class="list-group-item list-group-item-action" href="{{ url('trabajadorMantenimiento/create') }}"><p>Registrar trabajador de mantenimiento</p></a>
                <br>
                    <a class="list-group-item list-group-item-action" href="{{ url('salaEvento/create') }}"><p>Agendar evento</p></a>
                <br>
                    <a class="list-group-item list-group-item-action" href="{{ url('propietario/create') }}"><p>Registrar propietario</p></a>
                </div>
            </div>

        </div>
        <div class="box contenido">

            <form action="{{ route('propietario.update', $propietario->id) }}" method="post">

                @csrf
                @method('PUT')
                <div class="container" style="width: 900px;">

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

            </div>
        <div class="box footer">
            
            <section class="flex-container">
                <div class="datos-footer">
                    <img src="http://gestachile.cl/wp-content/uploads/2018/07/gesta-footer.jpg" class="gesta-footer">
                </div>

                <div class="datos-footer">
                    <p>
                        Villaseca 964, ??u??oa, Santiago - Chile
                        <br>
                        Tel??fonos: +56 22225 8712 / +56 22684 9813 / <br> +56 22684 9818
                        <br>
                        Email: administraciones@gestachile.cl
                    </p>
                </div>

                <div class="datos-footer">
                    <p>
                        <strong>Horario de atenci??n:</strong>
                    </p>
                    <p>
                        Lunes a Viernes : 09:00 a 18:00 horas.
                    </p>
                </div>
            </section>

        </div>
</body>
</html>